<?php


class Calculatrice
{
    public function calcul($entry = "2+3")
    {
        $processed_entry = $this->calculate($entry);
    }

    public function calculate($data)
    {
        $data_array= str_split($data);

    }

}

new Calculatrice();