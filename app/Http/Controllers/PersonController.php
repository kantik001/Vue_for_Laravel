<?php

namespace App\Http\Controllers;

class PersonController extends Controller
{
    public function __invoke()
    {
        $persons =[
            [
            'name'=> "Vasya",
            'age'=> 22,
            'job'=> "engineer"
            ],
            [
            'name'=> "Elena",
            'age'=> 20,
            'job'=> "cleaner"
            ],
            [
            'name'=> "Leha",
            'age'=> 27,
            'job'=> "boss"
            ],
        ];

        return $persons;
    }
}
