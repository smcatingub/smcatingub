<?= $this->extend('layouts/main') ?>

<?= $this->section('styles') ?>
    <link rel="stylesheet" href="css/interests-style.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div id="interests-content">
        <div id="interests-win">
            <img id="interests-win" src="images/windows/interests window.png">

            <div id="interests-container1">
                <div id="left-interest">
                    <img id="left-interest-img" src="images/icons/interest design.png">
                </div>
                <div id="right-interest">
                    <a id="int-likes" class="int-btn btnx" href="#">likes</a><br><br><br>
                    <a id="int-dislikes" class="int-btn btnx" href="#">dislikes</a><br><br><br>
                    <a id="int-hobbies" class="int-btn btnx" href="#">hobbies</a><br><br><br>
                    <a id="int-people" class="int-btn btnx" href="#">people</a>
                </div>
            </div>

            <div id="interests-container2">
                <img class="menu" src="images/icons/menyew.png">
                <div class="interests-content">
                        <img class="div-imgs" src="images/icons/kuromi purple 3d.jpg">
                        <div>
                            <h2>likes <em>!</em></h6><br>
                                <p>
                                    &#9825; <strong>cute.</strong> <span class="wahaha">ducklings, kittens, sanrio, pink, crocheted stuff, boyfriend, plushies, emu, nene, pastel colors, purple, amigurumis, stationery, etc. </span><br>
                                    &#9825; <strong>media.</strong> <span class="wahaha">kpop, kdramas, some animes, manhwas, thriller/mystery, horror, chill songs, etc.</span><br>
                                    &#9825; <strong>food.</strong> <span class="wahaha">ice cream, carbonara, sinigang, lumpia, strawberries, mangoes, coffee, and more!</span>
                                </p>
                                <br>
                            <a id="likes-back" class="int-btn btnx" href="#"> .. back</a>
                        </div>
                        <img class="div-imgs" src="images/icons/heart 3d.jpg">
                </div>
                <img class="menu" src="images/icons/menyew bot.png">
            </div>

            <div id="interests-container3">
                <img class="menu" src="images/icons/menyew.png">
                <div class="interests-content">
                        <img class="div-imgs" src="images/icons/planet 3d.jpg">
                        <div>
                            <h2>dislikes <em>!</em></h6><br>
                                <p>
                                    &#9825; <strong>???.</strong> <span class="wahaha">COCKROACHES!!! public speaking, hot weather, big noisy crowds, uncertainty, school hehe, awkward situations</span><br>
                                    &#9825; <strong>foods.</strong> <span class="wahaha">mushrooms, cakes (i can take a few bites tho :)), green beans, bitter gourd, and idk i can't think anymore.. just know that i dislike everything that i don't like ^-^</span><br>
                                </p>
                                <br>
                            <a id="dislikes-back" class="int-btn btnx" href="#"> .. back</a>
                        </div>
                        <img class="div-imgs" src="images/icons/astronaut 3d.jpg">
                </div>
                <img class="menu" src="images/icons/menyew bot.png">
            </div>

            <div id="interests-container4">
                <img class="menu" src="images/icons/menyew.png">
                <div class="interests-content">
                        <img class="div-imgs" src="images/icons/sleep.jpg">
                        <div>
                            <h2>hobbies <em>!</em></h6><br>
                                <p>
                                    &#9825; <strong>current.</strong> <span class="wahaha">reading, watching movies/dramas, basic crochet, listening to music, scrolling through social media, gaming (sometimes?)</span><br>
                                    &#9825; <strong>want to get into.</strong> <span class="wahaha">making art, cooking/baking, learning a new language, ice skating, also can't think anymore rn.</span><br>
                                </p>
                                <br>
                            <a id="hobbies-back" class="int-btn btnx" href="#"> .. back</a>
                        </div>
                        <img class="div-imgs" src="images/icons/hearts waaaaa.jpg">
                </div>
                <img class="menu" src="images/icons/menyew bot.png">
            </div>

            <div id="interests-container5">
                <img class="menu" src="images/icons/menyew.png">
                <div class="people-content">
                        <div>
                            <h2>people <em>!</em></h6><br>
                                <p>
                                    &#9825; <span class="wahaha">enjoy my </span><strong>jowa gallery!</strong><span class="wahaha"> btw, this isn't the complete list... i'm getting very lazy so i'll probably do 14 and call it a day.</span><br>
                                </p>
                                <br>
                            <a id="people-back1" class="int-btn btnx" href="#"> .. back</a>
                        </div>
                        <img class="ppl" src="images/polaroids/1.png">
                        <img class="ppl" src="images/polaroids/2.png">
                        <img class="ppl" src="images/polaroids/3.png">
                        <img class="ppl" src="images/polaroids/4.png">
                        <img class="ppl" src="images/polaroids/5.png">
                        <img class="ppl" src="images/polaroids/6.png">
                        <img class="ppl" src="images/polaroids/7.png">
                        <img class="ppl" src="images/polaroids/8.png">
                        <img class="ppl" src="images/polaroids/9.png">
                        <img class="ppl" src="images/polaroids/10.png">
                        <img class="ppl" src="images/polaroids/11.png">
                        <img class="ppl" src="images/polaroids/12.png">
                        <img class="ppl" src="images/polaroids/13.png">
                        <div>
                                <p>
                                    &#9825; <strong>some of these,</strong><span class="wahaha"> like chaewon and saerom, are literally the only ones i know from their respective groups. i don't have the motivation to memorize names and faces anymore :(</span><br>
                                    &#9825; <strong>sorry</strong><span class="wahaha"> for the bad quality! i don't wanna re-edit the pictures.</span><br>
                                </p>
                                <br>
                            <a id="people-back2" class="int-btn btnx" href="#"> .. back</a>
                        </div>
                        
                </div>
                <img class="menu" src="images/icons/menyew bot.png">
            </div>

        </div>
    </div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <script src="js/interests.js"></script>
<?= $this->endSection() ?>