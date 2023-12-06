<?php

http_response_code(200);
fastcgi_finish_request();

if (empty(getenv('BOT_TOKEN'))){
$token = "API_Token";
} else {
$token = getenv('BOT_TOKEN');
}
if (empty(getenv('ADMIN'))){
$ADMIN = "ID_ADMIN";
} else {
$ADMIN = getenv('ADMIN');
}
if (empty(getenv('Channel_ID'))){
$Channel_ID = "Channel_ID";
} else {
$Channel_ID = getenv('Channel_ID');
}

define('API_KEY',"$token");
$admin = "1813121392"; 
//Enter your id number
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
ob_start();

include 'function.php';

$input = file_get_contents('php://input');
$update = json_decode($input);
$message = $update->message;
$chat_id = $message->chat->id;
$user_id = $message->from->id;
$message_id = $message->message_id;
$text = $message->text;
$type = $message->chat->type;
$user = $message->from->username;
$reply= $message->reply_to_message->text;
$replyid = $message->reply_to_message->from->id;
$replyname = $message->reply_to_message->from->first_name;
$title = $message->chat->title;

$call = $update->callback_query;
$mes = $call->message;
$dataa = $call->data;
$qid = $call->id;
$callcid = $message->chat->id;
$message_re_id = $message->message_id;
$callfrid = $call->from->id;
$calluser = $mes->chat->username;
$callfname = $call->from->first_name;

$new = $message->new_chat_member;
$new_id = $new->id;
$new_name = $new->first_name;
$left = $message->left_chat_member;

$soat = date("H:i:s", strtotime("2 hour"));
$sana = date("d.m.y", strtotime("2 hour"));

$message = $update->message;
$message_text = $update ->message->text;
$from_id = $message->from->id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$firstname = $update->callback_query->from->first_name;
$usernames = $update->callback_query->from->username;
$chatid = $update->callback_query->message->chat->id;
$fromid = $update->callback_query->from->id;
$membercall = $update->callback_query->id;
$reply = $update->message->reply_to_message->forward_from->id;
$data = $update->callback_query->data;
$dataa = $update->callback_query->data;
$messageid = $update->callback_query->message->message_id;
$chat_type = $update->message->chat->type;
$gpname = $update->callback_query->message->chat->title;
$namegroup = $update->message->chat->title;
$text_inline = $update->inline_query->query;
$inline_query_id = $update->inline_query->id;
$new_chat_member_id = $update->message->new_chat_member->id;
$newchatmemberu = $update->message->new_chat_member->username;
$rt = $update->message->reply_to_message;
$replyid = $update->message->reply_to_message->message_id;
$tedadmsg = $update->message->message_id;
$edit = $update->edited_message->text;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$re_name = $update->message->reply_to_message->from->first_name;
$re_msgid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$message_edit_id = $update->edited_message->message_id;
$chat_edit_id = $update->edited_message->chat->id;
$edit_for_id = $update->edited_message->from->id;
$edit_chatid = $update->callback_query->edited_message->chat->id;
$caption = $update->message->caption;
$text = $update->message->text;
$mid = $update->message->message_id;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$textmassage = $message->text;
$firstname = $update->callback_query->from->first_name;
$usernames = $update->callback_query->from->username;
$chatid = $update->callback_query->message->chat->id;
$fromid = $update->callback_query->from->id;
$alretcall = $update->callback_query->id;
$forward_from_chat = $update->message->forward_from_chat;
$from_chat_id = $forward_from_chat->id;
$messageid = $update->callback_query->message->message_id;
$tc = $update->message->chat->type;
$forward_from = $update->message->forward_from;
$forward_from_id = $forward_from->id;
$forward_from_username = $forward_from->username;
$reply = $update->message->reply_to_message->forward_from->id;
$caption = $update->message->caption;
$re = $update->message->reply_to_message;
$from_id = $message->from->id;
$is_bot = $message->new_chat_member->is_bot;
$time = strtotime("+5 minutes");
$count = $us->result;
$day = date('d-M Y',strtotime('0 hour'));
$clock = date('H:i', strtotime('0 hour'));
$new_time = date("Y-m-d H:i:s", strtotime('+0 hours'));
$channel = "";
$random_msg_top = array("Only the Root not free :)","invite your friends 🧡","If you linked tell us 💛");
$Random = $random_msg_top[array_rand($random_msg_top,1)];
$caption = $message->caption;
$document = $message->document; 
$animation = $message->animation;
$photo = $message->photo;
$video = $message->video;
$sticker = $message->sticker;
$file = $message->document;
$audio = $message->audio;
$voice = $message->voice;
$photo_id = $message->photo[0]->file_id;
$video_id= $message->video->file_id;
$sticker_id = $message->sticker->file_id;
$file_id = $message->document->file_id;
$music_id = $message->audio->file_id;
$voice_id = $message->voice->file_id;
$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$title = $message->chat->title;
$mention = "<a href='tg://user?id=$from_id'>$first_name</a>";
$url_count = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMembersCount?chat_id=$chat_id"),true);
$count_members = $url_count ['result'];
$lang = $message->from->language_code;
$owner = "1813121392";


