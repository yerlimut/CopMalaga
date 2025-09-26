<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-2.3.4/datatables.min.css" rel="stylesheet" integrity="sha384-R5Azes02wvL9ervyq6xo5WLyg1ufX0qwun0F/0qos0E0wNjnnRTADTQpjpnNLakj" crossorigin="anonymous">


</head>

<body>

    <style>
        body {

            background-color: #fff;
        }

        .iconBack {
            color: #298b29;
            font-size: 25px;
            transition: transform 0.1s ease-in;
        }

        .iconBack:hover {
            color: #50cc50ff;
            transform: scale(1.1);
        }

        label {
            font-weight: bold;
            font-size: 14px;
        }

        .btnActualizar {
            background-color: #298b29;
            color: white;
            padding: 2px 10px;
            border-radius: 14px;
            font-size: 15px;
            text-decoration: none;
            transition: transform 0.1s ease-in;
        }

        .btnActualizar:hover {
            background-color: #50cc50ff;
            transform: scale(1.04);
        }

        .btnEliminar {
            background-color: #b02a37;
            color: white;
            padding: 2px 10px;
            border-radius: 14px;
            border: none;
            font-size: 15px;
            text-decoration: none;
            transition: transform 0.1s ease-in;
        }

        .btnEliminar:hover {
            background-color: #ff5c67ff;
            transform: scale(1.04);
        }

        .crearBtn {
            background-color: #ffd230;
            color: black;

            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
            transition: transform 0.1s ease-in;
        }

        .crearBtn:hover {
            background-color: #ffe791ff;
            color: black;
            transform: scale(1.04);

            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
        }

        .btnCrearMedioPago {
            margin: 10px 0;
            border: none;
            padding: 7px 45px;
            border-radius: 14px;
            color: white;
            transition: transform 0.1s ease-in;
            background-color: #298b29;

        }

        .btnCrearMedioPago:hover {
            background-color: #50cc50ff;
            cursor: pointer;
            transform: scale(1.04);
        }

        h2 {
            font-weight: bold;
            font-size: 22px;
            margin: 20px 0;
        }

        select {
            cursor: pointer;
        }

        .form {
            background-color: #fff;
            padding: 20px;
            border-radius: 20px;
            width: 450px;

        }
    </style>


    @yield('titleContent')

    <div class="container">
        <div class="row">
            @yield('Content')
        </div>
    </div>



    <footer>

    </footer>





<!-- Bootstrap bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- jQuery (necesario para DataTables) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables con integración Bootstrap 5 -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<!-- Para tablas responsivas -->
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">


@yield('js')

</body>

</html>
