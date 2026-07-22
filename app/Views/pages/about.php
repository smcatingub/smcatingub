<?= $this->extend('layouts/main') ?>

<?= $this->section('styles') ?>
    <link rel="stylesheet" href="css/about-style.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div id="about-content">
        <div id="about-small">
            <img id="abt-small" src="images/windows/about-small2.png">
            <div id="abts-content">
                <a id="basic-info" class="abt-icons abt-icons-top" href="#" data-tooltip="basic information">
                    <img src="images/icons/window tabspagespngs/basic icon2.png">
                </a>
                <a id="educ" class="abt-icons abt-icons-top" href="#" data-tooltip="education">
                    <img src="images/icons/window tabspagespngs/education icon2.png">
                </a>
                <a id="whyIT" class="abt-icons abt-icons-bot" href="#" data-tooltip="why IT?">
                    <img class="abt-icons" src="images/icons/window tabspagespngs/why it icon.png">
                </a>
                <a id="future" class="abt-icons abt-icons-bot" href="#" data-tooltip="future/goals">
                    <img class="abt-icons" src="images/icons/window tabspagespngs/future icon2.png">
                </a>
            </div>
        </div>

        <div id="about-big">
            <img id="abt-big" src="images/windows/about-big2.png">

            <!-- INITIAL WINDOW -->

            <div id="select" class="div1">
                <img src="images/icons/kuromi-gif.gif">
                <p>select one from the left window to continue . .</p>
            </div>

            <!-- BASIC INFO WINDOW -->

            <div id="about-basic">
                <div id="basic-info">
                    <div id="basic-left">
                        <img id="stripes" src="images/icons/pink stripes.png">
                        <img id="mymelo" src="images/icons/my melody.png">
                        <img id="banner-basic" src="images/icons/stripes-basic-info.png">
                    </div>
                    <div id="basic-right">
                        <div class="right">
                            <p><span class="right-title">&#8902; &#730; &#2920;&#2919; name:</span>
                            <span class="right-content">&#10084; Shannelien Catingub</span></p>
                        </div>
                        <div class="right">
                            <p><span class="right-title">&#8902; &#730; &#2920;&#2919; nicknames:</span>
                            <span class="right-content">&#10084; Shane, Shanne, Nini, Sheni</span></p>
                        </div>
                        <div class="right">
                            <p><span class="right-title">&#8902; &#730; &#2920;&#2919; age:</span>
                            <span class="right-content">&#10084; 20 years old (not real)</span></p>
                        </div>
                        <div class="right">
                            <p><span class="right-title">&#8902; &#730; &#2920;&#2919; course:</span>
                            <span class="right-content">&#10084; bs in information technology (mobile & internet tech!)</span></p>
                        </div>
                        <div class="right">
                            <p><span class="right-title">&#8902; &#730; &#2920;&#2919; year & section:</span>
                            <span class="right-content">&#10084; 2nd year - MI222</span></p>
                        </div>
                        <div class="right">
                            <p><span class="right-title">&#8902; &#730; &#2920;&#2919; short description:</span>
                            <span class="right-content">&#10084; quiet, shy, timid, caring, observant (acc to someone :3)</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- EDUCATION WINDOW -->

            <div id="about-educ">
                <div id="educ-whole">
                    <div class="card" id="elem">
                        <img class="card-image" src="images/educ imgs/wisdom.png">
                        <div class="card-body">
                            <h1 class="card-title">XGS</h1>
                            <p class="card-subtitle">[REDACTED] Grade School</p>
                            <p class="card-info">Studied here for 6 years! It takes a 5 minute walk from our house, fun times. I graduated with the 3rd honorable mention award.</p>
                        </div>
                    </div>
                    <div class="card" id="jhs">
                        <img class="card-image" src="images/educ imgs/pcshs.png">
                        <div class="card-body">
                            <h1 class="card-title">PCSHS</h1>
                            <p class="card-subtitle">Pasig City Science High School</p>
                            <p class="card-info">It's a specialized public secondary school and it offers scholarship programs for the city students. Finished JHS with honors.</p>
                        </div>
                    </div>
                    <div class="card" id="shs">
                        <img class="card-image" src="images/educ imgs/pcshs.png">
                        <div class="card-body">
                            <h1 class="card-title">PCSHS</h1>
                            <p class="card-subtitle">Pasig City Science High School</p>
                            <p class="card-info">It's a specialized public secondary school and it offers scholarship programs for the city students. Finished SHS under the STEM strand with high honors.</p>
                        </div>
                    </div>
                    <div class="card" id="college">
                        <img class="card-image" src="images/educ imgs/apc.png">
                        <div class="card-body">
                            <h1 class="card-title">APC</h1>
                            <p class="card-subtitle">Asia Pacific College</p>
                            <p class="card-info">Currently enrolled here with the help of SM Foundation. It is a private tertiary education institution located in Makati, Metro Manila.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- WHY IT WINDOW -->

            <div id="about-whyit">
                <div id="whyit-whole">
                    <div id="whyit-left">
                        <img class="why-shadow" src="images/icons/purple plaid.png">
                        <div class="left why-shadow">
                            <p><span class="right-title">&#8902; &#730; &#2920;&#2919; i chose this course...</span>
                            <span class="left-content">&#10084; because i was advised by my uncle  to choose a course that will open a lot of opportunities career-wise.</span></p>
                        </div>
                        <div class="left why-shadow">
                            <p><span class="right-title">&#8902; &#730; &#2920;&#2919; moreover...</span>
                            <span class="left-content">&#10084; i took computer-related electives during junior high school, such as web design, programming, and game development.</span></p>
                        </div>
                        <div class="left why-shadow">
                            <p><span class="right-title">&#8902; &#730; &#2920;&#2919; i am...</span>
                            <span class="left-content">&#10084; one of the many scholars of SM Foundation. this means i have a 100% discount on my tuition fee.</span></p>
                        </div>
                        <div class="left why-shadow">
                            <p><span class="right-title">&#8902; &#730; &#2920;&#2919; honestly though...</span>
                            <span class="left-content">&#10084; i have no clue if i'm on the right track ^-^</span></p>
                        </div>
                        <div class="why-bottom">
                            <img src="images/icons/rollinnnnnn.gif">
                            <img src="images/icons/rollinnnnnn.gif">
                            <img src="images/icons/rollinnnnnn.gif">
                        </div>
                    </div>
                    <div id="whyit-right">
                        <img id="purple-banner" src="images/icons/purple banner.gif">
                        <img id="kuromi" class="why-shadow" src="images/icons/kuromi.png">
                        <img id="whyit-stripe" class="why-shadow" src="images/icons/stripes-why-it.png">
                    </div>
                </div>
            </div>

            <!-- FUTURE WINDOW -->

            <div id="about-future">
                    <div id="future-whole">
                        <div class="card2" id="short">
                            <img class="card-image" src="images/future imgs/pinkk.png">
                            <div class="card-body2">
                                <h1 class="card-title2">short-term</h1>
                                <p class="card-info2">
                                    &#8902;｡ﾟ &#8902;｡ ﾟ&#9790; ﾟ｡ <br>
                                    &#9885;&#12539; fix sleep schedule <br>
                                    &#9885;&#12539; finish this website according to plan <br>
                                    &#9885;&#12539; prioritize learning programming <br>
                                    &#9885;&#12539; read at least 1 book every month <br>
                                    &#9885;&#12539; limit caffeine intake <br>
                                    &#9885;&#12539; be physically active
                                </p>
                            </div>
                        </div>
                        <div class="card2" id="long">
                            <img class="card-image" src="images/future imgs/yellow.jpg">
                            <div class="card-body2">
                                <h1 class="card-title2">long-term</h1>
                                <p class="card-info2">
                                    &#8902;｡ﾟ &#8902;｡ ﾟ&#9790; ﾟ｡ <br>
                                    &#9885;&#12539; improve social skills <br>
                                    &#9885;&#12539; graduate college <br>
                                    &#9885;&#12539; move out & have independence <br>
                                    &#9885;&#12539; have a stable and high paying job <br>
                                    &#9885;&#12539; master multiple programming languages <br>
                                    &#9885;&#12539; start a business <br>
                                </p>
                            </div>
                        </div>
                        <div class="card2" id="long">
                            <img class="card-image" src="images/future imgs/pink1.jpg">
                            <div class="card-body2">
                                <h1 class="card-title2">ideal life</h1>
                                <p class="card-info2">
                                    &#8902;｡ﾟ &#8902;｡ ﾟ&#9790; ﾟ｡ <br>
                                    &#9885;&#12539; happily married to kang seulgi with 7 kids. <br><br>
                                    jk. there's a nice balance between my work and personal life. i'm able to provide for my mother, go on dates with my partner, and enjoy really nice vacations at times. all with my own money :)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <script src="js/about.js"></script>
<?= $this->endSection() ?>