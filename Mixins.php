<?php

/**
 *Creating a triat so that class talker could inherit multiple classes
 *
 *Also exploring if two triats have sane method names
 *
 */
trait A 
{
    
    /**
    *Creating a triat so that class talker could inherit multiple classes
    *
    *@param no parameters are passed to the method
    *
    *@return nothing. Prints 'a'
    */
    public function smallTalk() 
    {
        echo 'a';
    }

    /**
    *Creating a triat so that class talker could inherit multiple classes
    *
    *@param no parameters are passed to the method
    *
    *@return nothong. Prints 'A'
    */
    public function bigTalk() 
    {
        echo 'A';
    }
}

/**
 *Creating a triat so that class talker could inherit multiple classes
 *
 *
 */
trait B 
{
    
    /**
    *Creating a triat so that class talker could inherit multiple classes
    *
    *@param no parameters are passed to the method
    *
    *@return nothong. Prints 'b'
    */

    public function smallTalk() 
    {
        echo 'b';
    }

    /**
    *Creating a triat so that class talker could inherit multiple classes
    *
    *@param no parameters are passed to the method
    *
    *@return nothong. Prints 'B'
    */
    public function bigTalk() 
    {
        echo 'B' . ;
    }
}
/**
 * class that inherits both A class and B class soo callled triats
 *
 *
 */
class Talker 
{
    use A, B 
    {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}


$o = new Talker;
Talker::smallTalk();
Talker::bigTalk();
?>