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
        $mensaje="Animal Eliminado con Exito";
        return redirect()->to(site_url('/animales/registro'))->with('mensaje',$mensaje);



  }catch(\Exception $error){

    $mensaje=$error->getMessage();
    return redirect()->to(site_url('/animales/registro'))->with('mensaje',$mensaje);

  }
}

public function editar($id){

    //1. Recibir los datos del formulario

    $nombre=$this->request->getPost("nombre");
    $edad=$this->request->getPost("edad");
    

    if($this->validate('formularioEditarAnimal')){

       //intentar conectar BD
        //insertar datos
        try{

            //instanciar un objeto sacar fotocopia a la clase crar un objeto
            $modelo=new AnimalModelo();
            // armo paquete de datos a Registar

            $datos=array(
                "nombre"=>$nombre,
                "edad"=>$edad
                
               
            );

            // agego los datos usanso el objeto
             $modelo->update($id,$datos);

            //entrego una respuesta

            $mensaje="Exito editando el animal";
            return redirect()->to(site_url('/animales/registro'))->with('mensaje',$mensaje);

        }catch(\Exception $error){
            $mensaje=$error->getMessage();
            return redirect()->to(site_url('/animales/registro)'))->with('mensaje',$mensaje);
        }

    } else{
        $mensaje="Tenemos campos sin llenar";
        return redirect()->to(site_url('/animales/registro'))->with('mensaje',$mensaje);

    }
    
   
}

public function productosPerro(){
    try{

        $modelo=new AnimalModelo();
        $resultado=$modelo->where('tipo','1')->findAll();
        $productosPerro=array('productosPerro'=>$resultado);
        return view('listaProductoPerro',$productosPerro); 

    }catch(\Exception $error){

        return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());

    }
}

public function productosGato(){
    try{

        $modelo=new AnimalModelo();
        $resultado=$modelo->where('tipo','2')->findAll();
        $productosGato=array('productosGato'=>$resultado);
        return view('listaProductosGato',$productosGato); 

    }catch(\Exception $error){

        return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());

    }
}

public function productosReptil(){
    try{

        $modelo=new AnimalModelo();
        $resultado=$modelo->where('tipo','4')->findAll();
        $productosReptil=array('productosReptil'=>$resultado);
        return view('listaProductosReptil',$productosReptil); 

    }catch(\Exception $error){

        return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());

    }
}

public function productosAves(){
    try{

        $modelo=new AnimalModelo();
        $resultado=$modelo->where('tipo','3')->findAll();
        $productosAves=array('productosAves'=>$resultado);
        return view('listaProductosAves',$productosAves); 

    }catch(\Exception $error){

        return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());

    }
}
public function productosEquinos(){
    try{

        $modelo=new AnimalModelo();
        $resultado=$modelo->where('tipo','5')->findAll();
        $productosEquinos=array('productosEquinos'=>$resultado);
        return view('listaProductosEquinos',$productosEquinos); 

    }catch(\Exception $error){

        return redirect()->to(site_url('/animales/registro'))->with('mensaje',$error->getMessage());

    }
}
   




}


