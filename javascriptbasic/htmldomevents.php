<?php
$code1Html = '<button onclick="myFunction()">Click me</button>

<p id="demo"></p>';

$code1Css = '';

$code1Js = 'function myFunction() {
  document.getElementById("demo").innerHTML = "Hello World";
}';

$code1 = $code1Html . "\n\n<script>\n" . $code1Js . "\n</script>";

$code2Html = '<select id="mySelect" onchange="myFunction()">
  <option value="Audi">Audi</option>
  <option value="BMW">BMW</option>
  <option value="Mercedes">Mercedes</option>
  <option value="Volvo">Volvo</option>
</select>

<p>When you select a new car, a function is triggered which outputs the value of the selected car.</p>

<p id="demo"></p>';

$code2Css = '';

$code2Js = 'function myFunction() {
  var x = document.getElementById("mySelect").value;
  document.getElementById("demo").innerHTML = "You selected: " + x;
}';

$code2 = $code2Html . "\n\n<script>\n" . $code2Js . "\n</script>";

$code3Html = '<p>When you reset the form, a function is triggered which alerts some text.</p>

<form onreset="myFunction()">
  Enter name: <input type="text" />
  <input type="reset" />
</form>';

$code3Css = '';

$code3Js = 'function myFunction() {
  alert("The form was reset");
}';

$code3 = $code3Html . "\n\n<script>\n" . $code3Js . "\n</script>";

$code4Html = '<p>Write something in the text field to trigger a function.</p>

<input type="text" id="myInput" oninput="myFunction()" />

<p id="demo"></p>';

$code4Css = '';

$code4Js = 'function myFunction() {
  let text = document.getElementById("myInput").value;
  document.getElementById("demo").innerHTML = "You wrote: " + text;
}';

$code4 = $code4Html . "\n\n<script>\n" . $code4Js . "\n</script>";

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
        <h1>HTML DOM Events</h1>
        <img src="<?= $baseFolder ?>javascriptbasic/images/html-dom-events-banner.gif" alt="element" class="imageresponsive" />

        <hr />

        <div class="spacer"></div>
        <h2>Onclick Event</h2>
        <img src="<?= $baseFolder ?>javascriptbasic/images/html-dom-events-onclick.gif" alt="element" class="imageresponsive" />
        <div class="spacer"></div>

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
        <p>
          The onclick event occurs when the user clicks on an HTML element.
        </p>


        <hr />
        <div class="spacer"></div>
        <h2>Onchange Event</h2>
        <img src="<?= $baseFolder ?>javascriptbasic/images/html-dom-events-onchange.gif" alt="element" class="imageresponsive" />
        <div class="spacer"></div>

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
              <iframe srcdoc="<?= htmlentities($code2) ?>" style="width: 100%; height: 100%;"></iframe>
            </div>
          </div>
        </div>
        <p>
          The onchange event occurs when the value of an HTML element is changed.
        </p>


        <hr />

        <div class="spacer"></div>
        <h2>Onreset Event</h2>
        <img src="<?= $baseFolder ?>javascriptbasic/images/html-dom-events-onreset.gif" alt="element" class="imageresponsive" />
        <div class="spacer"></div>

        <div class="row">
          <div class="column" style="background-color: #4a366a; border: 1px solid white">
            <h3 style="text-align: center; color: white">CODE</h3>

            <pre><code class="language-html line-numbers"><?= htmlentities($code3) ?></code></pre>

            <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
              <input type="hidden" name="html" value="<?= htmlentities($code3Html) ?>">
              <input type="hidden" name="css" value="<?= htmlentities($code3Css) ?>">
              <input type="hidden" name="js" value="<?= htmlentities($code3Js) ?>">
              <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                <span style="transition: color 0.3s;">Open Code Editor</span>
              </button>
            </form>
          </div>
          <div class="column" style="display: flex; flex-direction:column; background-color: #4a366a; border: 1px solid white">
            <h3 style="text-align: center; color: white">RESULT</h3>
            <div style="flex: 1; background-color: white; padding: 5px;">
              <iframe srcdoc="<?= htmlentities($code3) ?>" style="width: 100%; height: 100%;"></iframe>
            </div>
          </div>
        </div>
        <p>
          The onreset event occurs when a form is reset.
        </p>


        <hr />

        <div class="spacer"></div>
        <h2>Oninput Event</h2>
        <img src="<?= $baseFolder ?>javascriptbasic/images/html-dom-events-oninput.gif" alt="element" class="imageresponsive" />
        <div class="spacer"></div>

        <div class="row">
          <div class="column" style="background-color: #4a366a; border: 1px solid white">
            <h3 style="text-align: center; color: white">CODE</h3>

            <pre><code class="language-html line-numbers"><?= htmlentities($code4) ?></code></pre>

            <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
              <input type="hidden" name="html" value="<?= htmlentities($code4Html) ?>">
              <input type="hidden" name="css" value="<?= htmlentities($code4Css) ?>">
              <input type="hidden" name="js" value="<?= htmlentities($code4Js) ?>">
              <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                <span style="transition: color 0.3s;">Open Code Editor</span>
              </button>
            </form>
          </div>
          <div class="column" style="display: flex; flex-direction:column; background-color: #4a366a; border: 1px solid white">
            <h3 style="text-align: center; color: white">RESULT</h3>
            <div style="flex: 1; background-color: white; padding: 5px;">
              <iframe srcdoc="<?= htmlentities($code4) ?>" style="width: 100%; height: 100%;"></iframe>
            </div>
          </div>
        </div>
        <p>
          The oninput attribute fires when an element gets user input. <br>
          The oninput attribute fires when the value of an input or textarea element is changed.
        </p>


        <hr />

        <hr />
        <div class="spacer">
          <h2>Summary</h2>
          <dl>
            <dt>&bull; Onclick Event</dt><br>
            <dt>&bull; Onchange Event</dt><br>
            <dt>&bull; Onreset Event</dt><br>
            <dt>&bull; Oninput Event</dt><br>
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