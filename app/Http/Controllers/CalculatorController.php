<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{public function sum($num1, $num2)
    {
        if (!is_numeric($num1) || !is_numeric($num2)) {
            return "Both arguments must be numbers.";
        }

        return $num1 + $num2;
    }

    public function subtract($num1, $num2)
    {
        if (!is_numeric($num1) || !is_numeric($num2)) {
            return "Both arguments must be numbers.";
        }

        return $num1 - $num2;
    }
}
