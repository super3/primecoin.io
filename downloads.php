<?php include("header.php"); ?>

    <div class="container-wrapper container-top container-wrapper-prime">
      <div class="container container-top">
        <div class="row">
          <div class="col-md-12 center">
            <h1>Primecoin Downloads</h1>
          </div>
        </div><!-- end row -->

        <div class="row downloads">
          <div class="col-md-4">
            <div class="inner windows">
              <span class="icon"></span>
              <h2 class="margin-top-10">Windows.</h2>
              <a href="http://sourceforge.net/projects/primecoins/files/0.1.2/primecoin-0.1.2-win32-setup.exe/download" target="_blank" class="btn btn-lg btn-inverse">Download Wallet</a>
            </div>
          </div><!-- end col -->
          <!--<div class="col-md-4">
            <div class="inner mac">
              <span class="icon"></span>
              <h2 class="margin-top-10">Mac.</h2>
              <a href="features.html" class="btn btn-lg btn-inverse">Download Wallet</a>
            </div>
          </div> end col -->
          <div class="col-md-4">
            <div class="inner linux">
              <span class="icon"></span>
              <h2 class="margin-top-10">Linux.</h2>
              <a href="http://sourceforge.net/projects/primecoins/files/0.1.2/primecoin-0.1.2-linux.tar.gz/download" target="_blank" class="btn btn-lg btn-inverse">Download Wallet</a>
            </div>
          </div><!-- end col -->
        </div><!-- end row -->

      </div><!-- end container -->
    </div>

    <div class="clear"></div>

    <div id="content" class="container">
      <div class="row">
        <div class="col-md-8">
          <h2>Download &amp; Installation</h2>

          <div class="item">
          <h3>Download</h3>
          <ol>
          <li>If you are <strong>Windows</strong>, download the win32 setup executable.</li>
          <li>If you are on a <strong>Linux</strong>-based distribution, download the .tar.gz. The Linux version <strong>does</strong> contain 32-bit and 64-bit binaries, as well as the source in the event you wish to compile.</li>
          </ol>
          </div>

          <div class="item">
          <h3>
          <a name="installation-on-windows" class="anchor" href="#installation-on-windows"><span class="octicon octicon-link"></span></a>Installation on Windows</h3>
          <p>To install Primecoin on Windows, download the executable and run the installer.</p>
          </div>

          <div class="item">
          <h3>
          <a name="installation-on-linux" class="anchor" href="#installation-on-linux"><span class="octicon octicon-link"></span></a>Installation on Linux</h3>

          <p>On Linux-based distributions, you can obviously go the route of either extracting the tar.gz through a file manager (or unzipping program) or CLI. For the purposes of this installation guide, we'll simply stick with command-line interface.</p>

          <p>Navigate to the directory you downloaded the file to.</p>

          <div class="highlight"><pre><span class="n">cd</span> <span class="o">~/</span><span class="n">Downloads</span>
          </pre></div>

          <p>Extract the tar.gz</p>

          <div class="highlight"><pre><span class="n">tar</span> <span class="o">-</span><span class="n">xzvf</span> <span class="n">primecoin</span><span class="o">-*-</span><span class="n">linux</span><span class="p">.</span><span class="n">tar</span><span class="p">.</span><span class="n">gz</span>
          </pre></div>

          <p>Install the client.</p>

          <div class="highlight"><pre><span class="n">sudo</span> <span class="n">cp</span> <span class="n">primecoin</span><span class="err">*/</span><span class="n">bin</span><span class="o">/</span><span class="p">[</span><span class="n">architecture</span><span class="p">]</span><span class="o">/</span><span class="n">primecoind</span> <span class="o">/</span><span class="n">usr</span><span class="o">/</span><span class="n">local</span><span class="o">/</span><span class="n">bin</span><span class="o">/</span><span class="n">primecoind</span>
          </pre></div>

          <p>Replace <strong>[architecture]</strong> with 32 or 64 depending on whether you have a 32-bit or 64-bit system.</p>

          <p>Make the daemon a service.</p>

          <div class="highlight"><pre><span class="n">service</span><span class="o">=</span><span class="n">primecoind</span>
          </pre>
          </div>
          </div>
          <div class="item">
          <h3>
          <a name="running-primecoin" class="anchor" href="#running-primecoin"><span class="octicon octicon-link"></span></a>Running Primecoin</h3>

          <p>Note: If you have never run Primecoin before then please allow time for the blockchain to be downloaded.</p>
          </div>

          <div class="item">
          <h3>
          <a name="windows" class="anchor" href="#windows"><span class="octicon octicon-link"></span></a>Windows</h3>

          <p>To run Primecoin, simply start the Windows client. If you've never run Primecoin before, please allow it time to synchronize the blockchain. You will be able to tell when it has finished synchronizing when the client is no longer providing updates, such as "6 weeks"..."5 weeks", etc. This does <strong>not</strong> indicate how long it will take, rather how much of the blockchain will be downloaded. The time it will take for it to synchronize depends on your Internet speeds.</p>
          </div>

          <div class="item">
          <h3>
          <a name="linux" class="anchor" href="#linux"><span class="octicon octicon-link"></span></a>Linux</h3>

          <p>To run Primecoin, enter the following command, which will run the Primecoin daemon in the background and have it running after you exit the terminal.</p>

          <div class="highlight"><pre><span class="n">primecoind</span> <span class="o">--</span><span class="n">daemon</span>
          </pre></div>

          <p>To get a list of commands type:
          </p><div class="highlight"><pre><span class="n">primecoind</span> <span class="n">help</span>
          </pre></div>

          <p>To get help with a command type:
          </p><div class="highlight"><pre><span class="n">primecoind</span> <span class="n">help</span> <span class="p">[</span><span class="n">command</span><span class="p">]</span>
          </pre></div>

          <p>To stop the daemon type:
          </p><div class="highlight"><pre><span class="n">primecoind</span> <span class="n">stop</span>
          </pre></div>

          <p>To get your mining status type:
          </p><div class="highlight"><pre><span class="n">primecoind</span> <span class="n">getmininginfo</span>
          </pre></div>

          <p>To get your balance type (tells how much Primecoin you have in your wallet):
          </p><div class="highlight"><pre><span class="n">primecoind</span> <span class="n">getbalance</span>
          </pre></div>

          <p>To see your transactions (including rewards for generating) type:
          </p><div class="highlight"><pre><span class="n">primecoind</span> <span class="n">gettransactions</span>
          </pre></div>

          <p>To send primecoins to another address type:
          </p><div class="highlight"><pre><span class="n">primecoind</span> <span class="n">sendtoaddress</span> <span class="p">[</span><span class="n">address</span><span class="p">]</span> <span class="p">[</span><span class="n">amount</span><span class="p">]</span> <span class="s">"[comment]"</span>
          </pre></div>

          <p>For example:
          </p><div class="highlight"><pre><span class="n">primecoind</span> <span class="n">sendtoaddress</span> <span class="n">AGx4qUkpKGLtBAib7AwzMyvRRFWChfnSdC</span> <span class="mi">1</span> <span class="s">"Thanks for your help with setting up Primecoin"</span>
          </pre></div>
          </div>

          <div class="item">
          <h3>
          <a name="mining" class="anchor" href="#mining"><span class="octicon octicon-link"></span></a>Mining</h3>
          <h4>
          <a name="windows-1" class="anchor" href="#windows-1"><span class="octicon octicon-link"></span></a><strong>Windows</strong></h4>

          <p>For some reason the Windows client will not start generating (<em>the Primecoin equivalent to Bitcoin's "hashing"</em>) until you run a command in the debug window. To do so:</p>

          <ol>
          <li>Go to Help.</li>
          <li>Click Debug Window.</li>
          </ol><p>This is the console where you will execute all commands to the Primecoin daemon.</p>

          <p>Type this command to use all CPU cores:
          </p><div class="highlight"><pre><span class="n">setgenerate</span> <span class="nb">true</span> <span class="o">-</span><span class="mi">1</span>
          </pre></div>

          <p>If you want to use a specific number of cores, instead of -1, type the number of cores.</p>

          <p>You can then type the following to see the status of generation.
          </p><div class="highlight"><pre><span class="n">getmininginfo</span>
          </pre></div>
          <p>Screenshot of the getmininginfo response, where "primepersec" is your generation rate: <a href="http://i.imgur.com/WfiagnJ.png">http://i.imgur.com/WfiagnJ.png</a></p>
          <p>If you want to turn generation off you can use:</p>
          <div class="highlight">
          <pre><span class="n">setgenerate</span> <span class="nb">false</span></pre>
          </div>
          <p>This allows you to keep the wallet running without generating to receive/send transactions, messages, etc.</p>
          <p>You are now generating. Transactions will appear in the Overview window. When you get paid for generating it will appear as an incoming transaction.</p>
          <p>Screenshot of incoming transactions: <a href="http://i.imgur.com/ogqc1Mv.png">http://i.imgur.com/ogqc1Mv.png</a></p>
          </div>

          <div class="item">
            <h4><strong>Linux</strong></h4>
            <p>To generate Primecoin under Linux, refer to the commands above or by using the Primecoin help command.</p>
          </div>

          <div class="item">
          <h3>
          <a name="backing-up-and-moving-primecoin" class="anchor" href="#backing-up-and-moving-primecoin"><span class="octicon octicon-link"></span></a>Backing up and Moving Primecoin</h3>

          <p>If you want to move Primecoin, install the Primecoin wallet software on the target computer and drop wallet.dat into the install folder. To backup your wallet, make a copy of the file wallet.dat.</p>
          </div>

          <div class="item">
          <h3>
          <a name="noteworthy-links" class="anchor" href="#noteworthy-links"><span class="octicon octicon-link"></span></a>Noteworthy Links</h3>
          <p>A GPU miner is being worked on <a href="https://bitcointalk.org/index.php?topic=273637">here</a>.</p>
          <p>Weekly updates on Primecoin development are <a href="https://bitcointalk.org/index.php?topic=114994.40">here</a>.</p>
          <p>You can exchange Primecoin for prepaid debit cards <a href="http://www.visa4crypto.com/">here</a>.</p>
          <p>Participate on the official forum <a href="http://www.ppcointalk.org/">here</a>.</p>
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

    <div class="clear"></div>

    <div class="container-wrapper container-wrapper-bridge">
          <div class="container">

          <div class="row">
            <div class="col-md-12 center">
              <h2 class="tagline">Primecoin resources</h2>
            </div>
          </div>

            <div class="row">
              <div class="col-md-5 center">
                <div class="space-20"></div>
                <ul class="features-icon-list">
                  <li>
                    <span class="fa fa-cloud"></span>
                    <h3>Downloads</h3>
                    <p>You can easily <a href="downloads.php">download</a> and install the Primecoin Wallet on your Windows PC, Mac or Linux computer.</p>
                  </li>
                  <li>
                    <span class="fa fa-question"></span>
                    <h3>Wiki</h3>
                    <p>If you have any other questions which still are unanswered, you can read the <a href="https://github.com/primecoin/primecoin/wiki">Primecoin Wiki</a>.</p>
                  </li>
                  <li>
                    <span class="fa fa-comment"></span>
                    <h3>Forums</h3>
                    <p>Join the <a href="http://www.peercointalk.org/">forums</a> and lean what is happening around Primecoin and discuss with other Primecoiners.</p>
                  </li>
                </ul>
              </div><!-- end col -->
              <div class="col-md-5 col-md-offset-2 center">
                <div class="space-20"></div>
                <ul class="features-icon-list">
                  <li>
                    <span class="fa fa-flask"></span>
                    <h3>How to Mine</h3>
                    <p>Donec sed odio dui. Fusce dapibus, tellus ac cursus <a href="#">commodo</a>, tortor mauris condimentum nibh.</p>
                  </li>
                  <li>
                    <span class="fa fa-leaf"></span>
                    <h3>What is Minting</h3>
                    <p>Donec sed odio dui. Fusce dapibus, tellus ac cursus commodo, tortor mauris <a href="#">condimentum</a> nibh.</p>
                  </li>
                  <li>
                    <span class="fa fa-map-marker"></span>
                    <h3>Exchange Markets</h3>
                    <p>You can buy / sell Primecoins on many trustworthy markets. <a href="#">Here</a> you will find a complete list.</p>
                  </li>
                </ul>
              </div><!-- end col -->
            </div><!-- end row -->
          </div><!-- end container -->
        </div>

<?php include("footer.php"); ?>
