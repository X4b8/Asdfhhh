#برمجه @ICTS_930 
#غير مسموح بالبيع اخلي مسؤليتي ع اي شخص يبيعه
#من الصفر برمجتي 
#تابع لقناة @ICTS_930
<?php
ob_start();
$token = "توكن"; 
define("API_KEY",$token);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
 
 



include("admin.php");

$update = json_decode(file_get_contents('php://input'));
$message= $update->message;
$text = $message->text;
$chat_id= $message->chat->id;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$a = strtolower($text);
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;

if(isset($update->callback_query)){

$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = $up->from->username;
$name = $up->from->first_name;
$message_id = $up->message->message_id;
$data = $up->data;
}

$MyLan = file_get_contents("language$chat_id.txt");
$UserB = bot('getme',['bot'])->result->username;
$Botu ="@$UserB";


if($MyLan == "ar" or $MyLan == null){
$textstart = " 👋┇أهلاً بك عزيزي،
مع $Botu يمكنك تحميل من عدة مواقع بصيغ متعددة والاستماع اليها في أي وقت،
المواقع المدعومة: ( يوتيوب، انستكرام، فيسبوك، تويتر، تيك توك، سناب جات، ساوند كلاود، بينترست ، لايكي ، كواي).
";
$HowTo = "💠┇طرق التحميل من اليوتيوب:
🏷┇من خلال أرسال لي رابط الأغنية من اليوتيوب،
🖇┇أو أرسال لي أسم الأغنية للبحث عنها في اليوتيوب.
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
💠┇طرق التحميل من الانستكرام:
🏷┇قم بأرسال لي رابط الفيديو أو الصورة في الانستكرام،
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
💠┇طرق التحميل من الفيسبوك:
🏷┇يمكنك تحميل مقاطع الفيديو العامة من موقع الفيسبوك،
🖇┇عن طريق أرسال رابط الفيديو فقط.
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
💠┇طرق التحميل من بينترست:
🏷┇يمكنك تحميل مقاطع الفيديو العامة من موقع بينترست،
🖇┇عن طريق أرسال رابط الفيديو فقط.
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
💠┇طرق التحميل من لايكي:
🏷┇يمكنك تحميل مقاطع الفيديو العامة من موقع لايكي،
🖇┇عن طريق أرسال رابط الفيديو فقط.
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
💠┇طرق التحميل من التويتر:
🏷┇يمكنك تحميل مقاطع الفيديو العامة من موقع تويتر،
🖇┇عن طريق أرسال رابط الفيديو فقط.
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
💠┇طرق التحميل من التيك توك:
🏷┇يمكنك تحميل مقاطع الفيديو العامة من موقع التيك توك،
🖇┇عن طريق أرسال رابط الفيديو فقط.
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
💠┇طرق التحميل من ساوند كلاود:
🏷┇يمكنك تحميل الأغاني العامة من موقع ساوند كلاود،
🖇┇عن طريق أرسال رابط الأغنية فقط.
";
$buttonback = "🔙┇رجوع .";
$changge ="🇮🇶 ┇أختر لغة البوت أولاً.";
$search = "🔎 ┇ يتم البحث عن ";
$ResultSe ="🔎┇نتائج بحث اليوتيوب ل";
$Kefia ="❕ ┇ كيفية استخدام البوت.";
$BotLann ="🇮🇶 ┇ تغير لغة البوت.";
$Uploading ="🚀┇يتم الرفع علي خوادم تلكرام...";
$Loadongg ="♻️┇- انتظر جار التحميل...";
$FictionsVideo = ["📽┇مقطع فيديو","🔈┇ملف صوتي","🎙┇بصمه"];
$ntaij ="♻┇يتم الحصول علي النتائج";
$Keifa ="اختر نوع التحميل ";
$mb5="⚠️┇ هذا الملف لا يمكنني تنزيله ،
⚠️┇لأن حجمه يتعدى (50 ميجابت في الثانية) ،
⚠️┇ حاول مرة أخرى مع ملف آخر. ";
$nextt ="التالي »";
}else{
$textstart = "👋┇Welcome Dear,
With $Botu you can download from multiple sites in multiple formats and listen to them at any time,
Supported sites: ( Youtube, Instagram, Facebook, Twitter, Tiktok, Snapchat, Soundcloud , pinterest ,Likee ,kwai).
";
$HowTo = "💠┇Download methods from Youtube:
🏷┇By sending me the song link from Youtube,
🖇┇Or send me the name of the song to search for on Youtube.
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
💠┇Download methods from Instagram:
🏷┇Send me the video or image link on Instagram,
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
💠┇Download methods from Facebook:
🏷┇You can download public videos from Facebook,
🖇┇By sending the video link only.
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
💠┇Download methods from pinterest:
🏷┇You can download public videos from pinterest,
🖇┇By sending the video link only.
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
💠┇Download methods from Twitter:
🏷┇You can download public videos from Twitter,
🖇┇By sending the video link only.
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
💠┇Download methods from Tiktok:
🏷┇You can download public videos from Tiktok,
🖇┇By sending the video link only.
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
💠┇Download methods from Soundcloud:
🏷┇You can download public songs from Soundcloud,
🖇┇By sending the song link only.
";
$buttonback = "🔙┇Back.";
$changge ="🇺🇸 ┇ Choose the bot language first.";
$search = "🔎 ┇ Searching For ";
$ResultSe ="🔎┇Youtube search results for ";
$Kefia ="❕ ┇How To Use Bot.";
$BotLann ="🇺🇸 ┇Change The Bot Language.";
$Uploading ="🚀┇Uploading to Telegram servers...";
$Loadongg ="♻️┇Loading Download...";
$FictionsVideo = ["📽┇Video","🔈┇Audio","🎙┇Voice"];
$ntaij ="♻ ┇ The results are obtained";
$Keifa ="Choose ";
$mb5 = "⚠️┇This file I cannot download,
⚠️┇Because its size exceeds (50 Mbps), 
⚠️┇Try again with another file." ;
$nextt = "Next »" ;
}

