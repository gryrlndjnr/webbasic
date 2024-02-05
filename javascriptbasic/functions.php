<?php
$code1Html = '';

$code1Css = '';

$code1Js = 'function greet() {
  console.log("Good morning Gary");
}

greet();';

$code1 = "<script>\n" . $code1Js . "\n</script>";

$code2Html = '';

$code2Css = '';

$code2Js = 'function greet(username) {
  console.log("Good morning " + username);
}

greet("Gary");
greet("Jonathan");
greet("Aubrey");';

$code2 = "<script>\n" . $code2Js . "\n</script>";

$code3Html = '';

$code3Css = '';

$code3Js = 'const arrowSum = (a, b) => {
  return a + b;
};

const sum = arrowSum(20, 23);
console.log(sum);

// const arrowSum = (a, b) => a + b;
// const sum = arrowSum(20, 23);
// console.log(sum);';

$code3 = "<script>\n" . $code3Js . "\n</script>";


?>

<!-- ======================================== -->
<?php require_once("../opening.php") ?>
<div id="app">
  <?php require_once("../header.php"); ?>
  <main id="main-content">
    <!-- ======================================== -->

    <section id="full-height" class="full-height">

      <nav>
        <?php include 'rightsidebar.php'; ?>
      </nav>

      <article id="article" class="spacer">
        <h1>Functions</h1>
        <img src="<?= $baseFolder ?>javascriptbasic/images/functions-banner2.png" alt="element" class="imageresponsive" />

        <p>A JavaScript function is a block of design to perform a particular task</p>

        <p>Example: Add two numbers, multiply two numbers etc..</p>

        <p>Functions are reusable as they can be define once and can be called with different values resulting in
          different results</p>

        <p>Function help divide a complex problem into a smaller chunks and makes your program easy to understand and
          maintain</p>

        <hr />

        <div class="spacer"></div>
        <h2>Functions</h2>
        <img src="<?= $baseFolder ?>javascriptbasic/images/functions-banner.gif" alt="element" class="imageresponsive" />
        <div class="spacer"></div>

        <div class="row">
          <div class="column" style="background-color: #4a366a; border: 1px solid white">
            <h3 style="text-align: center; color: white">CODE</h3>

            <pre><code class="language-html line-numbers"><?= htmlentities($code1) ?></code></pre>

            <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
              <input type="hidden" name="html" value="<?= htmlentities($code1Html) ?>">
              <input type="hidden" name="css" value="<?= htmlentities($code1Css) ?>">
              <input type="hidden" name="js" value="<?= htmlentities($code1Js) ?>">
              <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                <span style="transition: color 0.3s;">Open Code Editor</span>
              </button>
            </form>
          </div>
          <div class="column" style="display: flex; flex-direction:column; background-color: #4a366a; border: 1px solid white">
            <h3 style="text-align: center; color: white">RESULT</h3>
            <div style="flex: 1; background-color: white; padding: 5px;">
              <p>Good morning Gary</p>
            </div>
          </div>
        </div>

        <p>
          Try this<br />
          greet();<br />
          greet();<br />
        </p>

        <hr />
        <div class="spacer"></div>
        <h2>For multiple username</h2>
        <div class="row">
          <div class="column" style="background-color: #4a366a; border: 1px solid white">
            <h3 style="text-align: center; color: white">CODE</h3>

            <pre><code class="language-html line-numbers"><?= htmlentities($code2) ?></code></pre>

            <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
              <input type="hidden" name="html" value="<?= htmlentities($code2Html) ?>">
              <input type="hidden" name="css" value="<?= htmlentities($code2Css) ?>">
              <input type="hidden" name="js" value="<?= htmlentities($code2Js) ?>">
              <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                <span style="transition: color 0.3s;">Open Code Editor</span>
              </button>
            </form>
          </div>
          <div class="column" style="display: flex; flex-direction:column; background-color: #4a366a; border: 1px solid white">
            <h3 style="text-align: center; color: white">RESULT</h3>
            <div style="flex: 1; background-color: white; padding: 5px;">
              <p>Good morning Gary</p>
              <p>Good morning Jonathan</p>
              <p>Good morning Aubrey</p>
            </div>
          </div>
        </div>
        <p>
          username is a parameter Gary, Jonathan, and Aubrey are called function arguments
        </p>

        <hr />
        <div class="spacer"></div>
        <h2>For adding numbers</h2>
        <div class="row">
          <div class="column" style="background-color: #4a366a; border: 1px solid white">
            <h3 style="text-align: center; color: white">CODE</h3>

            <pre><code class="language-html line-numbers"><?= htmlentities($code3) ?></code></pre>

            <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
              <input type="hidden" name="html" value="<?= htmlentities($code3Html) ?>">
              <input type="hidden" name="css" value="<?= htmlentities($code3Css) ?>">
              <input type="hidden" name="js" value="<?= htmlentities($code3Js) ?>">
              <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                <span style="transition: color 0.3s;">Open Code Editor</span>
              </button>
            </form>
          </div>
          <div class="column" style="display: flex; flex-direction:column; background-color: #4a366a; border: 1px solid white">
            <h3 style="text-align: center; color: white">RESULT</h3>
            <div style="flex: 1; background-color: white; padding: 5px;">
              <p>43</p>
            </div>
          </div>
        </div>
        <p>
          adding 2 numbers
        </p>

        <hr />
        <div class="spacer">
          <h2>Summary</h2>
          <dl>
            <dt>&bull; Functions</dt><br>
          </dl>
        </div>
      </article>
    </section>

    <!-- ======================================== -->
  </main>
  <?php require_once("../footer.php"); ?>
</div>
<?php require_once("../closing.php") ?>
<!-- ======================================== -->