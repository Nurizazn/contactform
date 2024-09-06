<?php 
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"insert into contact set
    name = '$_POST[name]',
    email = '$_POST[email]',
    phone_number = '$_POST[phone]',
    gender = '$_POST[gender]',
    message = '$_POST[message]'");

    header("Location: konfirmasisend.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, 
    initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="card-container"> 
            <div class="center">
                <div class="center-container">
                    <!-- Formulir untuk mengirimkan data ke konfirmasisend.php -->
                    <form action="" method="POST">
                        <h2 class="lg-view">Contact Us</h2>
                        <h2 class="sm-view">Contact Us</h2>

                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="tel" name="phone" placeholder="Phone Number" required>

                        <select name="gender" required>
                            <option values="" disabled selected>Gender</option>
                            <option values="">Male</option>
                            <option values="">Female</option>
                        </select>

                        <textarea name="message" rows="10" placeholder="Message" required></textarea>

                        <button type="submit" class="button-link" name="proses">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>