if($text == "/start") {
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"*
$textstart
*",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"$Kefia",'callback_data'=>'HowTo']],
     [['text'=>"$BotLann",'callback_data'=>'ChangeLan']],
   ]])
]);return false;
}

if($data == "HowTo"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
*
$HowTo
*
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"$buttonback", "callback_data"=>"backk"]],
]])
]);
}

if($data == "ChangeLan"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
*
$changge
*
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"🇮🇶 ┇ العربية .", "callback_data"=>"chngetoar"]],
[["text"=>"🇺🇸 ┇ English .", "callback_data"=>"chngetoen"]],
[["text"=>"$buttonback", "callback_data"=>"backk"]],
]])
]);
}

if($data == "backk"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
*
$textstart
*",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"$Kefia",'callback_data'=>'HowTo']],
     [['text'=>"$BotLann",'callback_data'=>'ChangeLan']],
   ]])
]);
}

if($data == "chngetoar"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
*
👋┇أهلاً بك عزيزي،
مع $Botu يمكنك تحميل من عدة مواقع بصيغ متعددة والاستماع اليها في أي وقت،
المواقع المدعومة: ( يوتيوب، انستكرام، فيسبوك، تويتر، تيك توك، سناب جات، ساوند كلاود، بينترست ، لايكي ، كواي).
*
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'❕ ┇ كيفية استخدام البوت.','callback_data'=>'HowTo']],
     [['text'=>"🇮🇶 ┇ تغير لغة البوت.",'callback_data'=>'ChangeLan']],
]])
]);
file_put_contents("language$chat_id.txt","ar");
}

if($data == "chngetoen"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
*
👋┇Welcome Dear,
With $Botu you can download from multiple sites in multiple formats and listen to them at any time,
Supported sites: ( Youtube, Instagram, Facebook, Twitter, Tiktok, Snapchat, Soundcloud , pinterest ,Likee ,kwai).
*
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'❕ ┇How To Use Bot.','callback_data'=>'HowTo']],
     [['text'=>"🇺🇸 ┇Change The Bot Language.",'callback_data'=>'ChangeLan']],
]])
]);
file_put_contents("language$chat_id.txt","en");
}

$vidi = explode("##", $data); 

$txt = explode("|",$data);

