<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="Description" content="<?=$description;?>">
<meta name="Keywords" content="<?=$keywords;?>">
<meta content="ru_ru" property="og:locale">
    <title><?php echo $title;?></title>
    <?php   
        if(isset($css)) {
            foreach($css as $item)
            {
                echo '<link rel="stylesheet" href=" '.base_url().$item.' " type="text/css">';
            }
        }
    ?>
    <?php   
        if(isset($js)) {
            foreach($js as $item)
            {
                echo '<script rel="stylesheet" src=" '.base_url().$item.' " type="text/javascript"></script>';
            }
        }
    ?>
</head>
<body>
    
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
             <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
             </a>

            <a class="brand" href="<?php echo base_url();?>">Галерея</a>
            <div class="nav-collapse">
                <ul class="nav"></ul>
                <ul class="nav pull-right">
                    <li class="divider-vertical"></li>
                    <li><a  href="" id="aboutAutor" href="model" data-toggle="modal" data-target="#myModal" >О авторе</a></li>
                    <li class="divider-vertical"></li>
                    <li><a  href="<?php echo base_url();?>contact" >Контакты</a></li>
                    <li class="divider-vertical"></li>
                    <li><a  href="<?php echo base_url();?>order">Заказать картину</a></li>
                </ul>
            </div>
        </div>
    </div>

<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Приветствую!</h3>
    </div>
    <div class="modal-body">
        <p>Привет дорогой пользователь!</p>
        <p>Меня зовут Анна Вульфсон, я рисую картины на заказ.</p>
        <p>Кликнув закрыть ты увидиш примеры моих работ. </p> 
        <p>Кликнув на пункт меню "Контакты" - увидиш как со мной связаться.</p>
        <p>Кликнув на пункт меню "Заказать картину" - форму заказа картин.</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Закрыть</button>
    </div>
</div>