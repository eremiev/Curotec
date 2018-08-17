<?php

namespace App\Queries\Survey;

use App\Survey;

class Update
{
    public function run($id, $inputs)
    {
        $survey = Survey::find($id);
        $survey->update($inputs);
    }
}