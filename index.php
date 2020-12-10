<?php
//const nombre =  array("Jhoan David Contreras Cardenas");
//echo nombre = {0};
//echo "<br>";
//define(`Nombre`,"Jhoan,Yuri");
//echo Nombre{0};
//interface boca{
  //  const hablar = "soy Jhoan";
//}
//echo boca::hablar;


interface vida {
    const tipo = array(`organica``no organica`);
    public function respirar($tiempo="5",$cantidad_oxigeno,$estado);
    public function bombiarfluido();
}
interface muerte extends vida{
    const estado = array(`pulso`,`leve`,`no tiene pulso`);
} 
class Humano{
    public function saludar(){
        return  "Hola" .muerte::tipo{0}."como estas";

    }
    public function respirar($tipo,$cantidad_oxigeno,$estado){

    }
    public function bombiarfluido(){

    }
    public function pulso(){
        
    }
}

$obj =new Humano implements vida ();
echo $obj->saludar();
?>