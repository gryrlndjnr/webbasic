<?php
$code1Html = "<hr />
<p> <strong>Lorem ipsum</strong> dolor sit amet, <b>consectetur adipiscing</b> elit, <br />
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br />
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris <br />
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit <br />
    in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
<hr />";
$code1Css = "";
$code1Js = "";

$code2Html = "<hr />
<p> <strong>Lorem ipsum</strong> dolor sit amet, <b>consectetur adipiscing</b> elit, <br />
    <em>tempor incididunt</em> ut labore et <i>dolore magna</i> aliqua. Ut enim ad minim. <br />
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris <br />
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit <br />
    in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
</p>
<hr />";
$code2Css = "";
$code2Js = "";

$code3Html = "<hr />
<p> <strong>Lorem ipsum</strong> dolor sit amet, <b>consectetur adipiscing</b> elit, <br />
    <em>tempor incididunt</em> ut labore et <i>dolore magna</i> aliqua. Ut enim ad minim. <br />
    <small>Ut enim ad minim veniam,</small> quis nostrud exercitation ullamco laboris <br />
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit <br />
    in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
</p>
<hr />";
$code3Css = "";
$code3Js = "";

$code4Html = "<hr />
<p> <strong>Lorem ipsum</strong> dolor sit amet, <b>consectetur adipiscing</b> elit, <br />
    <em>tempor incididunt</em> ut labore et <i>dolore magna</i> aliqua. Ut enim ad minim. <br />
    <small>Ut enim ad minim veniam,</small> quis nostrud exercitation ullamco laboris <br />
    <mark>nisi ut aliquip ex ea</mark> commodo consequat. Duis aute irure dolor in reprehenderit <br />
    <del>in voluptate velit esse</del> cillum dolore eu fugiat nulla pariatur.
</p>
<hr />";
$code4Css = "";
$code4Js = "";
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
                    <h1>Inline Text Formatting</h1>
                    <img src="<?= $baseFolder ?>htmlbasic/images/Inline Text Formatting.gif" alt="element" class="imageresponsive" />
                </div>

                <hr />
                <div class="spacer">

                    <h2>&lt;Strong&gt; and &lt;Bold&gt;</h2>
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
                                <hr />
                                <p> <strong>Lorem ipsum</strong> dolor sit amet, <b>consectetur adipiscing</b> elit, <br />
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
                            &lt;strong&gt; is a semantic element used to indicate that the enclosed text is of <strong>strong importance or emphasis</strong>.
                        </p>
                        <p>
                            &lt;b&gt; It is used to apply a bold font style to the enclosed text for <strong>visual emphasis</strong>.
                        </p>
                    </div>
                </div>

                <hr />
                <div class="spacer">

                    <h2>&lt;Emphasis&gt; and &lt;Italicized&gt;</h2>
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
                                <hr />
                                <p> <strong>Lorem ipsum</strong> dolor sit amet, <b>consectetur adipiscing</b> elit, <br />
                                    <em>tempor incididunt</em> ut labore et <i>dolore magna</i> aliqua. Ut enim ad minim. <br />
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris <br />
                                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit <br />
                                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                                <hr />
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            &lt;em&gt; is a semantic element used to indicate that the enclosed text should be <strong>emphasized</strong>.
                        </p>
                        <p>
                            &lt;i&gt; It is used to apply italics to the enclosed text purely for <strong>visual styling</strong>.
                        </p>
                    </div>
                </div>

                <hr />
                <div class="spacer">

                    <h2>&lt;Small&gt;</h2>
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
                                <hr />
                                <p> <strong>Lorem ipsum</strong> dolor sit amet, <b>consectetur adipiscing</b> elit, <br />
                                    <em>tempor incididunt</em> ut labore et <i>dolore magna</i> aliqua. Ut enim ad minim. <br />
                                    <small>Ut enim ad minim veniam,</small> quis nostrud exercitation ullamco laboris <br />
                                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit <br />
                                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                                <hr />
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            &lt;small&gt; is used to indicate that the enclosed text should be rendered in a <strong>smaller font size than the surrounding text</strong>.
                        </p>
                    </div>
                </div>

                <hr />
                <div class="spacer">

                    <h2>&lt;Mark&gt; and &lt;Del&gt;</h2>
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
                                <hr />
                                <p> <strong>Lorem ipsum</strong> dolor sit amet, <b>consectetur adipiscing</b> elit, <br />
                                    <em>tempor incididunt</em> ut labore et <i>dolore magna</i> aliqua. Ut enim ad minim. <br />
                                    <small>Ut enim ad minim veniam,</small> quis nostrud exercitation ullamco laboris <br />
                                    <mark>nisi ut aliquip ex ea</mark> commodo consequat. Duis aute irure dolor in reprehenderit <br />
                                    <del>in voluptate velit esse</del> cillum dolore eu fugiat nulla pariatur.
                                </p>
                                <hr />
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            &lt;mark&gt; is used to <strong>highlight</strong> or mark specific portions of text within a document.
                        </p>
                        <p>
                            &lt;del&gt; is used to indicate that text within it has been <strong>deleted or removed</strong> from the document.
                        </p>
                    </div>
                </div>

                <hr />
                <div class="spacer">
                    <h2>Summary</h2>
                    <dl>
                        <dt>&bull; &lt;strong&gt;</dt><br>
                        <dt>&bull; &lt;b&gt;</dt><br>
                        <dt>&bull; &lt;em&gt;</dt><br>
                        <dt>&bull; &lt;i&gt;</dt><br>
                        <dt>&bull; &lt;small&gt;</dt><br>
                        <dt>&bull; &lt;mark&gt;</dt><br>
                        <dt>&bull; &lt;del&gt;</dt><br>
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