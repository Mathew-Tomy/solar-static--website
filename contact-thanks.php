
<?php


$errors = [];
$errorMessage = '';

if(isset($_POST['submit'])){

    $email = $_POST['text-109'];
    $pno = $_POST['tel-738'];
    $name = $_POST['text-275'];
   
    $message = $_POST['textarea-249'];

    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }
    if (empty($pno)) {
      $errors[] = 'Phone number is empty';
  }

    if (empty($errors)) {
        $toEmail = 'kissansolarpower@gmail.com';
        $emailSubject = 'New email from your contant form';
        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

        $bodyParagraphs = ["Name: {$name}", "Email: {$email}","Mobile number: {$pno}","Message:", $message];
        $body = join(PHP_EOL, $bodyParagraphs);

        if (mail($toEmail, $emailSubject, $body, $headers)) {
            header('Location: contact-thanks.php');
        } else {
            $errorMessage = 'Oops, something went wrong. Please try again later';
        }
    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }
}



?>




           


