<!DOCTYPE html>
<html>
  <body>
    <form action="" method="post">
     <input type="text" name="getal" placeholder="prime checker"><br>
     <input type="submit" name="submit" value="Check">
    <?php
    function reverse() {
        $a=array("a"=>"1","b"=>"2","c"=>"3");
        print_r(array_reverse($a));

    }

    

    function isPrime($n) {

     for($x=isset($_POST["submit"]); $x<$n;)
       {
         $n=$x;
          if($n %$x ==0)
    	      {
    		   return 0;
    		  }
        }
      return 1;
      $a = isPrime($_POST= $n);
      if ($a==0){
      echo 'false'."\n";
      }
      else {
      echo 'true'."\n";
      }
    }

    function isUpperCase() {
      $strings = array('AKLWC139', 'LMNSDO', 'akwSKWsm');
      foreach ($strings as $testcase) {
        if (ctype_upper($testcase)) {
              echo "The string $testcase consists of all uppercase letters.\n";
        } else {
              echo "The string $testcase does not consist of all uppercase letters.\n";
        }
      }
    }
    ?>

  </body>
</html>
