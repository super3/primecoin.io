<?php include("header.php"); ?>

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

    <div id="content" class="container">
      <div class="row">
        <div class="col-md-8">

          <div class="item">
            <h3>Mining</h3>
          </div>

          <div class="item">
            <h4><strong>Windows</strong></h4>
            <p>For some reason the Windows client will not start generating (<em>the Primecoin equivalent to Bitcoin's "hashing"</em>) until you run a command in the debug window. To do so:</p>
            <ol>
              <li>Go to Help.</li>
              <li>Click Debug Window.</li>
            </ol>
            <p>This is the console where you will execute all commands to the Primecoin daemon.</p>

            <p>Type this command to use all CPU cores:
            </p><div class="highlight"><pre><span class="n">setgenerate</span> <span class="nb">true</span> <span class="o">-</span><span class="mi">1</span>
            </pre></div>

            <p>If you want to use a specific number of cores, instead of -1, type the number of cores.</p>

            <p>You can then type the following to see the status of generation.
            </p><div class="highlight"><pre><span class="n">getmininginfo</span>
            </pre></div>

            <p>Screenshot of the getmininginfo response, where "primepersec" is your generation rate: <a href="http://i.imgur.com/WfiagnJ.png">http://i.imgur.com/WfiagnJ.png</a></p>

            <p>If you want to turn generation off you can use:
            </p><div class="highlight"><pre><span class="n">setgenerate</span> <span class="nb">false</span>
            </pre></div>

            <p>This allows you to keep the wallet running without generating to receive/send transactions, messages, etc.</p>
            <p>You are now generating. Transactions will appear in the Overview window. When you get paid for generating it will appear as an incoming transaction.</p>
            <p>Screenshot of incoming transactions: <a href="http://i.imgur.com/ogqc1Mv.png">http://i.imgur.com/ogqc1Mv.png</a></p>
            </div>

            <div class="item">
            <h4><strong>Linux</strong></h4>
            <p>To generate Primecoin under Linux, refer to the commands above or by using the Primecoin help command.</p>
            </div>

            <div class="item">
            <h3>Backing up and Moving Primecoin</h3>
            <p>If you want to move Primecoin, install the Primecoin wallet software on the target computer and drop wallet.dat into the install folder. To backup your wallet, make a copy of the file wallet.dat.</p>
            </div>

            <div class="item">
            <h3>Noteworthy Links</h3>
            <p>A GPU miner is being worked on <a href="https://bitcointalk.org/index.php?topic=273637">here</a>.</p>
            <p>Weekly updates on Primecoin development are <a href="https://bitcointalk.org/index.php?topic=114994.40">here</a>.</p>
            <!--<p>You can exchange Primecoin for prepaid debit cards <a href="http://www.visa4crypto.com/">here</a>.</p>-->
            <p>Participate on the official forum <a href="http://www.ppcointalk.org/">here</a>.</p>
          </div>

          <div class="item">
            <h3>I Mined Some Primecoins, How Can I Find Out If I Broke Some World Records Or Not?</h3>
            <p>There is a 'listprimerecords' command since v0.1.2. It can be accessed from Qt debug window/console. There are two modes of this command, one lists records of any prime chain types, one lists records of a specific prime chain type.</p>
            <p>To list records of length 11 prime chains of any type in Primecoin:<br><code>listprimerecords 11</code><br>
            To list records of length 10 prime chains of specific type in Primecoin:<br><code>listprimerecords 10 1CC</code><br><code>listprimerecords 10 2CC</code><br><code>listprimerecords 10 TWN</code>  </p>
            <p>In the output of listprimerecords, it shows the date, block height, digits, origin and its primorial form of all the record prime chains in Primecoin block chain. There is also an 'ismine' field for each record, it would show value 'true' if the miner key belongs to your wallet.</p>
            <p>Refer to <a class="internal present" href="https://github.com/primecoin/primecoin/wiki/World-records">world records</a> for the current records and milestones achieved by Primecoin network.</p>
            <p>The world records for simultaneous primes and prime chains are maintained at</p>
            <ul>
              <li><a href="http://users.cybercity.dk/%7Edsl522332/math/simultprime.htm">Largest known simultaneous primes</a> maintained by Jens Kruse Andersen</li>
              <li><a href="http://users.cybercity.dk/%7Edsl522332/math/Cunningham_Chain_records.htm">Cunningham chain records</a> maintained by Dirk Augustin</li>
              <li><a href="http://www.primenumbers.net/Henri/fr-us/BiTwinRec.htm">Bi-twin chain record</a> maintained by Henri Lifchitz</li>
            </ul>
          </div>
        </div>

        <div class="col-md-4 sidebar">

          <div class="block wrap notification">
            <h2>Questions?</h2>
            <p><a href="http://www.peercointalk.org/" target="_blank">Join the forums</a> and ask your question you might have. The community of Primecoin will help you out.</p>
          </div>

          <div class="block wrap info">
            <h2>Quick Links</h2>
            <ul>
              <li><a href="https://github.com/primecoin/primecoin/wiki/" target="_blank">Wiki</a></li>
              <li><a href="http://www.peercointalk.org/" target="_blank">Forums</a></li>
              <li><a href="mine.php">How to Mine</a></li>
              <li><a href="resources.php">Exchange Markets</a></li>
            </ul>
          </div>

        </div><!-- end sidebar -->
      </div>
    </div><!-- end container -->

<?php include("footer.php"); ?>
