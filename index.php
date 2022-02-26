<?php include("header.php"); ?>

<link rel="stylesheet" type="text/css" href="assets/css/index.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>
<div class="view">
    <canvas></canvas>


    <div class="page-show" id="dowebok">
        <!--1 Primecoin-->
        <header class=" header">
            <div class="container">
                <h1>Primecoin</h1>
                <h2>A new type cryptocurrency which is Proof-of-Work based on searching for prime numbers.</h2>
                <a class="btn wallet" href="downloads.php">
                    <span>Go</span>
                    <span>Download Wallet!<span>
                </a>
                <a class="btn wallet" href="about.php">
                    <span>Go</span>
                    <span>Learn More</span></a>
                <div class="header-icon"></div>
            </div>
        </header>
        <div class="clear"></div>
        <!--2 about-->
        <div class="container-wrapper features" id="page2">
            <div class="container">
                <div class="row margin-bottom-20">
                </div><!-- end row -->
                <div class="row" id="why-primecoin">
                    <div class="col-md-4 center">
                        <h3 class="margin-top-10">What is Primecoin?</h3>
                        <p>Primecoin is an innovative cryptocurrency, a form of digital currency secured by
                            cryptography
                            and
                            issued through a decentralized mining market. Derived from Satoshi Nakamoto's
                            Bitcoin,
                            Primecoin
                            introduces an unique form of Proof-of-Work based on prime numbers.</p>
                        <a href="about.php#what-xpm" class="btn btn-lg btn-inverse">Learn More</a>
                    </div><!-- end col -->
                    <div class="col-md-4 center">
                        <h3 class="margin-top-10">Advantages of Primecoin.</h3>
                        <p>The innovative prime Proof-of-Work in Primecoin not only provides security and
                            minting to
                            the
                            network, but also generates a special form of prime number chains of interest to
                            mathematical
                            research. Thus primecoin network is energy-multiuse, compared to bitcoin.</p>
                        <p><a href="about.php#advantages-xpm" class="btn btn-lg btn-inverse">Learn More</a>
                    </div><!-- end col -->
                    <div class="col-md-4 center">
                        <h3 class="margin-top-10">Value Behind Primecoin.</h3>
                        <p>Primecoin network searches for special prime number chains known as Cunningham chains
                            and
                            bi-twin
                            chains. The distribution of these prime chains are not well-understood currently as
                            even
                            for
                            its
                            simplest case twin primes their infinite existence is not proven.</p>
                        <a href="about.php#value-xpm" class="btn btn-lg btn-inverse">Learn More</a>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end container-wrapper -->
        <div class="clear"></div>
        <!--3 number-->

        <div class="wrap">

            <div class="container numbers">
                <div class="row row-feature">
                    <div class="col-md-12">

                        <div class="marketcap">
                            <ul id="number"
                                class="feature-horizontal-list feature-horizontal-list-3 margin-bottom-0">
                                <li class="first">
                                    <span class="title" id="current-price"></span>
                                    <span class="txt">Price</span>
                                </li>
                                <li>
                                    <span class="title" id="market-cap"></span>
                                    <span class="txt">Market cap</span>
                                </li>
                                <li>
                                    <span class="title" id="total-supply"></span>
                                    <span class="txt">Total supply</span>
                                </li>
                            </ul>
                            <div class="updated">
                                <span>Last updated: </span>
                                <span id="seconds-since-update">never</span>
                            </div>
                        </div><!-- end marketcap -->

                    </div><!-- end col -->
                </div>
            </div>
        </div>

        <!--4 CONGRATULATIONS-->
        <div class="world-records">
            <div class="container">
                <div class="row">
                    <div class="col-md-1 ">
                        <img class="world-records-icon" src="assets/images/general/congratulations-icon.png">
                    </div>
                    <div class="col-md-9 ">
                        <h2>CONGRATULATIONS!</h2>
                        <p>
                            <span>Another world record broken on 30th March 2018! We found our first</span>
                            <i class="txt2">15 length </i><i class="txt2">Bi-twin Chain</i>!
                            <span class="txt2">Which has an origin with 96 digits.(</span>
                            <a class="txt2" href="https://primes.zone/">view all records</a>
                            <span class="txt2">)</span>
                        <p/>


                    </div>
                    <div class="col-md-2">
                        <h5>Interested?</h5>
                        <a href="https://bitcointalk.org/index.php?topic=253409.0" target="_blank">
                            Learn More</a>
                    </div>
                </div>
                <div class="row news">
                    <h3>News：</h3>
                    <p>
                        <a style="color: white; font-size: 18px" href="news.php">Satoshi Nakamoto’s Private Key May
                            Cause Altcoin Crisis, Primecoin Untouched</a>
                    </p>
                    <!--                    <p>-->
                    <!--                        <a style="color: white; font-size: 18px" href="news.php">Satoshi Nakamoto’s Private Key May-->
                    <!--                            Cause Altcoin Crisis, Primecoin Untouched</a>-->
                    <!--                    </p>-->
                    <!--                    <p>-->
                    <!--                        <a style="color: white; font-size: 18px" href="news.php">Satoshi Nakamoto’s Private Key May-->
                    <!--                            Cause Altcoin Crisis, Primecoin Untouched</a>-->
                    <!--                    </p>-->
                    <!--                    <p>-->
                    <!--                        <a style="color: white; font-size: 18px" href="news.php">Satoshi Nakamoto’s Private Key May-->
                    <!--                            Cause Altcoin Crisis, Primecoin Untouched</a>-->
                    <!--                    </p>-->
                </div>
            </div>
        </div><!--end world-records-->
        <!--5 all resource-->
        <div id="page5" class="container-wrapper container-wrapper-bridge resources">
            <div class="container container-top">
                <div class="row">
                    <div class="col-md-12 center">
                        <h2 class="tagline">Primecoin Resources</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 center">
                        <div class="space-20"></div>
                        <ul class="features-icon-list">
                            <li>
                                <span class="fa fa-cloud"></span>
                                <h3>Downloads</h3>
                                <p>You can easily <a class="" href="downloads.php">download</a> and
                                    install
                                    the
                                    Primecoin Wallet on your Windows PC and Linux computer.</p>
                            </li>
                            <li>
                                <span class="fa fa-question"></span>
                                <h3>Wiki</h3>
                                <p>If you have any other questions which still are unanswered, you can read the
                                    <a
                                            href="https://github.com/primecoin/primecoin/wiki"
                                            target="_blank">Primecoin Wiki</a>.</p>
                            </li>

                            <li>
                                <span class="fa fa-flask"></span>
                                <h3>How to Mine</h3>
                                <p>Learn how you can mine Primecoins on different operating systems. You can
                                    read it
                                    here on
                                    the
                                    <a href="mine.php">how to mine</a> page.</p>
                            </li>
                            <li>
                                <span class="fa fa-map-marker"></span>
                                <h3>Exchange Markets</h3>
                                <p>You can buy / sell Primecoins on many trustworthy markets. <a
                                            href="resources.php">Here</a>
                                    you will find a complete list.</p>
                            </li>
                            <li>
                                <span class="fa fa-book"></span>
                                <h3>Primecoin Paper</h3>
                                <p>Primecoin: Cryptocurrency with Prime Number Proof-of-Work. <a
                                            href="/bin/primecoin-paper.pdf">Here</a> you can read the paper.</p>
                            </li>
                        </ul>
                    </div><!-- end col -->


                    <div class="col-md-12 center clearpc">
                        <h2 class="maintitle"><a href="resources.php">All resources >></a></h2>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
                </div>


        <div id="how-to-mine" class="h-mine">
            <div class="container container-top">
                <div class="row">
                    <div class="col-md-12 center">
                        <h2 class="tagline">How to Mine Primecoin</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h3 class="steps">To mine via CPU, please follow these steps:</h3>
                            <ul class="mine steps1">
                                <li><span>1. </span><span>Download wallet client</span></li>
                                <li><span>2. </span><span>Create a receive address</span></li>
                                <li>
                                    <span>3. </span><span>In “Help” menu, choose “Debug Window”</span></li>
                                <li><span>4. </span><span>Select “Console”</span></li>
                                <li><span>5. </span><span>Type “setgenerate true” + number of thread desired. Default is to
                                        use
                                        all available CPU power</span></li>
                                <li>
                                    <span>6. </span><span>To stop mining, type “setgenerate false”</span></li>
                            </ul>
                            <p class="mine-link">Please note that it is now profitable only to mine via GPU. Please learn more at
                                <a href="http://XpmForAll.org">XpmForAll.org</a> Solo GPU mining under development.</p>
                        </div>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div>

        <div class="cover"></div>

        <?php include("footer.php"); ?>
    </div><!--end page-show -->
</div><!--end view-->


<script src="assets/js/jQuery/jquery.lettering.js"></script>
<script src="assets/js/jQuery/jquery.textillate.js"></script>
<script src="assets/js/dynamic_nav.js"></script>
<script src="assets/js/canvas-particle.js"></script>

