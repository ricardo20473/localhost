<html ng-app="pagina">
    <head>
        <link rel="shortcut icon" type="image/png" href="localhost/apache.png">
        <title>localhost</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link rel="stylesheet" type="text/css" href="localhost/bootstrap/css/bootstrap.css"> -->
        <link rel="stylesheet" type="text/css" href="localhost/bootstrap/css/bootstrap-yeti.css">
        <link rel="stylesheet" type="text/css" href="localhost/estilo.css">
        <link rel="stylesheet" type="text/css" href="localhost/font-awesome-4.6.3/css/font-awesome.css">
        
        <script type="text/javascript" src="localhost/js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="localhost/js/angular.js"></script>
        <script type="text/javascript" src="localhost/js/angular-route.js"></script>
        <script type="text/javascript" src="localhost/js/dirPagination.js"></script>
        <script type="text/javascript" src="localhost/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="localhost/controllers/main.js"></script>
        <script type="text/javascript" src="localhost/js/script.js"></script>
    </head>
    
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-2 fondo2">
                        <div class="row">
                            <div class="col-md-12" style="background-color: #444">
                                <center>
                                    <img src='localhost/localhost-white.png'  width='200' >
                                </center>
                            </div>   
                        </div>
                        
                        <center>
                            <form class="form-inline" style="margin-top:20px">
                                <div class="form-group">
                                    <label class="sr-only" for="buscar">Buscar</label>
                                    <div class="input-group">
                                            <input type="text" class="form-control" id="buscar" placeholder="Buscar" data-ng-model="search.$">
                                        <div class="input-group-addon"><i class="fa fa-search"></i></div>
                                    </div>
                                </div>
                            </form>
                        </center>
                    
                        <ul class="nav nav-pills nav-stacked">
                            <!-- <li><a href="#/" class="active" style="background:#ee6e73 !important; color:#fff !important;"><b>Menu</b></a></li> -->
                            <li><a href="#/" class=""> <span class="fa fa-tachometer"></span> <b>Proyectos</b></a></li>
                            <li><a href="localhost/info.php" class="" > <span class="fa fa-info-circle"></span> <b>phpinfo()</b></a></li>
                            <li><a href="phpmyadmin/index.php" class=""> <span class="fa fa-archive"></span> <b>phpmyadmin</b></a></li>
                        </ul>
                    </div>
                    <div class="col-md-10 fondo">
                        <div class="col-md-12" style="background-color: #ee6e73">
                            <center><br/>
                                <h1 style="color:#eee;">Servidor Local <br/></h1>
                            </center>
                        </div>   
                       <div ng-view></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>