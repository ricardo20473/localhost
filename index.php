<html ng-app="pagina">
    <head>
        <link rel="shortcut icon" type="image/png" href="localhost/apache.png">
        <title>localhost</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="localhost/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="localhost/estilo.css">
        <link rel="stylesheet" type="text/css" href="localhost/font-awesome-4.6.3/css/font-awesome.css">
        
        <script type="text/javascript" src="localhost/js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="localhost/js/angular.js"></script>
        <script type="text/javascript" src="localhost/js/angular-route.js"></script>
        <script type="text/javascript" src="localhost/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="localhost/controllers/main.js"></script>
        <script type="text/javascript" src="localhost/js/script.js"></script>
    </head>
    
    <body>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12" style="background-color: #222">
                    <img src='localhost/localhost-white.png'  width='200' align="left">
                    <center><br/>
                        <h1 style="color:#eee;">Servidor LampServer <br/><small>(Linux)</small></h1>
                    </center>
                </div>   
           </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-2 fondo2">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#/" class="active" style="background:#337ab7 !important"><b>Menu</b></a></li>
                            <li><a href="#/" class="borde"> <span class="fa fa-tachometer"></span> <b>Proyectos</b></a></li>
                            <li><a href="localhost/info.php" class="" > <span class="fa fa-info-circle"></span> <b>phpinfo()</b></a></li>
                            <li><a href="phpmyadmin/index.php" class=""> <span class="fa fa-archive"></span> <b>phpmyadmin</b></a></li>
                            <li><a href="#/buscar" class=""> <span class="fa fa-search-plus"></span> <b>Buscar</b></a></li>
                        </ul>
                    </div>
                    <div class="col-md-10 fondo">
                       <div ng-view></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>