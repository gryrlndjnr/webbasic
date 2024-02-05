<?php
$code1Html = '';

$code1Css = '';

$code1Js = 'const var1 = "test";
const var2 = "test";

console.log(var1 == var2);
console.log(var1 === var2)';

$code1 = "<script>\n" . $code1Js . "\n</script>";

$code2Html = '';

$code2Css = '';

$code2Js = 'const var1 = 10;

const var2 = "10";

console.log(var1 == var2)
console.log(var1 === var2)';

$code2 = "<script>\n" . $code2Js . "\n</script>";

$code3Html = '';

$code3Css = '';

$code3Js = 'const num = 5;

if (num > 0) {
  console.log("Number is positive")
} else if(num < 0) {
  console.log("Number is not positive")
}';

$code3 = "<script>\n" . $code3Js . "\n</script>";

$code4Html = '';

$code4Css = '';

$code4Js = 'const num = -5;

if (num > 0) {
  console.log("Number is positive")
} else if(num < 0) {
  console.log("Number is not positive")
}';

$code4 = "<script>\n" . $code4Js . "\n</script>";

$code5Html = '';

$code5Css = '';

$code5Js = 'const num = 0;

if (num > 0) {
  console.log("Number is positive")
} else if(num < 0) {
  console.log("Number is not positive")
} else {
  console.log("Number is zero")
}';

$code5 = "<script>\n" . $code5Js . "\n</script>";

$code6Html = '';

$code6Css = '';

$code6Js = 'const color = "red";

switch (color) {
  case "red":
    console.log("Color is red");
    break;
  case "red":
    console.log("Color is blue");
    break;
  case "red":
    console.log("Color is green");
    break;
}';

$code6 = "<script>\n" . $code6Js . "\n</script>";

$code7Html = '';

$code7Css = '';

$code7Js = 'const color = 10;

switch (color) {
  case "red":
    console.log("Color is red");
    break;
  case "red":
    console.log("Color is blue");
    break;
  case "red":
    console.log("Color is green");
    break;
  default:
    console.log("Not a valid color");
}';

$code7 = "<script>\n" . $code7Js . "\n</script>";

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
        <h1>Equality</h1>
        <img src="<?= $baseFolder ?>javascriptbasic/images/equality-banner.gif" alt="element" class="imageresponsive" />

        <hr />

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
              <p>true</p>
              <p>true</p>
            </div>
          </div>
        </div>
        <p>== JavaScript coerces the value of the same type
          String 10 convert into numeric automatically and compare
          Both constants would be of the same value and the result is true
        </p>
        <p>
          === is more strict and ensure both constant at the same type and will not convert implicity
          Since a number is different from a string type the result is false

        </p>

        <hr>
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
              <p>true</p>
              <p>false</p>
            </div>
          </div>
        </div>

        <p>
          Try this<br />
          const var1 = 0;<br />
          const var2 = '';<br /><br />

          const var1 = false;<br />
          const var2 = "";<br /><br />

          const var1 = null;<br />
          const var2 = undefined;

        </p>

        <hr />
        <div class="spacer">
          <h2>Summary</h2>
          <dl>
            <dt>&bull; == (Allow coercion)</dt><br>
            <dt>&bull; === (does not allow coercion)</dt><br>
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