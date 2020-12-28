<?php
  session_start();
  require_once "db.php";
?>
<html>
    <head>
        <title>Мебельная фабрика</title>
        <meta charset="utf-8">
    	<link rel="stylesheet" type="text/css" href="styles.css">
        <script type="text/javascript" src="javascript1.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    </head>
    
    <body bgcolor=#FFF8DC text=#A0522D>
        <?php   
            if(isset($_SESSION['USER_DATA']) || isset($_SESSION['MAIN_DATA']))
                {
                    require_once "header2.php";  
                } 
            else{   
                    require_once "header.php";
                }  
        ?>    
        <div class="image" align=center>
            <img src="images/5.jpg" align=top  width=100% height=700px>
            <h1 class="ban" style="color:#C0C0C0">Мебельная фабрика "Комфорт"</h1>
        </div>

        <div class="container">
            <h2 style="color:#A0522D">Дизайны Интерьера</h2>

            <button id="but1" onclick="F()">HIDE</button><button id="but2">SHOW</button>
            <table style="text-align:center;">
                <tr>
                    <td>
                        <div>
                            <img src="images/гостинная.jpg " class="g" width=300 height=200>
                            <p class="g"><a href="#" style="color:#A0522D"><b>Гостинная</b></a></p>
                        </div>
                    </td>
                    <td>
                        <div>
                            <img src="images/спальня.jpg " class="g" width=300 height=200>
                            <p class="g"><a href="#" style="color:#A0522D"><b>Спальня</b></a></p>
                        </div>
                    </td>
                    <td>
                        <div>
                            <img src="images/кухня.jpg " class="g" width=300 height=200>
                            <p class="g"><a href="#" style="color:#A0522D"><b>Кухня</b></a></p>
                        </div>
                    </td>
                    <td>
                        <div>
                            <img src="images/детская.jpg " class="g" width=300 height=200>
                            <p class="g"><a href="#" style="color:#A0522D"><b>Детская</b></a></p>
                        </div>
                    </td>
                </tr>
            </table>

<br><br>

        <h2>Популярные товары</h2>
        <div style="column-count: 3;">
            <?php    
            $_REQUEST['product']=getProduct();
            $result = $_REQUEST['product']; 

            if($result!=null)
            { 
                foreach($result as $res)
                {
                    $id=$res['id'];
                    $name=$res['name'];
                    $image=$res['image'];
                    ?>
                    <form method="GET" action="page.php">
                        <div align="center">
                            <input type="hidden" name="id" value="<?php echo $id;?>">
                            <img src="<?php echo $image;?>" width=300 height=200>
                            <p><input type="submit" class="but" value="<?php echo $name;?>" style="color:#A0522D"></p>
                        </div>
                    </form>
                    <?php 
                }
            }
            ?>
        </div>
<br><br>
        <HR color=black size=1 width=90% align=center><br>
        <p><b>ТОО «КОМФОРТ»</b> специализируется на производстве корпусной мебели. Компания работает на рынке Казахстана более 20 лет и имеет огромный опыт в производстве и поставке офисной и коммерческой мебели по всем регионам страны, а также жилой мебели для индивидуальных покупателей.</p>
        <p>Изготовление мебели осуществляется на современном оборудовании лучших европейских производителей (Германия, Австрия) с использованием передовых технологий, которые обеспечивают стабильное качество продукции и конкурентоспособные цены. Производственные помещения занимают около 2000 м², что позволило нам технологически обоснованно разместить весь производственный цикл изготовления мебели.</p>
    </div>
        <?php require_once "footer.php"; ?>
    </body>
</html>