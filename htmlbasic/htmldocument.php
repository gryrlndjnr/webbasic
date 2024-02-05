<?php
$code1Html = "<!DOCTYPE html>";
$code1Css = "";
$code1Js = "";

$code2Html = "<!DOCTYPE html>
<html>
</html>  
";
$code2Css = "";
$code2Js = "";

$code3Html = "<!DOCTYPE html>
<html>
      <head></head>
</html>  
";
$code3Css = "";
$code3Js = "";

$code4Html = "<!DOCTYPE html>
<html>
      <head></head>
      <body></body>
</html>     
";
$code4Css = "";
$code4Js = "";

$code5Html = "<!DOCTYPE html>
<html>
      <head>
            <title>HTML Basic</title>
      </head>
      <body></body>
</html>     
";
$code5Css = "";
$code5Js = "";

$code6Html = "<!DOCTYPE html>
<html>
      <head>
            <title>HTML Basic</title>
      </head>
      <body>
            <p>Welcome to HTML</p> 
      </body>
</html>
                  
";
$code6Css = "";
$code6Js = "";
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
          <h1>HTML Document</h1>
          <img src="<?= $baseFolder ?>htmlbasic/images/html element.gif" alt="element" class="imageresponsive" />
        </div>
        <hr />
        <div class="spacer">
          <h2>&lt;!DOCTYPE html&gt;</h2>
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
                <!DOCTYPE html>
              </div>
            </div>
          </div>
          <div>
            <p>
              &lt;!DOCTYPE html&gt; is a declaration at the beginning of an HTML document that specifies the document type and version of HTML being used.
            </p>
            <p>
              It's not an HTML element or a tag but rather a document type declaration (DTD).
            </p>
            <p>
              It informs the web browser and other user agents about the <strong>version</strong> of HTML in which the web page is written and how it should be interpreted.
            </p>

          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>&lt;html&gt;</h2>
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
                <!DOCTYPE html>
                <html>

                </html>
              </div>
            </div>
          </div>
          <div>

            <p>
              HTML are used to define the root element of an HTML document.
            </p>
            <p>
              They encapsulate the entire content of an HTML page and provide information about the document's <strong>structure</strong> and version.
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>&lt;head&gt;</h2>
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
                <!DOCTYPE html>
                <html>

                <head>
                </head>

                </html>
              </div>
            </div>
          </div>
          <div>

            <p>
              Head element is used to define the metadata and other non-visible information about an HTML document.
            </p>
            <p>
              It is an essential part of the HTML structure, and it typically appears within the &lt;head&gt; element but outside of the &lt;body&gt; element.
            </p>
            <p>It contains <strong>meta-information</strong> about the HTML document.
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>&lt;body&gt;</h2>
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
                <!DOCTYPE html>
                <html>

                <head>
                </head>

                <body>
                </body>

                </html>
              </div>
            </div>
          </div>
          <div>

            <p>
              Body element is used to define the <strong>actual or visible content</strong> of an HTML document.
            </p>
            <p>
              It encapsulates all the content that should be displayed in the web browser, including text, images, links, and other elements that are presented to the user.
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>&lt;title&gt;</h2>
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
                <!DOCTYPE html>
                <html>

                <head>
                  <title>HTML Basic</title>
                </head>

                <body>

                </body>

                </html>
              </div>
            </div>
          </div>
          <div>

            <p>
              Title element is used to define the title of an HTML document.
            </p>
            <p>
              This title is displayed in the <strong>browser's title bar or tab</strong> and is also used as the default name when a user bookmarks a page.
            </p>
            <p>
              Additionally, search engines use the title as an important piece of metadata for search results.
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Welcome to HTML</h2>
          <div class="row">
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">CODE</h3>
              <pre><code class="language-html line-numbers"><?= htmlentities($code6Html) ?></code>
                  </pre>
              <!-- Button with updated inline styles -->

              <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
                <input type="hidden" name="html" value="<?= $code6Html ?>">
                <input type="hidden" name="css" value="<?= $code6Css ?>">
                <input type="hidden" name="js" value="<?= $code6Js ?>">
                <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                  <span style="transition: color 0.3s;">Open Code Editor</span>
                </button>
              </form>
            </div>
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">RESULT</h3>

              <div style="background-color: white; padding: 5px">
                <!DOCTYPE html>
                <html>

                <head>
                  <title>HTML Basic</title>
                </head>

                <body>
                  <p>
                    Welcome to Html
                  </p>
                </body>

                </html>
              </div>
            </div>
          </div>
          <div>

            <p>
              Welcome to Html
            </p>

            <a href="/htmlbasic/HTML Basic-HTML Document.pptx" download>Download ppt file</a>

          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Summary</h2>
          <dl>
            <dt>&bull; &lt;!DOCTYPE html&gt;</dt><br>
            <dt>&bull; &lt;html&gt; &lt;/html&gt;</dt><br>
            <dt>&bull; &lt;head&gt; &lt;/head&gt;</dt><br>
            <dt>&bull; &lt;title&gt; &lt;/title&gt;</dt><br>
            <dt>&bull; &lt;body&gt; &lt;/body&gt;</dt><br>
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