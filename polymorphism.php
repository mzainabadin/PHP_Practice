<?php

/**
*Abstract class containing a abstract method abstfunction()
*/
 abstract class User
{
// protected variable so that it could be accessed in child class
protected $userName;

/**
* method that takes input and set the value of userName
* 
*@param $name is passed to the method to set userName
*@return object after assigning $name value to $userName
*/

public function setUsername($name)

{
	//It returns the userName affter setting its value to $name
    return $this->userName = $name;

}

/**
* Abstract function. No arguments no return type. Implememtation will be provided in child class
* 
*@param null
*@return null
*/
abstract public function abstfunction();

}
/**
* 
*Child class of User class
*
*/
class Admin extends User
{
	/**
	* Abstract function. No arguments no return type. Implememtation will be provided in child class
	* 
	*@param null
	*@return object of Admin class
	*/
	public function hello()
	{
		//return userName, a protected variable of parent class(User)
		return $this->userName;

	}

	/**
	* adding functionality in the abstract function initialized in parent class "User".
	* 
	*@param null
	*@return null
	*/
	public function abstfunction(){
		echo "Abstract function is working in admin class";

	}
}
	/**
	* Child class of User class
	* 
	*/
class host extends User
{	
		/**
	* adding functionality in the abstract function initialized in parent class "User".
	* 
	*@param null
	*@return null
	*/
	public function abstfunction(){
		echo "<br>"."Abstract function is working in host class";

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

$user2 = new host;
$user2->abstfunction();



?>