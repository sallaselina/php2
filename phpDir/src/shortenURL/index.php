<?php 
$longURL = "";
$showLongURL = "";
$message = "";
// store the accessToken securely!! .gitignore .env
// environmental variable in github?

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = "https://unelma.io/api/v1/link";
    $accessToken = "";
    $longURL = $_POST["longurl"];
    if (!empty($longURL)){
    $showLongURL = "You entered: " . $longURL;}
    $data = [
        "type" => "direct",
        "password" => null,
        "active" => true,
        "expires_at" => "2024-05-17",
        "activates_at" => "2024-04-17",
        "utm" => "utm_source=google&utm_medium=banner",
        "domain_id" => null,
        "long_url" => $longURL
        ];
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'accept: application/json',
        'Content-Type: application/json',
        'Authorization: Bearer ' . $accessToken,
        ]);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

        $response = curl_exec($curl);

        if (curl_errno($curl)) {
            echo 'Error:' . curl_error($curl);
            } else {
            $responseDecoded = json_decode($response, true);
            if (isset($responseDecoded['link']) && isset($responseDecoded['link']['short_url'])) {
            $message =  'Shortened URL: <a href="' . $responseDecoded['link']['short_url'] . '">' . $responseDecoded['link']['short_url'] . '</a>';
            } else {
            $message = 'Please enter a valid URL';
            }
            }
          
          curl_close($curl);
          
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Shorten long URLs</title>
</head>
<body>
    <h1>Insert URL</h1>
    <form action="index.php" method="post">
    <input type="text" name="longurl" id="longurl">
    <button type="submit">Shorten URL </button>
    <p><?=$showLongURL?> <br>
    <?=$message?>
</form>

</body>
</html>