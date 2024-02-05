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

      /* imageresponsive styles */
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
          <h1>HTML Basic</h1>
          <!-- <img src="../_htmlbasic/images/html element.gif" alt="element" class="imageresponsive" /> -->
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
                  <td data-label="Chapter">What is HTML?</td>
                  <td data-label="Details">What is HTML?</td>
                  <td data-label="Hands-On Lab"></td>
                </tr>
                <tr>
                  <td data-label="Chapter">Welcome to HTML</td>
                  <td data-label="Details">Welcome to HTML</td>
                  <td data-label="Hands-On Lab">How print Welcome HTML in web browser</td>
                </tr>
                <tr>
                  <td data-label="Chapter">HTML Element</td>
                  <td data-label="Details">HTML Element <br>Attribute</td>
                  <td data-label="Hands-On Lab">To familiarize the parts of element</td>
                </tr>
                <tr>
                  <td data-label="Chapter">HTML Document</td>
                  <td data-label="Details">!DOCTYPE html <br>Html <br>Head <br>Title <br>Body</td>
                  <td data-label="Hands-On Lab">To familiarize in HTML Document in web browser</td>
                </tr>
                <tr>
                  <td data-label="Chapter">HTML Comment</td>
                  <td data-label="Details">In Line <br>Mulit Line</td>
                  <td data-label="Hands-On Lab">To see the function of html comment</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Formatting Text</td>
                  <td data-label="Details">H1 - H6 <br>P <br>BR <br>HR</td>
                  <td data-label="Hands-On Lab">To familiarize Formatting the Text</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Inline Text Formatting</td>
                  <td data-label="Details">B - Strong <br>EM - i <br>Small <br>Del - Mark</td>
                  <td data-label="Hands-On Lab">To familiarize in inline Text Formatting</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Div and Span Tags</td>
                  <td data-label="Details">Div <br>Span</td>
                  <td data-label="Hands-On Lab">How to used div and span</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Lists</td>
                  <td data-label="Hands-On Lab">Ul and Li <br>Ol and Li <br>Dl, Dt and Dd</td>
                  <td data-label="Hands-On Lab">To know the difference on type of list</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Images</td>
                  <td data-label="Details">IMG <br>SRC <br>Alt</td>
                  <td data-label="Hands-On Lab">To know the imange attribute structure</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Links</td>
                  <td data-label="Details">A <br>Href <br>Internal Link <br>External Link</td>
                  <td data-label="Hands-On Lab">To know the link attribute structure</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Tables</td>
                  <td data-label="Details">Table <br>Thead <br>Tbody <br>Th <br>Tr <br>Td</td>
                  <td data-label="Hands-On Lab">How to make a table</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Forms</td>
                  <td data-label="Details">Single line Input <br>Multi line Input <br>Drop down <br>Radio Buttons <br>Check Box <br>Button</td>
                  <td data-label="Hands-On Lab">How to use forms</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Semantic and Non Semantic</td>
                  <td data-label="Details">Important of Semantic HTML</td>
                  <td data-label="Hands-On Lab">For SEO</td>
                </tr>
                <tr>
                  <td data-label="Chapter">Meta Tag</td>
                  <td data-label="Details">Meta charset <br>Meta Description <br>Meta keywords <br>Meta name author <br>Meta name description <br>Meta name viewport</td>
                  <td data-label="Hands-On Lab">For SEO</td>
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