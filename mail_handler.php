<?php 
if(isset($_POST['submit'])){
    $to = "holovashkin@gmail.com"; // this is your Email address
    $from = $_POST["corporate@goodevs.com"]; // this is the sender's Email address
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = "Заявка на ремонт";
    $message = $name . ", " . " Номер:" . "\n\n" . $_POST['phone'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    header('Location: index.html');
    // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // header('Location: index.html');
    // You cannot use header and echo together. It's one or the other.
    }
?>