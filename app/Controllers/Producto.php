<?php

namespace App\Controllers;

use App\Models\ProductoModelo;

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

           //intentar conectar BD
            //insertar datos
            try{

                //instanciar un objeto sacar fotocopia a la clase crar un objeto
                $modelo=new ProductoModelo();

                // armo paquete de datos a Registar

                $datos=array(
                    "nombre"=>$producto,
                    "foto"=>$foto,
                    "precio"=>$precio,
                    "descripcion"=>$descripcion,
                    "tipo"=>$tipo
                );

                // agego los datos usanso el objeto
                 $modelo->insert($datos);

                //entrego una respuesta

                $mensaje="Producto Agregado con exito";
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);

            }catch(\Exception $error){
                $mensaje=$error->getMessage();
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);
            }

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
    public function buscar(){

        try{

            //Necesito llamar al modelo
            //crear un objeto de clase modelo
            $modelo=new ProductoModelo();

            //utilizar el modelo para hablar con la BD
            //y buscar todos los datos de la tabla
            $resultado=$modelo->findAll();

            //organizo los datos como una arreglo
            //asociativo
            $productos=array("productos"=>$resultado);

            //cargar la vista entregandole los datos
            return view('listaProductos',$productos);

        }catch(\Exception $error){

            $mensaje=$error->getMessage();
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);

        }
        
       
        

       

    }

    public function eliminar($id){

      try{
           //Necesito llamar al modelo
            //crear un objeto de clase modelo
            $modelo=new ProductoModelo();

             //utilizar el modelo para hablar con la BD
            //y eliminar el registro con el id capturado
            $modelo->where('id',$id)->delete();

            //Entrego una respuesta
            $mensaje="Exito eliminando el producto";
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);



      }catch(\Exception $error){

        $mensaje=$error->getMessage();
        return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);

      }
    }


}
