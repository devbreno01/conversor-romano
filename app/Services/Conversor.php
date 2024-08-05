<?php 

namespace App\Services;



class Conversor {
  
    public function decimalParaRomano($decimal){
       $romano = ''; 
       $baseRomana = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    ];

    foreach($baseRomana as $letra => $valor){
        while($decimal >= $valor){
            $romano = $romano . $letra;
            $decimal = $decimal - $valor; 

        }
    }
    return $romano; 

    }

   
    public function romanoParaDecimal($romano){
        $baseRomana = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
        ];

        $resultado = 0;
        $valorAnterior = 0;
        $valorAtual= 0; 
        $arrayReal = str_split($romano);

        foreach ($arrayReal as $algorismo) {
            $valorAtual = $baseRomana[$algorismo];

            if ($valorAtual > $valorAnterior) {
                $resultado = $resultado + $valorAtual - 2 * $valorAnterior;
            } else {
            $resultado = $resultado + $valorAtual;
            }

            $valorAnterior = $valorAtual;
        }

        return $resultado;
    }


    
}