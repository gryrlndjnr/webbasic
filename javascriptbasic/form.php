<?php
$code1Html = '<p>Enter names in the fields, then click "Submit" to submit the form:</p>

<form id="frm1" action="/action_page.php">
    First name: <input type="text" name="fname" /><br />
    Last name: <input type="text" name="lname" /><br /><br />
    <input type="button" onclick="myFunction()" value="Submit" />
</form>';

$code1Css = '';

$code1Js = 'function myFunction() {
   document.getElementById("frm1").submit();
}';

$code1 = $code1Html . "\n\n<script>\n" . $code1Js . "\n</script>";

$code2Html = '<h2>The open() and close() Methods</h2>

<button onclick="openWin()">Open "myWindow"</button>
<button onclick="closeWin()">Close "myWindow"</button>';

$code2Css = '';

$code2Js = 'let myWindow;

function openWin() {
  myWindow = window.open("", "", "width=200,height=100");
}

function closeWin() {
  myWindow.close();
}';

$code2 = $code2Html . "\n\n<script>\n" . $code2Js . "\n</script>";

$code3Html = '<h2>The window.print() Method</h2>

<p>Click the button to print the current page.</p>

<button onclick="window.print()">Print this page</button>';

$code3Css = '';

$code3Js = 'function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}';

$code3 = $code3Html . "\n\n<script>\n" . $code3Js . "\n</script>";

$code4Html = '<input id="id1" type="number" min="100" max="300" required />

<button onclick="myFunction()">OK</button>

<p>If the number is less than 100 or greater than 300, an error message will be displayed.</p>

<p id="demo"></p>';

$code4Css = '';

$code4Js = 'function myFunction() {
  const inpObj = document.getElementById("id1");
  if (!inpObj.checkValidity()) {
    document.getElementById("demo").innerHTML = inpObj.validationMessage;
  } else {
    document.getElementById("demo").innerHTML = "Input OK";
  }
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
        <h1>Form</h1>

        <hr />

        <div class="spacer"></div>
        <h2>Submit</h2>
        <img src="<?= $baseFolder ?>javascriptbasic/images/form-submit.gif" alt="element" class="imageresponsive" />
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
          The submit() method submits the form (same as clicking the Submit button).
        </p>


        <hr />
        <div class="spacer"></div>
        <h2>Open and Close window</h2>
        <img src="<?= $baseFolder ?>javascriptbasic/images/form-open-and-close-window.gif" alt="element" class="imageresponsive" />
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
          The open() method opens a new browser window, or a new tab, depending on your browser settings and the parameter values.
        </p>
        <p>
          The close() method closes a window.
        </p>

        <hr />
        <div class="spacer"></div>
        <h2>Print Current Page</h2>
        <img src="<?= $baseFolder ?>javascriptbasic/images/form-print-current-page.gif" alt="element" class="imageresponsive" />
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
          The print() method prints the contents of the current window.
        </p>
        <p>
          The print() method opens the Print Dialog Box, which lets the user to select preferred printing options.
        </p>

        <hr />
        <div class="spacer"></div>
        <h2>Validation</h2>
        <img src="<?= $baseFolder ?>javascriptbasic/images/form-validation.gif" alt="element" class="imageresponsive" />
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
          HTML form validation can be done by JavaScript.
        </p>

        <hr />
        <div class="spacer">
          <h2>Summary</h2>
          <dl>
            <dt>&bull; Submit</dt><br>
            <dt>&bull; Open and Close window</dt><br>
            <dt>&bull; Print Current page</dt><br>
            <dt>&bull; Image Modal</dt><br>
            <dt>&bull; Validation</dt><br>
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