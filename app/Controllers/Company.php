<?php

namespace App\Controllers;

class Company extends BaseController
{
    public function about(): string
    {
        return view('company/about');
    }

    public function blog(): string
    {
        return view('company/blog');
    }

    public function contact(): string
    {
        return view('company/contact');
    }

    public function privacypolicy(): string
    {
        return view('company/privacypolicy');
    }

    public function termsandcondition(): string
    {
        return view('company/termsandcondition');
    }
    
}
