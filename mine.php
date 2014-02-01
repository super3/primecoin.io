<?php include("header.php"); ?>
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
                <br>
                <a id="CloudMining" name="CloudMining"></a>

                <div class="item">
                    <h3>Cloud Mining in 5 Minutes</h3>
                </div>

                <div class="item">
                    <h4><strong>Introduction</strong></h4>

                    <p>Primecoin is a CPU mined cryptocurrency. The algorithm
                    used as <a href=
                    "https://en.bitcoin.it/wiki/Proof_of_work">proof-of-work</a>
                    depends on the generation of special strings of prime
                    numbers, called <a href="about.php">Cunningham chains and
                    bi-twin chains</a>. This means that currently unlike
                    Bitcoin or most other cryptocurrencies, the proof-of-work
                    cannot be accelerated using video cards or special mining
                    hardware. Web servers, made for generating as much pages
                    per second as possible, are often very good for these types
                    of calculations. This guide will show you to set-up a
                    virtualized cloud web server step by step and use it for
                    Primecoin mining.</p>

                    <h4><strong>Get an account</strong></h4>

                    <p>A) First we have to register an account with a cloud
                    server provider. One of the best providers for
                    cryptocurrency mining is Digital Ocean. Use the link below,
                    or click <a href="#">here</a> to set-up an account. Enter
                    your email adress and a password in the form like the one
                    below.</p>
                    <pre>Your Digital Ocean link</pre>

                    <p><a href="#"><img src="img/DO1.png"></a></p><br>

                    <p>The next step is to charge your account with 10 dollars
                    using your credit card or PayPal account. Click the green
                    "Get Started" button under Update Billing. Fill in either a
                    credit card or your PayPal information. Try and use this
                    promo-code during the sign-up process: 2014SSD</p>

                    <h4><strong>Setting-up a server</strong></h4><br>

                    <p><b>A)</b> Click on the blue "Create Droplet" button.</p>

                    <p><a href="#"><img src="img/DO3.png"></a></p><br>

                    <p><b>B)</b> Fill in a server name, in this case:
                    "PrimecoinMiner" and choose a server type. We will go with
                    the cheapest option. This is a server with 1 CPU
                    (processor) and 512 MB RAM.</p>

                    <p><a href="#"><img src="img/DO4.png"></a></p><br>

                    <p><b>C)</b> Select a server location, New York 1 or 2, and
                    then the Server OS. Choose the latest Ubuntu Linux. If you
                    have an earlier droplet set-up for mining Primecoin you can
                    shut down the droplet, make an image from it, and set-up a
                    new server using this image.</p>

                    <p><a href="#"><img src="img/DO5.png"></a></p><br>

                    <p><b>D)</b> Click on the blue "Create Droplet" button.
                    You'll receive an email with the username and password to
                    login in your newly created server!</p>

                    <h4><strong>Set-up the miner</strong></h4>

                    <p><br>
                    <b>A)</b> Access the server by selecting your droplet,
                    clicking the newly created server and clicking access. The
                    blue button allows you to access the console from the web.
                    Click this button. The blue box displays the snapshot
                    possibility that allows you to clone the server after it is
                    set-up properly.</p>

                    <p><a href="#"><img src="img/DO6.png"></a></p><br>

                    <p><b>B)</b> Type in root as user and copy and paste or
                    type in the password you have received in your email. You
                    will be greeted with a command line like this after a
                    successful login:</p>

                    <p><a href="#"><img src="img/DO7.png"></a></p><br>

                    <p><b>C)</b> If you use a droplet with 512 MB RAM then
                    start out with creating a swap file. Copy and paste over
                    this command and press enter:</p>
                    <pre>dd if=/dev/zero of=/swapfile bs=64M count=16 &amp;&amp; mkswap /swapfile &amp;&amp; swapon /swapfile</pre>

                    <p><b>D)</b> Now install the requirements for the mining
                    software and then download and install the mining software.
                    Copy over this line and press enter:</p>
                    <pre>
                    apt-get update
                    apt-get install -y yasm  git make g++ build-essential libminiupnpc-dev libboost-all-dev libdb++-dev libgmp-dev libssl-dev dos2unix 
                    git clone https://github.com/thbaumbach/primecoin &amp;&amp; cd ~/primecoin/src &amp;&amp; make -f makefile.unix
					</pre>

                    <p><b>E)</b> The command above will take serveral minutes
                    to complete. When the command line shows the "#" symbol
                    again you can continue. The next step is to setup and start
                    your miner. We'll use the Beeeeer.org pool, which requires
                    no set-up. Replace the "your xpm address here" in the
                    command with your real address and copy the command to the
                    server and press enter. Adjust the -genproclimit flag with
                    the number of 's you ordered. If you picked the first
                    option it was one CPU, so "-genproclimit=1". You don't need
                    to change the password field.</p>
                    <pre>screen ./primeminer -poolip=54.200.248.75 -poolport=1337 -pooluser="your xpm adress here" -poolpassword=PASSWORD -genproclimit=1</pre>

                    <p><b>F)</b> Congratulations, you are now mining! You can
                    close the browser and the server will continue mining. The
                    screen output should look like the picture below. The
                    mining speed is accented in the red box.</p>

                    <p><a href="#"><img src="img/DO8.png"></a><br></p>

                    <p><b>G)</b> When reconnecting with the server, type this
                    to see the mining output again.</p>
                    <pre>screen -DDR</pre>

                    <h4><strong>Payout and stats</strong></h4>

                    <p>The pool will automatically pay-out to the used address
                    if you reach 3.0 XPM. You can run multiple miners on the
                    same address to speed up the mining process. Check your
                    current balance on the pool by filling in your address in
                    this url.</p>
                    <pre>http://beeeeer.org/user/"type your address here"</pre><br>
                    <br>
                </div><a id="HomeMining" name="HomeMining"></a>

                <div class="item">
                    <h3>Mining</h3>
                </div>

                <div class="item">
                    <h4><strong>Windows</strong></h4>

                    <p>For some reason the Windows client will not start
                    generating (<em>the Primecoin equivalent to Bitcoin's
                    "hashing"</em>) until you run a command in the debug
                    window. To do so:</p>

                    <ol>
                        <li>Go to Help.</li>

                        <li>Click Debug Window.</li>
                    </ol>

                    <p>This is the console where you will execute all commands
                    to the Primecoin daemon.</p>

                    <p>Type this command to use all CPU cores:</p>

                    <div class="highlight">
                        <pre><span class="n">setgenerate</span><span class="nb">true</span><span class="o">-</span><span class="mi">1</span></pre>
                    </div>

                    <p>If you want to use a specific number of cores, instead
                    of -1, type the number of cores.</p>

                    <p>You can then type the following to see the status of
                    generation.</p>

                    <div class="highlight">
                        <pre><span class="n">getmininginfo</span></pre>
                    </div>

                    <p>Screenshot of the getmininginfo response, where
                    "primepersec" is your generation rate: <a href=
                    "http://i.imgur.com/WfiagnJ.png">http://i.imgur.com/WfiagnJ.png</a></p>

                    <p>If you want to turn generation off you can use:</p>

                    <div class="highlight">
                        <pre><span class="n">setgenerate</span> <span class="nb">false</span></pre>
                    </div>

                    <p>This allows you to keep the wallet running without
                    generating to receive/send transactions, messages, etc.</p>

                    <p>You are now generating. Transactions will appear in the
                    Overview window. When you get paid for generating it will
                    appear as an incoming transaction.</p>

                    <p>Screenshot of incoming transactions: <a href=
                    "http://i.imgur.com/ogqc1Mv.png">http://i.imgur.com/ogqc1Mv.png</a></p>
                </div>

                <div class="item">
                    <h4><strong>Linux</strong></h4>

                    <p>To generate Primecoin under Linux, refer to the commands
                    above or by using the Primecoin help command.</p>
                </div>

                <div class="item">
                    <h4><strong>Backing up and Moving Primecoin</strong></h4>

                    <p>If you want to move Primecoin, install the Primecoin
                    wallet software on the target computer and drop wallet.dat
                    into the install folder. To backup your wallet, make a copy
                    of the file wallet.dat.</p>
                </div>

                <div class="item">
                    <h3>Noteworthy Links</h3>

                    <p>A GPU miner is being worked on <a href=
                    "https://bitcointalk.org/index.php?topic=273637">here</a>.</p>

                    <p>Weekly updates on Primecoin development are <a href=
                    "https://bitcointalk.org/index.php?topic=114994.40">here</a>.</p>

                    <p>Participate on the official forum <a href=
                    "http://www.ppcointalk.org/">here</a>.</p>
                </div>

                </div><a id="RecordMining" name="RecordMining"></a>
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
                <div class="block wrap notification">
                    <h2>Index</h2>

                    <ul>
                        <li><a href="#CloudMining">1. Cloud Mining in 5 Minutes</a></li>
                        <li><a href="#HomeMining">2. Solo Mining</a></li>
                        <li><a href="#RecordMining">3. Did you Break a World Record?</a></li>
                    </ul>
                </div>

                 <div class="block wrap info">
                 	<h2>Links</h2>
                    <ul>
                        <li><a href=
                        "https://github.com/primecoin/primecoin/wiki/" target=
                        "_blank">Wiki</a></li>

                        <li><a href="http://www.peercointalk.org/" target=
                        "_blank">Forums</a></li>

                        <li><a href="downloads.php">Download Wallet</a></li>

                        <li><a href="resources.php">Exchange Markets</a></li>
                    </ul>
                </div>

                <div class="block wrap info">
                    <h2>Questions?</h2>

                    <p><a href="http://www.peercointalk.org/" target=
                    "_blank">Join the forums</a> and ask your question you
                    might have. The community of Primecoin will help you
                    out.</p>
                </div>
            </div><!-- end sidebar -->
        </div><!-- end row -->
    </div><!-- end container -->
    <?php include("footer.php"); ?>
</body>
</html>