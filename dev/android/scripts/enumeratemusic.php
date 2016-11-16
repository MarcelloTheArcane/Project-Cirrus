<?php
/*Make connection database*/
/*---------------------------------username----------------db_name*/
/*$con = mysqli_connect("cirrus.cazdizvhsu30.eu-west-1.rds.amazonaws.com", "travis", "wp9sqxj97", "music");
*/
/* AWS connection*/
/*$servername = "cirrus.cazdizvhsu30.eu-west-1.rds.amazonaws.com";
$username = "travis";
$password = "wp9sqxj97";
*/
// Create connection
$con = mysqli_connect("mysql.hostinger.co.uk", "u751051008_music", "wp9sqxj97", "u751051008_music");

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
   $addquery = " INSERT INTO music (id, trackname, numlikes, numplays) VALUES (default, '$trackname', '0', '0')";
   mysqli_query($con, $addquery);
   $i++;
}


 ?>
