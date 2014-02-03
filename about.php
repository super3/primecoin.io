
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
          <div id="what-xpm" class="item">
              <h3>What is Primecoin?</h3>
              <p>Primecoin is an innovative cryptocurrency, a form of digital currency secured by cryptography and issued through a decentralized mining market. Derived from Satoshi Nakamoto's Bitcoin, Primecoin introduces an unique form of proof-of-work based on prime numbers, and is the first cryptocurrency in the world designed with scientific computing as its work.</p>
          </div>

          <div class="item">
            <h3 id="advantages-xpm">What are the Advantages of Primecoin?</h3>
            <p>The innovative prime proof-of-work in Primecoin not only provides security and minting to the network, but also generates a special form of prime number chains of interest to mathematical research. Thus primecoin network is energy-multiuse, compared to bitcoin network. Primecoin is designed to sustain a prosperous mining market and high level of security, while maintaining good scarcity property like gold. Primecoin also processes payment transactions 10x faster than bitcoin network.</p>
          </div>

          <div class="item">
            <h3 id="value-xpm">What is the Scientific Value Behind Primecoin's Work?</h3>
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
        </div>

        <div class="col-md-4 sidebar">

          <?php include("sidebar.php"); ?>

        </div><!-- end sidebar -->
      </div>
    </div><!-- end container -->

<?php include("footer.php"); ?>
