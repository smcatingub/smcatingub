<?= $this->extend('layouts/main') ?>

<?= $this->section('styles') ?>
    <link rel="stylesheet" href="css/home-style.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div id="home-content">
        <div id="welcome-win">
            <img id="welcome-win" src="images/windows/welcome window.png">
            <div id="look"><p>look! a quote from paulo coelho!</p></div>
            <div id="quote"><p>"happiness is something that <br> multiplies when it is divided."</p></div>
        </div>
        <div id="chat-win" onclick="showNext()">
            <img id="chat-win" src="images/windows/chat window.png">
            <div id="chat-title"><p>Chats</p></div>
            <div id="chat1"><img class="chat-icon" src="images/windows/kuromi.png"><p class="chats">hello! welcome to my <br> website ^_^</p></div>
            <div id="chat2" class="hidden"><p class="chats">feel free to look around <br> and get to know me! (if <br> you want ofc)</p></div>
            <div id="chat3" class="hidden"><p class="chats">everything, hopefully, is <br> referenced in the resou<br>rces section, which can <br> be found in the 'misc' <br> folder~~</p></div>
            <div id="chat4" class="hidden"><p class="chats">ps. ena isn't my fave! <br> & i swear i'm not that <br> addicted to sanrio x)</p></div>
            <div id="click-to-continue"><p>Click to continue . .</p></div>
        </div>
    </div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
    <script src="js/home.js"></script>
<?= $this->endSection() ?>