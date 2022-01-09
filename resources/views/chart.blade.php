<?php
/**
 * @author selcukmart
 * 7.01.2022
 * 15:48
 */
?><!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/assets/bitcoin-price/BitcoinPrice.js"></script>
    <script src="js/assets/bitcoin-price/BitcoinPriceFromPHPBackend.js"></script>
    <script src="js/assets/bitcoin-price/DatePicker.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Bitcoin Price</title>
</head>
<body>
<main class="container">
    <div class="bg-light p-5 rounded mt-3">
        <h1>Bitcoin Price</h1>
        <div style="margin-top: 15px;">
            <div class="row">
                <div class="col">
                    <input  class="form-control" type="text" class="" id="start-date" value="{{ $first_date }}">
                </div>
                <div class="col">
                    <input class="form-control" type="text" class="" id="finish-date" value="{{ $last_date }}">
                </div>
                <div class="col"><input id="myChartRender" type="button" value="Render" class="btn btn-secondary"></div>
            </div>
            <canvas id="myChart"></canvas>
        </div>
    </div>
</main>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
<script src="js/assets/bitcoin-price/bitcoin-price.js"></script>
</body>
</html>
