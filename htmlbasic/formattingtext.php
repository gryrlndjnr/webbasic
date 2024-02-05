<?php
$code1Html = "<h1>Heading 1</h1>";
$code1Css = "";
$code1Js = "";

$code2Html = "<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>";
$code2Css = "";
$code2Js = "";

$code3Html = "<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
";
$code3Css = "";
$code3Js = "";

$code4Html = "<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br />
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br />
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris <br />
nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit <br />
in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>";
$code4Css = "";
$code4Js = "";

$code5Html = "<hr />
<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br />
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br />
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris <br />
nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit <br />
in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
<hr />";
$code5Css = "";
$code5Js = "";
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
                    <h1>Formatting Text</h1>
                    <img src="<?= $baseFolder ?>htmlbasic/images/formatting text.png" alt="element" class="imageresponsive" />
                </div>

                <hr />
                <div class="spacer">
                    <h2>Heading 1</h2>
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
                                <h1>Heading 1</h1>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            Heading elements are used to define headings and subheadings within a document.
                        </p>

                    </div>
                </div>

                <hr />
                <div class="spacer">
                    <h2>Heading 1 to Heading 6</h2>
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
                                <h1>Heading 1</h1>
                                <h2>Heading 2</h2>
                                <h3>Heading 3</h3>
                                <h4>Heading 4</h4>
                                <h5>Heading 5</h5>
                                <h6>Heading 6</h6>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            These elements allow you to create a structured hierarchy of headings, with
                            &lt;h1&gt; representing the <strong>highest-level or main heading</strong> and &lt;h6&gt; representing the lowest-level subheading.
                        </p>
                    </div>
                </div>

                <hr />
                <div class="spacer">
                    <h2>Paragraph</h2>
                    <div class="row">
                        <div class="column" style="background-color: #4a366a; border: 1px solid white">
                            <h3 style="text-align: center; color: white">CODE</h3>
                            <pre><code class="language-html line-numbers"><?= htmlentities($code3Html) ?></code>
                  </pre>
                            <!-- Button with updated inline styles -->

                            <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
                                <input type="hidden" name="html" value="<?= $code3Html ?>">
                                <input type="hidden" name="css" value="<?= $code3Css ?>">
                                <input type="hidden" name="js" value="<?= $code3Js ?>">
                                <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                                    <span style="transition: color 0.3s;">Open Code Editor</span>
                                </button>
                            </form>
                        </div>
                        <div class="column" style="background-color: #4a366a; border: 1px solid white">
                            <h3 style="text-align: center; color: white">RESULT</h3>

                            <div style="background-color: white; padding: 5px">
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            Paragraph element is used to define a structure <strong>paragraphs of text</strong>.
                        </p>
                    </div>
                </div>

                <hr />
                <div class="spacer">

                    <h2>Line Break</h2>
                    <div class="row">
                        <div class="column" style="background-color: #4a366a; border: 1px solid white">
                            <h3 style="text-align: center; color: white">CODE</h3>
                            <pre><code class="language-html line-numbers"><?= htmlentities($code4Html) ?></code>
                  </pre>
                            <!-- Button with updated inline styles -->

                            <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
                                <input type="hidden" name="html" value="<?= $code4Html ?>">
                                <input type="hidden" name="css" value="<?= $code4Css ?>">
                                <input type="hidden" name="js" value="<?= $code4Js ?>">
                                <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                                    <span style="transition: color 0.3s;">Open Code Editor</span>
                                </button>
                            </form>
                        </div>
                        <div class="column" style="background-color: #4a366a; border: 1px solid white">
                            <h3 style="text-align: center; color: white">RESULT</h3>

                            <div style="background-color: white; padding: 5px">
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br />
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br />
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris <br />
                                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit <br />
                                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            Break Line is used to create a line break or a forced line <strong>break within a block of text or other content</strong>.
                        </p>
                    </div>
                </div>

                <hr />
                <div class="spacer">

                    <h2>Horizontal Rule</h2>
                    <div class="row">
                        <div class="column" style="background-color: #4a366a; border: 1px solid white">
                            <h3 style="text-align: center; color: white">CODE</h3>
                            <pre><code class="language-html line-numbers"><?= htmlentities($code5Html) ?></code>
                  </pre>
                            <!-- Button with updated inline styles -->

                            <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
                                <input type="hidden" name="html" value="<?= $code5Html ?>">
                                <input type="hidden" name="css" value="<?= $code5Css ?>">
                                <input type="hidden" name="js" value="<?= $code5Js ?>">
                                <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                                    <span style="transition: color 0.3s;">Open Code Editor</span>
                                </button>
                            </form>
                        </div>
                        <div class="column" style="background-color: #4a366a; border: 1px solid white">
                            <h3 style="text-align: center; color: white">RESULT</h3>

                            <div style="background-color: white; padding: 5px">
                                <hr />
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br />
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br />
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris <br />
                                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit <br />
                                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <hr />
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            Horizontal Rule element, short for "horizontal rule," is used to create a thematic break or a <strong>horizontal line</strong> across a webpage.
                        </p>
                    </div>
                </div>

                <hr />
                <div class="spacer">
                    <h2>Summary</h2>
                    <dl>
                        <dt>&bull; Heading 1 to Heading 6</dt><br>
                        <dt>&bull; Paragraph</dt><br>
                        <dt>&bull; Line Break</dt><br>
                        <dt>&bull; Horizontal Rule</dt><br>
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