if($text == "/info" ){
$get = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChatMembersCount?chat_id=$chat_id"));
$men = $get-> result;
$title = $message->chat->title;
$message_id = $update->message->message_id;
$link = bot("getchat",['chat_id'=>$chat_id])->result->invite_link;
if($link != null){
$link = $link;
$link2 = $link;
}else{
$link = bot("exportChatInviteLink",['chat_id'=>$chat_id])->result;
$link2 = $link;
}
bot('sendmessage',[
'chat_id' => $chat_id,
'text' => "Title: $title\nLink: <a href='$link2'>Group Link</a>\nTime: $new_time",
'parse_mode' => 'HTML']);}





$welcome_vmos = "Welcome $mention Howdy?
I'm Flaming 🔥 ~& Kitty ッ🥀 Robot please join before asking using me ;)";

$welcome = "Welcome to my Club<a href='https://telegra.ph/file/d8ff390e2a0ddfb5e4370.jpg'> ⁭⁭⁭</a><a href='tg://user?id=$from_id'>$first_name</a> 📱
Please Read the <a href='https://t.me/Bots_Programing_Tutorial'>Bots Channel contain</a> before asking me";

$leave = "Sorry <a href='https://telegra.ph/file/69044f4a93315d80f971b.jpg'> ⁭⁭⁭</a><a href='tg://chat?id=$chat_id'>$title</a> 💛
I can't find the <u>Flaming 🔥 ~& Kitty ッ🥀</u> here so I can't stay neither";



$cn = json_encode([
           'inline_keyboard'=>[
           [['text'=>'Chinese Website 🇨🇳','url'=>'http://website.vmos.cn/vmospro/website/index'],
           ['text'=>'Update in PM','url'=>'http://t.me/Black_Widow_Robot?start=update']],
           [['text'=>'Delete 🗑','callback_data'=>'Delete']]]]);


$welcome_key = json_encode([
           'inline_keyboard'=>[
           [['text'=>'Bots channel 💻','url'=>'https://t.me/botlist'],
           ['text'=>'Bots Menu 📜','url'=>'https://t.me/TGBot_List']],
           [['text'=>'Add me','url'=>'http://t.me/Flaming_Snowflake_bot?startgroup=start']]]]);

$join_key = json_encode([
           'inline_keyboard'=>[
           [['text'=>'Bots Learn 🤖','url'=>'https://t.me/Bots_Programing_Tutorial'],
           ['text'=>'Bots request 🤖','url'=>'https://t.me/Botlistchat']],
           [['text'=>'Programing 👩‍💻','url'=>'https://t.me/Bottalk']]]]);

$sorry = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$owner);
if($type == 'group' or $type == 'supergroup' && (strpos($sorry,'"status":"left"') or strpos($sorry,'"Bad Request: USER_ID_INVALID"') or strpos($sorry,'"status":"kicked"'))!== false){
typing($chat_id, $action = 'typing');
sleep(2);
$pin_not = sendMessage($chat_id, $text = $leave, $replyMarkup = $join_key)->result->message_id;
sleep(3);
pin($chat_id, $message_id = $pin_not);
leaveChat($chat_id);
return false;}

$join = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$Channel_ID&user_id=".$from_id);
if($text == '/start' && $type == 'private' && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
typing($chat_id, $action = 'typing');
sleep(2);
sendMessage($chat_id, $text = $welcome_vmos, $replyMarkup = $join_key);
return false;}


if($text == '/start' && $type == 'private'){
unpin($chat_id);
 typing($chat_id, $action = 'typing');
sleep(2);
$wl = sendMessage($chat_id, $text = "Well, since you've joined, let's get started 🙂", $replyMarkup = $null)->result->message_id;
sleep(3);
$pin = editMessageText($chat_id, $message_id = $wl, $text = $welcome, $replyMarkup = $welcome_key)->result->message_id;
sleep(3);
pin($chat_id, $message_id = $pin);
}

if($new){
Mute_New_Chat_Members($chat_id, $new_chat_member_id, $time);}

