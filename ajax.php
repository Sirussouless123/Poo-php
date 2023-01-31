<?php
const HTTP_OK = 200;

const HTTP_BAD_REQUEST  = 400;

const HTTP_METHOD_NOT_ALLOWED = 405;



if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) == 'XMLHTTPREQUEST') {

       if($_POST['action'] == "showData" && isset($_POST['number'])){

        $message = "";
           
               $number = $_POST['number'];

               if ($number <5 ){
                 $message = "Mauvais score";
               }else {
                $message = "Bon score";
               }
               $response = [
                "response_code" => HTTP_OK,
                "message"=>$message];
       }
    $response = [
        "response_code" => HTTP_BAD_REQUEST,
        "message" => "Il manque le paramètre action"
    ];
} else {
    $response = [
        "response_code" => HTTP_METHOD_NOT_ALLOWED,
        "message" => "Ceci n'est pas une requete ajax : Method not allowed"
    ];

     var_dump(json_encode($response['message']));
}
