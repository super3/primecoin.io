<?php include("header.php"); ?>
<?php include("coinbase-php/lib/Coinbase.php"); ?>
<?php
  $coinbase = Coinbase::withApiKey($_ENV['COINBASE_API_KEY'], $_ENV['COINBASE_API_SECRET'])
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
    <title></title>
</head>

<body>
    <div class="container-wrapper container-top container-wrapper-prime">
        <div class="container container-top">
            <div class="row">
                <div class="col-md-12 center">
                    <h1>Mine Primecoin</h1>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>

    <div class="clear"></div>

    <div class="container" id="content">
        <div class="row">
            <div class="col-md-8">
                <h3>Free Mining Guides</h3>
                <p>Trying to get started mining on your own computer or in the cloud? Here are some simple foolproof guides that will help you through the process step by step.</p>
                <table class="table table-hover table-responsive table-mine">
                  <thead>
                    <tr>
                      <th>Guide</th>
                      <th>More Info</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Solo Mining</td>
                      <td><a href="mine-solo.php" class="btn btn-default">Read More</a></td>
                    </tr>
                    <tr>
                      <td>Cloud Mining in 5 Minutes</td>
                      <td><a href="mine-cloud.php" class="btn btn-default">Read More</a></td>
                    </tr>
                  </tbody>     
                </table>

                <h3>Free Trail Guides</h3>
                <p>Who says you have to spend a bunch of money on mining? We have listed a few cloud providers that offer free trails for their services, and guides to set it up. See how much profit you can make for free!</p>
                <table class="table table-hover table-responsive table-mine">
                  <thead>
                    <tr>
                      <th>Hosting Provider</th>
                      <th>Trail Amount</th>
                      <th>Link to Provider</th>
                      <th>Link to Guide</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Azure</td>
                      <td>$150 Free Trial</td>
                      <td><a href="http://www.windowsazure.com/en-us/pricing/free-trial/" class="btn btn-default">Provider</a></td>
                      <td>
                        <?php 
                          $response = $coinbase->createButton("Primecoin Guide", "0.02", "BTC", "azure", array(
                                    "description" => "Azure $150 Free Trial",
                                    "type" => "buy_now",
                                    "style" => "buy_now_small",
                                    "callback_url" => "http://primecoin.io/coinbase-callback.php",
                                    "include_email" => true
                          ));
                          echo $response->embedHtml;
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Rackspace</td>
                      <td>$300 Free Trial</td>
                      <td><a href="http://developer.rackspace.com/devtrial/" class="btn btn-default">Provider</a></td>
                      <!-- <td><a href="mine-rackspace.php" class="btn btn-default">Read More</a></td> -->
                      <td>
                        <?php 
                          $response = $coinbase->createButton("Primecoin Guide", "0.02", "BTC", "rackspace", array(
                                    "description" => "Rackspace $300 Free Trial",
                                    "type" => "buy_now",
                                    "style" => "buy_now_small",
                                    "callback_url" => "http://primecoin.io/coinbase-callback.php",
                                    "include_email" => true
                          ));
                          echo $response->embedHtml;
                        ?>
                      </td>
                    </tr>
                  </tbody>     
                </table>

                <div class="item">
                    <h3>Noteworthy Links</h3>

                    <p>A GPU miner is being worked on <a href=
                    "https://bitcointalk.org/index.php?topic=273637">here</a>.</p>

                    <p>Weekly updates on Primecoin development are <a href=
                    "https://bitcointalk.org/index.php?topic=114994.40">here</a>.</p>

                    <p>Participate on the official forum <a href=
                    "http://www.ppcointalk.org/">here</a>.</p>
                </div>

               
                <a id="RecordMining" name="RecordMining"></a>
                <div class="item">
                    <h3>I Mined Some Primecoins, How Can I Find Out If I Broke
                    Some World Records Or Not?</h3>

                    <p>There is a 'listprimerecords' command since v0.1.2. It
                    can be accessed from Qt debug window/console. There are two
                    modes of this command, one lists records of any prime chain
                    types, one lists records of a specific prime chain
                    type.</p>

                    <p>To list records of length 11 prime chains of any type in
                    Primecoin:<br>
                    <code>listprimerecords 11</code><br>
                    To list records of length 10 prime chains of specific type
                    in Primecoin:<br>
                    <code>listprimerecords 10 1CC</code><br>
                    <code>listprimerecords 10 2CC</code><br>
                    <code>listprimerecords 10 TWN</code></p>

                    <p>In the output of listprimerecords, it shows the date,
                    block height, digits, origin and its primorial form of all
                    the record prime chains in Primecoin block chain. There is
                    also an 'ismine' field for each record, it would show value
                    'true' if the miner key belongs to your wallet.</p>

                    <p>Refer to <a class="internal present" href=
                    "https://github.com/primecoin/primecoin/wiki/World-records">
                    world records</a> for the current records and milestones
                    achieved by Primecoin network.</p>

                    <p>The world records for simultaneous primes and prime
                    chains are maintained at</p>

                    <ul>
                        <li><a href=
                        "http://users.cybercity.dk/%7Edsl522332/math/simultprime.htm">
                        Largest known simultaneous primes</a> maintained by
                        Jens Kruse Andersen</li>

                        <li><a href=
                        "http://users.cybercity.dk/%7Edsl522332/math/Cunningham_Chain_records.htm">
                        Cunningham chain records</a> maintained by Dirk
                        Augustin</li>

                        <li><a href=
                        "http://www.primenumbers.net/Henri/fr-us/BiTwinRec.htm">
                        Bi-twin chain record</a> maintained by Henri
                        Lifchitz</li>
                    </ul>
                </div>

            </div>

            <div class="col-md-4 sidebar">
                <?php include("sidebar.php"); ?>
            </div><!-- end sidebar -->
        </div><!-- end row -->
    </div><!-- end container -->
    <?php include("footer.php"); ?>
</body>
</html>