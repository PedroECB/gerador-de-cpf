<?php

  require_once("config.php");
  $aviso = null;

  if(!empty($_POST['cpf'])){
    $cpfu = new CPF($_POST['cpf']);
    if(isset($cpfu->digitos[0]) && isset($cpfu->digitos[1])){
    $aviso = "CPF VÁLIDO: ".$_POST['cpf']."-".$cpfu->digitos[0].$cpfu->digitos[1];
    
    //header("Location:index.php");
    }
  }





 ?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Gerador de CPF</title>
  <meta charset=utf-8>
  <meta name=description content="">
  <meta name=viewport content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">

</head>

<body>
<div class="container">
 <div class="main">
  <div class="row">
  <div class="col-md-3">
   
  </div>

    <div class="col-md-6">
      <form method="post" action="index.php">  
     <center><h1 class="gerador-titulo">GERADOR DE CPF</h1></center>

     <input class="form-control" type="tel" size="" maxlength="9" name="cpf" placeholder="Informe os 9 primeiros dígitos do CPF">
     <input class="btn btn-primary btn-block" type="submit" value="VALIDAR">
     <br>



   <?php  if($aviso):  ?>  

    <div class="alert alert-success alert-dismissible fade show" role="alert">
       <center><strong><?php echo $aviso;  ?></strong></center>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div> 






   <?php   endif;?>  



                     <!-- Aviso apenas números-->
<!--
<div class="alert alert-warning alert-dismissible fade show" role="alert">
   <center>Digite apenas <strong>números </strong></center>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> 


-->

    

               <!--Aviso digitos pendentes-->
<!--
<div class="alert alert-danger alert-dismissible fade show" role="alert">
   <center>Insira os 9 dígitos</center>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
-->



      </form>
    </div> 

  <div class="col-md-3">
   
  </div>

</div>
<div> 
</div>







<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
