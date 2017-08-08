<?php
$myfile = fopen("sample.txt", "w") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile))
{
  echo fgets($myfile) . "<br>";
}

$txt = "additional text";
fwrite($myfile, $txt);

fclose($myfile);

$myfile = fopen("sample.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile))
{
  echo fgets($myfile) . "<br>";
}

fclose($myfile);

?>