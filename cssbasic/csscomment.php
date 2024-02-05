<?php
$code1Html = '<ul>
  <li>Bread</li>
  <li>Milk</li>
  <li>Eggs</li>
</ul>
';
$code1Css = '';
$code1Js = '';

$code2Html = '<ul>
<li>Bread</li>
<li>Milk</li>
<li>Eggs</li>
</ul>
';
$code2Css = '/* this code is used to make the list style square shape */
/* uncomment the code to use the square shape */
/*
ul {
  list-style: square;
}  
*/
  ';
$code2Js = '';

$code3Html = '<ul>
<li>Bread</li>
<li>Milk</li>
<li>Eggs</li>
</ul>
';
$code3Css = 'ul {
  list-style: none; /* to removed the list style */
}
  ';
$code3Js = '';

$code4Html = ' <ul>
<li>Bread</li>
<li>Milk</li>
<li>Eggs</li>
</ul>';
$code4Css = '/* list style */
ul {
  list-style: none;
}

/* heart shape bullet point */
ul li:before {
  content: "\2665"; /* heart code */
  color: #9c5597; /* heart color */
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
          <h1>CCS Comment</h1>
          <img src="<?= $baseFolder ?>cssbasic/images/css comment multi line.gif" alt="element" class="imageresponsive" />
        </div>

        <hr />
        <div class="spacer">
          <h2>Inline Comment</h2>
          <div class="row">
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">CODE</h3>
              <pre><code class="language-css line-numbers"><?= htmlentities($code3Css) ?></code>
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
                <ul style="list-style: none;">
                  <li>Bread</li>
                  <li>Milk</li>
                  <li>Eggs</li>
                </ul>
              </div>
            </div>
          </div>
          <div>
            <p>
              Inline Comment in programming is a brief note or explanation that is placed within a single line of code.
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Inline Comment example</h2>
          <div class="row">
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">CODE</h3>
              <pre><code class="language-css line-numbers"><?= htmlentities($code4Css) ?></code>
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
                <ul style="list-style: none;">
                  <li><span style="color: purple;">&#x2665;</span> Bread</li>
                  <li><span style="color: purple;">&#x2665;</span> Milk</li>
                  <li><span style="color: purple;">&#x2665;</span> Eggs</li>
                </ul>
              </div>
            </div>
          </div>
          <div>
            <p>
              Inline Comment also providing additional information or context for that specific line.
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Multiline Comment</h2>
          <div class="row">
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">CODE</h3>
              <pre><code class="language-css line-numbers"><?= htmlentities($code2Css) ?></code>
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
                <ul>
                  <li>Bread</li>
                  <li>Milk</li>
                  <li>Eggs</li>
                </ul>
              </div>
            </div>
          </div>
          <div>
            <p>
              Multiline Comment in programming is a way to include explanatory or non-executable text that spans multiple lines.
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Summary</h2>
          <dl>
            <dt>&bull; Inline Comment</dt><br>
            <dt>&bull; Multiline Comment</dt><br>
          </dl>
        </div>
      </article>
    </section>
    <!--  https://www.unicode.org/emoji/charts/emoji-list.html -->
    <!-- ======================================== -->
  </main>
  <?php require_once("../footer.php"); ?>
</div>
<?php require_once("../closing.php") ?>
<!-- ======================================== -->