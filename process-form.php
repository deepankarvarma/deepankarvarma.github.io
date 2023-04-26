$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$to = 'satwikdpshrit@gmail.com';
$subject = 'New Message From Your Website';
$body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
if (mail($to, $subject, $body, $headers)) {
  echo 'Thank you for your message!';
} else {
  echo 'An error occurred. Please try again later.';
}
