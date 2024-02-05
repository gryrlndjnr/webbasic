<?php
$code1Html = "<h1>What is JavaScript?</h1>";
$code1Css = "";
$code1Js = "";
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
                    <h1>What is JavaScript?</h1>
                    <img src="<?= $baseFolder ?>javascriptbasic/images/JavaScript.gif" alt="element" class="imageresponsive" />
                </div>
                <hr />
                <div class="spacer">
                    <h2>What is JavaScript?</h2>
                    <div class="row">
                        <div class="column" style="background-color: #4a366a; border: 1px solid white">
                            <h3 style="text-align: center; color: white">CODE</h3>
                            <pre><code class="language-html line-numbers" ><?= htmlentities($code1Html) ?>
                    </code>
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
                                <h1>What is JavaScript?</h1>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            JavaScript is a high-level (often) just-in-time compiled programming language that conforms to the ECMAScript specification
                        </p>
                        <p>
                            JavaScript, Alongside HTML and CSS, is one of the code technologies of the world wide web.
                        </p>
                        <p>
                            JavaScript can be used to build server-side applications
                        </p>

                        <hr />
                        <div class="spacer">
                            <h2>JavaScript</h2>
                            <img src="<?= $baseFolder ?>javascriptbasic/images/JavaScript - 2.gif" alt="element" class="imageresponsive" />
                        </div>

                        <p>
                            JavaScript is also used in mobile app development to create cross-platform apps that can run on both iOS and android
                        </p>
                        <p>
                            JavaScript is also used to create desktop applications
                        </p>
                        <p>
                            JavaScript is the most popular programming language according to 2021 Stack overflow developer survey
                        </p>


                    </div>
                </div>

                <hr />
                <div class="spacer">
                    <h2>Summary</h2>
                    <dl>
                        <dt>&bull; What is JavaScript?</dt><br>
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