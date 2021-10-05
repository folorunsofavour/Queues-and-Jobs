<?php

namespace App\Http\Controllers;

use App\Jobs\CustomerJob;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendEmail()
    {
        // $persons = array("demo@gmail.com" => "abiodun", "demo1@gmail.com" => "favour", "demo2@gmail.com" => "samuel");
        $persons = array("demo@gmail.com", "demo1@gmail.com", "demo2@gmail.com");

        dispatch(new CustomerJob($persons))->delay(now()->addSeconds(10));

        dd('Email has been delivered');
    }
}
