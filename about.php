<?php
require_once 'app/helpers.php';
session_start();

$page_title = 'About';
require_once 'tpl/header.php';
?>
<section class="container p-4 col-md-8">
    <h1 class=" display-3 text-primary">About</h1>
    <section class="container text-center p-4">
        <h4>Blog is Made For You!</h4>
        <p>Share all you secrets anonymously while getting a real reaction from another secret keeper.</p>
        <img src="./images/lock.jpg" alt="Lock image" style="width: 200px; height: 200px; border-radius: 100px;"
            class="mb-4">
        <p>Blog is being fully protected against any sql injections and xxs attacks so you shouldn't be worried from any
            hackers.</p>
        <p>And if you want to change up your post or delete it, you can do it without any delay by yourself on the blog
            page.</p>
        <h4>Happy Secret Sharing :)</h4>
        <img src="./images/sharing.jpg" alt="Lock image" style="width: 300px; height: 200px; border-radius: 10px;"
            class="container mt-4">
    </section>
</section>
<?php
include 'tpl/footer.php';