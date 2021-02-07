<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Estudos</title>
    <meta name="description" content="Não sei." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="VS Code">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!--<link href="<?= base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>public/css/mdb.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/styles.css" />
        
        <?php if(isset($styles)){
            foreach($styles as $style_name){
                $href = base_url() . "public/css/" . $style_name; 
        ?>
    <link rel="stylesheet" href="<?= $href ?>" />
        <?php }
    } ?>

  </head>
  <body class="bg-faded">

<nav id="topNav" class="navbar fixed-top navbar-toggleable-sm">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span>☰</span>
        </button>
        <a class="navbar-brand page-scroll" href="<?= base_url(); ?>#first"><img src="<?= base_url(); ?>public/img/logo.png" class="logo" alt=""/></a>
        <div class="collapse navbar-collapse" id="collapsingNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?= base_url(); ?>#one">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?= base_url(); ?>#two">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?= base_url(); ?>#examples">Equipe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?= base_url(); ?>#three">Contato</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?= base_url(); ?>restrict">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>