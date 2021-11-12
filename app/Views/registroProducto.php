<!DOCTYPE html>
<html lang="en">
<head>
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
                <a class="nav-link" href="<?=site_url('/animales/registro')?>">Registro Animal</a>
                </li>
        
        </ul>
        
    </div>
    </nav>
    <section>
	<div class="container mt-5">
		<div class="row">
			<div class="col-12">
				<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
						<img src="<?= base_url('public/img/1.png') ?>" class="d-block w-100" alt="foto">
						</div>
						<div class="carousel-item">
						<img src="<?= base_url('public/img/2.png') ?>" class="d-block w-100" alt="fot0">
						</div>
						<div class="carousel-item">
						<img src="<?= base_url('public/img/3.png') ?>" class="d-block w-100" alt="foto">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
					</div>

			</div>
		</div>
	</div>

<main>
        <div class="container mb-5">
             <div class="row mt-5 d-flex justify-content-center">
                <div class="col-12 col-md-5">
					
                    <h3 class="fuente2 fw-bold text-center">Registro de productos</h3>
                    
                    <form action="<?= site_url('/productos/registro/nuevo') ?> " method="POST" class="mt-4">
                        <div class="mb-3">
                            <label class="form-label">Producto:</label>
                            <input type="text" class="form-control" name="producto">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Foto:</label>
                            <input type="text" class="form-control" name="foto">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Precio Unidad:</label>
                            <input type="number" class="form-control" name="precio">
                        </div>

                        <div class="mb-3">

                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Descripcion" name="descripcion" style="height: 100px"></textarea>
                                <label for="floatingTextarea">Descripción</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Especie Animal:</label>
                            <select class="form-select" name="tipo">
							<option selected>seleccione el tipo de animal</option>
                                <option value="1">Perro</option>
                                <option value="2">Gato</option>
                                <option value="3">Ave</option>
                                <option value="4">Reptil</option>
                                <option value="5">Equino</option>
                            </select>
                        </div>
                        
                    <div class="d-grid gap-2">
                            <button class="btn boton" type="submit">Registrar</button>
							
                        </div>
						
                        
                    </form>
                </div>
                <div class="col-12 col-md-5 align-self-end">
                    <img src="<?= base_url('public/img/cuido.png')?>" alt="imagen" class="img-fluid w-100">
					<a class="btn btn-primary" href="<?= site_url('/productos/listado') ?>">Ver inventario</a>
                </div>
            </div>
        </div>
       
    </main>
		<section>
			<?php if(session('mensaje')): ?>
			<div class="modal fade" id="modal" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header fondoPrincipal text-while" >
						<h5 class="modal-title" id="exampleModalLabel">Casa Hogar</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<h5><?=session('mensaje')?></h5>
					</div>
					</div>
				</div>
				</div>
				<?php unset($_SESSION['mensaje']); ?>
			<?php endif ?>
		</section>

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
								<i class="fab fa-facebook fa-2x  zoom zoom:hover"></i>
								<i class="fab fa-instagram fa-2x  zoom zoom:hover"></i>
								<i class="fab fa-youtube fa-2x  zoom zoom:hover"></i>
							</div>
							
						<br>
						<p class="mt-4">© 2021 / NIT: 890316586-0 / Código DANE: 04001 / Código Postal: 050015</p>
							
				</div>
				
		  </div>
 </div>	
</footer>

<script type="module" src="<?= base_url('public/js/lanzarmodal.js')?>"></script>

    <script src="https://kit.fontawesome.com/7b642ec699.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>