<?php
$html = "";
if (isset($_POST['html'])) {
    $html = $_POST['html'];
}

$css = "";
if (isset($_POST['css'])) {
    $css = $_POST['css'];
}

$js = "";
if (isset($_POST['js'])) {
    $js = $_POST['js'];
}
?>

<style>
    .code-editor {
        display: flex;
        margin: 0;
        flex-wrap: wrap;
        height: 100%;
    }

    .editor-container {
        flex: 1;
        background-color: #57407d;
        padding: 20px;
        color: #fff;
    }

    /* Set a fixed height for all text areas */
    textarea {
        height: 143px;
    }

    #html-code,
    #css-code,
    #js-code {
        width: 100%;
    }

    #output-container {
        width: 50%;
        border-left: 1px solid #ccc;
        overflow: auto;
        color: #fff;
        text-align: center;
    }

    #output-html {
        width: 100%;
        height: 100%;
        flex: 1;
        display: flex;
        background-color: #fff;
    }
</style>
<div class="code-editor">
    <div class="editor-container">
        <h2>HTML Code Editor</h2>
        <textarea id="html-code" rows="10" cols="50"> <?= $html  ?></textarea>
        <br />
        <h2>CSS Code Editor</h2>
        <textarea id="css-code" rows="10" cols="50"><?= $css ?></textarea>
        <br />
        <h2>JavaScript Code Editor</h2>
        <textarea id="js-code" rows="10" cols="50"><?= $js ?></textarea>
        <br />
        <!-- <button onclick="runCode()">Run Code</button> -->
        <button onclick="runCode()" style="background-color: black; color: white; padding: 10px 20px; border: 1px solid black; cursor: pointer; position: relative; overflow: hidden; transition: background-color 0.3s, color 0.3s, border-color 0.3s;" onmouseover="this.style.backgroundColor='#ffA500'; this.style.borderColor='black'; this.querySelector('span').style.color='#00ff00';" onmouseout="this.style.backgroundColor='black'; this.style.borderColor='black'; this.querySelector('span').style.color='white';">
            <span style="transition: color 0.3s;">Run Code</span>
        </button>
    </div>

    <div id="output-container">
        <div style="background-color: #57407d; height: 100%; display: flex; flex-direction: column;">
            <h2 style="padding: 20;">Result</h2>
            <div id="output-html">&nbsp;</div>
        </div>
    </div>
</div>
<script>
    function runCode() {
        // Get the HTML code from the textarea
        var htmlCode = document.getElementById("html-code").value;

        // Get the CSS code from the textarea
        var cssCode = document.getElementById("css-code").value;

        // Get the JS code from the textarea
        var jsCode = document.getElementById("js-code").value;

        // Get the output container for HTML
        var outputHtmlContainer = document.getElementById("output-html");

        try {
            // Clear previous HTML output
            outputHtmlContainer.innerHTML = "";

            // Create an iframe to run the HTML code
            var htmlIframe = document.createElement("iframe");
            htmlIframe.style.width = "100%";
            htmlIframe.style.height = "100%";
            htmlIframe.style.border = "none";
            outputHtmlContainer.appendChild(htmlIframe);

            // Create a style element to apply CSS
            var styleElement = htmlIframe.contentDocument.createElement("style");
            styleElement.textContent = cssCode;

            // Append the style element to the iframe's head
            htmlIframe.contentDocument.head.appendChild(styleElement);

            // Write the HTML code to the iframe
            htmlIframe.contentDocument.body.innerHTML = htmlCode;

            // Run the JavaScript code
            var scriptElement =
                htmlIframe.contentDocument.createElement("script");
            scriptElement.textContent = jsCode;
            htmlIframe.contentDocument.body.appendChild(scriptElement);
        } catch (error) {
            // Display error if code execution fails
            outputHtmlContainer.textContent = "Error: " + error.message;
        }
    }
</script>