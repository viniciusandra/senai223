<?php
/**
 * Created by PhpStorm.
 * User: Vinny
 * Date: 25/07/2017
 * Time: 09:11
 */
require('login/session.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Dashboard | Produtora</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/btnico.css">
    <link rel="stylesheet" href="assets/css/custon.min.css">
    <link rel="stylesheet" href="assets/css/geral.css">
</head>

<script type="text/javascript">
    var randomnb = function(){ return Math.round(Math.random()*300)};
</script>

<body>

<!-- menu de navegação -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard | Produtora</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php"><b>INICIO</b> <span class="sr-only">(current)</span></a></li>
                <li><a href="editor.php"><b>EDITOR</b> </a></li>
                <li class="active"><a href="#"><b>GRAFICOS</b> </a></li>
                <li><a href="informaçoes.php"><b>INFORMAÇÕES</b> </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"><b>FUNÇÕES</b> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">usuarios</a></li>
                        <li><a href="choice.php?dummy=bWFwZGF0YQ==">Mapa das barracas</a></li>
                        <li><a href="choice.php?dummy=dGVzdA==">Espositores</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Artistas</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="choice.php?dummy=YWRtaW5fbG9n">Administradores</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Procurar">
                </div>
                <button type="submit" class="btn btn-warning">Submeter</button>
            </form>
            <ul class="nav navbar-nav navbar-right">

                <li role="presentation"><a href="#">Alertas <span class="label label-success">0</span></a></li>
                <li role="presentation"><a href="#">Mensagens <span class="label label-info">0</span></a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Usuario <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Opções</a></li>
                        <li><a href="#">Perfil</a></li>
                        <li><a href="#">ADM</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="login/logout.php">Sair</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- fim do menu de navegação -->

<div class="box">

    <h1>Grafico </h1>
    <small>atualização de grafico dependente da base de dados </small>

    <div class="box-chart">

        <canvas id="GraficoLine" style="width:100%;"></canvas>

        <script type="text/javascript">

            var options = {
                responsive:true
            };

            var data = {
                labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
                datasets: [
                    {
                        label: "Dados primários",
                        fillColor: "rgba(220,220,220,0.2)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: [randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb()]
                    },
                    {
                        label: "Dados secundários",
                        fillColor: "rgba(151,187,205,0.2)",
                        strokeColor: "rgba(151,187,205,1)",
                        pointColor: "rgba(151,187,205,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(151,187,205,1)",
                        data: [28, 48, 40, 19, 86, 27, 90, 200, 87, 20, 50, 20]
                    }
                ]
            };

            window.onload = function(){

                var ctx = document.getElementById("GraficoLine").getContext("2d");
                var LineChart = new Chart(ctx).Line(data, options);
            }
        </script>

    </div>

</div>

<!-- javascript -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/Chart.min.js"></script>
<!-- fim do  javascript -->
</body>
</html>