if(!preg_match('(https://)',$text)){
	if(!preg_match('(http://)',$text)){
	if(!preg_match('(/dl_)',$text)){
		if(!$data){
			
$texttt=str_replace(' ','-',$text);
$item = json_decode(file_get_contents("http://fsc.zzz.com.ua/api/YOUTUBE/Search.php?search=".urlencode($text)))->results;      	

	  	 for($i=0;$i < 5;$i++){
		
$na=$item[$i]->title;
$idv=$item[$i]->id;
$timev=$item[$i]->duration;
$views=$item[$i]->views;


$Sixe = $obj[videoInfo][downloadInfoList][6][partList][0][size];
$Video .= "* 🎬 $na*\n *🕦 $timev - 👁 $views* \n 🔗 [/dl_$idv]\n\n"."\n";
}

$s=bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$search *$text*...",
'message_id'=>$message_id, 
'disable_web_page_preview'=>true,
])->result->message_id;

bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$s,
'text'=>"
$ResultSe *$text*

$Video 
",
'parse_mode'=>"markdown",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"$nextt",'callback_data'=>'search|'.$text]],
   ] 
   ])
  ]);


}
}
} 
}

$expl = explode("|", $data) ;
if(!preg_match('(https://)',$text)){
	if(!preg_match('(http://)',$text)){
	if(!preg_match('(/dl_)',$text)){
		if($expl[0] == "search"){
			
$texttt=str_replace(' ','-',$text);
$item = json_decode(file_get_contents("http://fsc.zzz.com.ua/api/YOUTUBE/Search.php?search=".urlencode($expl[1])))->results;      	

	  	 for($i=0;$i < 5;$i++){
		
$na=$item[$i]->title;
$idv=$item[$i]->id;
$timev=$item[$i]->duration;
$views=$item[$i]->views;


$Sixe = $obj[videoInfo][downloadInfoList][6][partList][0][size];
$Video .= "* 🎬 $na*\n *🕦 $timev - 👁 $views* \n 🔗 [/dl_$idv]\n\n"."\n";
}


bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
$ResultSe *$expl[1]*

$Video 
",
'parse_mode'=>"markdown",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"$nextt",'callback_data'=>'search|'.$expl[1]]],
   ] 
   ])
  ]);


}
}
} 
}



if(preg_match('(https://youtu.be)',$text) or preg_match('(http://www.youtube.com)',$text)){
	if(!preg_match('(/dl_)',$text)){
		if(!$data){
			$YutDl= json_decode(file_get_contents("http://fsc.zzz.com.ua/api/YOUTUBE/index.php?url=".$text),true);
	$YutDl2 = $YutDl["url"][0]["url"];
	$metitle = $YutDl["meta"]["title"];
$mda = $YutDl["meta"]["duration"];
$iddv = $YutDl["id"];
$Phho = "sendphoto";
$pog=bot($Phho,[
'chat_id'=>$chat_id,
'photo'=>"https://youtu.be/$iddv",
'caption'=>"*🎬 *[$metitle](https://youtu.be/$iddv) \n *🕑 $mda*",
'parse_mode'=>"markdown",
    'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"$FictionsVideo[0]",'callback_data'=>'mo##'.$iddv]],
     [['text'=>"$FictionsVideo[1]",'callback_data'=>'mo1##'.$iddv],['text'=>"$FictionsVideo[2]",'callback_data'=>'mo2##'.$iddv]],
   ] 
   ])
  ])->result->message_id;
file_put_contents("msgid$from_id.txt",$pog);
}
} 
} 



if($update->inline_query){
$text_inline = $update->inline_query->query;
$iid=$update->inline_query->id;
$idchat = $update->inline_query->chat->id; 
$idms = $update->inline_query->message_id; 

$text_inline=str_replace(' ','-',$text_inline);
$result = json_decode(file_get_contents("http://fsc.zzz.com.ua/api/YOUTUBE/Search.php?search=".urlencode($text_inline)))->results;      	
 	$keyboard["inline_keyboard"]=[];
	  	 for($i=0;$i < count($result);$i++){
        $res[$i] = [
                'type'=>'article',
                'id'=>base64_encode(rand(5,555)), 'thumb_url'=>$result[$i]->image,
                'title'=>$result[$i]->title,
               'description' => "".$result[$i]->views." Views  - Time ".$result[$i]->duration."", 'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"https://www.youtube.com/watch?v=".$result[$i]->url],
          ];
    }
	  	$r = json_encode($res);
    bot('answerInlineQuery',[
 'inline_query_id'=>$update->inline_query->id,    
            'results' =>($r)
        ]);
}

