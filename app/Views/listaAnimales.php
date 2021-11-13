<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nuevo Porvenir</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Delius+Swash+Caps&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('public/styles/estilos.css') ?>">
</head>
<body class="fondo">

<nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid">
            <a class="navbar-brand fuente" href="#">
                <i class="fas fa-paw"></i>
                Casa Hogar
            </a>
            
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?=site_url('/')?>">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?=site_url('/productos/registro')?>"> Registro Producto</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?=site_url('/animales/registro')?>">Registro Animal</a>
                    </li>
            
            </ul>
            
        </div>
    </nav>
    <main>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-5 g-4">
                <?php use App\Controllers\Animal;

                foreach($animales as $animal):?>
                    <div class="col">
                        <div class="card h-100 p-3">
                            <img src="<?= $animal["foto"]?>" class="card-img-top h-100" alt="foto">
                            <div class="card-body">
                                <h5 class="card-title"><?= $animal["nombre"]?></h5>
                                <p class="card-text"><?= $animal["edad"]?></p>
                                <a data-bs-toggle="modal" data-bs-target="#confirmacion<?= $animal["id"] ?>"  href="#" class="btn btn-primary"><i class="fas fa-trash-alt"></i></a>
                                <a data-bs-toggle="modal" data-bs-target="#editar<?= $animal["id"] ?>"href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            </div>
                        </div>

                        <section>
                            <div class="modal fade" id="confirmacion<?= $animal["id"] ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header fondoPrincipal text-white">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>¿Está seguro de eliminar este animal?</p>
                                        <p><?= $animal["id"] ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <a href="<?= site_url('/animales/eliminar/'.$animal["id"])?>" class="btn btn-danger">Aceptar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <section>
                            <div class="modal fade" id="editar<?= $animal["id"] ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header fondoPrincipal text-white">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-3 align-self-center">
                                                <img src="<?=$animal["foto"]?>" alt="foto" class="img-fluid w-100">

                                            </div>
                                             <div class="col-9">
                                                <form action="<?= site_url('/animales/editar/'.$animal["id"]) ?>" method="POST">
                                                <div class="mb-3">
                                                    <label class="form-label">Nombre:</label>
                                                    <input type="text" class="form-control" name="nombre" value="<?=$animal["nombre"]?>">
                                                </div> 

                                                <div class="mb-3">
                                                    <label class="form-label">Edad:</label>
                                                    <input type="text" class="form-control" name="edad" value="<?=$animal["edad"]?>">
                                                </div> 
                                                    <button class="btn boton" type="submit">Editar</button>
                                                     
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </section>

                   </div>
                <?php endforeach?>

            </div>
        </div>

    </main>
    
    <footer class="fondoDos p-5">
		<div class="container-fluid">

			<div class="row">
				<div class="col-8 col-md-4">
						<h3 class="fw-bold">Horario de atención:</h3>
						<p>Lunes a viernes 7:00 am - 3:00 pm / Sábado: 7:00 am - 1:30 pm / solo urgencias</p>
						<br>
						<h3 class="fw-bold">Dirección:</h3>
						<p> La Floresta Calle 8A # 112-82 </p>
				</div>

				<div class="col-8 col-md-4">
						<h3 class="fw-bold">Ayudas:</h3>
						<p>Glosario / Correo remoto  /  Monitoreo y desempeño de uso del sitio web</p>
						<br>
						<h3 class="fw-bold">Protección de datos:</h3>
						<p>Protección de datos personales.</p>
				</div>

				<div class= "col-8 col-md-4">
						<h3 class="fw-bold fuente"><span><i class="fas fa-paw"></i></span>WILD HOUSE</h3>
						<br>
							<div class="redes-sociales">
								<a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook fa-2x  zoom zoom:hover"></i></a>
								<a href="https://www.instagram.com/"target="_blank"><i class="fab fa-instagram fa-2x  zoom zoom:hover"></i></a>
								<a href="https://www.youtube.com/"target="_blank"><i class="fab fa-youtube fa-2x  zoom zoom:hover"></i></a>
							</div>
							
						<br>
						<p class="mt-4">© 2021 / NIT: 890316586-0 / Código DANE: 04001 / Código Postal: 050015</p>
							
				</div>
				
		  </div>
 </div>	
</footer>

    <script src="https://kit.fontawesome.com/7b642ec699.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>