<?php if ( ! defined('ABSPATH')) exit; ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="http://blogac.me/wp-content/uploads/2016/04/itil-time.png" width="50" height="50" class="d-inline-block" alt=""><label id="slogan">Gestão de Incidentes</label> 
  </a>
  <button class="navbar-toggler" id="myCollapse" type="button" data-toggle="collapse" href="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse topheader" id="navbarNav ">
    <ul class="navbar-nav ">
      <li class="nav-item ">
        <a class="nav-link nav-text-style" href="<?php echo HOME_URI;?>/home/">Abrir incidentes<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-text-style" href="<?php echo HOME_URI;?>/lista-incidentes/">Listar incidentes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-text-style" href="<?php echo HOME_URI;?>/encerra-incidentes/">Encerrar incidentes</a>
      </li>
    </ul>
  </div>
</nav>