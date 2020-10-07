//ส่งข้อความ Line Notify API ด้วย PHP
<?php
define("LINEAPI","https://notify-api.line.me/api/notify");
define("MESSAGE","KUY YP Nahee");
define("TOKEN","1vKmon6DOgwwNYlKJFmhapG4hv0CwCQ1ToCOczr4BZn");
$data = array("message" => MESSAGE);
$data = http_build_query($data,'','&');
$headerOptions = array(
  'http'=>array(
    'method'=>'POST',
    'header'=> "Content-Type: application/x-www-form-urlencoded\r\n"
               ."Authorization: Bearer ".TOKEN."\r\n"
               ."Content-Length: ".strlen($data)."\r\n",
     'content' => $data
   ),
 );
$context = stream_context_create($headerOptions);
$result = file_get_contents(LINEAPI,FALSE,$context);
$res = json_decode($result);
print_r($res);
//print_r($headerOptions);
print_r($data);
?>