if(preg_match('(https://)',$text) or preg_match('(http://)',$text)){
	if(!preg_match('(https://youtu.be)',$text)){
		if(!preg_match('(http://www.youtube.com)',$text)){
	$YutDl= json_decode(file_get_contents("http://fsc.zzz.com.ua/api/YOUTUBE/index.php?url=" . urlencode($text)),true);

$YutDl1 = $YutDl["url"][0]["url"];
$mmusc=$YutDl["url"][1]["url"];
$metitle = $YutDl["meta"]["title"];
$mda = $YutDl["meta"]["duration"];
$Video = new CURLFile($YutDl1);
	$kls=bot('sendMessage',[      
'chat_id'=>$chat_id,   
'text'=>"*
$Loadongg
*
",
'parse_mode'=>"markdown",
])->result->message_id;



bot('sendvideo',[ 
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'video'=>$Video,
'caption' =>" $Botu - $metitle, $mda",

     ]);
     
     bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$kls,
]);
}
} 
} 

$VideoSjson = json_decode(file_get_contents("VideoS.json"),true);
 if(preg_match('(/dl_)',$text)){
 $text_get = str_replace(['/dl_'],'',$text);
 $IdVideo2 = str_replace('ovhj','-',$text_get);
 
 $n=bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$ntaij",
'message_id'=>$message_id, 
'disable_web_page_preview'=>true,
])->result->message_id;

bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$n,
]);

$YutDl= json_decode(file_get_contents("http://fsc.zzz.com.ua/api/YOUTUBE/index.php?url=https://youtu.be/".$IdVideo2),true);
	$YutDl2 = $YutDl["url"][0]["url"];
	$metitle = $YutDl["meta"]["title"];
$mda = $YutDl["meta"]["duration"];
$Phho = "sendphoto";
$pog=bot($Phho,[
'chat_id'=>$chat_id,
'photo'=>"https://youtu.be/$IdVideo2",
'caption'=>"*🎬 *[$metitle](https://youtu.be/$IdVideo2) \n *🕑 $mda*",
'parse_mode'=>"markdown",
    'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"$FictionsVideo[0]",'callback_data'=>'mo##'.$IdVideo2]],
     [['text'=>"$FictionsVideo[1]",'callback_data'=>'mo1##'.$IdVideo2],['text'=>"$FictionsVideo[2]",'callback_data'=>'mo2##'.$IdVideo2]],
   ] 
   ])
  ])->result->message_id;
file_put_contents("msgid$from_id.txt",$pog);
}

$Chn = "@S_6_y_ou_t";
$Cho = "S_6_y_ou_t";

if($vidi[0] == "mo"){
	if($VideoSjson["VideoIdStat"][$vidi[1]] =="on" ) {
		bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
	bot('sendvideo',[ 
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'video'=>"https://t.me/$Cho/".$VideoSjson["VideoId"][$vidi[1]],
'caption' =>"$Botu - ". $VideoSjson["VideoIdBio"][$vidi[1]] ,

     ]);
    } 
$msgid = file_get_contents("msgid$from_id.txt");
if($vidi[0] == "mo"){
	if($VideoSjson["VideoIdStat"][$vidi[1]] !="on" ) {
	
	bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$msgid,
]);

$kls=bot('sendMessage',[      
'chat_id'=>$chat_id,   
'text'=>"
*
$Loadongg
*
",
'parse_mode'=>"markdown",
])->result->message_id;
	$YutDl= json_decode(file_get_contents("http://fsc.zzz.com.ua/api/YOUTUBE/index.php?url=https://youtu.be/".$vidi[1]),true);
$YutDl1 = $YutDl["url"][0]["url"];
$metitle = $YutDl["meta"]["title"];
$sizee = $YutDl["url"][3]["filesize"];
$mda = $YutDl["meta"]["duration"];
$Video = new CURLFile($YutDl1);
file_put_contents("$vidi[1].mp4",file_get_contents($YutDl1));
	
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$kls,
"text"=>"*$Uploading*",
'parse_mode'=>"markdown",
]);
if(filesize("$vidi[1].mp4") <= 50000000) {

bot('sendvideo',[ 
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'video'=>new CURLFile("$vidi[1].mp4"),
'caption' =>"". filesize("$vidi[1].mp4")."- $Botu - $metitle, $mda $fi",

     ]);
     
  $i_v=  bot('sendvideo',[ 
'chat_id'=>$Chn,
'message_id'=>$message_id,
'video'=>new CURLFile("$vidi[1].mp4"),
'caption' =>"". filesize("$vidi[1].mp4")."- $Botu - $metitle, $mda $fi",

     ])->result->message_id;
     
     $VideoSjson["VideoId"][$vidi[1]]=$i_v;
     $VideoSjson["VideoIdStat"][$vidi[1]]="on" ;
     $VideoSjson["VideoIdBio"][$vidi[1]]="$metitle, $mda $fi" ;

file_put_contents("VideoS.json", json_encode($VideoSjson));
     
     bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$kls,
]);
unlink("$vidi[1].mp4");

} else {

	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$kls,
"text"=>"*$mb5*",
'parse_mode'=>"markdown",
]);
unlick("$vidi[1].mp4");
} 
} 
} 
}


