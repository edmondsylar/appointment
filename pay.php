<?php
    echo "payment\'s API";

    include_once "YoPaymentsPHP/YoAPI.php";
    $username = '100712303477';
    $password = 'xyeO-6FaY-niFO-aMMJ-tiFU-OupS-tZHS-m0yr';

    $api = new YoAPI($username, $password);

    $api->set_nonblocking("TRUE");
    $response = $api->ac_deposit_funds('256701207194', 1000, 'Api Testing');
    if($response['Status'] == 'OK'){
        echo "Funds Transacted successfully :".$response['TransactionReference'];
    }else{
        // print_r(array_keys($response));
        echo "Error : ".$response['StatusMessage'];
    }

?>