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

                <div class="item">
                    <h3>Solo Mining</h3>
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
                        <pre><span class="n">setgenerate</span> <span class="nb">true</span> <span class="o">-</span><span class="mi">1</span></pre>
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

            </div>

            <div class="col-md-4 sidebar">
                <?php include("sidebar.php"); ?>
            </div><!-- end sidebar -->
        </div><!-- end row -->
    </div><!-- end container -->
    <?php include("footer.php"); ?>
</body>
</html>