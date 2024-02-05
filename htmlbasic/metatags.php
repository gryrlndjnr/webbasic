<?php
$code1Html = '<meta charset="UTF-8">
<meta name="description" content="This webpage aims to provide complete beginners information about HTML fundamentals">
<meta name="keywords" content="HTML,CSS,JavaScript">
<meta name="author" content="Gary Ecleo">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<p>All meta information goes in the head section...</p>
';
$code1Css = '';
$code1Js = '';

$code2Html = '';
$code2Css = '';
$code2Js = '';

$code3Html = '';
$code3Css = '';
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
          <h1>Meta Tags</h1>
          <img src="<?= $baseFolder ?>htmlbasic/images/meta tag.gif" alt="element" class="imageresponsive" />
        </div>

        <hr />
        <div class="spacer">
          <h2>Meta Tags</h2>
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
                <p>All meta information goes in the head section...</p>
              </div>
            </div>
          </div>
          <div>
            <p>
              &lt;meta charset&gt; element is used in HTML to specify the <strong>character encoding for the document</strong>.
            </p>
            <p>
              &lt;meta name=“author” content&gt; element is used to specify the author or <strong>creator of an HTML document</strong>.
            </p>
            <p>
              &lt;meta name=“description” content&gt; element is used in HTML to provide a brief summary or <strong>description of the content</strong> of an HTML document.
            </p>
            <p>
              &lt;meta name=“viewport” content&gt; element is used in HTML to specify how a web page should be <strong>displayed and scaled on different devices and screens</strong>, particularly for mobile devices.
            </p>
            <p>
              &lt;meta name="keywords" content&gt; element in HTML is used to provide a <strong>list of keywords or terms</strong> that are relevant to the content of the web page.
            </p>
          </div>
        </div>

        <hr />

        <div>
          <h3>Meta Title and Meta Description Example</h3>
          <img src="<?= $baseFolder ?>htmlbasic/images/meta title and description.png" alt="element" class="imageresponsive" />
          <p>Meta Title and Meta Description</p>
        </div>

        <hr />

        <div>
          <h3>Meta Name Viewport Example</h3>
          <img src="<?= $baseFolder ?>htmlbasic/images/metaviewport.png" alt="element" class="imageresponsive" />
          <p>Meta Name Viewport</p>
        </div>

        <hr />
        <div class="spacer">
          <h2>Summary</h2>
          <dl>
            <dt>&bull; &lt;meta charset&gt;</dt><br>
            <dt>&bull; &lt;meta name=“author” content&gt;</dt><br>
            <dt>&bull; &lt;meta name=“description” content&gt;</dt><br>
            <dt>&bull; &lt;meta name=“viewport” content&gt;</dt><br>
            <dt>&bull; &lt;meta name="keywords" content&gt;</dt><br>
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