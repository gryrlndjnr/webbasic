<?php
$code1Html = '<h1 style="color: orange">CSS Basic</h1>';
$code1Css = '';
$code1Js = '';

$code2Html = '<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            <!-- insert css code here -->
        </style>
    </head>
    <body>
        <h1>CSS Basic</h1>
    </body>
</html>
';
$code2Css = 'h1 {
    color: orange;
}';
$code2Js = '';

$code3Html = '<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <h1>CSS Basic</h1>
    </body>
</html>
';
$code3Css = 'h1 {
    color: orange;
}';
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
                    <h1>How to add CSS?</h1>
                    <img src="<?= $baseFolder ?>cssbasic/images/inline and external style sheet.gif" alt="element" class="imageresponsive" />
                </div>

                <hr />
                <div class="spacer">
                    <h2>Inline style</h2>
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
                                <h1 style="color: orange">CSS Basic</h1>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            Inline style
                        </p>
                    </div>
                </div>

                <hr />

                <div class="spacer">
                    <h2>Inline style sheet</h2>
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
                                <h1 style="color: orange">CSS Basic</h1>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            Inline Style Sheet
                        </p>
                    </div>
                </div>

                <hr />

                <div class="spacer">
                    <h2>External style sheet</h2>
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
                                <h1 style="color: orange">CSS Basic</h1>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            External style sheet
                        </p>
                    </div>
                </div>

                <hr />
                <div class="spacer">
                    <h2>Summary</h2>
                    <dl>
                        <dt>&bull; Inline style</dt><br>
                        <dt>&bull; Inline style sheet</dt><br>
                        <dt>&bull; External style sheet</dt><br>
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