<?php
  $bestand = fopen("blogs.txt", "ab");

  if(!$bestand) {
    echo "Kon geen bestand openen";
  }

  $title = $_POST['titel'];
  $blogpost = $_POST['blogpost'];
  $blog = $title . "*" . $blogpost;

  fwrite($blog,"blogs.txt");
