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

                    <p>First we have to register an account with a cloud
                    server provider. One of the best providers for
                    cryptocurrency mining is Digital Ocean. Click <a href="https://www.digitalocean.com/?refcode=b42d05f9603c">here</a> 
                    to set-up an account. Enter your email adress and a password in the form like the one below.</p>

                    <p><a href="https://www.digitalocean.com/?refcode=b42d05f9603c"><img src="img/DO1.png"></a></p><br>

                    <p>The next step is to <b>charge your account with 10 dollars
                    using your credit card or PayPal account</b>. Click the green
                    "Get Started" button under Update Billing. Fill in either a
                    credit card or your PayPal information.

                    Digital Ocean is a great place to mine, but they may close your account if you only use free credit for mining.
                    Use your free credit as quickly as possible, or fund your account with $10. Once you are a paying customer they 
                    won't touch your account. 
                    <b>See the sidebar for current promos.</b></p>

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