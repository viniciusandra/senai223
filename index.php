<?php
/**
 * Created by PhpStorm.
 * User: Vinny
 * Date: 23/08/2017
 * Time: 14:45
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Produtora independente</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/icons/favicon.ico"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <link href="assets/css/sequence-theme.basic.css" rel="stylesheet"/>
    <link href="assets/css/menu.css" rel="stylesheet"/>
    <link href="assets/css/clock.css" rel="stylesheet"/>
    <link href="assets/css/deferenciais.css" rel="stylesheet"/>
    <link href="assets/css/footer.css" rel="stylesheet"/>
    <link href="assets/css/produzimos.css" rel="stylesheet"/>
    <link href="assets/css/voltartopo.css" rel="stylesheet"/>
    <link href="assets/css/botoes.css" rel="stylesheet"/>
</head>

<body>
<!-- INICIO DO DOCUMENTO -->
<!-- ########### -->
<!-- INICIO ARROW -->
<a href="#clock" class="arrow bounce" >
    <i  aria-hidden="true"></i></a>
<!-- FINAL ARROW -->
<!-- ########### -->
<!-- INICIO MENU TOTAL -->
<div id="cormenu2">
    <div id="menu" class="menu">
        <!-- INICIO MENU 1-->
        <header>
            <div id="menu1" class="menu1">
                <div class="container">
                    <nav>
                        <ul>
                            <a href="#">
                                <div id="phone"></div>
                            </a>
                            <a class="spmenu">+55 21 9999-9999</a>
                            <a href="#">
                                <div id="email"></div>
                            </a>
                            <a class="spmenu">contato@produtoraindependente.com</a>
                            <a target="_blank" href="https://www.facebook.com/independentedequalquercoisa/">
                                <div id="face"></div>
                            </a>
                            <a target="_blank" href="https://www.instagram.com/feiraindependente/">
                                <div id="insta"></div>
                            </a>
                            <a target="_blank" href="https://www.youtube.com/channel/UCrzPAIve0LINQWEvKa_6JkQ">
                                <div id="tube"></div>
                            </a>
                        </ul>
                        <div id="logo"></div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- FIM DO MENU 2 -->
        <!-- ########### -->
        <!-- INICIO MENU 2 -->
        <header>
            <div id="menu2" class="menu2">
                <div class="container">
                    <nav>
                        <ul>
                            <a id="active" class="active spmenu2" href="#"><b>INÍCIO</b></a>
                            <a class="link spmenu2" href="#"><b>EVENTOS</b></a>
                            <a class="link spmenu2" href="#"><b>EXPOSITORES</b></a>
                            <a class="link spmenu2" href="#"><b>ARTISTAS</b></a>
                            <a class="link spmenu2" href="#"><b>EQUIPE</b></a>
                            <a class="link spmenu2" href="#"><b>SOBRE</b></a>
                            <a class="link spmenu2" href="#"><b>CONTATO</b></a>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
    </div>
    <!-- FIM MENU 2 -->
    <!-- ########### -->
    <!-- INICIO MENU HAMBURGUER -->
    <div>
        <header>
            <input type="checkbox" id="control-nav"/>
            <label for="control-nav" class="control-nav"></label>
            <label for="control-nav" class="control-nav-close"></label>
            <nav class="float-r">
                <ul class="list-auto"></ul>
            </nav>
        </header>
    </div>
</div>
<!-- FIM DO MENU TOTAL -->
<!-- ########### -->
<!-- INICIO DO BANNER -->
<div id="sequence" class="seq">
    <div class="seq-screen">
        <ul class="seq-canvas">
            <li class="seq-step1" id="step1">
                <div class="seq-content">
                    <h2 data-seq class="seq-title">PRODUTORA INDEPENDENTE</h2>
                    <h3 data-seq class="seq-subtitle">"Não organizamos um simples evento, mais sim mudamos vidas e
                        criamos historias!"</h3>
                    <div class="button2">
                        <p class="clik"><b>SAIBA MAIS</b></p>
                        <div class="hoveur"></div>
                    </div>
                </div>
            </li>
            <li class="seq-step2" id="step2">
                <div class="seq-content">
                    <h2 data-seq class="seq-title">PRODUTORA INDEPENDENTE</h2>
                    <h3 data-seq class="seq-subtitle">"Não organizamos um simples evento, mais sim mudamos vidas e
                        criamos historias!"<br/></h3>
                    <div class="button2">
                        <p class="clik">SAIBA MAIS</p>
                        <div class="hoveur"></div>
                    </div>
                </div>
            </li>
            <li class="seq-step3" id="step3">
                <div class="seq-content">
                    <h2 data-seq class="seq-title">PRODUTORA INDEPENDENTE</h2>
                    <h3 data-seq class="seq-subtitle">"Não organizamos um simples evento, mais sim mudamos vidas e
                        criamos historias!"</h3>
                    <div class="button2">
                        <p class="clik">SAIBA MAIS</p>
                        <div class="hoveur"></div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div id="anchor">
        <ul rel="sequence" class="seq-pagination" aria-label="Pagination">
            <li><a class="ex" href="#step1" rel="step1" title="Go to slide 1">FIQC 1</a></li>
            <li><a class="btseq" href="#step2" rel="step2" title="Go to slide 2">FIQC 2</a></li>
            <li><a class="btseq" href="#step3" rel="step3" title="Go to slide 3">FIQC 3</a></li>
        </ul>
    </div>
</div>
<!-- FIM DO BANNER -->
<!-- ########### -->
<!-- RELOGIO -->
<div id="clock">
    <center>
        <a class="data">13/08/2017</a><a class="proxima"> - </a><a class="proxima">PROXIMA EDIÇÃO DA FEIRA INDEPENDENTE
            DE QUALQUER COISA </a>
    </center>
    <div id="counter"></div>
    <center>
        <div><a class="alertclock">dias</a>
            <a class="alertclock2"> horas</a>
            <a class="alertclock3"> minutos</a>
            <a class="alertclock4">segundos</a>
        </div>
    </center>
    <center>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <div class="button2">
            <p class="clik">SAIBA MAIS</p>
            <div class="hoveur"></div>
        </div>
    </center>
</div>
<!-- FIM DO RELOGIO -->
<!-- ########### -->
<!-- O QUE JÁ PRODUZIMOS -->
<div class="tudo">
    <div class="accordian">
        <ul>
            <li>
                <div class="image_title">
                    <a class="seq_acordian_1" href="#"></a>
                </div>
                <a href="#">
                    <div id="img1"></div>
                </a>
            </li>
            <li>
                <div class="image_title">
                    <a class="seq_acordian_1" href="#"></a>
                </div>
                <a href="#">
                    <div id="img2"></div>
                </a>
            </li>
            <li>
                <div class="image_title">
                    <a class="seq_acordian_1" href="#"></a>
                </div>
                <a href="#">
                    <div id="img3"></div>
                </a>
            </li>
            <li>
                <div class="image_title">
                    <a class="seq_acordian_1" href="#"></a>
                </div>
                <a href="#">
                    <div id="img4"></div>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- fim O QUE JÁ PRODUZIMOS -->
<!-- ########### -->
<!-- VOCÊ SABIA? -->
<div class="tudo2">
    <div id="sabia">
        <center>
            <div class="titulo_sabia">
                <a>PRODUTORA INDEPENDENTE DE QUALQUER COISA</a>
            </div>
        </center>
    </div>
</div>
<!-- fim VOCÊ SABIA? -->
<!-- ########### -->
<!-- DEPOIMENTOS -->
<div class="tudo3">
    <div id="depoimentos">
    </div>
</div>
<!-- fim DEPOIMENTOS -->
<!-- ########### -->
<!-- CULTURA -->
<div class="tudo4">
    <div id="cultura">
    </div>
</div>
<!-- fim CULTURA -->
<!-- ########### -->
<!-- INICIO FOOTER -->
<div id="footergeral">
    <footer class="footer1">
        <ul>
            <li><span class="me"></span></li>
            <li><a>INICIO</a></li>
            <li><a>EVENTOS</a></li>
            <li><a>EXPOSITORES</a></li>
            <li><a>ARTISTAS</a></li>
            <li><a>EQUIPE</a></li>
            <li><a>SOBRE</a></li>
            <li><a>CONTATO</a></li>
        </ul>
    </footer>
    <footer class="footer2">Copyright © 2017 - Todos os direitos reservados</footer>
</div>
<!-- FIM FOOTER -->
<!-- ########### -->
<!-- INICIO DOS SCRIPTS -->
<script type="text/javascript" src="assets/js/clock.js"></script>
<script src="assets/js/sequence.min.js"></script>
<script src="assets/js/sequence-theme.basic.js"></script>
<script src="assets/js/poduzimos.js"></script>
<script src="assets/js/voltartopo.js"></script>
<!-- FIM DOS SCRIPTS -->
<!-- ########### -->
<!-- FIM DO DOCUMENTO -->
</body>
</html>
