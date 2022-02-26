<?php 
require('include/simple_html_dom.php');
// Configuration values
define('DATA_PATH', 'xpmmarket.txt');
define('INFO_EXPIRY', 90); // Seconds before cached data is re-downloaded
ini_set( 'default_socket_timeout', 120 );
set_time_limit( 120 );
function fetch_cmc_market_info() {
    echo '<p>Fetch Primecoin data from http://www.coinmarketcap.com/...</p>';
    // Grab the CMC homepage
    $data = json_decode(file_get_contents('https://api.coinmarketcap.com/v1/ticker/primecoin/'));
   
    $market_cap = $data[0]->market_cap_usd;
    echo '<p>$market_cap = ', $market_cap, '</p>';
  
    $xpm_usd = $data[0]->price_usd;
    echo '<p>$xpm_usd = ', $xpm_usd, '</p>';
  
    $total_supply = $data[0]->total_supply; 
    echo '<p>$total_supply = ', $total_supply, '</p>';
    // Prepare an array for the data,
    // returned as floats
    $info = array(
        'price' => round(floatval($xpm_usd), 2),
        'market_cap' => round(floatval($market_cap), 2),
        'total_supply' => intval($total_supply),
    );
    echo '<p>$info = ', print_r($info), '</p>';
    
    return $info;
}
function update_market_info() {
    $info = fetch_cmc_market_info(); // CMC sourced
    $info['updated'] = time();
    file_put_contents(DATA_PATH, json_encode($info));
}
update_market_info();
echo '*updated*';
?>