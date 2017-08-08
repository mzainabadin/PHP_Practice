<?php

/**
* Interface with  abstrat function foo
*
*/
interface a
{
    /**
    *abstrat function foo
    *@param takes no parameter
    *@return nothing
    */
    public function foo();
}

/**
* Interface b that extends a and have abstrat function baz 
*
*/
interface b extends a
{   
    /**
    *abstrat function baz
    *@param baz
    *@return nothing
    */
    public function baz(Baz $baz);
}

/**
*Implementation of the above abstract functions
*/
class c implements b
{
    /**
    *abstrat function foo implemetation
    *@param takes no parameter
    *@return nothing
    */
    public function foo()
    { 
        echo "Public function foo implemented in c class";
    }


    /**
    *abstrat function baz implementation
    *@param takes no parameter
    *@return nothing
    */
    public function baz(Baz $baz)
    {
        echo"Public function baz implemented in c class";
    }
}

$func = new c;
echo $func->foo();

?>