<?php
  session_start();
  require_once "db.php";
?>
<html>
    <head>
        <title>Наши контакты</title>
        <meta charset="utf-8">
    	<link rel="stylesheet" type="text/css" href="styles.css">
        <script type="text/javascript" src="javascript2.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <style type="text/css">
            #top { float:left; width: 100%; height: 9%; }
            #center { background-color: #F5DEB3; float:left; width: 100%; height: 100%; } 
            #bottom { float:left; width: 100%; }
        </style>
    </head>
    
    <body bgcolor=#FFF8DC text=#8B4513>
<div id="top">
    <?php   
            if(isset($_SESSION['USER_DATA']) || isset($_SESSION['MAIN_DATA']))
                {
                    require_once "header2.php";  
                } 
            else{   
                    require_once "header.php";
                }  
        ?>
</div>
<div id="center">
        <div class="container">
            <b  onMouseOver="tel1(true);" onMouseOut="tel1(false);">Наши контакты:</b><br><br>
            <i id="i1">+7 (707) 910-03-50</i><br>
            <i id="i2">+7 (708) 900-33-05</i><br>
            <i id="i3">+7 (702) 109-30-55</i><br>
            <address id="add" onMouseOver="doEvent(true);" onMouseOut="doEvent(false);">mebel_factury@google.kz</address>
            <br><br>
            <b>Наш адрес:</b><br><br>
            <em>Казахстан, 050005, г. Алматы, пр. Толе би, 271</em>
            <br><br><br>
            <b>Торговые точки:</b><br>
            <tt><h3>ТЦ «Армада», ул.Кабдоллова, 3. Ряд 7, Линия Н</h3></tt>
            <tt><h3>ТЦ «Мерей» ул. Суюнбая, 2, Корпус «Все для дома»</h3></tt>
            <tt><h3>ТЦ «Адэм» корпус "Мир Мебели" Северное Кольцо, 3Б, 3 этаж, слева от эскалатора</h3></tt>
        </div>
</div>
<div id="bottom">
        <?php require_once "footer.php"; ?>
</div>
    </body>
</html>