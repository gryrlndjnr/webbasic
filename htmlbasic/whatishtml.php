<?php
$code1Html = "<h1>What is HTML?</h1>";
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
                    <h1>What is Html?</h1>
                    <img src="<?= $baseFolder ?>htmlbasic/images/what is html2.gif" alt="element" class="imageresponsive" />
                </div>
                <hr />
                <div class="spacer">
                    <h2>What is Html?</h2>
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
                                <h1>What is HTML?</h1>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            HTML stands for <strong>Hypertext Markup Language</strong> and is the language for creating web pages.
                        </p>
                        <p>
                            It is a <strong>markup language</strong> and not a programming language.
                        </p>
                        <p>
                            It does not contain any <strong>logic, such as conditionals or branching</strong>.
                        </p>
                        <p>
                            HTML consists of a <strong>series of elements</strong>, and each element <strong>tells the browser how to display content</strong>.
                        </p>
                    </div>
                </div>

                <hr />
                <div class="spacer">
                    <h2>Summary</h2>
                    <dl>
                        <dt>&bull; What is Html?</dt><br>
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