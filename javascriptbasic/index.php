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

    <style>
      /* Default styles */
      .table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
      }

      .table th,
      .table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
      }

      /* Responsive styles */
      @media (max-width: 767px) {

        .table th,
        .table td {
          display: block;
          width: 100%;
          box-sizing: border-box;
        }

        .table thead {
          display: none;
          /* Remove the default table head */
        }

        .table tbody tr {
          margin-bottom: 15px;
          position: relative;
        }

        .table tbody td {
          text-align: left;
        }

        .table tbody td::before {
          content: attr(data-label);
          font-weight: bold;
          display: inline-block;
          width: 100%;
          margin-bottom: 5px;
        }
      }
    </style>

    <section id="full-height" class="full-height">

      <nav>
        <?php include 'rightsidebar.php'; ?>
      </nav>

      <article id="article" class="spacer">
        <div>
          <h1>JAVASCRIPT Basic</h1>
          <!-- <img src="<?= $baseFolder ?>/htmlbasic/images/html element.gif" alt="element" class="responsive" /> -->
        </div>

        <hr />

        <div>
          <div class="container">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Chapter</th>
                  <th>Details</th>
                  <th>Hands-On Lab</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td data-label="Chapter">Before we begin</td>
                  <td data-label="Details">Before we begin</td>
                  <td data-label="Hands-On Lab"></td>
                </tr>
                <tr>
                  <td data-label="Chapter">Setup the development environment</td>
                  <td data-label="Details">Visual Studio Code<br>Node Js </td>
                  <td data-label="Hands-On Lab">How download and install Visual Studio Code<br>How download and install Node Js</td>
                </tr>
                <tr>
                  <td data-label="Chapter">What is JavaScript?</td>
                  <td data-label="Details">What is JavaScript?</td>
                  <td data-label="Hands-On Lab"></td>
                </tr>
                <tr>
                  <td data-label="Chapter">My First JavaScript</td>
                  <td data-label="Details">My First JavaScript</td>
                  <td data-label="Hands-On Lab">My First JavaScript</td>
                </tr>
                <tr>
                  <td data-label="Chapter">How to run JavaScript?</td>
                  <td data-label="Details">Browser <br>Node Js run time</td>
                  <td data-label="Hands-On Lab">How to run JavaScript?</td>
                </tr>
                <tr>
                  <td data-label="Chapter">What Can JavaScript Do?</td>
                  <td data-label="Details">What Can JavaScript Do? <br>Change HTML Content</td>
                  <td data-label="Hands-On Lab">What Can JavaScript Do? <br>Can Change HTML Content</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Adding comments</td>
                  <td data-label="Details">Inline Comment <br>Multiline Comment</td>
                  <td data-label="Hands-On Lab">Use Comments</td>
                </tr>
                <tr>
                  <td data-label="Chapter">JavaScript Where To</td>
                  <td data-label="Details">JavaScript in head <br>JavaScript in body <br>External JavaScript</td>
                  <td data-label="Hands-On Lab">Where To put JavaScript</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Element Object</td>
                  <td data-label="Details">Element Object <br>ClassName Property</td>
                  <td data-label="Hands-On Lab">Understanding Element object and classname property</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Variables</td>
                  <td data-label="Hands-On Lab">Let <br>Con</td>
                  <td data-label="Hands-On Lab">How to use this Variables</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Data types</td>
                  <td data-label="Details">Primitive <br>Non Primitive</td>
                  <td data-label="Hands-On Lab">What are primitive and non primitive</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Equality</td>
                  <td data-label="Details">== (Allow coercion) <br>=== (Does not allow coercion)</td>
                  <td data-label="Hands-On Lab">Understanding Equality</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Conditional statements</td>
                  <td data-label="Details">If <br>Else</td>
                  <td data-label="Hands-On Lab">Understanding If statement</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Functions</td>
                  <td data-label="Details">Functions</td>
                  <td data-label="Hands-On Lab">Understanding Function</td>
                </tr>
                <tr>
                  <td data-label="Chapter">HTML DOM Events</td>
                  <td data-label="Details">onclick Event <br>onchange Event <br>onreset Event <br>onprogress Event</td>
                  <td data-label="Hands-On Lab">Events</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Form</td>
                  <td data-label="Details">Submit <br>Open and Close window <br>Print Current page <br>Image Modal <br>Validation </td>
                  <td data-label="Hands-On Lab">Forms can do with Javascript</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Responsive</td>
                  <td data-label="Details">Navigation Bar with Icons <br>Topnav <br>Search Bar</td>
                  <td data-label="Hands-On Lab">Mostly need in web</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Micro Project</td>
                  <td data-label="Details">Micro Project</td>
                  <td data-label="Hands-On Lab">Micro Project</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Project</td>
                  <td data-label="Details">Project</td>
                  <td data-label="Hands-On Lab">Project</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>


        <hr />

      </article>
    </section>

    <!-- ======================================== -->
  </main>
  <?php require_once("../footer.php"); ?>
</div>
<?php require_once("../closing.php") ?>
<!-- ======================================== -->