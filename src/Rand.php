<?php

namespace Cstreitberger18\RandomBool;

class Rand
{
    public function getRandomBool() : bool
    {
        $zahl = rand(0, 1);

        if ($zahl == 1) {
            return true;
        }
        else
        {
            return false;
        }
    }


}