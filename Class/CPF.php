<?php 

class CPF{
  private $cpf;
  private $digitos;



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
  $this->digitos = $d;
}

    public function valida($cpf){

      if(!is_numeric($cpf)){
        return false;
      }
     
     if(mb_strlen($cpf)>9){
      return false;
     }

     if($cpf === "000000000" || $cpf === "111111111" || $cpf === "222222222" || $cpf === "333333333" ||
        $cpf === "444444444" || $cpf === "555555555" || $cpf === "666666666" || $cpf === "777777777" ||
        $cpf === "888888888" || $cpf === "999999999"){

        return false;
     }

     $vetoraiz = array(10,9,8,7,6,5,4,3,2);
     $vetorraiz2 = array(2,3,4,5,6,7,8,9,10,11);
     $vetorSoma = array();

     $vetor1 = str_split($cpf);


     for($i=0;$i<=8;$i++){
       $vetorSoma[$i] = $vetor1[$i]*$vetoraiz[$i]; 
     }

     $soma = array_sum($vetorSoma);
     $resto1 = $soma%11;
     

     foreach ($vetorSoma as $value) {
        echo $value." / ";
     };





    }


}
