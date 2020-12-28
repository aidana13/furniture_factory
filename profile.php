<?php
  session_start();
  require_once "db.php";
?>
<html>
    <head>
        <title>Мебельная фабрика</title>
        <meta charset="utf-8">
    	<link rel="stylesheet" type="text/css" href="styles.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <style type="text/css">
            .card {
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                width: 80%;
                height: 40%;
            }
            .card:hover {
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }
        </style>
    </head>
    
<body bgcolor=#FFF8DC text=#A0522D>
    <?php   
            require_once "header2.php";   
    ?>
        <br><br><br>      
    <div class="container">  
        <?php 
            if(isset($_SESSION['MAIN_DATA']) && !empty($_SESSION['MAIN_DATA']))
                {
        ?>
        <h3>Страница разработчика</h3>
          <form action="product.php" method="POST" enctype="multipart/form-data">
                  <h4>Добавьте новую мебель</h4>
                    <label for="title">Название</label><br>
                    <input type="text" name="name"><br>
                    <label for="content">Раздел товара</label><br>
                    <input type="text" name="section"><br>
                    <label for="content">Стоимость</label><br>
                    <input type="number" name="cost"><br>
                    <label for="author">Фото</label><br>
                    <input type="file" name="image"><br>
                    <input type="submit" value="Добавить">
          </form>
        <?php 
    }
    else{
        $_REQUEST['user_data']=getUserData($_SESSION['USER_DATA']['id']);
        $result = $_REQUEST['user_data'];
        $id=$result['user_id'];
        //$result = $_SESSION['USER_DATA'];
    ?>
    <h2>Страница пользователя</h2>
    <h3><?php echo $result['surname']." ".$result['name']." ".$result['fname'];?></h3>
    <h4><?php echo "Город: ".$result['city'];?></h4>
      <br>
        <a href="update.php?id=<?php echo $id;?>">Редактировать</a><br>
        <a href="delete.php?id=<?php echo $id;?>">Удалить</a>  
<br>
<p>Товары в корзине:</p><br>
<div style="column-count: 3;">
<?php
    $_REQUEST['card']=getCards($_SESSION['USER_DATA']['id']);
    $cards = $_REQUEST['card'];
    foreach($cards as $card)
    {   
       $id = $card['product_id'];
       $image=$card['product_image'];
  ?>
    <form method="GET" action="page.php">
        <div class="card" align="center">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <img src="<?php echo $image;?>" width="80%" height="80%">
            <br>
                <?php echo $card['product_name'];?><br>
            <input type="submit" value="Посмотреть">
        </div>
    </form>
<?php
    }
} 
?>
</div>
<br>
    <button type="submit"><a href="logout.php">ВЫЙТИ</a></button>
    <br><br><br><br><br>
    </div>
        <?php require_once "footer.php"; ?>
    </body>
</html>