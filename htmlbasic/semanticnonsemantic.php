<?php
$code1Html = '<header>
<h2>Cities</h2>
</header>

<section>
<nav>
  <ul>
    <li><a href="#">London</a></li>
    <li><a href="#">Paris</a></li>
    <li><a href="#">Tokyo</a></li>
  </ul>
</nav>

<article>
  <h1>London</h1>
  <p>London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
  <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
</article>
</section>

<footer>
<p>Footer</p>
</footer>
';
$code1Css = '* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Container for flexboxes */
section {
  display: -webkit-flex;
  display: flex;
}

/* Style the navigation menu */
nav {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

/* Style the content */
article {
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3;
  background-color: #f1f1f1;
  padding: 10px;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* imageresponsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
@media (max-width: 600px) {
  section {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}
';
$code1Js = '';

$code2Html = '<div style="background-color:#FFF4A3;">
  <h2>London</h2>
  <p>London is the capital city of England.</p>
  <p>London has over 13 million inhabitants.</p>
</div>

<hr />

<div style="background-color:#FFC0C7;">
  <h2>Oslo</h2>
  <p>Oslo is the capital city of Norway.</p>
  <p>Oslo has over 600.000 inhabitants.</p>
</div>

<hr />

<div style="background-color:#D9EEE1;">
  <h2>Rome</h2>
  <p>Rome is the capital city of Italy.</p>
  <p>Rome has almost 3 million inhabitants.</p>
</div>
';
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
          <h1>Semantic and Non Semantic</h1>
          <img src="<?= $baseFolder ?>htmlbasic/images/semantic.png" alt="element" class="imageresponsive2" />
          <img src="<?= $baseFolder ?>htmlbasic/images/nonsemantic.png" alt="element" class="imageresponsive2" />
        </div>

        <hr />
        <div class=" spacer">
          <h2>Semantic</h2>
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

                <header style="background-color: #666; padding: 30px; text-align: center; font-size: 35px; color: white;">
                  <h2>Cities</h2>
                </header>

                <section style="display: -webkit-flex; display: flex;">
                  <nav style="-webkit-flex: 1; -ms-flex: 1; flex: 1; background: #ccc; padding: 20px;">
                    <ul style="list-style-type: none; padding: 0;">
                      <li><a href="">London</a></li>
                      <li><a href="">Paris</a></li>
                      <li><a href="">Tokyo</a></li>
                    </ul>
                  </nav>

                  <article style="-webkit-flex: 3; -ms-flex: 3; flex: 3; background-color: #f1f1f1; padding: 10px;">
                    <h1>London</h1>
                    <p>London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
                    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
                  </article>
                </section>

                <footer style="background-color: #777; padding: 10px; text-align: center; color: white;">
                  <p>Footer</p>
                </footer>

              </div>
            </div>
          </div>
          <div>
            <p>
              &bull;Semantic HTML elements are HTML tags that convey meaning about the <strong>structure of the web page's content</strong>.
            </p>
            <p>
              &bull;Using semantic HTML elements helps improve accessibility, <strong>search engine optimization (SEO)</strong>, and the overall structure and readability of your web page.
            </p>
            <p>
              &lt;header&gt; - Represents a <strong>container for introductory content</strong> or a set of navigational links.
            </p>
            <p>
              &lt;nav&gt; - Defines a section of <strong>navigation</strong> links.
            </p>
            <p>
              &lt;main&gt;: -Represents the <strong>main content</strong> of the document. There should be only one
            <main> element in a page.
              </p>
              <p>
                &lt;article&gt; - Represents a <strong>self-contained composition</strong> that can be independently distributed or syndicated, such as a news article or blog post.
              </p>
              <p>
                &lt;section&gt; - Represents a section of <strong>content within a document</strong> and can have its own heading.
              </p>
              <p>
                &lt;aside&gt; - Defines content that is tangentially <strong>related to the content</strong> around it, often used for sidebars.
              </p>
              <p>
                &lt;footer&gt; - Represents a container for the <strong>footer of a section</strong> or a page.
              </p>
          </div>
        </div>

        <hr />

        <div class="spacer">
          <h2>Non Semantic</h2>
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
                <div style="background-color:#FFF4A3;">
                  <h2>London</h2>
                  <p>London is the capital city of England.</p>
                  <p>London has over 13 million inhabitants.</p>
                </div>

                <div style="background-color:#FFC0C7;">
                  <h2>Oslo</h2>
                  <p>Oslo is the capital city of Norway.</p>
                  <p>Oslo has over 600.000 inhabitants.</p>
                </div>

                <div style="background-color:#D9EEE1;">
                  <h2>Rome</h2>
                  <p>Rome is the capital city of Italy.</p>
                  <p>Rome has almost 3 million inhabitants.</p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <p>
              &bull;Non-semantic HTML elements are HTML tags that <strong>do not convey any specific meaning about the content</strong> they enclose.
            </p>
            <p>
              &bull;These elements are typically used for <strong>layout and presentation purposes</strong> rather than to define the structure or meaning of the content.
            </p>
            <p>
              &lt;div&gt; - The &lt;div&gt; element is a <strong>generic container</strong> that is often used for layout and styling purposes. It does not convey any specific meaning on its own.
            </p>
            <p>
              &lt;span&gt; - Similar to the &lt;div&gt;, the &lt;span&gt; element is a <strong>generic inline container</strong> used for styling and scripting, with no inherent semantic meaning.
            </p>
            <p>
              &lt;br&gt; - The line break element is used to create <strong>line breaks or new lines</strong> within text content.
            </p>
            <p>
              &lt;hr&gt; - The horizontal rule element is used to create thematic breaks, such as <strong>horizontal lines</strong>, typically used for visual separation.
            </p>
            <p>
              &lt;font&gt; - The &lt;font&gt; element used to be used for specifying <strong>text font and size</strong> but is now deprecated in favor of CSS for styling text.
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Summary</h2>
          <dl>
            <dt>&bull; Important of Semantic HTML</dt><br>
            <dt>&bull; Non Semantic HTML</dt><br>
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