<?php
$code1Html = '<p>CSS text</p>
<p class="font-styles">CSS text</p>
';
$code1Css = '.font-styles {
  font-family: Verdana;
}  
';
$code1Js = '';

$code2Html = '<p>CSS text</p>
<p class="font-styles">CSS text</p>
';
$code2Css = '.font-styles {
  font-family: Verdana;
  font-style: italic;
}  
  ';
$code2Js = '';

$code3Html = '<p>CSS text</p>
<p class="font-styles">CSS text</p>
';
$code3Css = '.font-styles {
  font-family: Verdana;
  font-style: italic;
  font-weight: bold;
}
  ';
$code3Js = '';

$code4Html = '<p>CSS text</p>
<p class="font-styles">CSS text</p>';
$code4Css = '.font-styles {
  font-family: Verdana;
  font-style: italic;
  font-weight: bold;
  font-size: 50px;
}';
$code4Js = '';

$code5Html = '<p>CSS text</p>
<p class="font-styles">CSS text</p>';
$code5Css = '.font-styles {
  font-family: Verdana;
  font-style: italic;
  font-weight: bold;
  font-size: 50px;
  text-decoration: underline;
}
  ';
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
          <h1>Font Style</h1>
          <img src="<?= $baseFolder ?>cssbasic/images/css fonts.gif" alt="element" class="imageresponsive" />
        </div>

        <hr />
        <div class="spacer">
          <h2>Font-family</h2>
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
                <p>CSS text</p>
                <p style="font-family: Verdana">CSS text</p>
              </div>
            </div>
          </div>
          <div>
            <p>
              Font-family is a CSS property that defines the preferred font for an HTML element.
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Font Style</h2>
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
                <p>CSS text</p>
                <p style="font-family: Verdana; font-style: italic">CSS text</p>
              </div>
            </div>
          </div>
          <div>
            <p>
              Font-style is a CSS property that determines whether the text should be rendered in a normal, italic, or oblique style.
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Font Weight</h2>
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
                <p>CSS text</p>
                <p style="font-family: Verdana; font-style: italic; font-weight: bold">CSS text</p>
              </div>
            </div>
          </div>
          <div>
            <p>
              Font-weight is a CSS property that defines the thickness or boldness of the characters in a text.
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Font Size</h2>
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
                <p>CSS text</p>
                <p style="font-family: Verdana; font-style: italic; font-weight: bold; font-size: 50px;">CSS text</p>
              </div>
            </div>
          </div>
          <div>
            <p>
              Font-style is a CSS property that determines the size of the text characters within an HTML element.
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Text Decoration</h2>
          <div class="row">
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">CODE</h3>
              <pre><code class="language-html line-numbers"><?= htmlentities($code5Html) ?></code>
                  </pre>
              <!-- Button with updated inline styles -->

              <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
                <input type="hidden" name="html" value="<?= htmlentities($code5Html) ?>">
                <input type="hidden" name="css" value="<?= htmlentities($code5Css) ?>">
                <input type="hidden" name="js" value="<?= htmlentities($code5Js) ?>">
                <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                  <span style="transition: color 0.3s;">Open Code Editor</span>
                </button>
              </form>
            </div>
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">RESULT</h3>

              <div style="background-color: white; padding: 5px;">
                <p>CSS text</p>
                <p style="font-family: Verdana; font-style: italic; font-weight: bold; font-size: 50px; text-decoration: underline;">CSS text</p>
              </div>
            </div>
          </div>
          <div>
            <p>
              Text-Decoration is a CSS property that adds visual styling, such as underlining or striking through, to text within an HTML element.
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Summary</h2>
          <dl>
            <dt>&bull; Font-family</dt><br>
            <dt>&bull; Font-Style</dt><br>
            <dt>&bull; Font-weight</dt><br>
            <dt>&bull; Font-size</dt><br>
            <dt>&bull; Text-Decoration</dt><br>

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