<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $discord = htmlspecialchars($_POST["discord"]);
    $reason = htmlspecialchars($_POST["reason"]);
    $skills = htmlspecialchars($_POST["skills"]);

    $to = "ananrajpoot7@gmail.com"; // Your email address
    $subject = "New Yaaaan SMP Join Request";
    $message = "Minecraft Username: $username\nDiscord ID: $discord\nReason to Join: $reason\nSkills and Experience: $skills";
    $headers = "From: no-reply@yaaaan-smp.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your submission!";
    } else {
        echo "There was an error sending your request.";
    }
}
?>