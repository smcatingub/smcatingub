<?= $this->extend('layouts/main') ?>

<?= $this->section('styles') ?>
    <link rel="stylesheet" href="css/contact-style.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div id="contact-content">
        <div id="contact-win">
            <img id="contact-win" src="images/windows/contact me window.png">

            <div id="contact-container">
                <div id="contact-container-initial">
                    <img src="images/icons/contact gif.gif">
                    <div id="contact-me">..contact me!</div>
                    <div class="contact-divs">
                        <span class="contact-texts">through my socials . . </span>
                        <div id="contact-buttons">
                            <a href="https://www.linkedin.com/in/shannelien-mae-catingub-4bb339247/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="mailto:shannelienn@gmail.com" target="_blank"><i class="fa-brands fa-google"></i></a>
                            <a href="https://github.com/smcatingub" target="_blank"><i class="fa-brands fa-github"></i></a>
                            <a href="https://www.facebook.com/shannelien" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="https://www.instagram.com/o___xhni/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="contact-divs">
                        <span class="contact-texts">or through a feedback . . </span>
                        <div id="ewanhuhu">
                            <a id="contact-post" class="contact-text-buttons" href="guest/new">post</a>
                            <a id="contact-view" class="contact-text-buttons" href="./guest">view feedbacks</a><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>