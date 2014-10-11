<?
require('include/simple_html_dom.php');

// Configuration values
define('DATA_PATH', 'xpmmarket.txt');
define('INFO_EXPIRY', 90); // Seconds before cached data is re-downloaded

// Grab new data from CoinMarketCap if our data is expired
function fetch_cmc_market_info() {
    echo '<p>Fetch Primecoin data from http://www.coinmarketcap.com/...</p>';

    // Grab the CMC homepage
    $html = file_get_html('http://www.coinmarketcap.com/');
    // Get Primecoin's table
    $xpm_data = $html->find('#id-primecoin', 0);

    // Market cap is stored in the "data-usd" tag of a 'td'
    $market_cap_td = $xpm_data->find('td[class=market-cap]', 0);
    if (is_object($market_cap_td)) {
        $market_cap = $market_cap_td->getAttribute('data-usd');
        // Market cap is returned with commas that break floatval()
        $market_cap = str_replace(",", "", $market_cap);
    }
    else {
        $market_cap = null;
    }

    echo '<p>$market_cap = ', $market_cap, '</p>';

    // Individual price is stored in the "data-usd" tag of an 'a'
    $xpm_usd_a = $xpm_data->find('a[class=price]', 0);
    if (is_object($xpm_usd_a)) {
        $xpm_usd = $xpm_usd_a->getAttribute('data-usd');
    }
    else {
        $xpm_usd = null;
    }

    echo '<p>$xpm_usd = ', $xpm_usd, '</p>';

    // Total supply does not have a marking class,
    // but at the time of writing is the 5th <td>
    $total_supply_td = $xpm_data->find('td', 4);
    if (is_object($total_supply_td)) {
        $total_supply = $total_supply_td->plaintext;
        // Ugly hack because CMC doesn't provide a data tag
        // so we have to strip off the text
        $total_supply = str_replace(",", "", $total_supply);
        $total_supply = str_replace(" XPM", "", $total_supply);
    }
    else {
        $total_supply = null;
    }

    echo '<p>$total_supply = ', $total_supply, '</p>';

    // Prepare an array for the data,
    // returned as floats
    $info = array(
        'price' => round(floatval($xpm_usd), 2),
        'market_cap' => floatval($market_cap),
        'total_supply' => intval($total_supply),
    );

    echo '<p>$info = ', print_r($info), '</p>';
    
    return $info;
}

// Just return the price from Vircurex
function fetch_vircurex_market_price() {
    $btc_usd_json = file_get_contents('https://api.vircurex.com/api/get_highest_bid.json?base=BTC&alt=USD');
    $btc_usd = json_decode($btc_usd_json)->value;

    $xpm_btc_json = file_get_contents('https://api.vircurex.com/api/get_highest_bid.json?base=XPM&alt=BTC');
    $xpm_btc = json_decode($xpm_btc_json)->value;

    $xpm_usd = $btc_usd * $xpm_btc;
    return round($xpm_usd, 2);
}

// Update the market info file
function update_market_info() {
    $info = fetch_cmc_market_info(); // CMC sourced

    if ($info['price'] == 0) { // CMC is freaking out, grab from Vircurex instead
        // Grab our old market info for reference to use its total supply
        $old_info = market_info();

        // "Dumb mode" only updates price and market cap, not total supply (can add later)
        $price = fetch_vircurex_market_price();
        $market_cap = $price * $old_info['total_supply']; // Calculate a market cap based on Vircurex price and last known supply
        
        $info['price'] = $price;
        $info['market_cap'] = $market_cap;
        $info['total_supply'] = $old_info['total_supply'];
    }

    $info['updated'] = time();
    file_put_contents(DATA_PATH, json_encode($info));

}

update_market_info();
echo '*updated*';

?>
