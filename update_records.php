<?php 
require('include/simple_html_dom.php');
// Configuration values
define('DATA_PATH', 'records.txt');
define('INFO_EXPIRY', 90); // Seconds before cached data is re-downloaded
ini_set( 'default_socket_timeout', 120 );
set_time_limit( 120 );
function fetch_records() {
    echo '<p>Fetch Primecoin records from https://primes.zone/api.php?get=records...</p>';
  
    $data = json_decode(file_get_contents('https://primes.zone/api.php?get=records'));
    $records = array(); 
  
    foreach ($data as $rawrecord) {
      $type = $rawrecord[0]; 
      $typeReadable = '';
      switch ($type) {
        case "1CC":
        $typeReadable = "Cunningham Chain of the First Kind";
        break;
        case "2CC":
        $typeReadable = "Cunningham Chain of the Second Kind";
        break;
        case "TWN":
        $typeReadable = "Bi-Twin Chain";
        break;
}
      $record = (object) array('type' => $typeReadable, 'length' => $rawrecord[1], 'origin' => $rawrecord[2], 'block' => $rawrecord[3]);
      array_push($records,$record);
    }
  
    usort($records, function ($a, $b) {
    return ($a -> block) - ($b -> block);
    });

    return $records;
}

function update_records() {
    $info = fetch_records();
    file_put_contents(DATA_PATH, json_encode($info));
}
update_records();
echo '*updated*';
?>