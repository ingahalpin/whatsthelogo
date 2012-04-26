<?php 

     $app_id = "227998463973218";

     $canvas_page = "http://inga.fbdublin.com/whatsthelogo/";

     $auth_url = "https://www.facebook.com/dialog/oauth?client_id=" 
            . $app_id . "&redirect_uri=" . urlencode($canvas_page) . "&scope=publish_actions";

     $signed_request = $_REQUEST["signed_request"];

     list($encoded_sig, $payload) = explode('.', $signed_request, 2); 

     $data = json_decode(base64_decode(strtr($payload, '-_', '+/')), true);

     if (empty($data["user_id"])) {
            echo("<script> top.location.href='" . $auth_url . "'</script>");
     } else {
            echo ("Welcome User: " . $data["user_id"]);
     } 
 ?>
<html>


<head>
	<title>What's the Logo???</title>
</head>
<body>
	<div></div>
</body>
</html>