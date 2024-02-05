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
          <h1>CSS Basic</h1>
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
                  <td data-label="Details">Visual Studio Code<br>Extension - Prettier </td>
                  <td data-label="Hands-On Lab">How download and install Visual Studio Code<br>How set up Prettier in Visual Studio Code</td>
                </tr>
                <tr>
                  <td data-label="Chapter">What is CSS?</td>
                  <td data-label="Details">What is CSS?</td>
                  <td data-label="Hands-On Lab"></td>
                </tr>
                <tr>
                  <td data-label="Chapter">How to add CSS?</td>
                  <td data-label="Details">Inline style <br>Inline stylesheet <br>External stylesheet <br>How to add CSS in HTML</td>
                  <td data-label="Hands-On Lab">How to add CSS in HTML?</td>
                </tr>
                <tr>
                  <td data-label="Chapter">CSS selectors</td>
                  <td data-label="Details">Type Selector <br>Universal Selector <br>Class Selector <br>Id Selector</td>
                  <td data-label="Hands-On Lab">Functions of selector</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Color</td>
                  <td data-label="Details">Hex Color <br>Rgba Color</td>
                  <td data-label="Hands-On Lab">Difference of CSS color</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Font styles</td>
                  <td data-label="Details">In Line <br>Mulit Line</td>
                  <td data-label="Hands-On Lab">To see the function of html comment</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Formatting Text</td>
                  <td data-label="Details">Font-family <br>Font-Style <br>Font-weight <br>Text-decoration <br>Font-size</td>
                  <td data-label="Hands-On Lab">Font style familiarizationt</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Text layout properties</td>
                  <td data-label="Details">Text-Align: Center <br>Text-Align: Right <br>Text-Align: Left <br>Line-height <br>Letter-spacing <br>Word-spacing</td>
                  <td data-label="Hands-On Lab">To learn text layout properties</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Styling lists</td>
                  <td data-label="Details">Circle <br>Square <br>None</td>
                  <td data-label="Hands-On Lab">To learn list style</td>
                </tr>
                <tr>
                  <td data-label="Chapter">CSS Comment</td>
                  <td data-label="Hands-On Lab">Inline Comment <br>Multiline Comment</td>
                  <td data-label="Hands-On Lab">To learn how to use CSS comment</td>
                </tr>
                <tr>
                  <td data-label="Chapter">CSS box model</td>
                  <td data-label="Details">Border <br>Padding <br>Margin</td>
                  <td data-label="Hands-On Lab">To lear the difference of padding and margin</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Cascade, specificity & inheritance</td>
                  <td data-label="Details">Cascade <br>Specificity <br>Inheritance</td>
                  <td data-label="Hands-On Lab">To lear the difference of cascade, specificity, and inheritance</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Styling tables</td>
                  <td data-label="Details">Thead <br>Tbody <br>Th <br>Tr <br>Td</td>
                  <td data-label="Hands-On Lab">To lear how to style HTML table</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Display</td>
                  <td data-label="Details">Static <br>Relative <br>Fix <br>Absolute <br>Sticky</td>
                  <td data-label="Hands-On Lab">To lear the different style of div</td>
                </tr>
                <tr>
                  <td data-label="Chapter">CSS units</td>
                  <td data-label="Details">Em parent <br>Em child <br>Rem <br>Vh <br>Vw</td>
                  <td data-label="Hands-On Lab">To lear the different CSS units</td>
                </tr>
                <tr>
                  <td data-label="Chapter">CSS math functions</td>
                  <td data-label="Details">Calc: - and , <br>Max <br>Min</td>
                  <td data-label="Hands-On Lab">To lear the CSS math functions</td>
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