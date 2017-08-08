<?php
/**
* This code Displays hello message with user firstname
*
* This code was a practice for class and objects. Also exploring the use 
* of $this to use class variables in the method of same class.
* 
*/

class User
{
	//Public variables to store first and last name strings
	public $firstname; 
	public $lastname;
	 /**
    *@param takes no parameter
    *@return hello and firstname provided by user 
    */
	public function hello()
	{
		return "hello " . $this -> $firstname;
	}

	
}


// Creating object of User class as user1
$user1 = new User();

// Passing strings to the variables of user1 object
$user1 -> $firstname = "Muhammad";
$user1 -> $lastname = "zain";

// printing using hello function of user class
echo $user1 -> hello();

?>