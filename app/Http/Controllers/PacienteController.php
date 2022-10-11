<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
   
   public function index() {
    return "teste";
   }
   
    public function calcularIMC ($nome, $peso, $altura, $genero) {
        $uz = "vai dar bom";
        $az = "vai dar ruim";
        $ez = "tomar cuidado";

        if(!filter_var($peso, FILTER_VALIDATE_FLOAT))
        {
            $uz = "Seguimento de URL peso recebeu um valor não numérico"; 
            return  view ('paciente', compact ('uz'));
        }
    
        if(!filter_var($altura, FILTER_VALIDATE_FLOAT))
        {
            $uz = "Seguimento de URL altura recebeu um valor não numérico";
            return  view ('paciente', compact ('uz'));
        }
    
            $imcCalc = $peso / ($altura ** 2);
            $genero = ucfirst($genero);
            $nome = ucfirst($nome);
            $imcCalc = number_format($imcCalc, 2, '.', '');
            $generosr = "SR";
    
              switch ($genero){
                case "Masculino":
                    $generosr = "SR.";
                    break;
                case "Feminino":
                    $generosr = "SRa.";
                    break;
                    default:
                    return "Seguimento de URL recebeu um valor diferente de masculino ou feminino";
              }
    
            if ($imcCalc <= 18.5){
                $az = " Olá $generosr $nome seu imc é $imcCalc Abaixo do peso";
                return  view ('paciente', compact ('az'));
                
            }
    
            if ($imcCalc <= 24.9){
                $uz = " Olá $generosr $nome seu imc é $imcCalc Peso normal";
                return  view ('paciente', compact ('uz'));
            }
                
            if ($imcCalc <= 29.9){
                $ez = "Olá $generosr $nome seu imc é $imcCalc Sobrepeso";
                return  view ('paciente', compact ('ez'));
            }
    
            if ($imcCalc <= 34.9){

                $az = "Olá $generosr $nome seu imc é $imcCalc Obesidade Grau I";
                return  view ('paciente', compact ('az'));
            }
    
            if ($imcCalc <= 39.9){
                $az = " Olá $generosr $nome seu imc é $imcCalc Obesidade Grau II";
                return  view ('paciente', compact ('az'));
            }
    
            if ($imcCalc >= 40){
                $az =" Olá $generosr $nome seu imc é $imcCalc Obesidade Grau III";
                return  view ('paciente', compact ('az'));
            }
            
    }
    
}
