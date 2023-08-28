<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaStudentController extends Controller
{
    public function mediaCalculator($noteOne, $noteTwo)
    {

        $mediaCalculator = ($noteOne + $noteTwo) / 2;

        return $mediaCalculator;
    }
}
