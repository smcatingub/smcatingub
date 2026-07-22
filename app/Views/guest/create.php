<!DOCTYPE html>
<html Lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?? "shane's" ?></title>
    <link rel="icon" type="image/x-icon" href="../images/icons/favicon.png">
    <link href="../css/common.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/contact_form-style.css">
</head>

<div id="navbar">
    <div id="folders">
        <a class="icons" href="./home">
            <img class="nav orig-image" src="../images/folder icons/1 home.png">
            <img class="nav hover-image" src="../images/folder icons/2 home.png">
        </a>
        <a class="icons" href="./shane">
            <img class="nav orig-image" src="../images/folder icons/3 shane.png">
            <img class="nav hover-image" src="../images/folder icons/4 shane.png">
        </a>
        <a class="icons" href="./about">
            <img class="nav orig-image" src="../images/folder icons/5 about.png">
            <img class="nav hover-image" src="../images/folder icons/6 about.png">
        </a>
        <a class="icons" href="./interests">
            <img class="nav orig-image" src="../images/folder icons/7 interests.png">
            <img class="nav hover-image" src="../images/folder icons/8 interests.png">
        </a>
        <a class="icons" href="./contact">
            <img class="nav orig-image" src="../images/folder icons/9 contact.png">
            <img class="nav hover-image" src="../images/folder icons/10 contact.png">
        </a>
        <a class="icons" href="./misc">
            <img class="nav orig-image" src="../images/folder icons/11 misc.png">
            <img class="nav hover-image" src="../images/folder icons/12 misc.png">
        </a>
    </div>
</div>

<div id="ewanhuhu">
    <a id="contact-back" class="contact-text-buttons" href="../contact">back</a>
    <a id="contact-view" class="contact-text-buttons" href="../guest">view feedbacks</a>
</div>

<div id="flex-container">
        <div id="form-content">
            <h2><?= esc($title) ?></h2>
            <br>

            <?= session()->getFlashdata('error') ?>
            <?= validation_list_errors() ?>

            <form id="form-form" action="<?php echo site_url('guest'); ?>" method="post">
                <?= csrf_field() ?>

                <span class="form-titles"><label for="name">Name</label></span>
                <input type="text" name="name" value="<?= set_value('name') ?>">
                <br><br>

                <span class="form-titles"><label for="email">Email</label></span>
                <input type="text" name="email" value="<?= set_value('email') ?>">
                <br><br>

                <span class="form-titles"><label for="comment">Comment</label></span>
                <textarea name="comment" cols="45" rows="4"><?= set_value('comment') ?></textarea>
                <br><br>

                <input type="submit" name="submit" value="Submit">
            </form>