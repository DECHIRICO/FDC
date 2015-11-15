<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" ){
  $name = $_POST ["name"];
  $email = $_POST ["email"];
  $message = $_POST ["message"];
  $email_body = "";
  $email_body = $email_body . "Name: " . $name . "\n";
  $email_body = $email_body . "Email: ". $email . "\n";
  $email_body = $email_body . "Massage: " . $message;
  // echo $email_body;

  header ("Location: contact.php?status=thanks");
  exit;
}
?>


<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
    <p>Thanks for the email! I&rsquo;ll be in touch shortly!</p>
<?php } else { ?>

  <p>I&rsquo;d love to hear from you! Complete the form to send me an email.</p>

        <form method="post" action="contact.php">
              <label for="name">Name</label>
              <input type="text" name="name" id="name">
              <label for="email">Email</label>
              <input type="text" name="email" id="email">
              <label for="message">Message</label>
              <textarea name="message" id="message"></textarea>
              <input type="submit" value="Send">
        </form>

    <?php } ?>
