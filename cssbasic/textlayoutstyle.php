<?php
$code1Html = '<p class="error">Red text</p>
<p class="success">Green text</p>
<p id="test">Id selector</p>
';
$code1Css = '.error {
  color: red;
  text-align: center;
}
.success {
  color: green;
  text-align: right;
}
#test {
  color: orange;
}
';
$code1Js = '';

$code2Html = '<div class="orange">Orange background</div>
<span class="yellow">Yellow background</span>
';
$code2Css = '.orange {
  background-color: #ffa500;
  line-height: 4;
  }
  .yellow {
    background-color: rgb(253, 222, 62);
  }
  ';
$code2Js = '';

$code3Html = '<div class="orange">Orange background</div>
<span class="yellow">Yellow background</span>
';
$code3Css = '.orange {
  background-color: #ffa500;
  line-height: 4;
  letter-spacing: 4px;
  }
  .yellow {
    background-color: rgb(253, 222, 62);
  }
  ';
$code3Js = '';

$code4Html = '<div class="orange">Orange background</div>
<span class="yellow">Yellow background</span>
';
$code4Css = '.orange {
  background-color: #ffa500;
  line-height: 4;
  letter-spacing: 4px;
  word-spacing: 20px;
  }
  .yellow {
    background-color: rgb(253, 222, 62);
  }
  ';
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
          <h1>Text Layout Style</h1>
          <img src="<?= $baseFolder ?>cssbasic/images/text layout and style.gif" alt="element" class="imageresponsive" />
        </div>

        <hr />
        <div class="spacer">
          <h2>Text Align</h2>
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
                <p class="error" style="color: red; text-align: center;">Red text</p>
                <p class="success" style="color: green; text-align: right;">Green text</p>
                <p id="test" style="color: orange">Id selector</p>
              </div>
            </div>
          </div>
          <div>
            <p>
              Text-Align: Center / Right / Left
            </p>
          </div>
        </div>

        <hr />

        <div class="spacer">
          <h2>Line-height</h2>
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

              <div style="background-color: white; padding: 5px;">
                <div style="background-color: orange; line-height: 4;">Orange background</div>
                <span style="background-color: yellow">Yellow background</span>
              </div>
            </div>
          </div>
          <div>
            <p>
              Line-height is a CSS property that determines the amount of space between lines of text within an HTML element, affecting the overall vertical spacing and readability.
            </p>
          </div>
        </div>

        <hr />

        <div class="spacer">
          <h2>Letter Spacing</h2>
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

              <div style="background-color: white; padding: 5px;">
                <div style="background-color: orange; line-height: 4; letter-spacing: 4px;">Orange background</div>
                <span style="background-color: yellow">Yellow background</span>
              </div>
            </div>
          </div>
          <div>
            <p>
              Letter-spacing is a CSS property that controls the amount of space between individual letters in a text.
            </p>
          </div>
        </div>

        <hr />

        <div class="spacer">
          <h2>Word Spacing</h2>
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

              <div style="background-color: white; padding: 5px;">
                <div style="background-color: orange; line-height: 4; letter-spacing: 4px; word-spacing: 20px;">Orange background</div>
                <span style="background-color: yellow">Yellow background</span>
              </div>
            </div>
          </div>
          <div>
            <p>
              Word-spacing is a CSS property that adjusts the amount of space between words in a text.
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Summary</h2>
          <dl>
            <dt>&bull; Text-Align: Center</dt><br>
            <dt>&bull; Text-Align: Right</dt><br>
            <dt>&bull; Text-Align: Left</dt><br>
            <dt>&bull; Line-height</dt><br>
            <dt>&bull; Letter-spacing</dt><br>
            <dt>&bull; Word-spacing</dt><br>
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