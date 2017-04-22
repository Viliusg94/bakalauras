<?php

/**
 * Created by PhpStorm.
 * User: zn
 * Date: 4/22/17
 * Time: 10:34 AM
 */
namespace AppBundle\Services;

class Trikampis
{
    private $a;
    private $b;
    private $c;
    
    public function __construct($a,$b,$c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function perimetras()
    {
        return $this->a + $this->b + $this->c;
    }

    public function rusis()
    {
        if ($this->a < 1 || $this->b < 1 || $this->c < 1) {
            return 'ne trikampis';
        }


        if ($this->a === $this->b && $this->b === $this->c) {
            return 'lygiakrastis';
        }
        else if ($this->a === $this->b || $this->b === $this->c || $this->a === $this->c) {
            return 'lygiasonis';
        }
        else return 'ivairiakrastis';
    }
}