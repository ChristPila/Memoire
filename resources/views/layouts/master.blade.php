<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Memoire</title>

        <link rel="stylesheet" href="{{mix("css/app.css")}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <x-topnav/>


        <aside class="main-sidebar sidebar-dark-danger elevation-4" style="background-color: #023047">

            <a href="index3.html" class="brand-link">
                <img src="{{asset("images/isptkin.jpeg")}}" alt="ISPT Logo" class="brand-image img-circle elevation-2" style="opacity: .7">
                <span class="brand-text font-weight-light ml-2">ISPT-KIN</span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset("images/secretaire.png")}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block ellipsis">Secrétaire du jury</a>
                    </div>
                </div>

                <x-menu/>

            </div>

        </aside>

        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            @yield("contenu")
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <aside class="control-sidebar control-sidebar-dark" style="background-color: #023047">
            <x-sidebar/>
        </aside>


        <footer class="main-footer">

            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>

            <strong>Copyright &copy; 2021-2022 <a href="#">CP</a>.</strong> All rights
            reserved.
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{mix("js/app.js")}}"></script>

</body>

</html>