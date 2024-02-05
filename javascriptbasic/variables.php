<?php
$code1Html = '';

$code1Css = '';

$code1Js = 'let age = 25;
console.log(age);';

$code1 = "<script>\n" . $code1Js . "\n</script>";

$code2Html = '';

$code2Css = '';

$code2Js = 'let age = 25;
console.log(age);

const salary = 80000;
console.log(salary);';

$code2 = "<script>\n" . $code2Js . "\n</script>";

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
        <h1>Variables</h1>
        <img src="<?= $baseFolder ?>javascriptbasic/images/variables-banner.gif" alt="element" class="imageresponsive" />

        <hr />

        <div class="spacer"></div>
        <h2>Let</h2>
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
              <p>25</p>
            </div>
          </div>
        </div>
        <p>
          Let can be re-assigned
        </p>

        <hr />
        <div class="spacer"></div>
        <h2>Const</h2>
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
              <p>25</p>
              <p>80000</p>
            </div>
          </div>
        </div>
        <p>
          Const can’t be re-assigned
        </p>

        <hr />
        <div class="spacer">
          <h2>Summary</h2>
          <dl>
            <dt>&bull; let</dt><br>
            <dt>&bull; const</dt><br>
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