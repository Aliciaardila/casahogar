<?php

namespace App\Controllers;

class Producto extends BaseController
{
    public function index()
    {
        return view('registroProducto');
    }

    public function registrar()
    {
        //1. REcibir los datos del formulario
        $producto=$this->request->getPost("producto");
        $foto=$this->request->getPost("foto");
        $precio=$this->request->getPost("precio");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        // se aplican validadciones

        if($this->validate('formularioProducto')){

            echo("Todo bien");

        } else{
            $mensaje="Tenemos campos sin llenar";
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);

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