<!DOCTYPE html>
<html>
<head>
    <title>Task Serv5</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


</head>
<body class="w3-black">
<!-- Page Content -->
<div class="w3-padding-large" id="main">
    <!-- Header/Home -->
    <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
        <h1 class="w3-jumbo">Welcome to</h1>
        <p>I'm yousef Elshrqawe </p>


        <a href="{{route('paymentPage')}}" class="btn btn-warning">
            <i class="fa-brands fa-paypal" style="color: #27346a"></i>
            <span class="text">payment page</span>
        </a>
        <a href="{{route('paymentOrders')}}" class="btn btn-primary">
            <i class="fa-solid fa-bars"></i>
            <span class="text">payment Table</span>
        </a>
        <a href="{{route('autocomplete')}}" class="btn btn-success">
            <i class="fa-solid fa-magnifying-glass"></i>
            <span class="text"> Autocomplete </span>
        </a>
    </header>

    <!-- END PAGE CONTENT -->
</div>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://kit.fontawesome.com/a5f86d6a9f.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>
