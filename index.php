<html ng-app="pagina">
    <head>
        <link rel="shortcut icon" type="image/png" href="localhost/lamp.png">
		<title>localhost</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="localhost/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="localhost/estilo.css">
        
        <script type="text/javascript" src="localhost/js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="localhost/js/angular.js"></script>
        <script type="text/javascript" src="localhost/js/angular-route.js"></script>
		<script type="text/javascript" src="localhost/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="localhost/controllers/main.js"></script>
    </head>
    
    <body>
        <div class="container-fluid margin">
           <div class="row ">
                <div class="col-md-12" style="background-color: #222">
                    <img src='localhost/localhost-white.png'  width='200' align="left">
                    <center><br/>
                        <h1 style="color:#eee;">Servidor LampServer <br/><small>(Linux)</small></h1>
                    </center>
                </div>   
           </div>
           <div class='linea'></div>
           <div class="row">
               <div class="col-md-2 fondo2">
                    <div class="list-group borde">
                        <a href="#" class="list-group-item active borde"><b>Menu</b></a>
                        <a href="localhost/info.php" class="list-group-item borde"><img src='localhost/llave.png' width='20'> <b>phpinfo()</b></a>
                        <a href="phpmyadmin/index.php" class="list-group-item borde"><img src='localhost/llave.png' width='20'> <b>phpmyadmin</b></a>
                        <a href="#/" class="list-group-item borde"><img src='localhost/gear_24.png' height="24" width='24'> <b>Proyectos</b></a>
                        <a href="#/buscar" class="list-group-item borde"><img src='localhost/lupa.png' height="27" width='27'> <b>Buscar</b></a>
                    </div>
                </div>

                <div class="col-md-10 fondo">
                     <div ng-view></div>
                </div>
           </div>
        </div>
    </body>
</html>