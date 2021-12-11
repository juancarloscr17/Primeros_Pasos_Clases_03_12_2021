<?php
class suma {
    public $numero;
    public $suma;
    public function __construct(){}

}










// class Humano{
//     public $nombre;
//     protected $sangre;
//     private $pasatiempo;
    
    
//     public function __construct(
//         string $nom ="Juan",
//         string $pas ="Leer",
//         string $san = "O+"){
//             $this->nombre = $nom;
//             $this->sangre = $san;
//             $this->pasatiempo = $pas;
//         }
//         public function Get_sangre(){
//             return $this->sangre;
//         }
    
//     public function Get_pasatiempo(){
//         return $this->pasatiempo;
//     }
// }
// class Humano2 extends Humano{
//     public function __construct(){
//     } 
//     public function Set_sangre(string $san){
//         $this->sangre = $san;
//     }
//     public function Set_pasatiempo(string $pas){
//          $this->pasatiempo = $pas;
//     }
// }

// $obj = new Humano2();
// print_r(($obj)->{"Set_sangre"}($san ="A+"));
// print_r(($obj)->{"Get_sangre"}());











// class armadura {
//     public $material;
//     public $capacidad;
//     public function __construct(string $mat="cuero",int $cap=50){
//         $this->material = $mat;
//         $this->capacidad = $cap;
//     }
//     public function defensa(){
//         $this ->capacidad--;
//         return $this->capacidad;
//     }
// }
// class armaduraReforzada extends armadura{
//     public function __construct(int $cap = 200){
//         $this->capacidad = $cap;
//         $this->encantamiento = "+1vida .3s ";
//     }
//     public function defensa(){
//         $this ->capacidad--;
//         return <<<DEFENSA
//         ${!${''} = $this->capacidad} efecto ${!${''}=$this->encantamiento}
//         DEFENSA;
//     }
// }
// $obj2 = new armaduraReforzada();
// print_r($obj2->capacidad);
// echo "<br>";
// print_r($obj2->defensa());

// $obj = new armadura($mat= "Acero");
// $obj->material = "Madera";
// print_r($obj->material);











// class humano {
//     public $colo_piel = "blanco";
//     public $pelo = "liso";
//     public $altura = 1.80;
//     public $piernas = 2;

//     public function caminar(string $nombre){
//         if($this ->piernas>0){
//             return <<<Mensaje
//                 Estoy caminando con mis piernas ${!${''} = $this->piernas} :) ${!${''} = $nombre}
//            Mensaje;
//         }else
//         return "No puedo caminar";
//     }
// }
// $Humano = new humano();

//  print_r(call_user_func(array($Humano,"caminar"),"Juan Carlos"));


?>