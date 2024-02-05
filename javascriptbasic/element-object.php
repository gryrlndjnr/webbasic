<?php
$code1Html = '<h1>JavaScript Basic</h1>
<h2>The Element Object</h2>
<h3>The className Property</h3>
<button onclick="myFunction()">Toggle</button>
<p>Click "Toggle" (many times) to toggle between two classes.</p>
<div id="myDIV" class="myStyle">
  <p>I am myDIV.</p>
</div>';

$code1Css = '.myStyle {
  background-color: coral;
  padding: 16px;
}

.newStyle {
  background-color: lightblue;
  text-align: center;
  font-size: 25px;
  padding: 16px;
}';

$code1Js = 'function myFunction() {
  const element = document.getElementById("myDIV");
  if (element.className == "myStyle") {
    element.className = "newStyle";
  } else {
    element.className = "myStyle";
  }
}';

$code1 = $code1Html . "\n\n<style>\n" . $code1Css . "\n</style>\n\n<script>\n" . $code1Js . "\n</script>";

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
        <h1>Element Object</h1>
        <img src="<?= $baseFolder ?>javascriptbasic/images/element-object-banner.gif" alt="element" class="imageresponsive" />

        <hr />

        <div class="spacer"></div>
        <h2>ClassName Element</h2>
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
              <iframe srcdoc="<?= htmlentities($code1) ?>" style="width: 100%; height: 100%;"></iframe>
            </div>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Summary</h2>
          <dl>
            <dt>&bull; Element Object</dt><br>
            <dt>&bull; ClassName Property</dt><br>
            <dt>&bull; Give an example of id attribute Property</dt><br>
            <!-- https://www.w3schools.com/html/tryit.asp?filename=tryhtml_id_js -->
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