<?php
  session_start();
  require_once "db.php";
?>
<html>
    <head>
    	<title>Все товары</title>
    	<meta charset="utf-8">
    	<link rel="stylesheet" type="text/css" href="styles.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <style type="text/css">
            
            #top { float:left; width: 100%; height: 9%; }
            #left { background-color: #D2B48C; float:left; width: 12%; height: 160%; }
            #right { background-color: #F5DEB3; float:left; width: 88%; height: 160%; } 
            #bottom { float:left; width: 100%; height: 6%; } 
            
            button:hover {  opacity: 0.8;  }
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
        <div style="padding:10px 70px">
          <h2 style=>Новинки:</h2>
            <div style="column-count: 2;">
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
                    <img src="<?php echo $image;?>" width=300 height=200><br>
                    <p><?php echo $name;?></p>
                    <input type="submit" class="but" value="Посмотреть" style="color:#A0522D">
                  </div>
                </form>
              <?php 
                    }
                }
              ?>
    </div>
                
        </div>
      </div>
    </div>

    <div id="bottom">
        <?php require_once "footer.php"; ?>
    </div>
    
    </body>
</html>