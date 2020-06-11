<?php
if (!empty($_POST)) {
    //get email from form
    $email = $_POST['email'];

    //write to file
    $file = fopen("mailinglist.txt", "a+");
    fwrite($file, $email . "\n");
    fclose($file);      // je moet altijd files openen en sluiten!

    $response = [
        'status' => 'success',
        'body' => htmlspecialchars($email),
        'message' => 'Email saved'
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
}
