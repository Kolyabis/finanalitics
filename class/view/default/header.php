<!DOCTYPE html>
<!--<html lang="ru">-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fin</title>
    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/template.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- ************************************** Top bar navigation ************************************************ -->
<div class="container">
    <div class="row login-bar">
        <div class="col-lg-8 col-md-8 col-sm-6"></div>
        <div class="col-lg-4 col-md-4 col-sm-6 center-block text-center">
            <?php
                $cnt = count($params['lang']);
                $cnt = $cnt - 1;
                for($i = 0; $i <= $cnt; $i++){
                    echo $params['lang'][$i];
                }
            ?>
            <button type="button" class="btn btn-link btn-sm" data-toggle="modal" data-target="#sendModal"><span class="glyphicon glyphicon-envelope"></span></button>
        </div>
    </div>
    <!-- ************************************** Top bar navigation ************************************************ -->
    <?php
    $debug = new DebugSystem();
    //print_r($_SERVER['REQUEST_URI']);
    //$debug->debug($params['lang']);
        //print_r($params);
        //print_r($post);
    ?>
    <!-- ************************************** Logo and menu ***************************************************** -->
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 logo"></div>
        <div class="col-lg-8 col-md-6 col-sm-6 center-block text-center">
            <div class="navbar navbar-default" >
                <div class="container" id="box-menu">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                            <span class="sr-only">navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="responsive-menu">

                        <?php $this->view_menu($params['mainmenu']); ?>

                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/index">О компании</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="/customers">Клиентам <b class="caret"></b></a>
                                <ul class="dropdown-menu ">
                                    <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#">Действие</a>
                                        <ul class="dropdown-menu">
                                            <li><a tabindex="-1" href="#">Second level</a></li>
                                            <li class="dropdown-submenu">
                                                <a href="#">Even More..</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">3rd level</a></li>
                                                    <li><a href="#">3rd level</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Second level</a></li>
                                            <li><a href="#">Second level</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Другое действие</a></li>
                                    <li><a href="#">Что-то еще</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Отдельная ссылка</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Еще одна отдельная ссылка</a></li>
                                </ul>
                            </li>
                            <li><a href="/useful">Полезное</a></li>
                            <li><a href="/news">Новости</a></li>
                            <li><a href="/partner">Партнерам</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ************************************** Logo and menu ***************************************************** -->
<!-- ************************************** Слайдер начало *****************************************************-->
<div class="container-fluid max-width">
    <div class="row">
        <div id="carousel" class="carousel slide">
            <!--Индикаторы-->
            <ol class="carousel-indicators">
                <li class="active" data-target="#carousel" data-slide-to="0"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="container">
                <div class="row" style="height: 294px;">
                    <!--Слайды-->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="/images/123_1.png" alt="">
                            <div class="carousel-caption">
                                <h3 style="color: #000;">Первый слайд</h3>
                                <p style="color: #000;">Описание первого слайда</p>
                                <button type="button" class="btn btn-default-content btn-sm">Подробней...</button>
                            </div>
                        </div>
                        <div class="item">
                            <img src="/images/123_2.png" alt="">
                            <div class="carousel-caption">
                                <h3 style="color: #000;">Второй слайд</h3>
                                <p style="color: #000;">Описание второго слайда</p>
                                <button type="button" class="btn btn-default-content btn-sm">Подробней...</button>
                            </div>
                        </div>
                        <div class="item">
                            <img src="/images/uvelcelauditorii.png" alt="">
                            <div class="carousel-caption">
                                <h3 style="color: #000;">Третий слайд</h3>
                                <p style="color: #000;">Описание третьего слайда</p>
                                <button type="button" class="btn btn-default-content btn-sm">Подробней...</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--стрелки переключения слайдов-->
            <a href="#carousel" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a href="#carousel" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
</div>
<!-- ***************************************** Слайдер КОНЕЦ **********************************************-->