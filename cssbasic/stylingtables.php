<?php
$code1Html = '<table>
<thead>
  <tr>
    <th>Heading 1</th>
    <th>Heading 2</th>
    <th>Heading 3</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Data 1</td>
    <td>Data 2</td>
    <td>Data 3</td>
  </tr>
  <tr>
    <td>Data 4</td>
    <td>Data 5</td>
    <td>Data 6</td>
  </tr>
  <tr>
    <td>Data 7</td>
    <td>Data 8</td>
    <td>Data 9</td>
  </tr>
</tbody>
</table>
';
$code1Css = 'th,
td {
  border: 1px solid #ccc;
}
';
$code1Js = '';

$code2Html = '
';
$code2Css = 'th,
td {
  border: 1px solid #ccc;
}
table {
  border-collapse: collapse;
  width: 60%;
}
td {
  text-align: center;
  height: 50px;
  vertical-align: bottom;
}
';
$code2Js = '';

$code3Html = '';
$code3Css = 'th,
td {
  border: 1px solid #ccc;
  padding: 15px;
}
table {
  border-collapse: collapse;
  width: 60%;
}
td {
  text-align: center;
  height: 50px;
  vertical-align: bottom;
}';
$code3Js = '';

$code4Html = '';
$code4Css = 'th,
td {
  border-bottom: 1px solid #ccc;
  padding: 15px;
}
table {
  border-collapse: collapse;
  width: 60%;
}
td {
  text-align: center;
  height: 50px;
  vertical-align: bottom;
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
          <h1>Styling Tables</h1>
          <img src="<?= $baseFolder ?>cssbasic/images/Styling Table.gif" alt="element" class="imageresponsive" />
        </div>

        <hr />
        <div class="spacer">
          <h2>Tables</h2>
          <div class="row">
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">CODE</h3>
              <pre><code class="language-html line-numbers"><?= htmlentities($code1Html) ?></code>
                  </pre>
              <!-- Button with updated inline styles -->

              <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
                <input type="hidden" name="html" value="<?= htmlentities($code1Html) ?>">
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
                <iframe style="width: 100%; height: 100%; border: none;" srcdoc="<table>
                    <thead>
                      <tr>
                        <th>Heading 1</th>
                        <th>Heading 2</th>
                        <th>Heading 3</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Data 1</td>
                        <td>Data 2</td>
                        <td>Data 3</td>
                      </tr>
                      <tr>
                        <td>Data 4</td>
                        <td>Data 5</td>
                        <td>Data 6</td>
                      </tr>
                      <tr>
                        <td>Data 7</td>
                        <td>Data 8</td>
                        <td>Data 9</td>
                      </tr>
                    </tbody>
                  </table>">
                </iframe>
              </div>
            </div>
          </div>
          <div>
            <p>
              Table without css.
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Tables</h2>
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
                <iframe style="width: 100%; height: 250px; border: none;" srcdoc="<table>
                    <thead>
                      <tr>
                        <th>Heading 1</th>
                        <th>Heading 2</th>
                        <th>Heading 3</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Data 1</td>
                        <td>Data 2</td>
                        <td>Data 3</td>
                      </tr>
                      <tr>
                        <td>Data 4</td>
                        <td>Data 5</td>
                        <td>Data 6</td>
                      </tr>
                      <tr>
                        <td>Data 7</td>
                        <td>Data 8</td>
                        <td>Data 9</td>
                      </tr>
                    </tbody>
                  </table> 
                  <style>
                  th,
                  td {
                  border: 1px solid #ccc;
                  }
                  </style>">

                </iframe>
              </div>
            </div>
          </div>
          <div>
            <p>
              Add
              th,
              td {
              border: 1px solid #ccc;
              }
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Tables</h2>
          <div class="row">
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">CODE</h3>
              <pre><code class="language-html line-numbers"><?= htmlentities($code1Html) ?></code>
                  </pre>
              <!-- Button with updated inline styles -->

              <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
                <input type="hidden" name="html" value="<?= htmlentities($code1Html) ?>">
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
                <iframe style="width: 100%; height: 250px; border: none;" srcdoc="<table>
                    <thead>
                      <tr>
                        <th>Heading 1</th>
                        <th>Heading 2</th>
                        <th>Heading 3</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Data 1</td>
                        <td>Data 2</td>
                        <td>Data 3</td>
                      </tr>
                      <tr>
                        <td>Data 4</td>
                        <td>Data 5</td>
                        <td>Data 6</td>
                      </tr>
                      <tr>
                        <td>Data 7</td>
                        <td>Data 8</td>
                        <td>Data 9</td>
                      </tr>
                    </tbody>
                  </table> 
                  <style>
                  th,
                  td {
                  border: 1px solid #ccc;
                  }
                  table {
                  border-collapse: collapse;
                  width: 60%;
                  }
                  td {
                  text-align: center;
                  height: 50px;
                  vertical-align: bottom;
                  }

                  </style>">

                </iframe>
              </div>
            </div>
          </div>
          <div>
            <p>
              Add
              table {
              border-collapse: collapse;
              width: 60%;
              }
              td {
              text-align: center;
              height: 50px;
              vertical-align: bottom;
              }
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Tables</h2>
          <div class="row">
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">CODE</h3>
              <pre><code class="language-html line-numbers"><?= htmlentities($code1Html) ?></code>
                  </pre>
              <!-- Button with updated inline styles -->

              <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
                <input type="hidden" name="html" value="<?= htmlentities($code1Html) ?>">
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
                <iframe style="width: 100%; height: 350px; border: none;" srcdoc="<table>
                    <thead>
                      <tr>
                        <th>Heading 1</th>
                        <th>Heading 2</th>
                        <th>Heading 3</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Data 1</td>
                        <td>Data 2</td>
                        <td>Data 3</td>
                      </tr>
                      <tr>
                        <td>Data 4</td>
                        <td>Data 5</td>
                        <td>Data 6</td>
                      </tr>
                      <tr>
                        <td>Data 7</td>
                        <td>Data 8</td>
                        <td>Data 9</td>
                      </tr>
                    </tbody>
                  </table> 
                  <style>
                  th,
                  td {
                  border: 1px solid #ccc;
                  padding: 15px;
                  }
                  table {
                  border-collapse: collapse;
                  width: 60%;
                  }
                  td {
                  text-align: center;
                  height: 50px;
                  vertical-align: bottom;
                  }

                  </style>">

                </iframe>
              </div>
            </div>
          </div>
          <div>
            <p>
              Add
              padding: 15px;
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Tables</h2>
          <div class="row">
            <div class="column" style="background-color: #4a366a; border: 1px solid white">
              <h3 style="text-align: center; color: white">CODE</h3>
              <pre><code class="language-html line-numbers"><?= htmlentities($code1Html) ?></code>
                  </pre>
              <!-- Button with updated inline styles -->

              <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
                <input type="hidden" name="html" value="<?= htmlentities($code1Html) ?>">
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
                <iframe style="width: 100%; height: 350px; border: none;" srcdoc="<table>
                    <thead>
                      <tr>
                        <th>Heading 1</th>
                        <th>Heading 2</th>
                        <th>Heading 3</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Data 1</td>
                        <td>Data 2</td>
                        <td>Data 3</td>
                      </tr>
                      <tr>
                        <td>Data 4</td>
                        <td>Data 5</td>
                        <td>Data 6</td>
                      </tr>
                      <tr>
                        <td>Data 7</td>
                        <td>Data 8</td>
                        <td>Data 9</td>
                      </tr>
                    </tbody>
                  </table> 
                  <style>
                  th,
                  td {
                  border-bottom: 1px solid #ccc;
                  padding: 15px;
                  }
                  table {
                  border-collapse: collapse;
                  width: 60%;
                  }
                  td {
                  text-align: center;
                  height: 50px;
                  vertical-align: bottom;
                  }
                  </style>">
                </iframe>
              </div>
            </div>
          </div>
          <div>
            <p>
              Change
              border: 1px solid #ccc;
              To
              border-bottom: 1px solid #ccc;
            </p>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Summary</h2>
          <dl>
            <dt>&bull; Styling Tables</dt><br>
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