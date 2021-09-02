<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('calculator.index');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!empty($_POST)){
            
            $value1 = $_POST['value1'];
            $value2 = $_POST['value2'];
            $value3 = $_POST['value3'];
            $formula = $_POST['formula'];
    
            switch($formula){
                case 1:
                    $answer = 2*($value1+$value2);
                    echo
                        "
                        <!doctype html>
                        <html lang='en'>
                        <head>
                            <meta charset='utf-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1'>

                            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We' crossorigin='anonymous'>

                            <title>Question 4</title>
                        </head>
                        <body class='bg-info container-fluid'>
                            <div class='container'>
                                <h1 class='text-center  fst-italic text-success'>Midterm-Mathematical Formula</h1>
                                <div class = 'text-center mt-3 text-white col'>
                                <span class='bg-success'>
                                    <h5 class='text-dark'>Output: $answer</h5>
                                    Perimeter of the rectangle formula: 2(L * W) <br>
                                    The value of $value1 you entered will be the length of the rectangle<br>
                                    The value of $value2 you entered will be the width of the rectangle<br>
                                </span>
                            </div>
                            </div>

                            <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj' crossorigin='anonymous'></script>

                        </body>
                        </html>
                        "; 
                    break;
                case 2:
                    $answer = $value1*$value2*$value3;
                    echo
                        "
                        <!doctype html>
                        <html lang='en'>
                        <head>
                            <meta charset='utf-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1'>

                            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We' crossorigin='anonymous'>

                            <title>Question 4</title>
                        </head>
                        <body class='bg-info container-fluid'>
                            <div class='container'>
                                <h1 class='text-center  fst-italic text-success'>Midterm-Mathematical Formula</h1>
                                <div class = 'text-center mt-3 text-white col'>
                                <span class='bg-success'>
                                    <h5 class='text-dark'>Output: $answer</h5>
                                    The volume of cuboid formula: Length × breadth × height <br>
                                    The value of $value1 you entered will be the length <br>
                                    The value of $value2 you entered will be the breadth <br>
                                    The value of $value3 you entered will be the height <br>
                                </span>
                            </div>
                            </div>
                            </div>

                            <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj' crossorigin='anonymous'></script>

                        </body>
                        </html>
                        "; 
                    break;
                case 3:
                    $answer = $value1*$value1;
                    echo
                        "
                        <!doctype html>
                        <html lang='en'>
                        <head>
                            <meta charset='utf-8'>
                            <meta name='viewport' content='width=device-width, initial-scale=1'>

                            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We' crossorigin='anonymous'>

                            <title>Question 4</title>
                        </head>
                        <body class='bg-info container-fluid'>
                            <div class='container'>
                                <h1 class='text-center  fst-italic text-success'>Midterm-Mathematical Formula</h1>
                                <div class = 'text-center mt-3 text-white col'>
                                <span class='bg-success'>
                                    <h5 class='text-dark'>Output: $answer</h5>
                                    The area of square formula: A = s^2 <br>
                                    The value of $value1 you entered will be the side of the square 
                                </span>
                            </div>
                            </div>
                            </div>
                            </div>

                            <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj' crossorigin='anonymous'></script>

                        </body>
                        </html>
                        "; 
                    break;
            }
        }
    }
  
}
