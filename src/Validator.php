<?php

class Validator
{
    public function check($input)
    {
        // Vérifier si la longueur de la chaîne est >= 2
        if (strlen($input) >= 2) {
            return true;
        } else {
            return false;
        }
    }
}
