<?php include("header.php"); ?>

    <div class="container-wrapper container-top container-wrapper-prime">
      <div class="container container-top">
        <div class="row">
          <div class="col-md-12 center">
            <h1>About Primecoin</h1>
          </div>
        </div><!-- end row -->
      </div><!-- end container -->
    </div>

    <div class="clear"></div>

    <div id="content" class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="item">
              <h3>What is Primecoin?</h3>
              <p>Primecoin is an innovative cryptocurrency, a form of digital currency secured by cryptography and issued through a decentralized mining market. Derived from Satoshi Nakamoto's Bitcoin, Primecoin introduces an unique form of proof-of-work based on prime numbers, and is the first cryptocurrency in the world designed with scientific computing as its work.</p>
          </div>

          <div class="item">
            <h3>What are the Advantages of Primecoin?</h3>
            <p>The innovative prime proof-of-work in Primecoin not only provides security and minting to the network, but also generates a special form of prime number chains of interest to mathematical research. Thus primecoin network is energy-multiuse, compared to bitcoin network. Primecoin is designed to sustain a prosperous mining market and high level of security, while maintaining good scarcity property like gold. Primecoin also processes payment transactions 10x faster than bitcoin network.</p>
          </div>

          <div class="item">
            <h3>What is the Scientific Value Behind Primecoin's Work?</h3>
            <p>Primecoin network searches for special prime number chains known as Cunningham chains and bi-twin chains. The distribution of these prime chains are not well-understood currently as even for its simplest case twin primes their infinite existence is not proven. The distribution of primes has been one of the most important discoveries in arithmetic, and the study of prime chains traces its lineage to the work of Riemann and prime number theorem, with connections to the deeper nature of the seemingly random pattern of prime distribution. Prime distribution is not just an abstract interest of mathematicians. Riemann's study revealed connections between Riemann zeta function and prime distribution, whereas later on Riemann zeta function has been shown to be highly relevant in other scientific disciplines such as physics, thus the study of prime distribution is an important part of the foundation of modern sciences.</p>
            <p>References on the purpose of searching for primes and prime patterns in general:</p>
            <ul>
            <li><a href="http://www.youtube.com/watch?v=PtsrAw1LR3E">Structure and randomness in the prime numbers - presentation by Terence Tao</a></li>
            <li><a href="http://primes.utm.edu/notes/faq/why.html">Why do people find primes</a></li>
            <li><a href="http://arstechnica.com/science/2013/02/ask-ars-why-spend-time-and-money-finding-new-prime-numbers/">Ask Ars: Why spend time and money finding new prime numbers?</a></li>
            </ul>
          </div>

          <div class="item">
            <h3>What does the Primecoin Currency Symbol Represent?</h3>
            <p>The currency symbol of primecoin is the greek letter psi (Ψ). This letter is chosen as a tribute to Riemann, as its shape symbolizes the Riemann zeta function (there is a graphical rendering used in Primecoin-Qt Windows setup screen). The horizontal bar not only standardizes to currency symbol convention, but also symbolizes one of the highest jewels of math - Riemann hypothesis.</p>
          </div>

          <div class="item">
            <h3>How Do I Check the Primes in the Block Chain?</h3>
            <p>In the 'getblock' (can be accessed through Qt debug window/console) output, there is a 'primeorigin' field. This is the origin of prime chain described in design paper, from which you can derive the prime numbers in the chain.</p>
            <p>Another field 'primechain' describe this prime chain type and length:</p>
            <ul>
            <li>1CC -&gt; Cunningham chain of 1st kind</li>
            <li>2CC -&gt; Cunningham chain of 2nd kind</li>
            <li>TWN -&gt; bi-twin chain</li>
            </ul>
            <p>The length part (displayed in hexadecimal) consists of an integral length and a fractional length. The integral length is what we understand normally about chain length, the fractional part is a score system assigned to the prime chain in order to make difficulty adjustment continuous.</p>
            <p>You can also refers to <a href="http://primeblock.kicks-ass.net/">Petr1fied's crawler site</a> to see the list of primes on block with primality testing.</p>
          </div>

          <div class="item">
            <h3>How Do I Mine Primecoin?</h3>
            <p>See <a class="internal present" href="/primecoin/primecoin/wiki/Installation-and-mining">Installation and Mining</a>.</p>
          </div>

          <div class="item">
            <h3>I Mined Some Primecoins, How Can I Find Out If I Broke Some World Records Or Not?</h3>
            <p>There is a 'listprimerecords' command since v0.1.2. It can be accessed from Qt debug window/console. There are two modes of this command, one lists records of any prime chain types, one lists records of a specific prime chain type.</p>
            <p>To list records of length 11 prime chains of any type in Primecoin:<br><code>listprimerecords 11</code><br>
            To list records of length 10 prime chains of specific type in Primecoin:<br><code>listprimerecords 10 1CC</code><br><code>listprimerecords 10 2CC</code><br><code>listprimerecords 10 TWN</code>  </p>
            <p>In the output of listprimerecords, it shows the date, block height, digits, origin and its primorial form of all the record prime chains in Primecoin block chain. There is also an 'ismine' field for each record, it would show value 'true' if the miner key belongs to your wallet.</p>
            <p>Refer to <a class="internal present" href="/primecoin/primecoin/wiki/World-records">world records</a> for the current records and milestones achieved by Primecoin network.</p>
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
            <p><a href="http://www.peercointalk.org/">Join the forums</a> and ask your question you might have. The community of Primecoin will help you out.</p>
          </div>

          <div class="block wrap info">
            <h2>Quick Links</h2>
            <ul>
              <li><a href="http://www.peercointalk.org/">Wiki</a></li>
              <li><a href="http://www.peercointalk.org/">Forums</a></li>
              <li><a href="http://www.peercointalk.org/">How to Mine</a></li>
              <li><a href="http://www.peercointalk.org/">What is Minting</a></li>
              <li><a href="http://www.peercointalk.org/">Exchange Markets</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div><!-- end container -->

<?php include("footer.php"); ?>
