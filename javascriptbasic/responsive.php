<?php
$fontawesome = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />';

$code1Html = $fontawesome . "\n\n" . '<div class="topnav" id="myTopnav">
  <a class="active" href="#"></i> Home</a>
  <a href="#">Search</a>
  <a href="#">Contact</a>
  <a href="#">Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>';

$code1Css = '.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 500px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }

  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}';

$code1Js = 'function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}';

$code1 = $code1Html . "\n\n<style>\n" . $code1Css . "\n</style>\n\n<script>\n" . $code1Js . "\n</script>";

$code2Html = $fontawesome . "\n\n" . '<div class="topnav" id="myTopnav">
  <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="#"><i class="fa fa-fw fa-search"></i> Search</a>
  <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <a href="#"><i class="fa fa-fw fa-user"></i> Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>';

$code2Css = '.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 500px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }

  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}';

$code2Js = 'function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}';

$code2 = $code2Html . "\n\n<style>\n" . $code2Css . "\n</style>\n\n<script>\n" . $code2Js . "\n</script>";

$code3Html = $fontawesome . "\n\n" . '<div class="topnav" id="myTopnav">
  <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="#"><i class="fa fa-fw fa-search"></i> Search</a>
  <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <a href="#"><i class="fa fa-fw fa-user"></i> Login</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search" />
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>';

$code3Css = '.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

.topnav .search-container {
  float: right;
}

.topnav input[type="text"] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width: 100px;
}

.topnav .search-container form {
  margin: 0px;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
  height: 32px;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 500px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }

  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }

  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

  .topnav .search-container {
    float: none;
    display: none;
  }

  .topnav.responsive .search-container {
    display: block;
  }

  .topnav .search-container form {
    margin: 5px;
    box-sizing: border-box;
    position: relative;
    margin-bottom: 5px;
  }

  .topnav .search-container input {
    display: block;
    width: 100%;
    box-sizing: border-box;
    padding-right: 45px;
  }

  .topnav .search-container button {
    margin: 0;
    position: absolute;
    top: 0;
    right: 0;
  }
}
';

$code3Js = 'function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}';

$code3 = $code3Html . "\n\n<style>\n" . $code3Css . "\n</style>\n\n<script>\n" . $code3Js . "\n</script>";

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
        <h1>Responsive</h1>
        <img src="<?= $baseFolder ?>javascriptbasic/images/responsive-banner.gif" alt="element"
          class="imageresponsive" />


        <hr />

        <div class="spacer"></div>
        <h2>Topnav</h2>
        <img src="<?= $baseFolder ?>javascriptbasic/images/responsive-topnav.png" alt="element"
          class="imageresponsive" />
        <div class="spacer"></div>

        <div class="row">
          <div class="column" style="background-color: #4a366a; border: 1px solid white">
            <h3 style="text-align: center; color: white">CODE</h3>

            <pre><code class="language-html line-numbers"><?= htmlentities($code1) ?></code></pre>

            <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
              <input type="hidden" name="html" value="<?= htmlentities($code1Html) ?>">
              <input type="hidden" name="css" value="<?= htmlentities($code1Css) ?>">
              <input type="hidden" name="js" value="<?= htmlentities($code1Js) ?>">
              <button
                style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;"
                onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';"
                onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                <span style="transition: color 0.3s;">Open Code Editor</span>
              </button>
            </form>
          </div>
          <div class="column"
            style="display: flex; flex-direction:column; background-color: #4a366a; border: 1px solid white">
            <h3 style="text-align: center; color: white">RESULT</h3>
            <div style="flex: 1; background-color: white; padding: 5px;">
              <iframe srcdoc="<?= htmlentities($code1) ?>" style="width: 100%; height: 100%;"></iframe>
            </div>
          </div>
        </div>

        <div class="spacer"></div>
        <h2>Navigation Bar with Icons</h2>
        <img src="<?= $baseFolder ?>javascriptbasic/images/responsive-navigation-bar-with-icons.png" alt="element"
          class="imageresponsive" />
        <div class="spacer"></div>

        <div class="row">
          <div class="column" style="background-color: #4a366a; border: 1px solid white">
            <h3 style="text-align: center; color: white">CODE</h3>

            <pre><code class="language-html line-numbers"><?= htmlentities($code2) ?></code></pre>

            <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
              <input type="hidden" name="html" value="<?= htmlentities($code2Html) ?>">
              <input type="hidden" name="css" value="<?= htmlentities($code2Css) ?>">
              <input type="hidden" name="js" value="<?= htmlentities($code2Js) ?>">
              <button
                style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;"
                onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';"
                onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                <span style="transition: color 0.3s;">Open Code Editor</span>
              </button>
            </form>
          </div>
          <div class="column"
            style="display: flex; flex-direction:column; background-color: #4a366a; border: 1px solid white">
            <h3 style="text-align: center; color: white">RESULT</h3>
            <div style="flex: 1; background-color: white; padding: 5px;">
              <iframe srcdoc="<?= htmlentities($code2) ?>" style="width: 100%; height: 100%;"></iframe>
            </div>
          </div>
        </div>

        <div class="spacer"></div>
        <h2>Navigation Bar with Icons and Search Bar</h2>
        <img src="<?= $baseFolder ?>javascriptbasic/images/responsive-navigation-bar-with-icons-and-search-bar.png"
          alt="element" class="imageresponsive" />
        <div class="spacer"></div>

        <div class="row">
          <div class="column" style="background-color: #4a366a; border: 1px solid white">
            <h3 style="text-align: center; color: white">CODE</h3>

            <pre><code class="language-html line-numbers"><?= htmlentities($code3) ?></code></pre>

            <form method="POST" action="<?= $baseFolder ?>code_editor.php" target="_blank">
              <input type="hidden" name="html" value="<?= htmlentities($code3Html) ?>">
              <input type="hidden" name="css" value="<?= htmlentities($code3Css) ?>">
              <input type="hidden" name="js" value="<?= htmlentities($code3Js) ?>">
              <button
                style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;"
                onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';"
                onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
                <span style="transition: color 0.3s;">Open Code Editor</span>
              </button>
            </form>
          </div>
          <div class="column"
            style="display: flex; flex-direction:column; background-color: #4a366a; border: 1px solid white">
            <h3 style="text-align: center; color: white">RESULT</h3>
            <div style="flex: 1; background-color: white; padding: 5px;">
              <iframe srcdoc="<?= htmlentities($code3) ?>" style="width: 100%; height: 100%;"></iframe>
            </div>
          </div>
        </div>

        <hr />
        <div class="spacer">
          <h2>Summary</h2>
          <dl>
            <dt>&bull; Topnav</dt><br>
            <dt>&bull; Navigation Bar with Icons</dt><br>
            <dt>&bull; Navigation Bar with Icons and Search Bar</dt><br>
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