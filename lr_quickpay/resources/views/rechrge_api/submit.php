<?php
//sample php code

//this will collect data from form
if(isset($_POST['provider_id']) && isset($_POST['number']) && isset($_POST['amount'])){
$provider_id = $_POST['provider_id']; 
$number = $_POST['number'];
$amount = $_POST['amount'];
$client_id = "010"; 

       
        $api_token = "TYtGqCElItyJLahlgTS7SdTwj5zQ3hAQNvzWFuhqXIHtT6XXiD9VkGnbLFFb"; // api_token token will in (https://www.pay2all.in/developers/recharge-api-doc) 
        $ch = curl_init();
        $url = "https://www.pay2all.in/web-api/paynow?api_token=$api_token&number=$number&provider_id=$provider_id&amount=$amount&client_id=$client_id";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = json_decode(curl_exec($ch));
        curl_close($ch);
        print_r($response);
}
?>
