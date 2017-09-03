<?php

$client_data = file_get_contents("php://input");
$txt = "data.txt"; 
$track = "track.txt";
$fh = fopen($txt, 'w+'); 
fwrite($fh,$client_data);
$ft = fopen($track,'a');
fwrite($ft,$client_data);
