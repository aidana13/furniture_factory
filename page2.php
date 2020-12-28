<?php
  session_start();
  require_once "db.php";
?>
<html>
    <head>
        <title>Мебель для гостинной</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <style type="text/css">
            
            #top { float:left; width: 100%; height: 9%; }
            #left { background-color: #D2B48C; float:left; width: 12%; height: 100%; }
            #right { background-color: #F5DEB3; float:left; width: 88%; height: 100%; } 
            #bottom { float:left; width: 100%; }

            button {
                background-color: #FFFFE0;
                border: none;
                color: white;
                padding: 5px 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                border-radius: 7px;
                }
            button:hover {
                opacity: 0.8;
            }
        </style>
        <script type="text/javascript">
        $(document).ready(function(){
          $("#but1").click(
            function() 
            {
                $("#mydiv1").animate({height:"hide"},300).html("<img src='images/кресло.jpg' width=300 height=200><p><b>Кресло для Гостинной</b></p>").animate({height:"show"},1000);
                $("#mydiv2").animate({height:"hide"},300).html("<img src='images/столик.jpg' width=300 height=200><p><b>Журнальный столик для Гостинной</b></p>").animate({height:"show"},1000);
                $("#mydiv3").animate({height:"hide"},300).html("<img src='images/креслоо.jpg' width=300 height=200><p><b>Кресло для Гостинной</b></p>").animate({height:"show"},1000);

            }
          );
          $("#but2").click(
            function() 
            {
                $("#mydiv1").animate({height:"hide"},300).html("<img src='images/диван.jpg' width=300 height=200><p><b>Диван для Гостинной</b></p>").animate({height:"show"},1000);
                $("#mydiv2").animate({height:"hide"},300).html("<img src='images/жстолик.jpg' width=300 height=200><p><b>Журнальный столик для Гостинной</b></p>").animate({height:"show"},1000);
                $("#mydiv3").animate({height:"hide"},300).html("<img src='images/диванн.jpg' width=300 height=200><p><b>Диван для Гостинной</b></p>").animate({height:"show"},1000);

            }
          );
        });
    </script>
    </head>
    <body bgcolor=#FFF8DC text=#A0522D>
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
<div id="left">
    <div bgcolor=#DEB887 text=white>
        <br><br>
        <ul type="circle" class="menu">
            <li><a href="page1.php">Спальня</a></li><br>
            <li><a href="page2.php">Гостиная</a></li><br>
            <li><a href="page3.php">Кухня</a></li><br>
            <li><a href="page4.php">Детская</a></li><br>
            <li><a href="page5.php">Прихожая</a></li>
        </ul>
    </div>
</div>
<div id="right">
    <div bgcolor=#F5DEB3 text=#A0522D>
        
        <div class="container">
            <h2>Все товары категории "Гостинная":</h2>
            <button id="but1">Следующее</button>
            <button id="but2">Предыдующее</button>
            <table style="text-align:center;">
                <tr>
                    <td>
                        <div id="mydiv1" style="max-width: 300px;">
                            <img src="images/диван.jpg " width=300 height=200>
                            <p><b>Диван для Гостинной</b></p>
                        </div>
                    </td>
                    <td>
                        <div id="mydiv2" style="max-width: 300px;">
                            <img src="images/жстолик.jpg " width=300 height=200>
                            <p><b>Журнальный столик для Гостинной</b></p>
                        </div>
                    </td>
                    <td>
                        <div id="mydiv3" style="max-width: 300px;">
                            <img src="images/диванн.jpg " width=300 height=200>
                            <p><b>Диван для Гостинной</b></p>
                        </div>
                    </td>
                </tr>
            </table>
            <a href="products.php"><h3 style="color:#8B4513;">назад</h3></a>
        </div>
    </div>
</div>
<div id="bottom">
<?php require_once "footer.php"; ?>
</div>
    </body>
</html>