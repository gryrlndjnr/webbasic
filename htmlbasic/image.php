<?php
$code1Html = '<img src="/htmlbasic/images/sample.jpg" alt="Gary" />
';
$code1Css = "";
$code1Js = "";

$code2Html = '<img src="/htmlbasic/images/sample.jpg" alt="Gary" width="150px" height="150px" />
';
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
                    <h1>Image</h1>
                    <img src="<?= $baseFolder ?>htmlbasic/images/Image.gif" alt="element" class="imageresponsive" />
                </div>

                <hr />
                <div class="spacer">
                    <h2>Image</h2>
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
                                <iframe srcdoc="<?= htmlentities($code1Html) ?>" style="width: 100%; height: 100%;"></iframe>


                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            &lt;image /&gt; - is used to display <strong>images on a web page</strong>.
                        </p>
                        <p>
                            Src is attribute specifies the <strong>source or location of the image file</strong>.
                        </p>
                        <p>
                            Alt is attribute provides <strong>alternative text for the image</strong>. This text is displayed if the image cannot be loaded or if the user is using a screen reader.
                        </p>

                    </div>
                </div>

                <hr />
                <div class="spacer">
                    <h2>Image with width and height</h2>
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
                                <!-- <iframe srcdoc="<?= htmlentities($code2Html) ?>" style="width: 100%; height: 100%;"></iframe> -->
                                <img src="<?= $baseFolder ?>htmlbasic/images/sample.jpg" alt="Gary" width="200px" height="200px" />


                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            Width and height These attributes specify the <strong>width and height of the image in pixels</strong>.
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