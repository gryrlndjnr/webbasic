<?php
$code1Html = '<form>
  <label for="username">Username</label><br />
  <input type="text" id="username" />
</form>
';
$code1Css = '';
$code1Js = '';

$code2Html = '<form>
    <button>Submit</button>
</form>
';
$code2Css = '';
$code2Js = '';

$code3Html = '<form>
<label for="country">Country</label><br />
<select name="" id="country">
  <option value="philippines">Philippines</option>
  <option value="korea">Korea</option>
  <option value="vietnam">Vietnam</option>
</select>
</form>
';
$code3Css = '';
$code3Js = '';

$code4Html = '<form>
  <label>Job Type</label><br />
  <input type="radio" name="jobtype" value="parttime" id="parttime" />
  <label for="parttime">Part time</label><br />
  <input type="radio" name="jobtype" value="fulltime" id="fulltime" />
  <label for="fulltime">Full time</label>
</form>
';
$code4Css = '';
$code4Js = '';

$code5Html = '<form>
<label>Job Type</label><br />
<input type="checkbox" name="jobtypecb" value="parttime" id="parttimecb" />
<label for="parttime">Part time</label><br />
<input type="checkbox" name="jobtypecb" value="fulltime" id="fulltimecb" />
<label for="fulltime">Full time</label>
</form>
';
$code5Css = '';
$code5Js = '';

