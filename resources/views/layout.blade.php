<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="/">Admin ASD </a>
                        <div class="span9">
                            <div class="module">
                                <div class="module-head">
                                    <form action="/search" method="POST" role="search">
                                        {{ csrf_field() }}
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="q"
                                                placeholder="Numar Masina"> <span class="input-group-btn">
                                                <button type="submit" class="btn btn-default">Cautare</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>       
                        </div>
    
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">

                                <li class="active"><a href="Car"><i class="menu-icon icon-paste"></i>Preluare Masina </a></li>
                                <li class="active"><a href="Detalii"><i class="menu-icon icon-table"></i>Detalii </a></li>
                                <li class="active"><a href="Part"><i class="menu-icon icon-inbox"></i>Stoc Piese </a></li>
                
                            </ul>

                            <!--/.widget-nav--> 
                        </div>
                    <!--/.span9-->
                </div>
                @yield('content')
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2020 Admin ASD </b>All rights reserved.
            </div>
        </div>

      
    </body>

    <script src="{{asset('js/app.js')}}"></script>

    <script>

  
        $('#edit').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget) 
            var ticodtle = button.data('cod') 
            var denumire = button.data('denumire') 
            var cantitate = button.data('cantitate') 
            var modal = $(this)

            modal.find('.modal-body #cod').val(cod);
            modal.find('.modal-body #denumire').val(denumire);
            modal.find('.modal-body #cantitate').val(cantitate);
            })

    </script>



</head>
</html>
