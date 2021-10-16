<?php

namespace App\Controllers;

class Animal extends BaseController
{
    public function index()    {
        return view('registroAnimal');
    }

    public function registrar()
    {
        //1. REcibir los datos del formulario
        $producto=$this->request->getPost("nombre");
        $foto=$this->request->getPost("edad");
        $precio=$this->request->getPost("foto");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        // se aplican validadciones

        if($this->validate('formularioAnimal')){

            echo("Todo bien");

        } else{
            $mensaje="Tenemos campos sin llenar";
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$mensaje);

        }

        //2. construir un arreglo asociativo(cada cajon tiene una clave) con los datos
       /* $dato=array(
        "producto"=>$producto,
        "foto"=>$foto,
        "precio"=>$precio,
        "descripcion"=>$descripcion,
        "tipo"=>$tipo
    );

    print_r($dato);*/
    }
}

