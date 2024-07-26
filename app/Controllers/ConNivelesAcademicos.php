<?php

namespace App\Controllers;

use App\Models\NivelesAcademicosModel;

class ConNivelesAcademicos extends BaseController
{
    public function index(): string 
    {
        $nivelesAcademicos = new NivelesAcademicosModel();
        $datos['datos'] = $nivelesAcademicos->findAll();
        return view('nivel_acad/index',$datos);
        
    }


 /*       //comando para base de datos
        $db = \config\Database::connect();

        $query = $db->query("SELECT cod_nivel_acad, nombre, descripcion  FROM nivelesacademicos");
        $resultado = $query->getResult();


        $copyright = ['copy' => '2024'];//arreglo para reutilizar
        $data = ['titulo' => 'Niveles Academico', 'nivelesacademicos' => $resultado];  
        return view('nivel_acad/index', $data );

        /*  return view('plantillas/header')
        . view('nivel_acad/index', $data)
        . view('plantillas/footer', ['copy'=> '2024']);*/

    public function nuevoNivelAcademico()
    {
        return view('nivel_acad/nuevo_nivel_acad');
    }
    public function agregarNivelAcad()
    {
        $nivelesAcademicos = new NivelesAcademicosModel();
        $datos = [
            'cod_nivel_acad'=>$this->request->getVar('txtCodNivelAcad'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'descripcion'=>$this->request->getVar('txtDescripcion')
        ];

        $nivelesAcademicos->insert($datos);
        return redirect()->route('nivelacad');

    }

    public function eliminarNivelesAcademicos($id = null)
    {
        $nivelesAcademicos = new NivelesAcademicosModel();
        $nivelesAcademicos->delete(['cod_nivel_acad'=>$id]);
        return redirect()->route('nivelacad');
    }
    
    public function buscarNivelAcademico($id)
    {
        $nivelesAcademicos = new NivelesAcademicosModel();
        $datos['datos']=$nivelesAcademicos->where('cod_nivel_acad',$id)->first();
        //print_r($datos);
        return view('nivel_acad/form_modificar_nivel_acad', $datos);
    }
    public function modificarNivelAcademico()
    {
        $nivelesAcademicos = new NivelesAcademicosModel();
        $datos = [
            'cod_nivel_acad'=>$this->request->getVar('txtCodNivelAcad'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'descripcion'=>$this->request->getVar('txtDescripcion')
        ];
        //print_r($datos);
        $nivelesAcademicos->update($datos['cod_nivel_acad'],$datos);
        return redirect()->route('nivelacad');
    }

}
?>