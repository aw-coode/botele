<?php


     function forwardMessage($from, $to, $message_id){
        return bot('forwardMessage' , [
            'chat_id'  => $to,
            'from_chat_id' =>$chat_id,
            'message_id' => $message_id,
        ]);
    }
     function copyMessage($from , $to , $message_id , $reply = null,$reply_to_message_id = null){
        return bot('copyMessage' , [
            'chat_id'  => $to,
            'from_chat_id' => $from,
            'message_id' => $message_id,
            'reply_markup' => $reply,
            'reply_to_message_id' => $reply_to_message_id
        ]);
    }

     function answerCallbackQuery($alretcall , $text , $alert){
        return bot('answerCallbackQuery',[
            'callback_query_id' => $alretcall,
            'text' => $text,
            'show_alert' => $alert
        ]);
    }
     function edit_replay($chatid , $msgid ,$reply){
	return bot('editMessageReplyMarkup',[
            'chat_id'=>$chatid,
            'message_id'=>$msgid,
            'protect_content'=>true,
            'reply_markup'=>$reply
		]);
	}

     function Random_msg_top($alretcall, $random_alret){
        return bot('answercallbackquery',[
            'callback_query_id' =>$alretcall,
            'text'=>$random_alret,]);}


     function typing($chat_id, $action = 'typing'){ 
        return bot("sendChatAction",[
            'chat_id'=>$chat_id,
            'action'=>$action]);}

     function jsonData($chat_id, $text){
       return bot('sendMessage',[
            'chat_id' =>$chat_id,
            'text' =>$text]);}

     function sendMessage($chat_id, $text, $replyMarkup){
         return bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$text,
            'protect_content'=>true,
            'parse_mode'=> 'HTML',
            'reply_markup'=>$replyMarkup]);}
      
     function sendMessageLite($chat_id, $text){
         return bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$text]);}

     function sendMessageInlineKeyboard($chat_id, $text, $replyMarkup){
         return bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>$text,
            'protect_content'=>true,
            'parse_mode'=>'HTML',
            'reply_markup' =>$replyMarkup]);}

     function sendPhoto($chat_id, $photo, $caption = null){
          return bot('sendphoto',[
             'chat_id'=>$chat_id,
             'photo'=>$photo,
             'parse_mode'=>'HTML',
             'protect_content'=>true,
             'caption'=>$caption]);}

     function sendPhotoViaID($chat_id, $photo, $caption = null){
           return bot('sendphoto',[
              'chat_id'=>$chat_id,
              'photo'=>$photo,
              'parse_mode'=>'HTML',
              'protect_content'=>true,
              'caption'=>$caption]);}

     function sendAudio($chat_id, $audio, $caption, $title ,$performer = null){
            return bot('sendaudio',[
              'chat_id'=>$chat_id,
              'audio'=>$audio,
              'caption'=>$caption,
              'parse_mode'=>'HTML',
              'protect_content'=>true,
              'title'=>$title,
              'performer'=>$performer]);}

     function sendDocument($chat_id, $document, $caption, $replyMarkup){
            return bot('senddocument',[
              'chat_id'=>$chat_id,
              'document'=>$document,
              'caption'=>$caption,
              'protect_content'=>true,
              'parse_mode'=>'HTMl',
              'reply_markup' =>$replyMarkup]);}

    function sendVideo($chat_id, $video, $caption){
            return bot('sendvideo',[
              'chat_id'=>$chat_id,
              'video'=>$video,
              'parse_mode'=>'HTML',
              'protect_content'=>true,
              'caption'=>$caption]);}

    function sendVoice($chat_id, $voice, $caption){
            return bot('sendvoice',[
              'chat_id'=>$chat_id,
              'voice'=>$voice,
              'parse_mode'=>'HTML',
              'protect_content'=>true,
              'caption'=>$caption]);}

    function alret($alretcall, $text, $showAlert = false){
            return bot('answerCallbackQuery', [
              'callback_query_id' => $alretcall,
              'text' =>$text,
              'show_alert'=>$showAlert,
                                ]);
                      }

    function Mute_New_Chat_Members($chat_id, $new_chat_member_id, $time){
           return bot('restrictChatMember', [
              'chat_id' => $chat_id,
              'user_id' => $new_chat_member_id,
              'until_date' => $time,
              'can_send_messages' =>false,
              'can_send_media_messages' => false,
              'can_send_other_messages' => false,
              'can_add_web_page_previews' => false
                                  ]);}

    function Delete($chat_id, $message_id){
          return bot('deleteMessage', [
              'chat_id'=> $chat_id,
              'message_id'=>$message_id ]);}

    function pin($chat_id, $message_id){
         return bot('pinChatMessage', [
              'chat_id'=> $chat_id,
              'message_id'=>$message_id ]);}

    function unpin($chat_id){
         return bot('unpinAllChatMessages', [
              'chat_id'=> $chat_id]);}

    function leaveChat($chat_id){
         return bot('LeaveChat', [
              'chat_id'=> $chat_id ]);}

    function editMessageText($chat_id, $message_id, $text, $replyMarkup){
       return bot('editMessageText', [
              'chat_id' => $chat_id,
              'message_id' => $message_id,
              'text' => $text,
              'parse_mode' =>'HTML',
              'protect_content'=>true,
              'reply_markup' => $replyMarkup,
        ]);
    }
    function editMessageTextCallBack($chat_id, $message_id, $text, $parseMode = null, $disablePreview = false, $replyMarkup = null, $inlineMessageId = null){
       return bot('editMessageText', [
             'chat_id' => $chat_id,
             'message_id' => $message_id,
             'text' => $text,
             'parse_mode' => 'HTML',
             'protect_content'=>true,
             'disable_web_page_preview' => $disablePreview,
             'reply_markup' => $replyMarkup,
        ]);
    }

    function getChatMemberStatus($chat_id, $user_id){
      return  $getstatus = bot('getChatMember', [
            'chat_id'=> $chat_id,
            'user_id'=> $user_id]);
            $st = $getstatus->result->status;}


    function rss($line){
      return $url = 'https://daryo.uz/feed/';
             $rss = simplexml_load_file($url);
      foreach ($rss->channel->item as $item){
             $line = $item->title;
              break;}}

//in $media send an associative array with type and id/link/path. Exaple: $media = [['type' => 'photo', 'media' => '1234'], ['type' => 'video', 'media' => 'https://site/video.mp4']] https://core.telegram.org/bots/api#inputmedia
    function sendMediaGroup($chat_id, $media, $disable_notification = null, $reply_to_message_id = null){
             $media = json_encode($media);
             $args = [
                      'chat_id' => $chat_id,
                      'media'   => $media,
                     ];
    return bot('sendMediaGroup', $args);
}


    function answerInlineQuery($inline_query_id, $results, $cache_time = 0, $is_personal = false, $next_offset = '', $switch_pm_text = '', $switch_pm_parameter = '') {
        $res = bot('answerInlineQuery', [
            'inline_query_id' => $inline_query_id,
            'results' => json_encode($results),
            'cache_time' => $cache_time,
            'is_personal' => $is_personal,
            'next_offset' => $next_offset,
            'switch_pm_text' => $switch_pm_text,
            'switch_pm_parameter' => $switch_pm_parameter
        ]);
        return $res;
    }

    function getChatMember($chat_id, $user_id){
        return bot('getChatMember', [
            'chat_id' => $chat_id,
            'user_id' => $user_id]); }
    


?>
