<?php
header("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

require_once('settings.php');

$to      = $email_address;
$subject = "Text message from {$_REQUEST['From']}";
$message = "{$_REQUEST['Body']}";
$headers = "From: {$_REQUEST['From']}"; // Who should it come from?

mail($to, $subject, $message, $headers);
?>

<Response>
    <Message>
        <?php echo $genericSMSreply; ?>
    </Message>
</Response>