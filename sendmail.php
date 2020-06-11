<?php
if (!empty($_POST)) {
    //get email from form
    $email = $_POST['email'];
    $txt = $_POST['message'];

    //write to file
    $file = fopen("mail.txt", "a+");
    fwrite($file, $email . " — " . $txt . "\n");
    fclose($file);      // je moet altijd files openen en sluiten!

    $response = [
        'status' => 'success',
        'body' => htmlspecialchars($txt),
        'message' => 'Mail sent'
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
}
