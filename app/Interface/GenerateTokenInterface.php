<?php

namespace App\Interface;

interface GenerateTokenInterface{

    public function generate($clientData,$userData,$password,$request);
}
