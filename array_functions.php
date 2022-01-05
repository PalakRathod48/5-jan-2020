<?php
//Indexed arrays(one mensional)
$pr=array("Palak","Roshni","Dharini","Palak"); 
echo $pr[0];
echo "<br>";
echo $pr[1];
echo "<br>";
echo $pr[2];

//Associative arrays(two-mensional)
echo "<br>";
echo "<br>";
//CASE_LOWER - Default value. Changes the keys to lowercase,CASE_UPPER - Changes the keys to uppercase
$a=array("Palak"=>35,"Roshni"=>37,"Dharini"=>43);
echo "<br>";
print_r(array_change_key_case($a,CASE_UPPER));
echo "<br>";
echo "<br>";
print_r(array_change_key_case($a,CASE_LOWER));

//devide array here i have return 2 hence it devide array in 2 element group
echo "<br>";
echo "<br>";
print_r(array_chunk($pr,2));

//combine two array in two dimention form both array should hve equal number of element
echo "<br>";
echo "<br>";
$n=array("1","2","3","4");
print_r(array_combine($pr,$n));
 

//count number of values in array if repeating 2 time then then it shows 2 
echo "<br>";
echo "<br>";
print_r(array_count_values($pr));

//find value which are diffrent in first array element
echo "<br>";
echo "<br>";
$rp = array("Palak","helly","rahi","Palak");
print_r(array_diff($pr,$rp));


?>