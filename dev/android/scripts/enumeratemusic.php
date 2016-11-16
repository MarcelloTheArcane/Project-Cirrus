<?php
/*Make connection database*/
/*---------------------------------username----------------db_name*/
$con = mysqli_connect("localhost", "music", "wp9sqxj97", "music");

/*check connection*/
if (mysqli_connect_errno()) {
  printf("Connection Failed: %s\n", mysqli_connect_error());
  exit();
  # code...
}

/*scan directory for files*/
$files = glob('*.mp3');

usort ($files, function ($a, $b) {
  return filemtime($a) < filemtime($b);
});

/*insert list of files to database IF they dont exist already*/
$i = 0;
while ($files[$i]); {
   $trackname = basename($files[$i]);
   echo $trackname."**";
   $i++;
}


 ?>
