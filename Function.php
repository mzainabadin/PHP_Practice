<?php
/**
 *Sum function that sums two integers
 *
 *@param two numbers
 *
 *@return sum of the two numbers prvided
 */
function sum($x, $y) 
{
    $z = $x + $y;
    return $z;
}
/**
 *Printbreak function just to print a line break
 *
 *@param no
 *
 *@return nothing
 */
function printBreak() 
{
    print "<br>";
}

echo "2 + 4 = " . sum(2, 4);
?>