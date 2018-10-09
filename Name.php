<?php
function reply_msg($txtback,$replyToken)//สร้างข้อความและตอบกลับ
{
    $access_token = 'nn+O7ECJi9F+brsqR77DsSjt1LbHqGPaST62Fymax167Y0uCysrzkiW4NYrD6hW/3d0R/XWSTzm6gVKymMLpml17mVTKJV4pQTwEZFGNHhdD1/9wrJLbW7RU5UKw2Fa2JrYcSAtRZU+y3CGSm1aJTwdB04t89/1O/w1cDnyilFU=';
    $messages = ['type' => 'text','text' => $txtback];//สร้างตัวแปร 
    $url = 'https://api.line.me/v2/bot/message/reply';
    $data = [
                'replyToken' => $replyToken,
                'messages' => [$messages],
            ];
    $post = json_encode($data);
    $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);
    echo $result . "\r\n";
}
 $content = file_get_contents('php://input');//ประกาศตัวแปรชื่อ content เพื่อรับข้อมูลจากไลน์
 $events = json_decode($content, true);//แปลง json เป็น php แล้วเก็บใน event
 if (!is_null($events['events']))//check ค่าในตัวแปร $events
 {
   foreach ($events['events'] as $event) //
   {
     if ($event['type'] == 'message' && $event['message']['type'] == 'text')
     {
       $replyToken = $event['replyToken']; //เก็บ reply token เอาไว้ตอบกลับ
       $txtin = $event['message']['text'];//เอาข้อความจากไลน์ใส่ตัวแปร $txtin
       if($txtin == "hibot")
       {
         $txtback = "hihumen"
         reply_msg($txtback,$replyToken);
       }
     }
   }
 }
?>

