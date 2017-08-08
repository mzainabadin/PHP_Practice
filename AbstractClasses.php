<?php 
/**
*Animal class having functions of Describe and Greet
*/
abstract class Animal
{
    public $name;
    public $age;
    /**
    *@param takes no parameter
    *@return name and age 
    */
    public function Describe()
    {
        return $this->name . ", " . $this->age . " years old";    
    }
     /**
    *Abstruct function have no implementation
    *@param takes no parameter
    *@return name and age 
    */
    abstract public function Greet();
}
/*
* Child Class Dog exteds Animal Class
*/
class Dog extends Animal
{
     /**
    *Implementation of abstract function Greet
    *@param takes no parameter
    *@return Woof!
    */
    public function Greet()
    {
        return "Woof!";    
    }
     /**
    *@param takes no parameter
    *@return name, age and I'am a Dod! 
    */
    public function Describe()
    {
        return parent::Describe() . ", and I'm a dog!";    
    }
}
?>
