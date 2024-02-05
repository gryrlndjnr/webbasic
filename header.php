<div class="topnav" id="main-header">
    <a href="<?= $baseFolder ?>" class="<?= $uri == $baseFolder  ? "active" : "" ?>">Home</a>
    <a href="<?= $baseFolder . "htmlbasic/" ?>" class="<?= str_contains($uri, $baseFolder . "htmlbasic/")  ? "active" : "" ?>">HTML Basic</a>
    <a href="<?= $baseFolder . "cssbasic/" ?>" class="<?= str_contains($uri, $baseFolder . "cssbasic/")  ? "active" : "" ?>">CSS Basic</a>
    <a href="<?= $baseFolder . "javascriptbasic/" ?>" class=" <?= $uri == $baseFolder . "javascriptbasic/"  ? "active" : ""   ?>">JavaScript Basic</a>
    <a href="#">WordPress Basic</a>
    <div class="search-container">
        <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search" />
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>

<!-- header menu  -->
<script>
    function myFunction() {
        var x = document.getElementById("main-header");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>