<?php

class Calculatrice{
    public function calcul($entry = "2+3")
    {
       return $this->calculate($entry);
    }

    private function calculate($data){
        $data_array = str_split($data);
        return $this->operation($data_array);
    }
    public function operation($array){
        switch ($array[1]) {
            case "+":
                return $this->addition($array[0], $array[2]);
                break;
            case "-":
                echo "i égal 1";
                break;
            case "*":
                echo "i égal 2";
                break;
            case "/":
                echo "i égal 2";
                break;
            case "%":
                echo "i égal 2";
                break;
            default:
                break;
        }
    }

    public function addition($left, $right){
       return (int)$left + (int)$right;
    }
}
