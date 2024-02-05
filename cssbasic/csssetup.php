<?php
$code1Html = '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Document</title>
</head>
<body>
<h1>HTML Basic</h1>
</body>
</html>
';
$code1Css = '';
$code1Js = '';

$code2Html = '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>HTML Basic</h1>
  </body>
</html>
';
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
          <h1>Setup the Development Environment</h1>
          <img src="<?= $baseFolder ?>cssbasic/images/vscode.gif" alt="element" class="imageresponsive" />
        </div>

        <hr />
        <div class="spacer">
          <h2>Visual Studio Code</h2>
          <img src="<?= $baseFolder ?>cssbasic/images/vscode.png" alt="element" class="imageresponsive" />
          <div>
            <p>
              Link: <a href="https://code.visualstudio.com/" target="_blank">code.visualstudio.com</a>
            </p>

          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Prettier – code formatter</h2>
          <img src="<?= $baseFolder ?>cssbasic/images/prettier.png" alt="element" class="imageresponsive" />
          <p>
            VSCODE Extension - Prettier
          </p>
        </div>

        <hr />
        <div class="spacer">
          <div class="row">
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">CODE</h3>
              <pre><code class="language-html line-numbers"><?= htmlentities($code1Html) ?></code>
                  </pre>
              <!-- Button with updated inline styles -->

              <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
                <input type="hidden" name="html" value="<?= htmlentities($code2Html) ?>">
                <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                  <span style="transition: color 0.3s;">Open Code Editor</span>
                </button>
              </form>
            </div>
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">RESULT</h3>

              <pre><code class="language-html line-numbers"><?= htmlentities($code2Html) ?></code>
                  </pre>
              <!-- Button with updated inline styles -->

            </div>
          </div>
          <p>
            Without Formater
          </p>
          <p>
            With Formater
          </p>
        </div>

        <hr />
        <div class="spacer">
          <h2>Prettier – setup</h2>
          <img src="<?= $baseFolder ?>cssbasic/images/prettier setup.png" alt="element" class="imageresponsive" />
          <p>
            Gear Icon > Settings > Type Format
          </p>
          <p>
            Default formatter – prettier-code formatter
          </p>
          <p>
            Editor: Format On save - Check
          </p>
          <p>
            Editor: Format On Save Mode - File
          </p>
        </div>
        <hr />
        <div class="spacer">
          <h2>Summary</h2>
          <dl>

            <dt>&bull; Web Browser</dt><br>
            <dt>&bull; Visual Studio Code</dt><br>
            <dt>&bull; Extension - Prettier</dt><br>
            <dt>&bull; Prettier - setup</dt><br>

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