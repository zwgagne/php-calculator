<?php

class Calculatrice
{
    public function calcul($entry = "2+3")
    {
        return $this->calculate($entry);
    }

    private function calculate($data)
    {
        $data_array = str_split($data);
        return $this->operation($data_array);
    }
    public function operation($array)
    {
        switch ($array[1]) {
            case "+":
                return $this->addition($array[0], $array[2]);
                break;
            case "-":
                return $this->soustraction($array[0], $array[2]);
                break;
            case "*":
                return $this->multiplication($array[0], $array[2]);
                break;
            case "/":
                return $this->division($array[0], $array[2]);
                break;
            case "%":
                return $this->modulo($array[0], $array[2]);
                break;
            case "^":
                return $this->racine($array[0]);
                break;
            default:
                break;
        }
    }

    public function addition($left, $right)
    {
        return (int)$left + (int)$right;
    }
    public function soustraction($left, $right)
    {
        return (int)$left - (int)$right;
    }
    public function multiplication($left, $right)
    {
        return (int)$left * (int)$right;
    }
    public function division($left, $right)
    {
        return (float)$left / (float)$right;
    }
    public function modulo($left, $right)
    {
        return (int)$left % (int)$right;
    }
    public function racine($left)
    {
        return sqrt((int)$left);
    }
}
