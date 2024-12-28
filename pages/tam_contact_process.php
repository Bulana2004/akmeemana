<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $recipient = "wdps2006@gmail.com"; // Replace with your email address
    $name = htmlspecialchars($_POST['name']);
    $phoneNumber = $_POST['phonenumber'];
    $email = htmlspecialchars($_POST['email']);
    $subject = "Message From Welivitiya Divithura Website";
    $message = $_POST['message'];

    $fullMessage = "Name: $name\nEmail: $email\nPhone Number: $phoneNumber\n\n$message";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Handle voice file if provided
    $hasAttachment = false;
    $boundary = md5("random"); // Unique boundary for multipart

    if (isset($_FILES['voice']) && $_FILES['voice']['error'] == UPLOAD_ERR_OK) {
        $file_tmp = $_FILES['voice']['tmp_name'];
        $file_name = $_FILES['voice']['name'];
        $file_type = $_FILES['voice']['type'];
        $file_size = $_FILES['voice']['size'];

        $handle = fopen($file_tmp, "r");
        $content = fread($handle, $file_size);
        fclose($handle);

        $content = chunk_split(base64_encode($content));

        // Set headers for attachments
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

        // Email body with attachment
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $body .= "$fullMessage\r\n";

        $body .= "--$boundary\r\n";
        $body .= "Content-Type: $file_type; name=\"$file_name\"\r\n";
        $body .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= "$content\r\n";
        $body .= "--$boundary--";

        $hasAttachment = true;
    }

    // If there's no attachment, send a simple email
    if (!$hasAttachment) {
        $body = $fullMessage;
    }

    // Send email
    $sent = mail($recipient, $subject, $body, $headers);
    if ($sent) {
        echo "<div class='alert alert-primary text-center' role='alert'>
                செய்தி வெற்றிகரமாக அனுப்பப்பட்டது!
            </div>";
    } else {
        echo "<div class='alert alert-danger text-center' role='alert'>
                செய்தியை அனுப்ப முடியவில்லை.
            </div>";
    }
} else {
    echo "<div class='alert alert-primary text-center' role='alert'>
                தவறான கோரிக்கை.
            </div>";
}
?>
