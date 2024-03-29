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
			<a class="nav-link active" aria-current="page" href="#">Home</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="<?= site_url('/productos/registro')?>">Registro Producto</a>
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
</section>
<main>
		<div class="container-fluid mt-5">
			<div class="row d-flex justify-content-center">
					<div class="col-12 col-md-6 text center" >
					<h3 class="text-center fw-bold text-center fuente2">Hogar de animales WILD HOUSE</h3>
						<p class="text-center fuente2"> Casa hogar WILD HOUSE, atiendes desde 1996 animales y fauna silvestre en estado de abandono,
							ofrenciendo atención integral, además somos fabricante de comida y accesorio para todo tipo de mascota
						</p>

					</div>
			</div>
		</div>

		<section>
			<div class="container mt-5">
					<div class="row d-flex justify-content-center">

						<div class="col-1" >
							<a href="<?= site_url('/productos/perro/listado') ?>"><img src="<?= base_url('public/img/dog-icon.png') ?>" class="img-fluid w-100 zoom zoom:hover" alt="foto">
							<strong><p>....Perros....</p></strong>
							</a> 
						</div>
						<div class="col-1" >
							<a href="<?= site_url('/productos/gato/listado') ?>"><img src="<?= base_url('public/img/cat-icon.png') ?>" class="img-fluid w-100 zoom zoom:hover" alt="foto">
							<strong><p>....Gatos....</p></strong>
							</a>
						</div>
						<div class="col-1" >
							<a href="<?= site_url('/productos/aves/listado') ?>"><img src="<?= base_url('public/img/bird-icon.png') ?>" class="img-fluid w-100 zoom zoom:hover" alt="foto">
							<strong><p>....Aves....</p></strong>
							</a>
						</div>
							<div class="col-1" >
							<a href="<?= site_url('/productos/reptil/listado') ?>"><img src="<?= base_url('public/img/reptile-icon.png') ?>" class="img-fluid w-100 zoom zoom:hover" alt="foto">
							<strong><p>..Reptiles..</p></strong>
							</a>
						</div>
						<div class="col-1" >
							<a href="<?= site_url('/productos/equinos/listado') ?>"><img src="<?= base_url('public/img/horse-icon.png') ?>" class="img-fluid w-100 zoom zoom:hover" alt="foto">
							<strong><p>..Equinos..</p></strong>
							</a>
						</div>

					</div>
			</div>
		</section>

		<section class="row fondoAP">

		</section>

		<section >
		<div class="container mt-5">	
			<div class="row d-flex justify-content-center"> 
				<div class="col-6" >
				<img src="<?= base_url('public/img/gato.jpg') ?>" alt="foto" class="img-fluid w-100 rounded">
				</div>

				<div class="col-6 align-self-cente" >
				<h5 class="fuente1 fw-bold">WILD HOUSE</h5>
					<p class="fuente1">
						Somos una organización protectora de animales especializada, desde 1996, en la ayuda a perros y gatos maltratados y/o abandonados; una organización española totalmente independiente que no recibe subvenciones de organismos oficiales, empresas ni partidos políticos. Las cuotas de nuestros socios y las donaciones de nuestros simpatizantes permiten que nuestra labor sea sostenible y preservan nuestra libertad de acción. Contamos con un centro veterinario en Medellín abierto al público, que destina sus ingresos íntegramente al cuidado de los animales abandonados, y un centro de acogida en El Espinar.
						<br>
						Defendemos el “sacrificio cero”. Esto significa que establecemos una línea muy clara entre “el sacrificio” y “la eutanasia”. Nunca sacrificamos cachorros recién nacidos, ni animales cojos, ciegos, sordos o con enfermedades crónicas que sean tratables. Exclusivamente en caso de enfermedad en fase terminal que produzca un sufrimiento irreversible, se recurre a la eutanasia con toda la dignidad, el respeto y el amor que ellos merecen.
					</p>

				</div>
				
			</div>
		</div>	

			
		</section>
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