<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/1bbf6baf249cbf7f/history_20060405/q/CA/semarang.json");
  $parsed_json = json_decode($json_string);
  $tanggal = $parsed_json->{'response'}->{'termsofService'};
  $hour = $parsed_json->{'history'}->{'pretty'};
  $tzname = $parsed_json->{'history'}->{'tzname'};
  echo "link of ${tanggal}\n";
  echo "<br>hour in semarang of ${hour}\n";
  echo "<br>tzname in semarang of ${tzname}\n";
?>
