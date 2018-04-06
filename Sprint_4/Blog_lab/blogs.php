//<?php
//  $bestand = fopen("blogs.txt", "ab");

//  if(!$bestand) {
//    echo "Kon geen bestand openen";
//  }

//  $title = $_POST['titel'];
//  $blogpost = $_POST['blogpost'];
//  $blog = $title . "*" . $blogpost;

//  fwrite($blog,"blogs.txt");
 $bestand = fopen ("blog.txt" , "a");
 if (!$out) (
   header ('location:  ')
    exit;

)


$title = $_POST['titel'];
$blogpost = $_POST['blogpost'];
$blog = $title . "*" . $blogpost;

fputs ($out,"$title\t");
fputs ($out,"$comment\n");

fclose ($out);
header ('Location: blog.php');
exit;
?>
