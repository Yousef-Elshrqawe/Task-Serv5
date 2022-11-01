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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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

<div class="container">
    <div class="search">
        <input type="search" name="search" id="search"
               placeholder="You can search using :payment_id , amount , currency , payment_status " class="form-control">
    </div>
</div>

<div class="w3-padding-large table-responsive">
    <table class="table " style="color: #f7fafc">
        <thead>
        <tr>
            <th>#</th>
            <th>payment_id</th>
            <th>amount</th>
            <th>currency</th>
            <th>payment_status</th>
            <th>Cureat at</th>
        </tr>
        </thead>
        <tbody class="allData">
        @forelse($Orders as $Order )
            <tr>
                <td>{{$Order->id}}</td>
                <td>{{$Order->payment_id}}</td>
                <td>{{$Order->amount}}</td>
                <td>{{$Order->currency}}</td>
                <td>{{$Order->payment_status}}</td>
                <td>{{$Order->created_at}}</td>
            </tr>
        @empty

            <tr>
                <td colspan="9" class="text-center">No categories found</td>
            </tr>
        @endforelse
        </tbody>
        <tbody id="Content" class="searchData"></tbody>
        <tfoot>
        <tr>
            <td colspan="9">
                <div class="float-right">
                    {{--                    {!! $Order->appends(request()->all())->links() !!}--}}
                </div>
            </td>
        </tr>
        </tfoot>
    </table>
</div>
<script>
    $('#search').on('keyup', function () {
        $value = $(this).val();
        if($value){

            $('.allData').hide();
            $('.searchData').show();
        }
        else {
            $('.allData').show();
            $('.searchData').hide();
        }
        $.ajax({
            type: 'get',
            url: '{{URL::to('search')}}',
            data: {'search': $value},
            success: function (data) {
                $('#Content').html(data);
            }
        });

    })
</script>
<!-- JavaScript Bundle with Popper -->
<script src="https://kit.fontawesome.com/a5f86d6a9f.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>


</body>


</html>
