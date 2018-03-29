<?php 

class CPF{
  public $cpf;
  private $error;
  public $digitos = array();



public function __construct($cpf){
   $this->valida($cpf);
}


public function getCpf(){
  return $this->cpf;
}
public function setCpf($c){
  $this->cpf = $c;
}
public function getDigitos(){
  return $this->digitos;
}
public function setDigitos($d){
 //$this->digitos = array_push($this->$digitos, $d);
}

public function valida($cpf){

      if(!is_numeric($cpf)){
        return false;
      }
     
     if(mb_strlen($cpf)!==9){
      return false;
     }

     if($cpf === "000000000" || $cpf === "111111111" || $cpf === "222222222" || $cpf === "333333333" ||
        $cpf === "444444444" || $cpf === "555555555" || $cpf === "666666666" || $cpf === "777777777" ||
        $cpf === "888888888" || $cpf === "999999999"){

        return false;
     }

     $vetoraiz = array(10,9,8,7,6,5,4,3,2);
     $vetorraiz2 = array(11,10,9,8,7,6,5,4,3,2);
     $vetorSoma = array();

     $vetor1 = str_split($cpf);


     for($i=0;$i<=8;$i++){
       $vetorSoma[$i] = $vetor1[$i]*$vetoraiz[$i]; 
     }

     $soma = array_sum($vetorSoma);
     $resto1 = $soma%11;

     if($resto1<2){
      $this->digitos[0] = 0;

     }elseif($resto1>=2){
      $this->digitos[0] = (11-$resto1);

     }
     
    $vetor1[] = $this->digitos[0];

    for($i=0;$i<=9;$i++){
       $vetorSoma[$i] = $vetor1[$i]*$vetorraiz2[$i]; 
     }

     $soma = array_sum($vetorSoma);
     $resto1 = $soma%11;

     if($resto1<2){
      $this->digitos[1] = 0;

     }elseif($resto1>=2){
      $this->digitos[1] = (11-$resto1);

     }

     //echo $this->digitos[0].$this->digitos[1]."<br>";


    }


public function errorNumber(){

}


public function errorCountNumber(){}





}
