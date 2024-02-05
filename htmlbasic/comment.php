<?php
$code1Html = "<!DOCTYPE html>
<html>
      <head>
            <title>HTML Basic</title>
      </head>
      <body>
            <!--This is a Comment-->
            <h3>HTML Comment</h3> <!--This is a Comment-->
            <!--This is a Comment-->
      </body>
</html>
                  ";
$code1Css = "";
$code1Js = "";

$code2Html = "<!DOCTYPE html>
<html>
      <head>
            <title>HTML Basic</title>
      </head>
      <body>
        <!-- This is a Commen
            <h3>HTML Comment</h3>
            <h3>HTML Comment</h3>
            <h3>HTML Comment</h3>
            <h3>HTML Comment</h3>
        -->
        <h3>HTML Comment</h3>
      </body>
</html>     
";
$code2Css = "";
$code2Js = "";
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
                    <h1>HTML Comment</h1>
                    <img src="<?= $baseFolder ?>htmlbasic/images/HTML_comments2.gif" alt="element" class="imageresponsive" />
                </div>

                <hr />
                <div class="spacer">
                    <h2>Inline Comment</h2>
                    <div class="row">
                        <div class="column" style="background-color: #4a366a; border: 1px solid white">
                            <h3 style="text-align: center; color: white">CODE</h3>
                            <pre><code class="language-html line-numbers"><?= htmlentities($code1Html) ?></code>
                  </pre>
                            <!-- Button with updated inline styles -->

                            <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
                                <input type="hidden" name="html" value="<?= $code1Html ?>">
                                <input type="hidden" name="css" value="<?= $code1Css ?>">
                                <input type="hidden" name="js" value="<?= $code1Js ?>">
                                <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                                    <span style="transition: color 0.3s;">Open Code Editor</span>
                                </button>
                            </form>
                        </div>
                        <div class="column" style="background-color: #4a366a; border: 1px solid white">
                            <h3 style="text-align: center; color: white">RESULT</h3>

                            <div style="background-color: white; padding: 5px">
                                <!--This is a Comment-->
                                <h3>HTML Comment</h3> <!--This is a Comment-->
                                <!--This is a Comment-->
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            Inline Comment in programming is a brief note or explanation that is placed within a <strong>single line of code</strong>.<br>
                            Providing additional information or context for that <strong>specific line</strong>.
                        </p>
                    </div>
                </div>

                <hr />
                <div class="spacer">
                    <h2>Multiline Comment</h2>
                    <div class="row">
                        <div class="column" style="background-color: #4a366a; border: 1px solid white">
                            <h3 style="text-align: center; color: white">CODE</h3>
                            <pre><code class="language-html line-numbers"><?= htmlentities($code2Html) ?></code>
                  </pre>
                            <!-- Button with updated inline styles -->

                            <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
                                <input type="hidden" name="html" value="<?= $code2Html ?>">
                                <input type="hidden" name="css" value="<?= $code2Css ?>">
                                <input type="hidden" name="js" value="<?= $code2Js ?>">
                                <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                                    <span style="transition: color 0.3s;">Open Code Editor</span>
                                </button>
                            </form>
                        </div>
                        <div class="column" style="background-color: #4a366a; border: 1px solid white">
                            <h3 style="text-align: center; color: white">RESULT</h3>

                            <div style="background-color: white; padding: 5px">
                                <!-- This is a Commen
                            <h3>HTML Comment</h3>
                            <h3>HTML Comment</h3>
                            <h3>HTML Comment</h3>
                            <h3>HTML Comment</h3>
                            -->
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            Multiline Comment in programming is a way to include explanatory or non-executable text that spans <strong>multiple lines of code</strong>.
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

        <!-- ======================================== -->
    </main>
    <?php require_once("../footer.php"); ?>
</div>
<?php require_once("../closing.php") ?>
<!-- ======================================== -->