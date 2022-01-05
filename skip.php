<?php

for ($i=1; $i <=100 ; $i++) { 
  
  if($i%3 != 0)
    {
       echo $i;
       echo "<br>";

    }
  
}
?> 
<?php

for ($i=1; $i <=100 ; $i++) { 
  
  if($i%3 == 0)
    {
     continue;

    }
  else{
  	       echo $i;
       echo "<br>";
  }

  
}
?> 