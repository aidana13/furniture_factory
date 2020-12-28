<?php
    session_start();
    require_once "db.php";
    
    $_REQUEST['review']=getReviews();
    $result = $_REQUEST['review']; 

    if($result!=null)
    { 
        foreach($result as $review)
        {
            if($review['post_id']==$_GET['id'] && isset($review['user_name']))
            {
                $id = $review['id'];
                echo "<div style='width:400px;height:50px;border:1px solid gray;background-color: white; color:black;padding:20px 10px;border-radius: 7px;' align=center>"."<input type='hidden' name='id' value='<?php echo $id;?>'>".$review['review']."<HR color=gray size=1 width=90% align=center>"."<i>".$review['post_date']."  -  ".$review['user_name'].$review['user_surname']."</i>"."</div>"."<br>";
            }
        }
    }
?>