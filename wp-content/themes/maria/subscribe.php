<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = json_decode(file_get_contents('php://input'), true);
    $email = $input['email'] ?? '';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Ogiltig e-postadress. Vänligen ange en giltig e-postadress']);
        exit;
    }

    $apiKey = '62b966b6f6dba2670768cf678e40a40d-us22';
    $listId = '882f5e023d';

    $memberInfo = [
        'email_address' => $email,
        'status' => 'subscribed'
    ];

    $memberInfoJson = json_encode($memberInfo);
    $dc = substr($apiKey, strpos($apiKey, '-') + 1);
    $url = 'https://' . $dc . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/';

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $memberInfoJson);

    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode == 200) {
        echo json_encode(['success' => true]);
    } else {
        $response = json_decode($result, true);
        $errorMessage = $response['detail'] ?? 'Ett fel har uppstått. Var god försök igen.';
        echo json_encode(['success' => false, 'message' => $errorMessage]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Ej tillåten metod']);
}
?>