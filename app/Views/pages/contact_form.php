<?= $this->extend('layouts/main') ?>

<?= $this->section('styles') ?>
    <link rel="stylesheet" href="css/contact_form-style.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div id="ewanhuhu">
        <a id="contact-back" class="contact-text-buttons" href="./contact">back</a>
        <a id="contact-view" class="contact-text-buttons" href="./contact_view">view feedbacks</a>
    </div>

    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $commentErr = "";
    $name = $email = $gender = $comment = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
            }
        }
    
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["comment"])) {
            $commentErr = "Comment is required";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }

    if (empty($nameErr) && empty($emailErr) && empty($commentErr) && empty($genderErr)) {
		// for xampp localhost
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "myDB";

		// for socitcloud
		// $servername = "localhost";
		// $username = "webprogmi222_sf221";
		// $password = "xE*Y2nleNVvZm[!!";
		// $dbname = "webprogmi222_sf221";

                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

		//for xampp
                $sql = "INSERT INTO MyGuests (name, email, comment, gender)
                VALUES ('$name', '$email', '$comment', '$gender')";

		// $sql = "INSERT INTO smcatingub_myguests (name, email, comment, gender)
                // VALUES ('$name', '$email', '$comment', '$gender')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script>alert('New record created successfully.');</script>";
                    $name = $email = $gender = $comment = "";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
            }
    }  

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    ?>

    <div id="flex-container">
        <div id="form-content">
            <h2>Drop a comment!</h2>
            <br>
            <form id="form-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                <span class="form-titles">Name:</span> <input type="text" name="name" value="<?php echo $name;?>">
                <span class="error"><br><?php echo $nameErr;?></span>
                <br>
                <span class="form-titles">E-mail: </span><input type="text" name="email" value="<?php echo $email;?>">
                <span class="error"><br><?php echo $emailErr;?></span>
                <br>
                <span class="form-titles">Comment:</span> <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
                <span class="error"><br><?php echo $commentErr;?></span>
                <br>
                <span class="form-titles">Gender:</span>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"><span class="form-gender">Female</span><br>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"><span class="form-gender">Male</span><br>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"><span class="form-gender">Other</span>  
                <span class="error"><br><?php echo $genderErr;?></span>
                <br>
                <input type="submit" name="submit" value="Submit">  
            </form>

            <br>

        </div>
    </div>
<?= $this->endSection() ?>

