<?php
$code1Html = '<p>Before we begin</p>';
$code1Css = '';
$code1Js = '';

$code2Html = '';
$code2Css = '';
$code2Js = '';

$code3Html = '';
$code3Css = '';
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
          <h1>Before we begin</h1>
          <img src="<?= $baseFolder ?>htmlbasic/images/html doctype -2.gif" alt="element" class="imageresponsive" />
        </div>

        <hr />
        <div class="spacer">
          <h2>Before we begin</h2>
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
                <p>Before we begin</p>
              </div>
            </div>
          </div>
          <div>
            <p>
              This course is for complete beginners.
            </p>
            <p>
              We will cover most of the concepts in HTML that you, as a beginner, should know.
            </p>
            <p>
              This course will focus exclusively on HTML.
            </p>
            <p>
              This is for a beginner’s course and is longer in length.
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Summary</h2>
          <dl>
            <dt>&bull; Before we begin
            </dt><br>
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