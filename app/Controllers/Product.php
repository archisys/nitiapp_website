<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function sfaclm(): string
    {
        return view('products/sfaclm');
    }

    public function dms(): string
    {
        return view('products/dms');
    }

    public function directtodoctor(): string
    {
        return view('products/directtodoctor');
    }

    public function hcpengagement(): string
    {
        return view('products/hcpengagement');
    }

    public function productcompliance(): string
    {
        return view('products/productcompliance');
    }

    public function alltrack(): string
    {
        return view('products/alltrack');
    }
    
}
