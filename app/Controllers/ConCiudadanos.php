<?php

namespace App\Controllers;

use App\Models\CiudadanosModel;

class ConCiudadanos extends BaseController
{

    public function verCiudadanos()
    {

        $ciudadanos = new CiudadanosModel();
        $datos['datos'] = $ciudadanos->findAll();

        return view('ciudadanos/index', $datos);

        /*       $db = \Config\Database::connect();

        $query = $db->query('SELECT 

            dpi,
            apellido,
            nombre, 
            direccion,
            tel_casa,
            tel_movil,
            email,
            fechanac,
            cod_nivel_acad,
            cod_muni

         FROM ciudadanos');
        $resultado = $query->getResult();

        $data = ['titulo' => 'Ciudadanos', 'peoples' => $resultado];
        return view('ciudadanos/index', $data);
        */
    }

    public function nuevoCiudadano(): string
    {
        return view('ciudadanos/nuevo_ciudadano');
    }

    public function agregarCiudadano()
    {
        $ciudadanos = new CiudadanosModel();
        $datos = [
            'dpi' => $this->request->getVar('txtDpi'),
            'apellido' => $this->request->getVar('txtApellido'),
            'nombre' => $this->request->getVar('txtNombre'),
            'direccion' => $this->request->getVar('txtDireccion'),
            'tel_casa' => $this->request->getVar('txtTelCasa'),
            'tel_movil' => $this->request->getVar('txtTelMovil'),
            'email' => $this->request->getVar('txtCorreo'),
            'fechanac' => $this->request->getVar('txtFechaNac'),
            'cod_nivel_acad' => $this->request->getVar('txtCodAcad'),
            'cod_muni' => $this->request->getVar('txtCodMuni'),
            'contra' => $this->request->getVar('txtContra')
        ];

       $ciudadanos->insert($datos);
        print_r($datos);
        //return redirect()->route('ciudadanos');
    }

    public function eliminarCiudadano($id = null)
    {
        $ciudadanos = new CiudadanosModel();
        $ciudadanos->delete(['dpi' => $id]);

        return redirect()->route('ciudadanos');
        //   echo $id;
    } 
    public function buscarCiudadano($id =null)
    {
        $ciudadanos = new CiudadanosModel();
        $datos['datos'] =$ciudadanos->where('dpi',$id)->first();

        //print_r($datos);
        return view('ciudadanos/form_modificar_ciudadano',$datos);
    }
    public function modificarCiudadano(){
        $ciudadanos = new CiudadanosModel();
        $datos = [
            'dpi' => $this->request->getVar('txtDpi'),
            'apellido' => $this->request->getVar('txtApellido'),
            'nombre' => $this->request->getVar('txtNombre'),
            'direccion' => $this->request->getVar('txtDireccion'),
            'tel_casa' => $this->request->getVar('txtTelCasa'),
            'tel_movil' => $this->request->getVar('txtTelMovil'),
            'email' => $this->request->getVar('txtCorreo'),
            'fechanac' => $this->request->getVar('txtFechaNac'),
            'cod_nivel_acad' => $this->request->getVar('txtCodAcad'),
            'cod_muni' => $this->request->getVar('txtCodMuni'),
            'contra' => $this->request->getVar('txtContra')
        ];
      //  print_r($datos);
        $ciudadanos->update($datos['dpi'],$datos);

        return redirect()->route('ciudadanos');

    }
}
