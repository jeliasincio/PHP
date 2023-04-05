<?php
include('cabecera.php');
include('conexion.php');

$objConexion = new conexion();
$resultados = $objConexion->consultar("SELECT * FROM `proyectos`");

?>

<div class="p-5 mb-4 bg-light rounded-0 container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1 class="display-5 fw-bold">Portafolio de Proyectos</h1>
        <p class="col-md-8 fs-4">Portafolio de proyectos desarrollados con PHP, sólo para desarrolladores
          Integración con distintos lenguajes de programación y frameworks</p>
        <a href="login.php" class="btn btn-primary btn-lg" type="button">Acceder</a>
      </div>
      <div class="col-md-6">
        <img src="img/portafolio-principal.png" alt="Portafolio principal">
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach ($resultados as $columna) { ?>
      <div class="col">
        <div class="card h-100">
          <img src="img/<?php echo $columna['imagen']; ?>" class="card-img-top" alt="Portafolio">
          <div class="card-body">
            <h5 class="card-title"><?php echo $columna['nombre']; ?></h5>
            <p class="card-text"><?php echo $columna['descripcion']; ?></p>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
  <br/>
</div>


<?php include('cerrar.php'); ?>