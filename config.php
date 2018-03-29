<?php 


spl_autoload_register(function($nomeClass){
  $filename = "Class".DIRECTORY_SEPARATOR.$nomeClass.".php";

  if(file_exists($filename)){
    require_once ($filename);
  }
});


$user = new CPF("054731815");
