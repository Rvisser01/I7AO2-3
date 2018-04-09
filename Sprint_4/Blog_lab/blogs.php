<?php
 $bestand = fopen("blogs.txt", "ab");
 if(!$bestand) {
    echo "Kon geen bestand openen";
  }


 $title = $_POST['titel'];
 $blogpost = $_POST['blogpost'];
 $blog = $title . "*" . $blogpost;

<<<<<<< HEAD
  fwrite($blog,"blogs.txt");
  $bestand = fopen ("blog.txt" , "w");
  if (!$out)
=======
 fwrite($blog,"blogs.txt");
 $bestand = fopen ("blog.txt" , "w");
 if (!$out)
 {
>>>>>>> 0828d149fe98d3f22337364b737076b89e588db8
   header ('location:  ')
   exit;
 }


<<<<<<< HEAD
 De penis prikkel. Damian neukt Anouk reekers
=======
>>>>>>> 0828d149fe98d3f22337364b737076b89e588db8
$title = $_POST['titel'];
$blogpost = $_POST['blogpost'];
$blog = $title . "*" . $blogpost;

fputs ($out,"$title\t");
fputs ($out,"$comment\n");

fclose ($out);
header ('Location: blog.php');
exit;
<<<<<<< HEAD
=======

>>>>>>> 0828d149fe98d3f22337364b737076b89e588db8
?>
