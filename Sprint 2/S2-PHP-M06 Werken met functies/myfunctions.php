<!DOCTYPE html>
<html>
  <body>
    <form action="" method="post">
     <input type="text" name="getal" placeholder="prime checker"><br>
     <input type="submit" name="submit" value="Check">
    <?php
      function reverse()
      {
        $a=array("a"=>"1","b"=>"2","c"=>"3");
        print_r(array_reverse($a));
        
      }

    function IsPrime($n)
    {
     for($x=isset($_POST["submit"]); $x<$n;)
       {
          if($n %$x ==0)
    	      {
    		   return 0;
    		  }
        }
      return 1;
     }
    $a = isPrime($_POST= $n);
    if ($a==0){
    echo 'false'."\n";
    }
    else {
    echo 'true'."\n";
    }

    ?>

  </body>
</html>
