<?php
session_start();
if(empty($_SESSION['loginname']))
{
    header('Location: login.php');
    exit();
}
$_SESSION['cookie'] = $_GET['add_to_cart'] ?? '';


require 'inc/head.php'; ?>

<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_COOKIES here.
    </div>
</section>
<?php require 'inc/foot.php'; ?>
