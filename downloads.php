<?php include("header.php"); ?>

    <div class="container-wrapper container-top container-wrapper-prime">
      <div class="container container-top">
        <div class="row">
          <div class="col-md-12 center">
            <a id="downloads" name="downloads"></a>
            <h1>Primecoin Downloads</h1>
          </div>
        </div><!-- end row -->

        <div class="row downloads">
          <div class="col-md-4">
            <div class="inner windows">
              <span class="icon"></span>
              <h2 class="margin-top-10">Windows.</h2>
              <a href="https://github.com/primecoin/primecoin/releases/download/v0.1.4xpm/primecoin-0.1.4-win32-setup.exe" target="_blank" class="btn btn-lg btn-inverse">Download Wallet</a>
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
              <a href="https://github.com/primecoin/primecoin/releases/download/v0.1.4xpm/primecoin-qt-0.1.4-linux" target="_blank" class="btn btn-lg btn-inverse">Download Wallet</a>
            </div>
          </div><!-- end col -->
        </div><!-- end row -->

      </div><!-- end container -->
    </div>

    <div class="clear"></div>

    <div id="content" class="container">
      <div class="row">
        <div class="col-md-8">

          <div class="item">
          <h3>Download</h3>
          <ol>
          <li>If you are on <strong>Windows</strong>, download the win32 setup executable.</li>
          <li>If you are on <strong>Linux</strong>, download the Linux Qt client. For advanced users primecoind daemon can be downloaded directly from our <a href="https://github.com/primecoin/primecoin/releases/latest">github release page</a>.</li>
          <li><strong>Only 64-bit builds are maintained by Primecoin Core as of 0.1.4. Support for 32-bit clients has ended.</strong></li>
          <li>For Android, Primer is a light-weight Primecoin wallet with high security cold wallet support. Download the latest release apk from <a href="https://github.com/primecoin/primer-android/releases/latest">Primer's github repo</a>.</li>
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
          <a name="backing-up-and-moving-primecoin" class="anchor" href="#backing-up-and-moving-primecoin"><span class="octicon octicon-link"></span></a>Backing up and Moving Primecoin</h3>

          <p>If you want to move Primecoin, install the Primecoin wallet software on the target computer and drop wallet.dat into the install folder. To backup your wallet, make a copy of the file wallet.dat.</p>
          </div>

         
        </div>

        <div class="col-md-4 sidebar">

        <div class="block wrap">
          <h2>Index</h2>

          <ul>
            <li><a href="#downloads">1. Windows and Linux Downloads</a></li>
            <li><a href="#installation-on-windows">2. Installation on Windows</a></li>
            <li><a href="#installation-on-linux">3. Installation on Linux</a></li>
            <li><a href="#windows">4. Running on Windows</a></li>
            <li><a href="#linux">4. Running on Linux</a></li>
            <li><a href="#backing-up-and-moving-primecoin">5. Backing up and Moving Primecoin</a></li>
          </ul>
        </div>

        <?php include("sidebar.php"); ?>

        </div><!-- end sidebar -->
      </div>
    </div><!-- end container -->

    <div class="clear"></div>

<?php include("footer.php"); ?>
