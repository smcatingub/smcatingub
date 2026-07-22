<?= $this->extend('layouts/main') ?>

<?= $this->section('styles') ?>
    <link rel="stylesheet" href="css/contact_view-style.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div id="ewanhuhu">
        <a id="contact-back" class="contact-text-buttons" href="./contact">back to contact</a>
        <a id="contact-view" class="contact-text-buttons" href="./contact_form">post a feedback</a>
    </div>
    <?php

    //for xampp
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    //for socitcloud
    //$servername = "localhost";
    //$username = "webprogmi222_sf221";
    //$password = "xE*Y2nleNVvZm[!!";
    //$dbname = "webprogmi222_sf221";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, name, email, comment, gender, reg_date FROM myguests";
    $result = $conn->query($sql);

        echo '<div id="contact-view-content">';
        echo '<div id="contact-view-win">';
        echo '<img id="contact-view-win" src="images/windows/contact view window.png">';
        echo '<div id="contact-view-container">';

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        echo '<div class="guest-bg">';
        echo "<h4>" . $row["name"]. "</h4><h6>&#12539;:&#12291;&#10140; " . $row["email"]. "</h6><h6>&#12539;:&#12291;&#10140; " . $row["gender"]. "</h6><h6>&#12539;:&#12291;&#10140; " . $row["reg_date"]. "</h6><p>&#10077;" . $row["comment"]. "&#10078;</p>";
        echo '</div>';
        
    }
        echo '</div>';
        echo '</div>';
        echo '</div>';

    } else {
    echo "0 results";
    }
    $conn->close();

    ?>
<?= $this->endSection() ?>