<?php

if (isset($_POST['submit'])) {
    $name=htmlspecialchars($_POST['name']);
    $message=htmlspecialchars($_POST['message']);
    $email=filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    if(!$email){
        die("Invalid Email");
    }

    die($name);
}
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container">
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="index.php" method="post" enctype="multipart/form-data">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" required><br>

                <label>Email:</label>
                <input type="email" name="email" class="form-control" required><br>

                <label>Message:</label>
                <textarea name="message" class="form-control" required></textarea><br>

                <label>Upload File (Image or Document):</label>
                <input type="file" class="form-control" name="attachment"><br>

                <button type="submit" name="submit" class="form-control">Submit</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
    
</div>
