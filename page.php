<?php
    session_start();
    require_once "db.php";
    
    $_REQUEST['example']=getInfo($_GET['id']);
    $result = $_REQUEST['example'];
    $id=$result['id'];
    //var_dump($result['image']);
    $image=$result['image'];
?>
<html>
    <head>
        <title>Мебель для спальни</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <style type="text/css">
            #top { float:left; width: 100%; height: 9%; }
            #left { background-color: #D2B48C; float:left; width: 12%; height: 150%; }
            #right { background-color: #F5DEB3; float:left; width: 88%; height: 150%; } 
            #bottom { float:left; width: 100%;}
            
        </style>
        <script type="text/javascript">
        function Button(){
            if(document.getElementById("btn").value=="В корзину")
            {
                document.getElementById("btn").value = "Удалить";
            }
            else{
                document.getElementById("btn").value = "В корзину";  
            }
        }
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
                <br><br><br><br>
                <div align="center">
                    <table>
                        <tr>
                            <td>
                                <img src="<?php echo $image;?>" style="width:300px; height:250px">
                            </td>
                            <td align="center">
                              <form method="post" action="add_to_card.php?id=<?php echo $id;?>">
                                <h4><?php echo $result['name'];?></h4>
                                <p><?php echo $result['section'];?></p>
                                <p><?php echo $result['cost'].' KZT';?></p>
                                
                                <?php if(isset($_SESSION['USER_DATA'])){?>
                                    <input type="hidden" name="id" value="<?php echo $id;?>">
                                    <input type="submit" value="В корзину" id="btn" onclick="Button()">
                                <?php } ?>
                              </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <BR><BR>
            <HR color=#A0522D size=1 width=90% align=center><h3 style="padding: 0px 100px">Отзывы о мебели:</h3>
            <div align="center">
            <?php               
                if(isset($_SESSION['USER_DATA']) || isset($_SESSION['MAIN_DATA']))
                    {
            ?>
        <div class="form-group">
            <textarea name="review" id="review" style="width: 30%; height:8%;border-radius: 3px;" placeholder=" Здесь можете оставить свой отзыв..."></textarea>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo $id;?>">
        </div>
        <button type="submit" id="add_button">Отправить</button>
            <?php
                }
            ?>
        <script>
            $(document).ready(function(){
                updateReviews();
                $("#add_button").click(function(){
                    $.post("review.php", {
                        review: $("#review").val(),
                        post_id: $("#post_id").val()
                    }, function(data){
                        updateReviews();
                    });
                });
            });
            function updateReviews(){
                $.get("loadreviews.php?id=<?php echo $id;?>", {}, function(data){
                    $("#result").html(data);
                });
            }
        </script>
        
        <br><br>
        <div id = "result"></div>
      </div>
    </div>
        <br><br><br>
        <div id="bottom">
            <?php require_once "footer.php"; ?>
        </div>
    </body>
</html>