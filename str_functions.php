<?php
$pr = "Palak Rathod";

// find length of string
echo "<br>";
echo "strlen : ",strlen($pr);

//cover string in upper case
echo "<br>";
echo "strtoupper : ",strtoupper($pr);


//cover string in lower case
echo "<br>";
echo "strtolower : ",strtolower($pr);

//revers string char
echo "<br>";
echo "strrev : ",strrev($pr);


//use to compare to string if function return 0 then string are same and if it return 1 then strings are not same
echo "<br>";
$bb = "Hello world!";
echo "strcmp : ",strcmp($pr,$bb);


//use to give lash between string (latter is provided after string like R)
echo "<br>";
echo "addcslashes : ",addcslashes($pr,"R");;


echo "<br>";
echo "addslashes : ",addslashes('Palak "Vijaykumar" rathod');

// covert hexa to binary (ASCII : American Standard Code for Information Interchange) 
echo "<br>";
echo "bin2hex :  ",bin2hex($pr);

// break string print first prat of sting
echo "<br>";
echo "chop :  ",chop($pr,"Rathod!");

//use to print char usint ASCII value
echo "<br>";
echo "chr() : ", chr(97);


//after each char . is printed(to split charactor) if change 1 to 2 then after each 2 char . is there
echo "<br>";
echo "chunk_split() : ",chunk_split($pr,1,".");

// privide which char are used in string
echo "<br>";
echo "count_chars() : ",count_chars($pr,3);

//use to wrap a string into new lines when it reaches a specific length
echo "<br>";
echo "wordwrap() : ",wordwrap($pr,2,"<br>\n");

//removes whitespace and other predefined characters from both sides of a string.
echo "<br>";
echo "trim() : ",trim($pr,"d!");

//use to replaces a part of a string with another string.
echo "<br>";
echo "substr_replace() : ",substr_replace($pr,"xyz",1);

//use to counts the number of times a substring occurs in a string.
echo "<br>";
echo "substr_count() : ",substr_count("She is palak Rathod. palak is student","palak");

//return sum part of string here strat is requied in it like here it's 2
echo "<br>";
echo "substr() : ",substr($pr,2);

//returns the number of characters found in the string that contains only characters from the charlist parameter. like in below code kaec are pridefinr char hence it found that form that char list how many char are used 
echo "<br>";
echo "strspn() : ",strspn($pr,"ec");
?>