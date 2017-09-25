<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="../../../../favicon.ico">-->

    <title><?php echo $titulo; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!--<link href="starter-template.css" rel="stylesheet">-->
    <style type="text/css">
    	body {
		  padding-top: 5rem;
		}
		.starter-template {
		  padding: 3rem 1.5rem;
		  text-align: center;
		}
    </style>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" id="menu">
      <!--<a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>-->

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url(); ?>Clientes">Clientes <span class="sr-only">(current)</span></a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>-->
        </ul>
        <form class="form-inline my-2 my-lg-0" action="#menu">
          <input class="form-control mr-sm-2" type="number" placeholder="Buscar por cédula" aria-label="Search" id="numero_buscar" required>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="buscar" onclick="MostrarValor(this);">Buscar</button>
        </form>
      </div>
    </nav>