if($vidi[0] == "mo1"){

bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$msgid,
]);
$kls=bot('sendMessage',[      
'chat_id'=>$chat_id,   
'text'=>"
*
$Loadongg
*
",
'parse_mode'=>"markdown",
])->result->message_id;


	$YutDl= json_decode(file_get_contents("http://fsc.zzz.com.ua/api/YOUTUBE/index.php?url=https://youtu.be/".$vidi[1]),true);
	$YutDl2 = $YutDl["url"][1]["url"];
	$metitle = $YutDl["meta"]["title"];
$mda = $YutDl["meta"]["duration"];
	$Music =new CURLFile($YutDl2);
	file_put_contents("$vidi[1].mp3",file_get_contents($YutDl2));
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$kls,
"text"=>"*$Uploading*",
'parse_mode'=>"markdown",
]);
	if(filesize("$vidi[1].mp3") <= 50000000) {
	



bot('sendaudio',[
'chat_id'=>$chat_id,
'audio'=>new CURLFile("$vidi[1].mp3"),
'performer'=>"$title",
'title'=>"$Botu - $metitle, $mda",
'thumb'=>$thumb,  
]);                



bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$kls,
]);
unlink("$vidi[1].mp3");
}else{
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$kls,
"text"=>"*$mb5*",
'parse_mode'=>"markdown",
]);
unlick("$vidi[1].mp3");
} 
} 

if($vidi[0] == "mo2"){
	
	bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$msgid,
]);

$kls=bot('sendMessage',[      
'chat_id'=>$chat_id,   
'text'=>"
*
$Loadongg
*
",
'parse_mode'=>"markdown",
])->result->message_id;

	$YutDl= json_decode(file_get_contents("http://fsc.zzz.com.ua/api/YOUTUBE/index.php?url=https://youtu.be/".$vidi[1]),true);
	$YutDl2 = $YutDl["url"][0]["url"];
	$metitle = $YutDl["meta"]["title"];
$mda = $YutDl["meta"]["duration"];
	$Music =new CURLFile($YutDl2);
	file_put_contents("$vidi[1].ogg",file_get_contents($YutDl2));
	
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$kls,
"text"=>"*$Uploading*",
'parse_mode'=>"markdown",
]); 

if(filesize("$vidi[1].ogg") <= 50000000) {

bot('sendvoice',[         
'chat_id'=>$chat_id,           
'voice'=>new CURLFile("$vidi[1].ogg"),  
'caption' =>"*
$Botu - $metitle, $mda
*
",
]);                




bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$kls,
]);
unlick("$vidi[1].ogg");
}else{
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$kls,
"text"=>"*$mb5*",
'parse_mode'=>"markdown",
]);
unlick("$vidi[1].ogg");
} 
} 

$rel=explode("¥",$text);
if($rel[0] == "¥") {
	$VideoSjson["VideoId"][$rel[0]]=$rel[1];
     $VideoSjson["VideoIdStat"][$rel[0]]="on" ;
     $VideoSjson["VideoIdBio"][$rel[0]]=$rel[2];
    } 