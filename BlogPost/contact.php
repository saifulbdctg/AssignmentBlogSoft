<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Blog - Contact</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="logo">
      <img src="logo.png" alt="My Blog Logo">
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="contact-form">
      <h2>Contact</h2>
      <form action="process-form.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <input type="submit" value="Send">
      </form>
    </section>
  </main>
<?php
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Email settings
  $to = 'your-email@example.com'; // Your email address
  $subject = 'New message from your blog';
  $body = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";

  // Send email
  $headers = "From: $name <$email>";
  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for your message!";
  } else {
    echo "Sorry, there was a problem sending your message. Please try again later.";
  }
?>

</body>
</html>
