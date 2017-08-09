<?php

class SingleClass
{
    static $object;
    /**
     *Function that checks if object has already been created of class SingleClass
     * to make sure only single instance is created
     *
     *@param no parameters
     *
     *@return object of SingleClass
     */
    static public function getSingleton()
    {
        if(isset(self::$object) == False)
        {
            self::$object = new SingleClass();
            echo "if statement";
        }
        return self::$object;
    }
     /**
     *Constructor function just made it private to avoid calling it outside the class
     *
     *@param no parameters
     *
     *@return nothing
     */
    private function __construct()
    {

    }

}


$mySingle1 = SingleClass::getSingleton();   // one object made
$mySingle2 = SingleClass::getSingleton();   // reference to first object returned
$mySingle3 = SingleClass::getSingleton();   // reference to first object returned
?>