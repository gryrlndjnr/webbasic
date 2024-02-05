<?php
$code1Html = '<a href="<?= $baseFolder ?>htmlbasic/samplehome.php">Home</a>
';
$code1Css = '';
$code1Js = '';

$code2Html = '<a href="https://www.keystonesubic.com/en/home/" target="_blank">Keystone Subic</a>
';
$code2Css = '';
$code2Js = '';
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
                    <h1>Links</h1>
                    <img src="<?= $baseFolder ?>htmlbasic/images/links.gif" alt="links" class="imageresponsive" />
                </div>

                <hr />
                <div class="spacer">
                    <h2>Internal Link</h2>
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
                                <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white'; ">
                                    <span style="transition: color 0.3s;">Open Code Editor</span>
                                </button>
                            </form>
                        </div>
                        <div class="column" style="background-color: #4a366a; border: 1px solid white">
                            <h3 style="text-align: center; color: white">RESULT</h3>

                            <div id="output-html" style="background-color: white; padding: 5px;">
                                <a href="<?= $baseFolder ?>htmlbasic/samplehome.php" target="_blank">Home</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            A <strong>Internal link</strong> (a link to a page within the same website)
                        </p>
                    </div>
                </div>

                <hr />
                <div class="spacer">
                    <h2>External Link</h2>
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
                                <a href="https://www.keystonesubic.com/en/home/" target="_blank">Keystone Subic</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            A <strong>External link</strong> (a link to a page from other website)
                        </p>
                    </div>
                </div>

                <hr />
                <div class="spacer">
                    <h2>Summary</h2>
                    <dl>
                        <dt>&bull; IMG</dt><br>
                        <dt>&bull; SRC</dt><br>
                        <dt>&bull; ALT</dt><br>
                        <dt>&bull; Width</dt><br>
                        <dt>&bull; Height</dt><br>
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