$pm = "Please <a href='tg://user?id=$user_id'>$first_name</a> click here";
$chinese_vmos = "<a href='tg://user?id=$user_id'>$frist_name</a> VMOS Chinese Version 🇨🇳 Support Root and Gapps but Android 5.1
Android OS: 5.1
Features:
                 1. Root
                 2. Gapps
                 3. Free no need to pay";

$vmos_pro = "<a href='tg://user?id=$user_id'>$first_name</a> Update VMOS Pro Chinese Version
VMOS Pro 2.3.2
<b>Android OS:</b> Support ROMs 5.1 32-Bit, 4.4 32-Bit, 7.1 64-Bit lite, 7.1 32-Bit, 9 64-Bit and more like <a href='https://t.me/Frequently<i>Asked</i>Question/68'>Custom ROMs</a> for  <a href='https://t.me/Frequently<i>Asked</i>Question/35'>More information about architecture</a>
<b>Features:</b>
  1. Root: not free
  2. Gapps: free <u>enable Service button in vm settings </u>
  3. <a href='https://t.me/Frequently_Asked_Question/50'>Socks5 Proxy </a>
<b>Change Log:</b> <a href='https://t.me/Frequently_Asked_Question/241'>Read Change log from here please </a>

• if you can't see option for enable root or Google Services <a href='https://t.me/Frequently_Asked_Question/72'>Help yourself by reading this</a>";

$vmos_global = "<a href='tg://user?id=$re_id'>$replyname</a> This is VMOS Version 1.0.63
Android OS: 5.1
Features:
                 1. Root
                 2. Gapps
                 3. Free no need to pay
Note:
It's need unlocker app from here VMOS Tool";

$os12 = "<b>VMOS Assistant Instructions In Android 12:</b> <a href='https://telegra.ph/file/ba9f69892456fdbcbfd60.jpg'> ⁭⁭⁭</a>
<u>because the system restricts the process, the virtual machine runs unstable or cannot run continuously in the background. You need to obtain the shell permission to lift the restriction. Therefore, it is necessary to download [VMOS Assistant] to assist in obtaining Shell permissions. [VMOS Assistant] Only needs to be activated once. After activating it once, you don't need to pay attention to the activation status of the assistant. If VMOS Pro is unstable or cannot run continuously in the background, just activate it again!
Tutorial steps:</u>
1. Connect your phone to WiFi
2. Open the VMOS assistant, and turn on the unopened
first four preparation items.
3. Go to system settings - developer options - wireless debugging - use pairing code to pair the device
4. Swipe down the notification bar to see the operation steps of the VMOS assistant
5. In the notification of the VMOS assistant, enter the
pairing code just displayed
6. complete pairing
What should I do if the startup fails? When the startup fails, you can enter
your relevant information in the pop-up feedback pop-up window. After we receive your feedback, we will adapt and notify
you as soon as nossible

Do I need to start the VMOS assistant service every time?
After the activation is successful, <s>theoretically there is no need to activate again</s>, and after restarting the phone, there is no need to activate again. When VMOS Pro is unstable or cannot run continuously in the background, you can activate it again.
Everything here:
https://www.vmos.cn/zhushou.htm";

           

if($text == "/keyboar" && $type =='private'){
$os = json_encode([
           'inline_keyboard'=>[
           [["text"=>"Android 12 🤖","callback_data"=>"12"],
           ["text"=>"Android 11 and less","callback_data"=>"11"]],
           [["text"=>"Share 🗑","url"=>"http://t.me/share/url?url=I'm%20Black%20Widow%20Helper%20of%20VMOS%20Group%0AMade%20by%20Русская%20девушка%20🇷🇺%0ALink:%0Ahttp://t.me/Black_Widow_Robot"],
           ["text"=>"Delete","callback_data"=>"Delete"]]]]);
typing($chat_id, $action = 'typing');
sleep(2);
sendMessageInlineKeyboard($chat_id, $text = "Please Choice your os Android System", $replyMarkup = $os);}
if(isset($update) && $data == "12"){
alret($alretcall, $text = "For Android 12 Only Assistant app 📱", $showAlert = false);
editMessageText($chat_id = $chatid, $message_id = $messageid, $text = $os12, $replyMarkup = $os);}



if($text == "/file"){
$media = [[
       'type' => 'document', 'media' => 'https://t.me/', 'caption'=>'Caption'],
      ['type' => 'document', 'media' => 'https://t.me/', 'caption'=>'Caption']];
sendMediaGroup($chat_id, $media, $disable_notification = null, $reply_to_message_id = null);}
                            
