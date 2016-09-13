<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="http://faviconist.com/icons/54f8e8f9ce0f77929f1ff72a59fc33c9/favicon.ico" />

    <title>Hotel Pro</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="{{url('/dist/css/dashboard.css')}}" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.css">
    <!--    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css"> -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/tabletools/2.2.3/css/dataTables.tableTools.css">
<!--    <link rel="stylesheet" type="text/css" href="http://www.datatables.net/release-datatables/examples/resources/demo.css"> -->



    <style type="text/css" class="init">


        .toolbar {
            float: right;
        }

        .badge-info {
            background-color: #3a87ad;
        }

    </style>
    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <!-- jQuery DataTables -->
    <script src="http://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap Datatable js -->
    <!--    <script src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js"></script> -->
    <script src="http://cdn.datatables.net/tabletools/2.2.3/js/dataTables.tableTools.min.js"></script>





    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Hotel Pro</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="{{ url('/') }}">Dashboard</a></li>
                <li><a href="{{ url('/hotel_rooms') }}">Hotel Rooms</a></li>
                <li><a href="{{ url('/work_logs') }}">Work Logs</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Settings <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">D Checks</a></li>
                        <li><a href="#">Q Checks</a></li>
                        <li><a href="#">WE Checks</a></li>
                        <li><a href="#">Notes</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="#">Maintenance</a></li>
                <li><a href="{{ url('/rentals') }}">Rentals <span class="badge badge-info">{{$rental_count}}</span></a></li>
                <li><a href="{{ url('/freezers') }}">Freezers <span class="badge badge-info">{{$freezer_count}}</span></a></li>
                <li><a href="#">Laundry</a></li>
                <li><a href="#">Inventory</a></li>
                <li><a href="{{ url('/vendors') }}">Vendors</a></li>
                <li><a href="#">Staffs</a></li>
                <li><a href="{{ url('/todos') }}">ToDo <span class="badge badge-info">{{$todo_count}}</span></a></li>
                <li><a href="{{ url('/problems') }}">Problems <span class="badge badge-info">{{$problem_count}}</span></a></li>
                <li><a href="{{ url('/complains') }}">Complains <span class="badge badge-info">{{$complain_count}}</span></a></li>
                <li><a href="#">SOPs</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

            @yield('content')

        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- jquery source -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->

<!-- bootstrap js source -->
<!-- <script src="js/bootstrap.min.js"></script>-->

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
</body>
</html>
