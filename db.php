<?php
	
	$conn = new PDO('mysql:host=localhost;dbname=webclass','root','');
	function getUser($email)
	{
		global $conn;
		$query = $conn->prepare("SELECT * FROM users WHERE email = :email");
		$query->execute(array("email"=>$email));
		$result = $query->fetch();
		return $result;
	}
	function getMain($email)
    {
    	global $conn;
		$query = $conn->prepare("SELECT * FROM main_user WHERE email = :email");
		$query->execute(array("email"=>$email));
		$result = $query->fetch();
		return $result;
    }
	function addUser($email, $password, $name, $surname, $fname, $city)
	{
		global $conn;
		$sql = "
            INSERT INTO users (email, password)
            VALUES (:email, :password)
        ";
        
        $query = $conn->prepare($sql);
        $query->execute([
            'email'=>$email,
            'password'=>$password,
        ]);
         
        $sql1 = "
            INSERT INTO user_data (user_id, name,surname,fname,city)
            VALUES (:user_id, :name,:surname,:fname,:city)
        ";
        $query = $conn->prepare($sql1);
        $query->execute([
        'user_id'=>$conn->lastInsertId(),
        'name'=>$name,
        'surname'=>$surname,
        'fname'=>$fname,
        'city'=>$city,
        ]);
	}
	function getUserData($user_id)
	{
		global $conn;
		$query = $conn->prepare("SELECT * FROM user_data WHERE user_id = :user_id");
		$query->execute(array("user_id"=>$user_id));
		$result = $query->fetch();
		return $result;
	}
	function updateData($user_id,$name,$surname,$fname,$city)
	{
        global $conn;
		$query = $conn->prepare("UPDATE user_data SET name = :name, surname = :surname, fname=:fname, city=:city 
           WHERE user_id = :user_id
        ");
        $query->execute([
            'user_id'=>$user_id,
            'name' => $name,
            'surname' => $surname,
            'fname' => $fname,
            'city' => $city,
        ]);
	}
	function getProduct()
    {
    	global $conn;
		$query = $conn->prepare("SELECT * FROM products");
		$query->execute();
		$result = $query->fetchAll();
		return $result;
    }
    function addProduct($name, $section, $cost, $image){
		global $conn;
		$query = $conn->prepare("
				INSERT INTO products (id, name, section, cost, image) 
				VALUES (NULL, :name, :section, :cost, :image)
		");
		$query->execute([
			'name'=>$name, 
			'section'=>$section, 
			'cost'=>$cost,
			'image'=>$image,
		]);
	}
    function getInfo($id)
    {
        global $conn;
		$query = $conn->prepare("SELECT * FROM products WHERE id = :id");  
        $query->execute(["id"=>$id]);
        $result = $query->fetch();
        return $result;
    }
    function getCard($user_id, $product_id)
	{
		global $conn;
		$query = $conn->prepare("SELECT * FROM add_to_cart WHERE user_id=:user_id AND product_id = :product_id");
		$query->execute([
			'user_id' =>$user_id,
			'product_id'=>$product_id,
		]);
		$result = $query->fetch();
		return $result;
	}
	function getCards($user_id)
	{
		global $conn;
		$sql = "
		    SELECT add_to_cart.id, add_to_cart.user_id, add_to_cart.product_id, products.name as product_name, products.section as product_section, products.cost as product_cost, products.image as product_image  
		    FROM add_to_cart
		    LEFT OUTER JOIN products ON products.id = add_to_cart.product_id 
		    WHERE add_to_cart.user_id = :user_id  
		";
		$query = $conn->prepare($sql);
		$query->execute([
			'user_id'=>$_SESSION['USER_DATA']['id'],
		]);
		$result = $query->fetchAll();
		return $result;
	}
	function addCard($user_id, $product_id)
	{
		global $conn;
		$query = $conn->prepare("
			INSERT INTO add_to_cart (user_id, product_id) 
			VALUES (:user_id, :product_id)
		");
        
		$query->execute([
			'user_id'=>$user_id,
            'product_id'=>$product_id,
		]);	
	}
	function delCard($user_id, $product_id)
	{
		global $conn;
		$query = $conn->prepare("
			DELETE FROM add_to_cart WHERE product_id = :product_id AND user_id = :user_id
		");
        $query->execute([ 
        	'user_id' => $user_id,
        	'product_id' => $product_id, 
        ]);	
	}

    function getReviews()
    {
    	global $conn;
    	$sql = "
    	    SELECT reviews.id, reviews.user_id, reviews.post_id, reviews.review, reviews.post_date, user_data.name as user_name, user_data.surname as user_surname FROM reviews 
    	    LEFT OUTER JOIN user_data ON user_data.user_id=reviews.user_id
    	";
    	$query = $conn->prepare($sql);
    	$query->execute();
    	$result = $query->fetchAll();
    	return $result;
    }
	function addReview($user_id, $post_id, $review)
	{
		global $conn;
		$query = $conn->prepare("
			INSERT INTO reviews (id, user_id, post_id, review, post_date) 
			VALUES (NULL, :user_id, :post_id, :review, NOW())
		");
        
		$query->execute([
			"user_id"=>$user_id,
			"post_id"=>$post_id, 
			"review"=>$review,
		]);	
	}
?>