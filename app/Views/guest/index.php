<!DOCTYPE html>
<html Lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?? "shane's" ?></title>
    <link rel="icon" type="image/x-icon" href="images/icons/favicon.png">
    <link href="css/common.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/contact_view-style.css">
</head>

<?= $this->include('partials/navbar') ?>
    <div class="container">
        <?= $this->section('content') ?>
            <div id="ewanhuhu">
                <a id="contact-back" class="contact-text-buttons" href="./contact">back to contact</a>
                <a id="contact-view" class="contact-text-buttons" href="guest/new">post a feedback</a>
            </div>

            <div id="contact-view-content">
            <div id="contact-view-win">
            <img id="contact-view-win" src="images/windows/contact view window.png">
            <div id="contact-view-container">

                <?php if (! empty($guest) && is_array($guest)): ?>

                    <?php foreach ($guest as $guest_item): ?>

                        <div class="guest-bg">
                            <h4><?= esc($guest_item['name']) ?></h4>
                            <h6>&#12539;:&#12291;&#10140; <?= esc($guest_item['email']) ?></h6>
                            <p>&#10077;<?= esc($guest_item['comment']) ?>&#10078;</p>
                        </div>

                    <?php endforeach ?>

                <?php else: ?>

                    <h3>No guest</h3>

                    <p>Unable to find any guest for you.</p>

                <?php endif ?>

            </div>
            </div>
            </div>
    </div>