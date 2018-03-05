<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>is_prime</title>
  </head>
  <body>
    <?php
    class IsPrime
    {
         function check($num)
         {
            $bCheck = True;
            for ($i = 2; $i < $num; $i++)
            {
                if ($num % $i == 0)
                {
                     $bCheck = False;
                     break;
                }
            }
            if ($bCheck) {
             echo 'True';
           }
           else {
             echo 'False';
           }

         }
      }

     $x = new IsPrime();
     $x->check(4);
    ?>
  </body>
</html>
