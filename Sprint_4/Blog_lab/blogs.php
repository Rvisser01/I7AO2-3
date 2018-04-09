<?php
 $bestand = fopen("blogs.txt", "ab");
 if(!$bestand) {
    echo "Kon geen bestand openen";
  }

<<<<<<< HEAD
  $title = $_POST['titel'];
 $blogpost = $_POST['blogpost'];
 $blog = $title . "*" . $blogpost;


 fwrite($blog,"blogs.txt");
 $bestand = fopen ("blog.txt" , "a");
 if (!$out) {
   header ('location:  ');
   exit;

}
zdfgxgfgzdf
=======
 $title = $_POST['titel'];
  $blogpost = $_POST['blogpost'];
  $blog = $title . "*" . $blogpost;

  fwrite($blog,"blogs.txt");
  $bestand = fopen ("blog.txt" , "w");
  if (!$out) (
   header ('location:  ')
    exit;

)


//$title = $_POST['titel'];
//$blogpost = $_POST['blogpost'];
//$blog = $title . "*" . $blogpost;

//fputs ($out,"$title\t");
//fputs ($out,"$comment\n");

//fclose ($out);
//header ('Location: blog.php');
//exit;
>>>>>>> 71c46dea9c59504d023cc330bde2fa8b86d1b4ee
?>
