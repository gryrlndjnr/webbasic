<?php
$code1Html = '<div class="em-container">
Em unit
<div class="em">EM child element</div>
</div>
<div class="rem">Rem unit</div>

<!-- Open Code Editor to see the result -->
';
$code1Css = '.em-container {
  font-size: 20px;
  height: 2em;
}
.em {
  font-size: 1.5em;
}
.rem {
  font-size: 2rem;
  height: calc(50vh - 100px);
  border: 1px solid #333;
}';
$code1Js = '';

$code2Html = '<div class="em-container">
Em unit
<div class="em">EM child element</div>
</div>
<div class="rem">Rem unit</div>';
$code2Css = '.em-container {
  font-size: 20px;
  height: 2em;
}
.em {
  font-size: 1.5em;
}
.rem {
  font-size: 2rem;
  height: max(50vh, 600px);
  border: 1px solid #333;
}';
$code2Js = '';

$code3Html = '<div class="em-container">
Em unit
<div class="em">EM child element</div>
</div>
<div class="rem">Rem unit</div>';
$code3Css = '.em-container {
  font-size: 20px;
  height: 2em;
}
.em {
  font-size: 1.5em;
}
.rem {
  font-size: 2rem;
  height: min(50vh, 600px);
  border: 1px solid #333;
}
';
$code3Js = '';

$code4Html = '';
$code4Css = '';
$code4Js = '';

$code5Html = '';
$code5Css = '';
$code5Js = '';
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
        <div>
          <h1>CSS Math Functions</h1>
          <img src="<?= $baseFolder ?>cssbasic/images/math function.gif" alt="element" class="imageresponsive" />
        </div>

        <hr />
        <div class="spacer">
          <h2>Calc</h2>
          <div class="row">
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">CODE</h3>
              <pre><code class="language-html line-numbers"><?= htmlentities($code1Html) ?></code>
                  </pre>
              <!-- Button with updated inline styles -->

              <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
                <input type="hidden" name="html" value="<?= htmlentities($code1Html) ?>">
                <input type="hidden" name="css" value="<?= htmlentities($code1Css) ?>">
                <input type="hidden" name="js" value="<?= htmlentities($code1Js) ?>">
                <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                  <span style="transition: color 0.3s;">Open Code Editor</span>
                </button>
              </form>
            </div>
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">RESULT</h3>
              <div style="background-color: white; padding: 5px;">
                <!-- ================================= -->
                <div style="font-size: 20px; height: 2em;">Em unit
                  <div style="font-size: 1.5em;">EM child element</div>
                </div>
                <div style="font-size: 2rem; height: 50vh; border: 1px solid #333;">Rem unit</div>

                <!-- Open Code Editor to check the result -->
                <!-- ================================= -->
              </div>
            </div>

          </div>
        </div>
        <div>
          <p>
            Change height: 50vh; To height: calc(50vh - 100px);
          </p>
        </div>

        <hr />
        <div class="spacer">
          <h2>Max</h2>
          <div class="row">
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">CODE</h3>
              <pre><code class="language-html line-numbers"><?= htmlentities($code1Html) ?></code>
                  </pre>
              <!-- Button with updated inline styles -->

              <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
                <input type="hidden" name="html" value="<?= htmlentities($code2Html) ?>">
                <input type="hidden" name="css" value="<?= htmlentities($code2Css) ?>">
                <input type="hidden" name="js" value="<?= htmlentities($code2Js) ?>">
                <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                  <span style="transition: color 0.3s;">Open Code Editor</span>
                </button>
              </form>
            </div>
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">RESULT</h3>
              <div style="background-color: white; padding: 5px;">
                <!-- ================================= -->
                <div style="font-size: 20px; height: 2em;">Em unit
                  <div style="font-size: 1.5em;">EM child element</div>
                </div>
                <div style="font-size: 2rem; height: 50vh; border: 1px solid #333;">Rem unit</div>

                <!-- Open Code Editor to check the result -->
                <!-- ================================= -->
              </div>
            </div>

          </div>
        </div>
        <div>
          <p>
            Change height: calc(50vh - 10px); To height: max(50vh, 600px);.
          </p>
        </div>

        <hr />
        <div class="spacer">
          <h2>Min</h2>
          <div class="row">
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">CODE</h3>
              <pre><code class="language-html line-numbers"><?= htmlentities($code1Html) ?></code>
                  </pre>
              <!-- Button with updated inline styles -->

              <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
                <input type="hidden" name="html" value="<?= htmlentities($code3Html) ?>">
                <input type="hidden" name="css" value="<?= htmlentities($code3Css) ?>">
                <input type="hidden" name="js" value="<?= htmlentities($code3Js) ?>">
                <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                  <span style="transition: color 0.3s;">Open Code Editor</span>
                </button>
              </form>
            </div>
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">RESULT</h3>
              <div style="background-color: white; padding: 5px;">
                <!-- ================================= -->
                <div style="font-size: 20px; height: 2em;">Em unit
                  <div style="font-size: 1.5em;">EM child element</div>
                </div>
                <div style="font-size: 2rem; height: 50vh; border: 1px solid #333;">Rem unit</div>

                <!-- Open Code Editor to check the result -->
                <!-- ================================= -->
              </div>
            </div>

          </div>
        </div>
        <div>
          <p>
            Change height: max(50vh, 600px); To height: min(50vh, 600px);.
          </p>
        </div>


        <hr />
        <div class="spacer">
          <h2>Summary</h2>
          <dl>
            <dt>&bull; Calc</dt><br>
            <dt>&bull; Max</dt><br>
            <dt>&bull; Min</dt><br>
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