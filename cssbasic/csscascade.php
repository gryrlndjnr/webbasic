<?php
$code1Html = '<h2>Casscade</h2>
';
$code1Css = 'h2 {
  color: red;
}
h2 {
  color: blue;
}
';
$code1Js = '';

$code2Html = '<h2>Casscade</h2>

<h3>Sepecificity</h3>
';
$code2Css = 'h2 {
  color: red;
}
h2 {
  color: blue;
}
h3 {
  color: red;
}
  ';
$code2Js = '';

$code3Html = '<h2>Casscade</h2>

<h3 class="sub-heading">Sepecificity</h3>';
$code3Css = 'h2 {
  color: red;
}
h2 {
  color: blue;
}
h3 {
  color: red;
}
.sub-heading {
  color: blue;
}
  ';
$code3Js = '';

$code4Html = '<h2>Casscade</h2>

<h3 id="title" class="sub-heading">Sepecificity</h3>';
$code4Css = 'h2 {
  color: red;
}
h2 {
  color: blue;
}
h3 {
  color: red;
}
.sub-heading {
  color: blue;
}
#title {
  color: orange;
}
';
$code4Js = '';

$code5Html = '<div class="inheritance">
  <p>Inheritance</p>
</div>';
$code5Css = '.inheritance {
color: orange;
font-family: "segoe UI";
font-size: 30px;
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
          <h1>CSS Cascade</h1>
          <img src="<?= $baseFolder ?>cssbasic/images/cascade.gif" alt="element" class="imageresponsive" />
        </div>

        <hr />
        <div class="spacer">
          <h2>Casscade</h2>
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
                <h2 style="color: blue">Casscade</h2>
              </div>
            </div>
          </div>
          <div>
            <p>
              When two rules apply that have equal specificity, the one that comes last in the CSS is the one that will be used.
            </p>
          </div>
        </div>

        <hr />

        <div>
          <h1>CSS Specificity</h1>
          <img src="<?= $baseFolder ?>cssbasic/images/specific.gif" alt="element" class="imageresponsive" />
        </div>
        <hr />
        <div class="spacer">
          <h2>Specificity</h2>
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
                <h2 style="color: blue">Casscade</h2>

                <h3 style="color: red">Sepecificity</h3>
              </div>
            </div>
          </div>
          <div>
            <p>
              Specificity is how the browser decides which rule applies if multiple rules have different selectors but apply to the same element.
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Specificity using class</h2>
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
                <h2 style="color: blue">Casscade</h2>

                <h3 style="color: blue">Sepecificity</h3>
              </div>
            </div>
          </div>
          <div>
            <p>
              Using class.
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Specificity using id</h2>
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
                <h2 style="color: blue">Casscade</h2>

                <h3 style="color: orange">Sepecificity</h3>
              </div>
            </div>
          </div>
          <div>
            <p>
              Using id.
            </p>
          </div>
        </div>

        <div>
          <h1>CSS Inheritance</h1>
          <img src="<?= $baseFolder ?>cssbasic/images/imheritance.gif" alt="element" class="imageresponsive" />
        </div>
        <hr />
        <div class="spacer">
          <h2>Inheritance</h2>
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
                <p style="color: orange; font-family: segoe UI; font-size: 30px;">Inheritance</p>
              </div>
            </div>
          </div>
          <div>
            <p>
              Some CSS property value set value parents are inherited by their child elements, and some aren't.
            </p>
          </div>
        </div>


        <hr />
        <div class="spacer">
          <h2>Summary</h2>
          <dl>
            <dt>&bull; Cascade</dt><br>
            <dt>&bull; Specificity</dt><br>
            <dt>&bull; Inheritance</dt><br>
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