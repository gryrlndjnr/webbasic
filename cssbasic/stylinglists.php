<?php
$code1Html = '<ul>
  <li>Bread</li>
  <li>Milk</li>
  <li>Eggs</li>
</ul>
';
$code1Css = '';
$code1Js = '';

$code2Html = '<ul>
<li>Bread</li>
<li>Milk</li>
<li>Eggs</li>
</ul>
';
$code2Css = 'ul {
  list-style: square;
}  
  ';
$code2Js = '';

$code3Html = '<ul>
<li>Bread</li>
<li>Milk</li>
<li>Eggs</li>
</ul>
';
$code3Css = 'ul {
  list-style: none;
}
  ';
$code3Js = '';

$code4Html = '<ul>
<li>smiling face with heart-eyes</li>
<li>star-struck</li>
<li>face blowing a kiss</li>
</ul>';
$code4Css = 'ul {
  list-style: none;
}';
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
          <h1>Styling lists</h1>
          <img src="<?= $baseFolder ?>cssbasic/images/styling list.gif" alt="element" class="imageresponsive" />
        </div>

        <hr />
        <div class="spacer">
          <h2>Circle</h2>
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
                <ul>
                  <li>Bread</li>
                  <li>Milk</li>
                  <li>Eggs</li>
                </ul>
              </div>
            </div>
          </div>
          <div>
            <p>
              Default ul and li is black dots.
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Square</h2>
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
                <ul style="list-style: square;">
                  <li>Bread</li>
                  <li>Milk</li>
                  <li>Eggs</li>
                </ul>
              </div>
            </div>
          </div>
          <div>
            <p>
              ul and li is square
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>None</h2>
          <div class="row">
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">CODE</h3>
              <pre><code class="language-html line-numbers"><?= htmlentities($code3Html) ?></code>
                  </pre>
              <!-- Button with updated inline styles -->

              <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
                <input type="hidden" name="html" value="<?= htmlentities($code3Html) ?>">
                <input type="hidden" name="css" value="<?= htmlentities($code3Css) ?>">
                <input type="hidden" name="js" value="<?= htmlentities($code3Js) ?>">
                <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                  <span style="transition: color 0.3s;">Open Code Editor</span>
                </button>
              </form>
            </div>
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">RESULT</h3>

              <div style="background-color: white; padding: 5px;">
                <ul style="list-style: none;">
                  <li>Bread</li>
                  <li>Milk</li>
                  <li>Eggs</li>
                </ul>
              </div>
            </div>
          </div>
          <div>
            <p>
              ul and li is no style
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Emoji</h2>
          <div class="row">
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">CODE</h3>
              <pre><code class="language-html line-numbers"><?= htmlentities($code4Html) ?></code>
                  </pre>
              <!-- Button with updated inline styles -->

              <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
                <input type="hidden" name="html" value="<?= htmlentities($code4Html) ?>">
                <input type="hidden" name="css" value="<?= htmlentities($code4Css) ?>">
                <input type="hidden" name="js" value="<?= htmlentities($code4Js) ?>">
                <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                  <span style="transition: color 0.3s;">Open Code Editor</span>
                </button>
              </form>
            </div>
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">RESULT</h3>

              <div style="background-color: white; padding: 5px;">
                <ul style="list-style: none;">
                  <li style="color: purple;">&#x1f60D; smiling face with heart-eyes</li>
                  <li style="color: purple;">&#x1f929; star-struck</li>
                  <li style="color: purple;">&#x1f618; face blowing a kiss</li>
                </ul>
              </div>
            </div>
          </div>
          <div>
            <p>
              ul and li in emoji.
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Summary</h2>
          <dl>
            <dt>&bull; Circle</dt><br>
            <dt>&bull; Square</dt><br>
            <dt>&bull; None</dt><br>
            <dt>&bull; Emoji</dt><br>
          </dl>
        </div>
      </article>
    </section>
    <!--  
      https://www.quackit.com/character_sets/emoji/emoji_v3.0/unicode_emoji_v3.0_characters_all.cfm
          &#x1f60D;
          &#x1f929;
          &#x1f618;
    -->
    <!-- ======================================== -->
  </main>
  <?php require_once("../footer.php"); ?>
</div>
<?php require_once("../closing.php") ?>
<!-- ======================================== -->