<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculatorCont extends Controller
{
    public function calculate(Request $request){
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $operator = $request->input('operation');
        $result = 0;
        $precision = 4;
        switch($operator){
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if($num2 == 0){
                    $result = "Cannot divide by zero";
                }else{
                    $result = $num1 / $num2;
                    $result = number_format((float) $result, $precision, '.', ''); 
                }
                break;
            default:
                $result = "Select operator";
        }
        return redirect('/')->with('result', ''.$result);
    }
}
