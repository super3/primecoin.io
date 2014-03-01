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
                    <h1>Mine Primecoin on Azure</h1>
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
                    This tutorial will teach you step-by-step how to mine Primecoin on the Azure cloud computing platform. Azure offers a one month 150 dollar trial for new users.
                    A credit card is required for the trial and after that for buying pay-as-you-go server time. 
                </p>
              </div>    
            
              <div class="item">
                <h3>Mining requirements</h3>
                <a href="http://www.windowsazure.com/en-us/pricing/free-trial/"><img src="img/azure01.png"></img></a>
              </div>
              
             <div class="item">
                <h4><strong>Registering an account</strong></h4>    
                <p>
                    The first thing that you'll need is an account at the Azure cloud hosting platform. If you have not used Azure before you can register for the trial <a href="http://www.windowsazure.com/en-us/pricing/free-trial/">here</a>.
                    Otherwise you can register for a normal account <a href="http://www.windowsazure.com/en-us/pricing/purchase-options/">here</a>. There are multiple payment options, with discounts for monthly payment plans. 
                    However for now the best start is either the trial or to pay-as-you-go for the servers.
                </p>
                
                <h4><strong>Local software</strong></h4>    
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
                    Azure as a cloud hosting network offers multiple operating system types and versions for its virtual servers. Setting up a miner on a Windows server, with a graphical user interface, is easier.
                    However the Windows instances, as the servers are called, are more expensive per day and less powerful for mining Primecoin. The best miners for Primecoin are the powerful multi-core instances with a Linux distributions. 
                    Login first and you will see a screen like below. All servers that you use are in the central portion of the screen, or you can access them were the blue box is. As we have not configured a server yet, we will hit the button in the red box.
                </p>
                
                <img src="img/azure02.png"></img> <br><br>
                
                <h4><strong>Configuration</strong></h4> 
                        
                <p>
                    As mining Primecoin is computationally heavy (i.e. it uses a lot of processing power) we will pick a compute instance. We will need a virtual machine, that we will set-up on our own. Give it a unique name, this is the name of the server. You will need this to access the server.
                    Now pick Ubuntu 14.04 LTS as the server operating system. As the free trial limits us to one month usage and 20 cores we will pick an eight core server. (My configuration was two eight core servers and one four core server).
                    Finally pick a good password. Now click "Create a virtual machine".         
                </p>
                <p>
                    <img src="img/azure03.png"></img>
                </p><br>
                
                <p>
                    <img src="img/azure04.png"></img>
                </p><br>            
                <p>
                    As Azure creates your server you'll see a message like the image above this text. We'll now need an SSH client to connect to the server:
                    <br>
                    <br>Windows users: <br>
                        <ul>
                            <li>Install Putty</li>
                            <li>Start Putty and enter the server adress like the image below, and click Open</li>
                            <li>Click Yes on the Security Error</li>
                            <li>The text window will ask you for a username, enter: azureuser</li>
                            <li>Enter the password you set for the server and hit enter
                            <li>After a few seconds you will see text like the image below</li>
                        </ul>
                    <p>
                        <img src="img/azure05.png" style="height: 466px; width: 448px;">
                    </p>                
                    <br>
                    <br>Mac and Linux users: <br>
                        <ul>
                            <li>Open Terminal.app located in /Applications/Utilities/ or a terminal</li>
                            <li>Enter: ssh azureuser@UNIQUESERVERNAME.cloudapp.net</li>
                            <li>Enter: azureuser</li>
                            <li>Enter your password</li>
                            <li>After a few seconds you will see text like the image below</li>
                        </ul>
                        <img src="img/azure06.png"><br><br>
        
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