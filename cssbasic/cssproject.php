<?php
$code1Html = '';
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
        <h1>CSS Practicum (Modify HTML Project)</h1>
        <h2>
          <select name="" id="project">
            <option value="philippines">• Create list of Food</option>
            <option value="korea">• About your Family</option>
            <option value="vietnam">• Your Hobbies</option>
            <option value="vietnam">• Your Favorite Star</option>
          </select>
          <!-- • Create list of Food <br />
      • About your Family <br />
      • Your Hobbies <br />
      • Your Favorite Star -->
        </h2>
        <dl>
          <dt>
            <h3>Menu</h3>
          </dt>
          <dd>link to apple page</dd>
          <dd>link to orange page</dd>
          <dd>link to mango page</dd>
          <dt>
            <h3>Right or Left Side bar</h3>
          </dt>
          <dd>link to apple page</dd>
          <dd>link to orange page</dd>
          <dd>link to mango page</dd>
          <dt>
            <h3>Content</h3>
          </dt>
          <dd>Creator Page Content</dd>
          <dt>
            <h3>Footer</h3>
          </dt>
          <dd>Creator Name</dd>
          <dd>link to apple page</dd>
          <dd>link to orange page</dd>
          <dd>link to mango page</dd>
          <dd>Link to your Social Media Page</dd>
        </dl>
        <br>
      </article>
    </section>

    <!-- ======================================== -->
  </main>
  <?php require_once("../footer.php"); ?>
</div>
<?php require_once("../closing.php") ?>
<!-- ======================================== -->