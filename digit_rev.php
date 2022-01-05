<html>
<body>
  >
    <form method="POST">
         Enter the Number:<input type="number" name="number" required>
         <input type="submit" name="submit" value="submit" >
    </form>
</body>
</html>
<?php 
 if(isset($_POST['submit'])){ 
$n = $_POST['number'];
    $num = (string)$n;  
    $rn = strrev($num);  
    $rev = (int)$rn; 
    echo $rev; 
}
?>