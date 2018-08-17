<?php

namespace App\Queries\Survey;


use App\Survey;

class Store
{
    public function run($inputs)
    {
        $survey = Survey::create($inputs);
    }
}