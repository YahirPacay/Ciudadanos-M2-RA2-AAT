<?php

namespace App\Controllers;

use App\Models\municipiosModel;

class ConMUni extends BaseController
{

    public function verMunicipio()
    {

        $municipios = new municipiosModel();
        $datos['muni'] = $municipios->findAll();

        return view('municipios/index', $datos);

        /*
        $db = \Config\Database::connect();

        $query = $db->query('SELECT cod_muni, nombre_municipio, cod_depto FROM municipios');
        $resultado = $query->getResult();

        $data = ['titulo' => 'municipios', 'muni' => $resultado];
        return view('municipios/index', $data);
        */
    }

    public function nuevoMunicipio()
    {
        return view('municipios/nuevo_municipio');
    }

    public function agregarMunicipio()
    {
        $municipios = new municipiosModel();
        $datos = [
            'cod_muni' => $this->request->getVar('txtCodMuni'),
            'nombre_municipio' => $this->request->getVar('txtNombreMunicipio'),
            'cod_depto' => $this->request->getVar('txtCodDepto')
        ];
        //print_r($datos);
        $municipios->insert($datos);
        return redirect()->route('municipios');
    }




    public function eliminarMunicipio($id = null)
    {
        $municipios = new municipiosModel();
        $municipios->delete(['cod_muni' => $id]);
        return redirect()->route('municipios');
    }

    public function buscarMunicipio($id=null)
    {
        $municipios = new municipiosModel();
        $datos['datos'] = $municipios->where('cod_muni',$id)->first();
      //  print_r($id);
        return view('municipios/form_modificar_municipios',$datos);
    }
    public function modificarMunicipio() 
    {
        $municipios = new municipiosModel();
        $datos = [
            'cod_muni'=>$this->request->getVar('txtCodMuni'),
            'nombre_municipio'=>$this->request->getVar('txtNombreMunicipio'),
            'cod_depto'=>$this->request->getVar('txtCodDepto')
        ];    
        //print_r($datos);
        $municipios->update($datos['cod_muni'],$datos);

        return redirect()->route('municipios');
    }


}
