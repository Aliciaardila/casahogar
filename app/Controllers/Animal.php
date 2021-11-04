<?php

namespace App\Controllers;

use App\Models\AnimalModelo;

class Animal extends BaseController


{
    public function index()    {
        return view('registroAnimal');
    }

    public function registrar()
    {
        //1. Recibir los datos del formulario
        $producto=$this->request->getPost("nombre");
        $edad=$this->request->getPost("edad");
        $foto=$this->request->getPost("foto");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        // se aplican validadciones

        if($this->validate('formularioAnimal')){

            //intentar conectar BD
             //insertar datos
             try{
 
                 //instanciar un objeto sacar fotocopia a la clase crar un objeto
                 $modelo=new AnimalModelo();
 
                 // armo paquete de datos a Registar
 
                 $datos=array(
                     "nombre"=>$producto,
                     "edad"=>$edad,
                     "foto"=>$foto,
                     "descripcion"=>$descripcion,
                     "tipo"=>$tipo
                 );

                 // agego los datos usanso el objeto
                 $modelo->insert($datos);

                //entrego una respuesta

                $mensaje="Animal Agregado con exito";
                return redirect()->to(site_url('/animales/registro'))->with('mensaje',$mensaje);



            }catch(\Exception $error){
                $mensaje=$error->getMessage();
                return redirect()->to(site_url('/animales/registro'))->with('mensaje',$mensaje);
            }

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
public function buscar(){

    try{

        //Necesito llamar al modelo
        //crear un objeto de clase modelo
        $modelo=new AnimalModelo();


        //utilizar el modelo para hablar con la BD
        //y buscar todos los datos de la tabla
        $resultado=$modelo->findAll();
        
        //organizo los datos como una arreglo
        //asociativo
        $animales=array("animales"=>$resultado);

        
        //cargar la vista entregandole los datos
        return view('listaAnimales',$animales);

    }catch(\Exception $error){

        $mensaje=$error->getMessage();
        return redirect()->to(site_url('/animales/registro'))->with('mensaje',$mensaje);

    }
    
   
  

}

public function eliminar($id){

  try{
       //Necesito llamar al modelo
        //crear un objeto de clase modelo
        $modelo=new AnimalModelo();

         //utilizar el modelo para hablar con la BD
        //y eliminar el registro con el id capturado
        $modelo->where('id',$id)->delete();

        //Entrego una respuesta
        $mensaje="Exito eliminando el animal";
        return redirect()->to(site_url('/animales/registro'))->with('mensaje',$mensaje);



  }catch(\Exception $error){

    $mensaje=$error->getMessage();
    return redirect()->to(site_url('/animales/registro'))->with('mensaje',$mensaje);

  }
}


}


