<?php

namespace App\Controllers;

use App\Models\RegionesModel;

class ConRegiones extends BaseController{

    public function verRegiones(){

        $regiones = new RegionesModel();
        $datos['datos'] = $regiones->findAll();

        return view('regiones/index', $datos);



    /*    //comando para base de datos
        $db = \config\Database::connect();

        $query = $db->query("SELECT cod_region, nombre, descripcion  FROM regiones");
        $resultado = $query->getResult();

        $copyright = ['copy' => '2024'];//arreglo para reutilizar
        $data = ['titulo' => 'Regiones', 'regiones' => $resultado];  
        return view('regiones/index', $data );*/
    }
    public function nuevoRegion()
    {
        return view('regiones/nueva_region');
    }
    public function agregarRegion()
    {
        $regiones = new RegionesModel();
        $datos = [
            'cod_region'=>$this->request->getVar('txtCodRegion'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'descripcion'=>$this->request->getVar('txtDescripcion')
        ];

        $regiones->insert($datos);
        return redirect()->route('regiones');
    }

    public function eliminarRegion($id=null)
    {
        $regiones = new RegionesModel();
        $regiones->delete(['cod_region'=>$id]);

        return redirect()->route('regiones');
    }
    public function buscarRegion($id=null)
    {
        $regiones = new RegionesModel();
        $datos['datos']=$regiones->where('cod_region',$id)->first();
      //  print_r($datos);
        return view('regiones/form_modificar_region', $datos);
    }
    public function modificarRegion()
    {
        $regiones = new RegionesModel();
        $datos = [
            'cod_region'=>$this->request->getVar('txtCodRegion'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'descripcion'=>$this->request->getVar('txtDescripcion')
        ];

      //  print_r($datos);
        $regiones->update($datos['cod_region'],$datos);

        return redirect()->route('regiones');



    }
}

?> 