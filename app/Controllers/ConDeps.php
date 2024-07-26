<?php

namespace App\Controllers;

use App\Models\DepartamentoModel;

class ConDeps extends BaseController
{

    public function verDeps()
    {

        $departamentos = new DepartamentoModel();
        $datos['datos'] = $departamentos->findAll();

        return view('departamentos/index', $datos);




        /*
        $db = \config\Database::connect();

        $query = $db->query('SELECT cod_depto, nombre_depto, cod_region FROM departamentos');
        $resultado = $query->getResult();

        $data = ['titulo' => 'Departamentos', 'deps' => $resultado];
        return view('departamentos/index', $data);
*/
    }

    public function nuevoDepto()
    {
        return view('departamentos/nuevo_depto');
    }

    public function agregarDepto()
    {
        $departamentos = new DepartamentoModel();
        $datos = [
            'cod_depto' => $this->request->getVar('txtCodDepto'),
            'nombre_depto' => $this->request->getVar('txtNombreDepto'),
            'cod_region' => $this->request->getVar('txtCodRegion')
        ];

        $departamentos->insert($datos);

        return redirect()->route('departamentos');
    }

    public function eliminarDepto($id = null)
    {
        // echo $id;
        $departamentos = new DepartamentoModel();
        $departamentos->delete(['cod_depto' => $id]);
        return redirect()->route('departamentos');
    }

    public function buscarDepto($id=null)
    {
        $departamentos = new DepartamentoModel();
        $datos['datosDepto']=$departamentos->where('cod_depto',$id)->first();
       //print_r($datos);
        return view('departamentos/form_modificar_depto',$datos);
    }
    public function modificarDepto()
    {
        $departamentos = new DepartamentoModel();
        $datos = [
            'cod_depto' => $this->request->getVar('txtCodDepto'),
            'nombre_depto' => $this->request->getVar('txtNombreDepto'),
            'cod_region' => $this->request->getVar('txtCodRegion')
        ];

        $departamentos->update($datos['cod_depto'],$datos);
    
        return redirect()->route('departamentos');
    }
}
