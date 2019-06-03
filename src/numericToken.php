<?php 

namespace Hamidjavadi;


class numericToken {

    public $length = 6;

    public function generate() {

        $token      = '';
        $counter    = 0;

        while($counter < $this->length) {

            $number = random_int(0, 9);
            $token .= $number;

            $counter++;

        }

        return $token;

    }

}