
<?php
// Creating User class
class User
{

	//Public variables to store first and last name strings
	public $firstname; 
	public $lastname;
	// Function that uses firstname of same class and returns helo firstname of user
	public function hello()
	{
	    return "hello " . $this -> firstname;

	}
}

// Creating object of User class as user1
$user1 = new User();

// Passing strings to the variables of user1 object
$user1 -> firstname = "Muhammad";
$user1 -> lastname = "zain";

// printing using hello function of user class
echo $user1 -> hello();

?>