<?php
// require_once("../Models/creditcard.php");
require_once("../../../../vendor/autoload.php");
// require('../Models/Payment.php');

// $cuurent_date=strtotime($);

// var_dump($cuurent_date);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="padding">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Credit Card</strong>
                        <small>enter your card details</small>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">

                                <form action="./payHandler.php" method="post">
                                    <div class="form-group">



                                        <label for="name">Name</label>
                                        <input class="form-control" id="name" type="text" placeholder="Enter your name">
                                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="ccnumber">Credit Card Number</label>


                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="0000 0000 0000 0000" name="creditNumber">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-credit-card"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="ccmonth">Month</label>
                                <select class="form-control" id="ccmonth" name="expiry-month">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="ccyear">Year</label>
                                <select class="form-control" id="ccyear" name="expiry-year">
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="cvv">CVV/CVC</label>
                                    <input class="form-control" id="cvv" type="text" placeholder="123">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-success float-right" type="submit">
                            <i class="mdi mdi-gamepad-circle"></i> Continue</button>
                        <button class="btn btn-sm btn-danger" type="reset">
                            <i class="mdi mdi-lock-reset"></i> Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>

</body>

</html>