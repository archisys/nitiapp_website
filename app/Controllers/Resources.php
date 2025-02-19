<?php

namespace App\Controllers;

class Resources extends BaseController
{
    public function mediarelease(): string
    {
        return view('resources/mediarelease');
    }
}
