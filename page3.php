<?php
  session_start();
  require_once "db.php";
?>
<html>
    <head>
        <title>Мебель для кухни</title>
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
            <h2>Все товары категории "Кухня":</h2>
            <table style="text-align:center;">
                <tr>
                    <td>
                        <div style="max-width: 300px;">
                            <img src="images/кухня1.jpg " width=200 height=200>
                            <p><b>Стол и стулья</b></p>
                        </div>
                    </td>
                    <td>
                        <div style="max-width: 300px;">
                            <img src="images/кухня2.jpg " width=200 height=200>
                            <p><b>Стол и стулья</b></p>
                        </div>
                    </td>
                    <td>
                        <div style="max-width: 300px;">
                            <img src="images/кухня3.jpg " width=200 height=200>
                            <p><b>Стол и стулья</b></p>
                        </div>
                    </td>
                    <td>
                        <div style="max-width: 300px;">
                            <img src="images/кухня6.jpg " width=200 height=200>
                            <p><b>Кухонная гарнитура</b></p>
                        </div>
                    </td>
                    <td>
                        <div style="max-width: 300px;">
                            <img src="images/кухня5.jpg " width=200 height=200>
                            <p><b>Кухонная гарнитура</b></p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="max-width: 300px;">
                            <img src="images/кухня4.jpg " width=200 height=200>
                            <p><b>Кухонная гарнитура</b></p>
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