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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


</head>
<body class="w3-black">
<!-- Page Content -->
<div class="w3-padding-large" id="main">
    <!-- Header/Home -->
    <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
        <h1 class="w3-jumbo">Welcome to</h1>
        <p>I'm yousef Elshrqawe </p>
    </header>

    <!-- END PAGE CONTENT -->
</div>

<div class="w3-padding-large row g-3 align-items-center">
    <form action="{{route('payment')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter the amount</label>
            <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="number" name="amount" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                @error('amount')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div id="emailHelp" class="form-text">It must be a number</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://kit.fontawesome.com/a5f86d6a9f.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

</html>
