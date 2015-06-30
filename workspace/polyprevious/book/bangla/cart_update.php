<?php
session_start();
include_once("connect.php");

//empty cart by distroying current session
if(isset($_GET["emptycart"]) && $_GET["emptycart"]==1)
{
	$return_url = base64_decode($_GET["return_url"]); //return url
	session_destroy();
	header('Location:'.$return_url);
}

//add item in shopping cart
if(isset($_POST["type"]) && $_POST["type"]=='add')
{
	$book_code 	= filter_var($_POST["book_code"], FILTER_SANITIZE_STRING); //product code
	$book_qty 	= filter_var($_POST["book_qty"], FILTER_SANITIZE_NUMBER_INT); //product code
	$return_url 	= base64_decode($_POST["return_url"]); //return url
	
	//limit quantity for single product
	if($book_qty > 100){
		die('<div align="center">This demo does not allowed more than 100 quantity!<br /><a href="http://sanwebe.com/assets/paypal-shopping-cart-integration/">Back To Products</a>.</div>');
	}

	//MySqli query - get details of item from db using product code
	$results = $mysqli->query("SELECT book_name,price FROM products WHERE book_code='$book_code' LIMIT 1");
	$obj = $results->fetch_object();
	
	if ($results) { //we have the product info 
		
		//prepare array for the session variable
		$new_book = array(array('name'=>$obj->book_name, 'code'=>$book_code, 'qty'=>$book_qty, 'price'=>$obj->price));
		
		if(isset($_SESSION["products"])) //if we have the session
		{
			$found = false; //set found item to false
			
			foreach ($_SESSION["products"] as $cart_itm) //loop through session array
			{
				if($cart_itm["code"] == $book_code){ //the item exist in array

					$book[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$book_qty, 'price'=>$cart_itm["price"]);
					$found = true;
				}else{
					//item doesn't exist in the list, just retrive old info and prepare array for session var
					$book[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"]);
				}
			}
			
			if($found == false) //we didn't find item in array
			{
				//add new user item in array
				$_SESSION["products"] = array_merge($book, $new_book);
			}else{
				//found user item in array list, and increased the quantity
				$_SESSION["products"] = $book;
			}
			
		}else{
			//create a new session var if does not exist
			$_SESSION["products"] = $new_book;
		}
		
	}
	
	//redirect back to original page
	header('Location:'.$return_url);
}

//remove item from shopping cart
if(isset($_GET["removep"]) && isset($_GET["return_url"]) && isset($_SESSION["productsa"]))
{
	$book_code 	= $_GET["removep"]; //get the product code to remove
	$return_url 	= base64_decode($_GET["return_url"]); //get return url

	
	foreach ($_SESSION["products"] as $cart_itm) //loop through session array var
	{
		if($cart_itm["code"]!=$book_code){ //item does,t exist in the list
			$book[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"]);
		}
		
		//create a new product list for cart
		$_SESSION["products"] = $book;
	}
	
	//redirect back to original page
	header('Location:'.$return_url);
}
?>