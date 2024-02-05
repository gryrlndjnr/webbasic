<?php
$code1Html = '<div class="em-container">Em unit</div>
';
$code1Css = '.em-container {
  font-size: 20px;
  height: 2em;
}  
';
$code1Js = '';

$code2Html = '<div class="em-container">
  Em unit
  <div class="em">EM child element</div>
</div>
';
$code2Css = '.em-container {
  font-size: 20px;
  height: 2em;
}
.em {
  font-size: 1.5em;
}
';
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
}
  ';
$code3Js = '';

$code4Html = '<div class="em-container">
Em unit
<div class="em">EM child element</div>
</div>
<div class="rem">Rem unit</div>';
$code4Css = '.em-container {
  font-size: 20px;
  height: 2em;
}
.em {
  font-size: 1.5em;
}
.rem {
  font-size: 2rem;
  height: 50vh;
  border: 1px solid #333;
}';
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
          <h1>CSS Units</h1>
          <img src="<?= $baseFolder ?>cssbasic/images/css units 1.png" alt="element" class="imageresponsive2" />
          <img src="<?= $baseFolder ?>cssbasic/images/css units 2.png" alt="element" class="imageresponsive2" />
        </div>

        <div style="clear: both"></div>

        <hr />
        <div class="spacer">
          <h2>Em unit</h2>
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
                <div style="font-size: 20px; height: 2em;">Em unit</div>
              </div>
            </div>
          </div>
          <div>
            <p>
              Em unit
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>EM child element</h2>
          <div class="row">
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">CODE</h3>
              <pre><code class="language-html line-numbers"><?= htmlentities($code2Html) ?></code>
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

              <div style="background-color: white; padding: 5px; height: 150px;">
                <div style="font-size: 20px; height: 2em;">Em unit
                  <div style="font-size: 1.5em;">EM child element</div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <p>
              EM child element
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>REM unit</h2>
          <div class="row">
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">CODE</h3>
              <pre><code class="language-html line-numbers"><?= htmlentities($code3Html) ?></code>
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

              <div style="background-color: white; padding: 5px; height: 150px;">
                <div style="font-size: 20px; height: 2em;">Em unit
                  <div style="font-size: 1.5em;">EM child element</div>
                </div>
                <div style="font-size: 2rem;">Rem unit</div>
              </div>
            </div>
          </div>
          <div>
            <p>
              The html default font size is 16.
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>REM unit</h2>
          <div class="row">
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">CODE</h3>
              <pre><code class="language-html line-numbers"><?= htmlentities($code4Html) ?></code>
                  </pre>
              <!-- Button with updated inline styles -->

              <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
                <input type="hidden" name="html" value="<?= htmlentities($code4Html) ?>">
                <input type="hidden" name="css" value="<?= htmlentities($code4Css) ?>">
                <input type="hidden" name="js" value="<?= htmlentities($code4Js) ?>">
                <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                  <span style="transition: color 0.3s;">Open Code Editor</span>
                </button>
              </form>
            </div>
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">RESULT</h3>

              <div style="background-color: white; padding: 5px; height: 450px;">
                <div style="font-size: 20px; height: 2em;">Em unit
                  <div style="font-size: 1.5em;">EM child element</div>
                </div>
                <div style="font-size: 2rem; height: 50vh; border: 1px solid #333;">Rem unit</div>
              </div>
            </div>
          </div>
          <div>
            <p>
              Try to add width: 50vw; and width: 250px;
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Summary</h2>
          <dl>
            <dt>&bull; Em parent</dt><br>
            <dt>&bull; Em child</dt><br>
            <dt>&bull; Rem</dt><br>
            <dt>&bull; vh</dt><br>
            <dt>&bull; vw</dt><br>
            <dt>&bull; px</dt><br>
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