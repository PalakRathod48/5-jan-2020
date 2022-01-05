<html>
<body>
   
    <form method="POST">
         Enter the Number:<input type="number" name="number" required>
         <input type="submit" name="submit" value="submit" >
    </form>
</body>
</html>
<?php 
 if(isset($_POST['submit'])){ 
$n = $_POST['number']; 
  $sum=0; $a=0;  
    for ($i =0; $i<=strlen($n);$i++)  
   {  
     $a=$n%10;  
     $sum = $sum + $a;  
     $n=(int)$n/10;  
   }  
   echo "Sum of digits is $sum";
   } 
?>