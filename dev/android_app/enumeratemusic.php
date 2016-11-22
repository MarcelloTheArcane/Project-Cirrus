<?php
/*Make a connection with db, and check ok*/
/*-----------------------host --------------------------------------------username---passwd-----db name*/
$con = mysqli_connect("cirrus.cazdizvhsu30.eu-west-1.rds.amazonaws.com", "travis", "wp9sqxj97", "music");

/*check connection*/

if (mysqli_connect_errno()) {
  printf("Connection failed: %s\n", mysqli_connect_error());
  exit();
}


/*scan dir for files */

$files = glob('*.aac');

usort ($files, function ($a, $b) {
  return filemtime($a) < filemtime($b);
});


/*insert list of files if they don't already exist */

$i = 0;

while ($files[$i]) {
  $trackname = basename($files[$i]);
  echo $trackname."**";
  $addquery = "INSERT INTO music (id, trackname, numlikes, numplays)  VALUES (default, '$trackname', '0', '0')";
  mysqli_query($con, $addquery);
  $i++;
}


?>
