<?php
$code1Html = '<div class="position-1">Position Content 1</div>
<div class="position-2">Position Content 2</div>

<!-- Open Code Editor to see the result -->';
$code1Css = '.position-1 {
  order: 1px solid red;
  position: static;
}
.position-2 {
  border: 1px solid blue;
  position: static;
}';
$code1Js = '';

$code2Html = '<div class="position-1">Position Content 1</div>
<div class="position-2">Position Content 2</div>

<!-- Open Code Editor to see the result -->';
$code2Css = '.position-1 {
  border: 1px solid red;
  position: relative;
  top: 50px;
  left: 50px;
}
.position-2 {
  border: 1px solid blue;
  position: static;
}
  ';
$code2Js = '';

$code3Html = '<div class="position-1">Position Content 1</div>
<div class="position-2">Position Content 2</div>

<!-- Open Code Editor to see the result -->';
$code3Css = '
.position-1 {
  border: 1px solid red;
  position: relative;
  top: 50px;
  left: 50px;
}
.position-2 {
  border: 1px solid blue;
  position: fixed;
  bottom: 0px;
  right: 0px;
}';
$code3Js = '';

$code4Html = '<div class="position-1">Position Content 1</div>
<div class="position-2">Position Content 2</div>

<!-- Open Code Editor to see the result -->';
$code4Css = '.position-1 {
  border: 1px solid red;
  position: relative;
  top: 50px;
  left: 50px;
}
.position-2 {
  border: 1px solid blue;
  position: absolute;
  bottom: 0px;
  right: 0px;
}';
$code4Js = '';

$code5Html = '<div class="position-1">Position Content 1</div>
<div class="container">
  <div class="position-2">Position Content 2</div>
</div>

<!-- Open Code Editor to see the result -->';
$code5Css = '.position-1 {
  border: 1px solid red;
  position: relative;
  top: 50px;
  left: 50px;
}
.position-2 {
  border: 1px solid blue;
  position: absolute;
  bottom: 0px;
  right: 0px;
}
.container {
  position: relative;
  width: 200px;
  height: 2000px;
  border: 1px solid black;
}
  ';
$code6Js = '';

$code6Html = '<div class="position-1">Position Content 1</div>
<div class="container">
  <div class="position-2">Position Content 2</div>
</div>

<!-- Open Code Editor to see the result -->';
$code6Css = '.position-1 {
  border: 1px solid red;
  position: sticky;
  top: 50px;
  left: 50px;
}
.position-2 {
  border: 1px solid blue;
  position: absolute;
  bottom: 0px;
  right: 0px;
}
.container {
  position: relative;
  width: 200px;
  height: 2000px;
  border: 1px solid black;
}
  ';
$code6Js = '';
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
          <h1>Position</h1>
          <img src="<?= $baseFolder ?>cssbasic/images/position.gif" alt="element" class="imageresponsive" />
        </div>

        <hr />
        <div class="spacer">
          <h2>Static</h2>
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
                <!-- Button with updated inline styles -->
                <div style="border: 1px solid red; position: static;">Position Content 1</div>
                <div style="border: 1px solid blue; position: static;">Position Content 2</div>
                <!-- Button with updated inline styles -->

              </div>
            </div>
            <div>
              <p>
                Add Position: Static;.
              </p>
            </div>
          </div>

          <hr />
          <div class="spacer">
            <h2>Relative</h2>
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
                <div style="background-color: white; padding: 5px; height: 250px;">
                  <!-- Button with updated inline styles -->
                  <div style="border: 1px solid red; position: static;">Position Content 1</div>
                  <div style="border: 1px solid blue; position: static;">Position Content 2</div>
                  <!-- Button with updated inline styles -->
                </div>
              </div>
            </div>
            <div>
              <p>
                Change position: static; To position: relative; <br>
                Add top: 50px; and left: 50px;.
              </p>
            </div>
          </div>

          <hr />
          <div class="spacer">
            <h2>Fix</h2>
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
                <div style="background-color: white; padding: 5px; height: 250px;">
                  <!-- Button with updated inline styles -->
                  <div style="border: 1px solid red; position: static;">Position Content 1</div>
                  <div style="border: 1px solid blue; position: static;">Position Content 2</div>
                  <!-- Button with updated inline styles -->
                </div>
              </div>
            </div>
            <div>
              <p>
                Change position: static; To position: fixed; <br>
                Add bottom: 0px; and right: 0px;.
              </p>
            </div>
          </div>

          <hr />
          <div class="spacer">
            <h2>Absolute</h2>
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
                <div style="background-color: white; padding: 5px; height: 250px;">
                  <!-- Button with updated inline styles -->
                  <div style="border: 1px solid red; position: static;">Position Content 1</div>
                  <div style="border: 1px solid blue; position: static;">Position Content 2</div>
                  <!-- Button with updated inline styles -->
                </div>
              </div>
            </div>
            <div>
              <p>
                Change position: fixed; To position: absolute;.
              </p>
            </div>
          </div>

          <hr />
          <div class="spacer">
            <h2>Container</h2>
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
                <div style="background-color: white; padding: 5px; height: 250px;">
                  <!-- Button with updated inline styles -->
                  <div style="border: 1px solid red; position: static;">Position Content 1</div>
                  <div style="border: 1px solid blue; position: static;">Position Content 2</div>
                  <!-- Button with updated inline styles -->
                </div>
              </div>
            </div>
            <div>
              <p>
                Add .container {position: relative; width: 200px; height: 2000px; border: 1px solid black;}.
              </p>
            </div>
          </div>

          <hr />
          <div class="spacer">
            <h2>Sticky</h2>
            <div class="row">
              <div class="column" style="background-color: #4a366a; border: 1px solid white">
                <h3 style="text-align: center; color: white">CODE</h3>
                <pre><code class="language-html line-numbers"><?= htmlentities($code6Html) ?></code>
                  </pre>
                <!-- Button with updated inline styles -->

                <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
                  <input type="hidden" name="html" value="<?= htmlentities($code6Html) ?>">
                  <input type="hidden" name="css" value="<?= htmlentities($code6Css) ?>">
                  <input type="hidden" name="js" value="<?= htmlentities($code6Js) ?>">
                  <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                    <span style="transition: color 0.3s;">Open Code Editor</span>
                  </button>
                </form>
              </div>
              <div class="column" style="background-color: #4a366a; border: 1px solid white">
                <h3 style="text-align: center; color: white">RESULT</h3>
                <div style="background-color: white; padding: 5px; height: 250px;">
                  <!-- Button with updated inline styles -->
                  <div style="border: 1px solid red; position: static;">Position Content 1</div>
                  <div style="border: 1px solid blue; position: static;">Position Content 2</div>
                  <!-- Button with updated inline styles -->
                </div>
              </div>
            </div>
            <div>
              <p>
                Change position: relative; To position: sticky; (position-1).
              </p>
            </div>
          </div>

          <hr />
          <div class="spacer">
            <h2>Summary</h2>
            <dl>
              <dt>&bull; Static</dt><br>
              <dt>&bull; Relative</dt><br>
              <dt>&bull; Fix</dt><br>
              <dt>&bull; Absolute</dt><br>
              <dt>&bull; Container</dt><br>
              <dt>&bull; Sticky</dt><br>
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