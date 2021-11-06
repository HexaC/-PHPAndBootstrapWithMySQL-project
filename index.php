<?php
require_once 'app/helpers.php';
session_start();

$page_title = 'Home';
require_once 'tpl/header.php';
?>
<!-- Top section -->
<section class="container text-center p-4">
    <h1 class="mt-4 display-3 text-primary"><?= $site_logo ?></h1>
    <p>
        Ever wanted to tell someone a secret but you were to afraid of how they will react?
        <br>
        Well.. here is you safe space, tell the world what ever you want and stay desecrate!
    </p>
    <a class="btn btn-outline-primary btn-lg" href="signup.php" role="button">Join Now!</a>
</section>
<!-- Content section -->
<section class="container p-4">
    <div class="row">
        <img src="images/books.jpg" class="img-fluid container p-4" alt="Ferrari Race Car"
            style="overflow: scroll; width: 800px; border-radius: 80px;">
    </div>
</section>
<?php
include 'tpl/footer.php';