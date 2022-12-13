<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:index.php');
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="news.css">
    <title>News Website</title>
</head>

<body class="m-0 p-0">

    <div class="container-fluid m-0 p-0">

        <!-- navbar -->
        <?php require 'partial/_nav.php'?>
        <!-- News  -->
        <div>
            <div class="row m-3" id="newsType"></div>
            <div class="row me-2 ms-2" id="newsdetails"></div>
        </div>

        <!-- footer -->
        <div class="mt-5">
            <div>
                <nav class="navbar navbar-expand-lg navbar-dark bg-secondary mt-4 navbar1">
                  <div class="container-fluid m-0 p-0">
                    <h5 class="text-black me-auto ms-auto fw-bold sitetextcolor">Simple News</h5>
                  </div>
                </nav>
              </div>
        </div>

    </div>


    <script src="news.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>