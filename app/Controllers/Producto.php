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

    public function editar($id){

        //1. Recibir los datos del formulario
        $producto=$this->request->getPost("producto");
        $precio=$this->request->getPost("precio");
       
        if($this->validate('formularioEditarProducto')){

           //intentar conectar BD
            //insertar datos
            try{

                //instanciar un objeto sacar fotocopia a la clase crar un objeto
                $modelo=new ProductoModelo();

                // armo paquete de datos a Registar

                $datos=array(
                    "nombre"=>$producto,
                    "precio"=>$precio
                    
                   
                );

                // agrego los datos usanso el objeto
                 $modelo->update($id,$datos);

                //entrego una respuesta

                $mensaje="Exito editando el producto";
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);

            }catch(\Exception $error){
                $mensaje=$error->getMessage();
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);
            }

        } else{
            $mensaje="Tenemos campos sin llenar";
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);

        }

        
    }

/// funciones iconos pagina de inicio.

public function productosPerro(){
    try{

        $modelo=new ProductoModelo();
        $resultado=$modelo->where('tipo','1')->findAll();
        $productosPerro=array('productosPerro'=>$resultado);
        return view('listaProductosPerro',$productosPerro); 
        
       }catch(\Exception $error){

        return redirect()->to(site_url('/productos/registro'))->with('mensaje',$error->getMessage());

    }
}


public function productosGato(){
    try{

        $modelo=new ProductoModelo();
        $resultado=$modelo->where('tipo', '2')->findAll();
        $productosGato=array('productosGato'=>$resultado);
        return view('listaProductosGato',$productosGato);

    }
    catch(\Exception $error){

        return redirect()->to(site_url('/'))->with('mensaje', $error->getMessage());
    }
}


public function productosAve(){
    try{

        $modelo=new ProductoModelo();
        $resultado=$modelo->where('tipo', '3')->findAll();
        $productosAve=array('productosAve'=>$resultado);
        return view('listaProductosAve',$productosAve);

    }
    catch(\Exception $error){

        return redirect()->to(site_url('/productos/ave/listado'))->with('mensaje', $error->getMessage());
    }
}


public function productosReptil(){
    try{

        $modelo=new ProductoModelo();
        $resultado=$modelo->where('tipo', '4')->findAll();
        $productosReptil=array('productosReptil'=>$resultado);
        return view('listaProductosReptil',$productosReptil);

    }
    catch(\Exception $error){

        return redirect()->to(site_url('/'))->with('mensaje', $error->getMessage());
    }
}

public function productosEquino(){
    try{

        $modelo=new ProductoModelo();
        $resultado=$modelo->where('tipo', '5')->findAll();
        $productosEquino=array('productosEquino'=>$resultado);
        return view('listaProductosReptil',$productosEquino);

    }
    catch(\Exception $error){

        return redirect()->to(site_url('/'))->with('mensaje', $error->getMessage());
    }
}
   
}
