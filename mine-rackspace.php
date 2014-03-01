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
                    <h1>Mine Primecoin on Rackspace</h1>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>

    <div class="clear"></div>

    <div class="container" id="content">
        <div class="row">
            <div class="col-md-8">

              <div class="item">
                <h3>Introduction</h3>
                <p>
                    This tutorial will teach you step-by-step how to mine Primecoin on the Rackspace cloud computing platform. Rackspace offers a six month 50 dollar per month trial (300 dollar total!) for new users.
                    A credit card is required for the trial and after that for buying pay-as-you-go server time. You will be called to verify the information you entered and to test if you apply for the trial. As Primecoin mining has 
                    scientific benefits you can tell them you'll use the server for scientific data crunching.
                </p>
              </div>    
            
              <div class="item">
                <h3>Mining requirements</h3><br>
                <div align="center"><a href="http://developer.rackspace.com/devtrial/"><img src="img/rackspace01.png" style="height: 366px; width: 388px;"></img></a></div>
              </div>
              
             <div class="item">
                <h4><strong>Registering an account</strong></h4>    
                <p>
                    The first thing that you'll need is an account at the Rackspace cloud hosting platform. If you have not used Rackspace before you can register for the trial <a href="http://developer.rackspace.com/devtrial/">here</a>.
                    Otherwise you can register for a normal account <a href="https://cart.rackspace.com/cloud/">here</a>. Rackspace is known to ban miners from time to time so do not charge your account with too much credit. 
                </p>
                
                <p>
                    For the trail, be sure to click the "Infrastructure Service Level" option on the registration screen, or you will be billed for higher-tier support. The promo code is entered automatically.
                    The green check mark shows us that the promo code is accepted.
                </p>
                <img src="img/rackspace03.png" style="width: 629px; height: 346px;"></img> <br><br> <br>    
                
                <h4><strong>Local software requirements:</strong></h4>  
                <p>
                    <ul>
                      <li><a href="http://primecoin.io/downloads.php">Primecoin Wallet Software</a> For generating a Primecoin adress and holding funds. </li>
                      <li><a href="http://the.earth.li/~sgtatham/putty/latest/x86/putty-0.63-installer.exe">Putty</a> SSH software for Windows (link to installer)</li>
                    </ul>
                </p>
            </div>

              <div class="item">
                <h3>Set-up a server</h3>
              </div>

              <div class="item">
                <h4><strong>Introduction</strong></h4>  
                <p>
                    As you login to the Rackspace control panel you see a very nice overview of the services they provide. Servers you create will be displayed here and you can manage them here as well. We'll need a server of course first, so click on Create Server.
                </p>
                
                <img src="img/rackspace04.png"></img> <br><br>
                
                <h4><strong>Configuration</strong></h4> 
                        
                <p>
                    First we have to pick a name for the server. Pick something unique. Now select Ubuntu 13.10 as the operating system. 
                </p>
                <p>
                    <img src="img/rackspace05.png" style="width: 703px; height: 667px;"></img>
                </p><br>
                <p>
                    As Primecoin mining requires a lot of CPU power, we'll choose a CPU heavy configuration, that is relatively cheap compared to other configurations.
                    This so we can save on RAM and storage availability costs. The price here is displayed in your local currency. Now click create server at the bottom of the page.
                </p>
                <p>
                    <img src="img/rackspace06.png" style="width: 691px; height: 402px;"></img>
                </p><br>    
                
                <p>
                    Rackspace will now set-up and start your server. You will see a password pop-up like the one below. Write the password down on a piece of paper, we'll need it in a few minutes.
                </p>
                <p>
                    <img src="img/rackspace07.png" style="width: 425px; height: 260px;"></img>
                </p><br>

                <p>
                    The page you'll see now displays the specifics of the server you just started. The network specifics are displayed at the bottom of the page. Copy the IPv4 ip adress.
                </p>
                <p>
                    <img src="img/rackspace08.png" style="width: 719px; height: 208px;"></img>
                </p><br>

                <div class="item">
                    <h3>Connect to the server</h3>
                </div>
        
                    Windows users: <br>
                        <ul>
                            <li>Install Putty</li>
                            <li>Start Putty and paste the server ip adress in the connection field like the image below, and click Open</li>
                            <li>Click Yes on the Security Error</li>
                            <li>The text window will ask you for a username, enter: root</li>
                            <li>Enter the password you wrote down and hit enter
                            <li>After a few seconds you will see text like the image below the OSX instructions</li>
                        </ul>
                    <p>
                        <img src="img/rackspace091.png" style="height: 93px; width: 287px;">
                    </p>                
                    <br>
                    <br>Mac and Linux users: <br>
                        <ul>
                            <li>Open Terminal.app located in /Applications/Utilities/ or a terminal</li>
                            <li>Enter: ssh root@ *paste/write down your server ip here*</li>
                            <li>Enter: root</li>
                            <li>Enter the password you wrote down and hit enter</li>
                            <li>After a few seconds you will see text like the image below</li>
                        </ul>
                        <img src="img/rackspace09.png"><br><br>
        
                </p>

                <h4><strong>Setting-up the miner</strong></h4>  
                <br>
                <p>
                    Now copy over these commands. You can paste in Putty by right-clicking.
                </p>
                <P>
                    <pre>apt-get update && apt-get install -y yasm  git make g++ build-essential libminiupnpc-dev libboost-all-dev libdb++-dev libgmp-dev libssl-dev dos2unix && git clone https://github.com/thbaumbach/primecoin && cd ~/primecoin/src && make -f makefile.unix</pre> 
                </P>
                <p>
                    The command above will take several minutes to complete. When the command line shows the "#" symbol again you can continue. The next step is to set-up and start your miner. We'll use the Beeeeer.org pool, which requires no set-up. Replace the "your xpm address here" in the command with your real address and copy the command to the server and press enter. Adjust the -genproclimit flag with the number of 's you ordered. If you picked an eight core server edit it as "-genproclimit=8". You don't need to change the password field. 
                </p>
                <p>
                    <pre>screen ./primeminer -poolip=54.200.248.75 -poolport=1337 -pooluser="your xpm adress here" -poolpassword=XXXXX -genproclimit=8</pre>
                </p>
                <p>
                    Congratulations, you are now mining! The screen output should look like the picture below. The mining speed is accented in the red box. The speed displayed below is not the speed you will get. This will be much higher.
                </p>            
                <p>
                    <a href="#"><img src="img/DO8.png"></img></a><br>
                </p>
                <p>
                    You can close the Putty or command line window now. When reconnecting with the server, type this to see the mining output again. 
                </p>            
                <p>
                    <pre>screen -DDR</pre>
                </p>
                
                <h4><strong>Payout and stats</strong></h4>
                <p> The pool will automatically pay-out to the used address if you reach 3.0 XPM. You can run multiple miners on the same address to speed up the mining process. Check your current balance on the pool by filling in your address in this url. 
                    <pre>http://beeeeer.org/user/*copy your address here*</pre><br>
                </p>

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