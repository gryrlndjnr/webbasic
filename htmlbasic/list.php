<?php
$code1Html = "<ul>
    <li>Gary</li>
    <li>Jonathan</li>
    <li>Aubrey</li>
</ul>";
$code1Css = "";
$code1Js = "";

$code2Html = "<ol>
    <li>Gary</li>
    <li>Jonathan</li>
    <li>Aubrey</li>
</ol>";
$code2Css = "";
$code2Js = "";

$code3Html = "<dl>
    <dt>Gary</dt>
        <dd>- 19</dd>
    <dt>Jonathan</dt>
        <dd>- 20</dd>
    <dt>Aubrey</dt>
        <dd>- 23</dd>
</dl>
";
$code3Css = "";
$code3Js = "";
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
                    <h1>List</h1>
                    <img src="<?= $baseFolder ?>htmlbasic/images/LIST.gif" alt="element" class="imageresponsive" />
                </div>

                <hr />
                <div class="spacer">
                    <h2>Unordered List</h2>
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
                                <ul>
                                    <li>Gary</li>
                                    <li>Jonathan</li>
                                    <li>Aubrey</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            &lt;ul&gt; - stands for "unordered list".
                        </p>
                        <p>
                            It is used to create a <strong>list of items</strong>, typically presented as a bulleted or unordered list.
                        </p>
                        <p>
                            Each item within a &lt;ul&gt; - is represented by a &lt;li&gt; - (list item) element, and these list items are displayed with <strong>bullet points</strong> by default.
                        </p>
                    </div>
                </div>

                <hr />
                <div class="spacer">
                    <h2>Ordered List</h2>
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
                                <ol>
                                    <li>Gary</li>
                                    <li>Jonathan</li>
                                    <li>Aubrey</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            &lt;ol&gt; - stands for "ordered list“.
                        </p>
                        <p>
                            It is used to create a list of items that should be displayed in a specific sequential or <strong>ordered manner</strong>.
                        </p>
                        <p>
                            Each item within an &lt;ol&gt; is represented by a &lt;li&gt; (list item) element, and these list items are typically displayed with numbers or letters <br>(or other ordered markers) by default, indicating the sequence or order of the items.
                        </p>
                    </div>
                </div>

                <hr />
                <div class="spacer">
                    <h2>Description List</h2>
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
                                <dl>
                                    <dt>Gary</dt>
                                    <dd>- 19</dd>
                                    <dt>Jonathan</dt>
                                    <dd>- 20</dd>
                                    <dt>Aubrey</dt>
                                    <dd>- 23</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            &lt;dl&gt; - element in HTML stands for "description list."
                        </p>
                        <p>
                            It is used to create a list of items and their corresponding <strong>descriptions or definitions</strong>.
                        </p>
                        <p>
                            A description list consists of terms (typically represented by &lt;dt&gt; elements) and their associated definitions (typically represented by &lt;dd&gt; elements)
                        </p>
                    </div>
                </div>

                <hr />
                <div class="spacer">
                    <h2>Summary</h2>
                    <dl>
                        <dt>&bull; Unordered List</dt><br>
                        <dt>&bull; Ordered List</dt><br>
                        <dt>&bull; Description List</dt><br>
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