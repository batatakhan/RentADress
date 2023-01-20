<?php

require_once('./header.php');

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/58b672b453.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>Rent-A-Dress</title>
    </head>

    <body id="contact-body">
    <header>
        <?php
        header1();
        ?>
    </header>
        <main>
            <div class="contact-container">
                <h1>Contact Us</h1>
                <p>We would love to respond to your queries and help you!<br> Feel free to get in touch with us in case
                    of
                    any complaints or questions.</p>
                <div class="contact-box">
                    <div class="contact-left">
                        <h3>Send Your Request</h3>
                        <form action="contact_post.php" method="POST" enctype="multipart/form-data">
                            <div class="input-row">
                                <div class="input-group">
                                    <label>Name</label>
                                    <input name="name_com" type="text" placeholder="Firstname Lastname" required>
                                </div>
                                <div class="input-group">
                                    <label>Phone number</label>
                                    <input name="phone_com" type="text" placeholder="+1 (123) 456 7890" required>
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-group">
                                    <label>Email</label>
                                    <input name="email_com" type="email" placeholder="name@mail.com" required">
                                </div>
                                <div class="input-group">
                                    <label>Subject</label>
                                    <input name="subject_com" type="text" placeholder="How to buy?/Product faulty?"
                                        required>
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-group">
                                    <Label>Seller Name if applicable</Label>
                                    <input name="seller_name_com" type="text" placeholder="Sherri Hill">
                                </div>
                                <div class="input-group">
                                    <Label>Product Name</Label>
                                    <input name="proname_com" type="text" placeholder="Skirt red">
                                </div>
                            </div>
                            <label>Message</label>
                            <textarea name="message_com" id="text-area" rows="5" placeholder="Your Message"
                                required></textarea>
                            <button name="send_complain" id="form-button" type="submit">Send</button>
                        </form>
                    </div>
                    <div class="contact-right">
                        <h3>Reach Us</h3>
                        <table>
                            <tr>
                                <td>Email</td>
                                <td>contact@rentadress.ca</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>24 Avenue<br>University Drive,NW<br>Calgary<br>Alberta, Canada</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </body>

</html>