$code6Html = '<label for="about">About you</label><br />
<textarea name="" id="about"></textarea>
';
$code6Css = '';
$code6Js = '';
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
          <h1>Forms</h1>
          <img src="<?= $baseFolder ?>htmlbasic/images/onchange event.gif" alt="element" class="imageresponsive" />
        </div>

        <hr />
        <div class="spacer">
          <h2>Single line Input</h2>
          <div class="row">
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">CODE</h3>
              <pre><code class="language-html line-numbers"><?= htmlspecialchars($code1Html) ?></code>
                  </pre>
              <!-- Button with updated inline styles -->

              <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
                <input type="hidden" name="html" value="<?= htmlspecialchars($code1Html) ?>">
                <input type="hidden" name="css" value="<?= htmlspecialchars($code1Css) ?>">
                <input type="hidden" name="js" value="<?= htmlspecialchars($code1Js) ?>">
                <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                  <span style="transition: color 0.3s;">Open Code Editor</span>
                </button>
              </form>
            </div>
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">RESULT</h3>

              <div style="background-color: white; padding: 5px">

                <label for="username">Username</label><br />
                <input type="text" id="username" /><br />

              </div>
            </div>
          </div>
          <div>
            <p>
              &lt;form&gt; is used to <strong>create a container</strong> for user input elements, such as text fields, checkboxes, radio buttons, and buttons.
            </p>
            <p>
              &lt;label&gt; is used to associate a <strong>label with an HTML</strong> form control, such as an input element or a select element.
            </p>
            <p>
              &lt;label for&gt; attribute of the &lt;label&gt; element specifies which form control it's associated with using the id of the associated control.
            </p>
            <p>
              &lt;input&gt; It allows users to provide <strong>input in various forms</strong>, including text, numbers, checkboxes, radio buttons, and more.
            </p>
            <p>
              &lt;input type&gt; attribute, which can be <strong>set to different values to specify the type</strong> of input control it represents.
            </p>
          </div>
        </div>

        <hr />

        <div class="spacer">
          <h2>HTML Template</h2>
          <div class="row">
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">CODE</h3>
              <pre><code class="language-html line-numbers"><?= htmlspecialchars($code3Html) ?></code>
                  </pre>
              <!-- Button with updated inline styles -->

              <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
                <input type="hidden" name="html" value="<?= htmlspecialchars($code3Html) ?>">
                <input type="hidden" name="css" value="<?= htmlspecialchars($code3Css) ?>">
                <input type="hidden" name="js" value="<?= htmlspecialchars($code3Js) ?>">
                <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                  <span style="transition: color 0.3s;">Open Code Editor</span>
                </button>
              </form>
            </div>
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">RESULT</h3>

              <div style="background-color: white; padding: 5px;">
                <form>
                  <label for="country">Country</label><br />
                  <select name="" id="country">
                    <option value="philippines">Philippines</option>
                    <option value="korea">Korea</option>
                    <option value="vietnam"> Vietnam </option>
                  </select>
                </form>
              </div>
            </div>
          </div>
          <div>
            <p>
              &lt;select&gt; is used to create a <strong>dropdown list</strong>, also known as a select box or select element.
            </p>
            <p>
              &lt;option&gt; is used within a &lt;select&gt; element to define <strong>individual options or choices</strong> in a dropdown list.
            </p>
            <p>
              &lt;option value&gt; is used to specify the value of individual option
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>HTML Template</h2>
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
                <form>
                  <label>Job Type</label><br />
                  <input type="radio" name="jobtype" value="parttime" id="parttime" />
                  <label for="parttime">Part time</label><br />
                  <input type="radio" name="jobtype" value="fulltime" id="fulltime" />
                  <label for="fulltime">Full time</label>
                  </select>
                </form>
              </div>
            </div>
          </div>
          <div>
            <p>
              &lt;input type”radio”&gt; is used to create radio buttons, which allow users to make a <strong>single selection from a list</strong> of mutually exclusive options.
            </p>
            <p>
              &lt;input type”radio” name&gt; attribute is used to group the <strong>radio buttons</strong> together
            </p>
            <p>
              &lt;input type”radio” value&gt; attribute specifies the value associated with the <strong>selected radio button</strong>.
            </p>
          </div>
        </div>

        <hr />

        <div class="spacer">
          <h2>HTML Template</h2>
          <div class="row">
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">CODE</h3>
              <pre><code class="language-html line-numbers"><?= htmlentities($code5Html) ?></code>
                  </pre>
              <!-- Button with updated inline styles -->

              <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
                <input type="hidden" name="html" value="<?= htmlentities($code5Html) ?>">
                <input type="hidden" name="css" value="<?= htmlentities($code5Css) ?>">
                <input type="hidden" name="js" value="<?= htmlentities($code5Js) ?>">
                <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                  <span style="transition: color 0.3s;">Open Code Editor</span>
                </button>
              </form>
            </div>
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">RESULT</h3>

              <div style="background-color: white; padding: 5px;">
                <form>
                  <label>Job Type</label><br />
                  <input type="checkbox" name="jobtypecb" value="parttime" id="parttimecb" />
                  <label for="parttime">Part time</label><br />
                  <input type="checkbox" name="jobtypecb" value="fulltime" id="fulltimecb" />
                  <label for="fulltime">Full time</label>
                </form>
              </div>
            </div>
          </div>
          <div>
            <p>
              &lt;input type”checkbox”&gt; is used to create <strong>checkbox input</strong> fields. Checkboxes are used when you want to allow users to select one or more options from a list of choices.
            </p>
            <p>
              &lt;input type”checkbox” name&gt; attribute is used to <strong>group the checkboxes together</strong>.
            </p>
            <p>
              &lt;input type”checkbox” value&gt; attribute specifies the value associated with each checkbox.
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>HTML Template</h2>
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
                <form>
                  <button>Submit</button>
                </form>

              </div>
            </div>
          </div>
          <div>
            <p>
              &lt;button&gt; tag defines a <strong>clickable</strong> button.
            </p>
            <p>
              The &lt;button&gt; tag also supports the <strong>Global Attributes</strong> in HTML.
            </p>
            <p>
              The &lt;button&gt; tag also supports the <strong>Event Attributes</strong> in HTML.
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Multi line Input</h2>
          <div class="row">
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">CODE</h3>
              <pre><code class="language-html line-numbers"><?= htmlentities($code6Html) ?></code>
                  </pre>
              <!-- Button with updated inline styles -->

              <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
                <input type="hidden" name="html" value="<?= htmlentities($code6Html) ?>">
                <input type="hidden" name="css" value="<?= htmlentities($code6Css) ?>">
                <input type="hidden" name="js" value="<?= htmlentities($code6Js) ?>">
                <button style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                  <span style="transition: color 0.3s;">Open Code Editor</span>
                </button>
              </form>
            </div>
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">RESULT</h3>

              <div style="background-color: white; padding: 5px;">
                <label for="about">About you</label><br />
                <textarea name="" id="about"></textarea>
              </div>
            </div>
          </div>
          <div>
            <p>
              &lt;textarea&gt; is used to create a <strong>multi-line text input</strong> field, allowing users to enter and edit longer blocks of text, such as comments, feedback, or messages.
            </p>
            <p>
              &lt;textarea cols&gt; attribute specifies the visible width of the <strong>input field in characters</strong>.
            </p>
            <p>
              &lt;textarea rows&gt; attribute determines the <strong>visible height of the input field</strong> in lines
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Summary</h2>
          <dl>
            <dt>&bull; Single line Input</dt><br>
            <dt>&bull; Drop down</dt><br>
            <dt>&bull; Radio Buttons</dt><br>
            <dt>&bull; Check Box</dt><br>
            <dt>&bull; Button</dt><br>
            <dt>&bull; Multi line Input</dt><br>
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