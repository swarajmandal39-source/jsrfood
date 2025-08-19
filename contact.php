<?php

include 'admin/db.php';

if(isset($_POST['submit'])){
 
  $name = $_POST['ur_name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $msg = $_POST['msg'];
  

   $conn->query("INSERT INTO massage (name, email, subject,	message) VALUES ('$name','$email','$subject','$msg')");
    header("Location: ");


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Marcello Pizza</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #fff8f5;
    }

    /* Header */
    header {
      background: #f43b00;
      padding: 20px;
      color: white;
      text-align: center;
    }
    header h1 {
      margin: 0;
      font-size: 2.5rem;
    }
    header p {
      margin: 5px 0 0;
    }

    /* Container */
    .container {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      padding: 50px;
      gap: 40px;
      background-image: url(contact-png-1.png);
      background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
        padding: 2rem;
    }

    /* Left Contact Info */
    .contact-info {
      flex: 1;
      background:aliceblue;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .contact-info h2 {
      color: #f43b00;
      margin-bottom: 20px;
    }
    .contact-info p {
      margin: 10px 0;
      font-size: 1.1rem;
    }

    /* Contact Form */
    .contact-form {
      flex: 1;
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .contact-form h2 {
      color: #f43b00;
      margin-bottom: 20px;
    }
    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
    }
    .contact-form button {
      background: #f43b00;
      color: white;
      padding: 12px 25px;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      cursor: pointer;
      transition: 0.3s;
    }
    .contact-form button:hover {
      background: #c83200;
    }

    /* Map Section */
    .map {
      margin: 50px auto;
      width: 90%;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    /* Footer */
    footer {
      text-align: center;
      padding: 20px;
      background: #222;
      color: white;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <h1>Contact Us</h1>
    <p>The true taste of Italy, close to home</p>
  </header>

  <!-- Contact Section -->
  <div class="container">
    <!-- Left Info -->
    <div class="contact-info">
      <h2>Get in Touch</h2>
      <p><strong>📍 Address:</strong> 123 Main Street, Pizza Town, Italy</p>
      <p><strong>📞 Phone:</strong> (913) 486-9087</p>
      <p><strong>📧 Email:</strong> marcello@mail.com</p>
      <p><strong>⏰ Hours:</strong> Mon–Fri: 9:30 AM – 11:00 PM <br> Sunday Closed</p>
    </div>

    <!-- Right Form -->
    <div class="contact-form">
      <h2>Send Us a Message</h2>
      <form method="post">
        <input type="text" name="ur_name"  placeholder="Your Name" required>
        <input type="email" name="email"  placeholder="Your Email" required>
        <input type="text" name="subject"  placeholder="Subject">   
        <textarea rows="5" name="msg"  placeholder="Your Message" required></textarea>
        <button type="submit" name="submit">Send Message</button>
      </form>
    </div>
  </div>

  <!-- Map -->
  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.0595768436715!2d86.22968247437672!3d22.800256224589795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f5e3fd216be9cb%3A0x4b86ec20c710987c!2sTechcoder%20Software%20Service%20OPC%20Private%20Limited%7C%20Best%20Software%20Company%20in%20Jamshedpur!5e0!3m2!1sen!2sin!4v1755488874823!5m2!1sen!2sin" width="1400" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <!-- Footer -->
  <footer>
    <p>© 2025 Marcello Pizza | All Rights Reserved</p>
  </footer>

</body>
</html>
