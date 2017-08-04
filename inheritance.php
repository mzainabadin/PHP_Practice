<?php
/**
* This code was written to practice the inheritance
*
*@User class has a protected variable so that it could be accessed from the child class of User.
*
*@userName was not set to private, if set to private could not be accesses from the Admin class. 
*
*
*
*/
//Abstract class containing a abstract method abstfunction()
 abstract class User
{
// protected variable so that it could be accessed in child class
protected $userName;
// method that takes input and set the value of userName
public function setUsername($name)

{
	//It returns the userName affter setting its value to $name
    return $this->userName = $name;

}

//Abstract method initialization
abstract public function abstfunction();

}
//Child class of User class
class Admin extends User
{
	public function hello()
	{
		//return userName, a protected variable of parent class(User)
		return $this->userName;

	}
	//adding functionality in the abstract function initialized in parent class "User".
	public function abstfunction(){
		echo "Abstract function is working";

	}
}
// making an object of Admin class and using methods of its parent class User
$user1 = new Admin;
// setUsername takes $name as argument and sets the @userName to $name
$user1-> setUsername("Sample name");
// Displays the value stored in $userName
echo $user1-> hello();
// Calling abstract method
$user1-> abstfunction();

?>