if($data == "11"){
alret($alretcall, $text = "For Android devices 📱", $showAlert = false);
sendDocument($chat_id = $chatid, $document = "BQACAgQAAxkBAAICxGJNbqI_1MRQxh634_QkBbiH0Hc3AAImDAACvjlAUq4HtTqh1TtRIwQ", $caption = $vmos_pro, $replyMarkup = $os);}



if($text == '/vmoss'){
typing($chat_id, $action = 'typing');
sleep(2);
sendMessage($chat_id, $text = $pm, $replyMarkup = $cn);}

elseif(preg_match("/(last|update)/", $text) && $type =='private'){
typing($chat_id, $action = 'document');
sleep(2);
sendDocument($chat_id, $document = "BQACAgQAAxkBAAICxGJNbqI_1MRQxh634_QkBbiH0Hc3AAImDAACvjlAUq4HtTqh1TtRIwQ", $caption = $vmos_pro, $replyMarkup = null);}

if($data == "Delete"){
alret($alretcall, $text = "OK Delete 🗑", $showAlert = false);
Delete($chat_id = $chatid, $message_id = $messageid);}


if($text =='/json' and $re){
jsonData($chat_id, $text = json_encode($update, 448));}

if($text == "/members"){
  sendMessage($chat_id, $text = "The number of group members: $count_members", $replyMarkup = $key);}


if($text == "/member"){
$st = getChatMember($chat_id, $user_id);
	if($st->result->status == 'creator' || $st -> result -> status == 'administrator'){
        sendMessage($chat_id, $text = "The number of group members: $count_members", $replyMarkup = $key);}}

if(in_array($st->result->status??"",["administrator","creator"])){
if($text == "/check"){
 sendMessage($chat_id, $text = 'Hello');
}}


if($text == '/key'){
sendMessageInlineKeyboard($chat_id, $text = "$day $clock $hello ⏰ $new_time", $replyMarkup = null);}

$bot = "<b>• How to create your first bot?
</b><a href='https://telegra.ph/Introduction-to-bot-programming-02-21'>Read this handy tutorial.
</a>• another article with:
<a href='https://telegra.ph/Very-first-manual-bot-steps-03-25'>detailed instructions for your very first bot</a>
<b>• If you are searching for bots:
</b> @BotListChat, @BotsArchiveChat
We can't help you with 3rd party bot creators like ManyBot.
ℹ️ <a href='https://core.telegram.org/bots/api'>Bot API documentation
</a>";
$make_bot ="1. Read the <a href='https://t.me/BotTalk/608888'>Pinned Message</a> to know the requirements you need
2. If you are not good at programming, you should search on GitHub using the advanced search, as it shows you open source projects in your favorite programming language
3. OFC YouTube a very good teacher and <a href='https://youtube.com/c/InFoTelChannel'>InFoTel Channel</a>";
     

$in = [[
                'type' => 'article',
                'id' =>base64_encode(rand(5,555)),
                'thumb_url'=>"https://telegra.ph/file/0979037ae599e3eeec861.jpg",
                'title' => "Program Telegram bot",
                'description'=>"Learn how to create your first bot",
                'url'=> "https://core.telegram.org/bots/api",
                'input_message_content' => [
                'parse_mode' => 'HTML','parse_mode' => 'HTML',
                'disable_web_page_preview' =>true,
                'protect_content'=>true,
                'message_text' =>$bot],
                'reply_markup' => [
                'inline_keyboard' => [
                        [
                            ['text' => "Search Again", 'switch_inline_query_current_chat' => "bot"],['text' => "API Bot", 'url' => "https://core.telegram.org/bots/api"]
                        ]]]
            ],[
                'type' => 'article',
                'id' =>base64_encode(rand(5,555)),
                'thumb_url'=>"https://telegra.ph/file/0979037ae599e3eeec861.jpg",
                'title' => "How to Make a bot",
                'description'=>"Please Read This Article",
                'url'=> "https://core.telegram.org/bots/api",
                'input_message_content' => [
                'parse_mode' => 'HTML',
                'disable_web_page_preview' =>true,
                'message_text' =>$make_bot],
                'reply_markup' => [
                'inline_keyboard' => [
                        [
                            ['text' => "Search Again", 'switch_inline_query_current_chat' => "bot"],['text' => "Bot API", 'url' => "https://core.telegram.org/bots/api"]
                        ]]]
            ]];

if($text_inline == "bot"){
answerInlineQuery($inline_query_id, $results = $in, $cache_time = 0, $is_personal = false, $next_offset = '', $switch_pm_text = '', $switch_pm_parameter = '');}
    

?>
