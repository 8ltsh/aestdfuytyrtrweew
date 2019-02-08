<?php
/*p
by => @haked12
*/
$API_KEY = "410936682:AAFTBxFeQxDCYdkTzrJaa3jWHuiq7TSVnHQ";
define('API_KEY','410936682:AAFTBxFeQxDCYdkTzrJaa3jWHuiq7TSVnHQ');
echo "api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME'];

define('NO', '❌');
define('YES', '✅');
$e = "@se12y_bot";
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
#                     HMADA ABN MESAN                       #
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id    = $message->from->id;
$text       = $message->text;
$id   = $message->from->id; 
$chat_id    = $message->chat->id;
$new        = $message->new_chat_member;
$left       = $update->message->left_chat_member;
$contact    = $update->message->contact;
$audio      = $update->message->audio;
$location   = $update->message->location;
$memb       = $update->message->message_id;
$game       = $update->message->game; 
$name       = $update->message->from->first_name;
$gp_name    = $update->message->chat->title;
$user       = $update->message->from->username;
$for        = $update->message->from->id;
$sticker    = $update->message->sticker;
$video      = $update->message->video;
$photo      = $update->message->photo;
$voice      = $update->message->voice;
$doc        = $update->message->document;
$fwd        = $update->message->forward_from;
$type       = $update->message->chat->type;
$re         = $update->message->reply_to_message;
$js = json_decode(file_get_contents("http://rueslinks.000webhostapp.com/Date.php?from=date"));
$date = $js->Date;
$time = $js->Time;
$re_id      = $update->message->reply_to_message->from->id;
$re_user    = $update->message->reply_to_message->from->username;
$re_msgid   = $update->message->reply_to_message->message_id;
$type       = $update->message->chat->type;
$mid        = $message->message_id;
if (!file_exists("data.json")) {
  file_put_contents("data.json", "{\"groups\":[]}");
}
function save($id){
  $get = json_decode(file_get_contents("data.json"), true);
  if (!in_array($id, $get['groups'])) {
    $get['groups'][$id] = array('photo' => YES, 'video'=>YES,'voice'=>YES,'audio'=>YES,'stickers'=>NO,'fwd'=>NO,'links'=>NO,'bots'=>NO,'user'=>NO,'mark'=>NO,'doc'=>YES, 'gif'=>NO);
  file_put_contents("data.json", json_encode($get));
  return true;
  }else{
    return false;
  }
}
function lock($id,$val){
  $get = json_decode(file_get_contents("data.json"), true);
  $get['groups'][$id][$val] = NO;
  file_put_contents("data.json", json_encode($get));
  return true;
}
function open($id,$val){
  $get = json_decode(file_get_contents("data.json"), true);
  $get['groups'][$id][$val] = YES;
  file_put_contents("data.json", json_encode($get));
  return true;
}
$GLOBALS['id'] = $chat_id;
function is_lock($val){
  $get = json_decode(file_get_contents("data.json"), true);
 if ($get['groups'][$GLOBALS['id']][$val] == NO) {
   return true;
 } else {
  return false;
 }
}
if($text=="/start"){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
🎓┇اهــلا بك عزيــزي 【 $name 】

💡┇فــي بوت الحمايــه الاول على التلجــرام

📬┇وضيــفة البــوت حماية مجمــوعتك من المخربين

📥┇بسرعــه عاليــه وعدم تخطــي اي شيء

📯┇فقــط اضف البوت وقم برفعه ادمــن وارسال تفعيل
",
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"【المطــور】", 'url'=>"t.me/haked12"]],[['text'=>"【تابــعنا】", 'url'=>"t.me/css_1"]]
    ]

  ])
  ]);
}
if($text=="/setting" or $text == 'الاعدادات' or $text=="/setting$e"){
  $get = json_decode(file_get_contents("data.json"));
        $photo = $get->groups->$chat_id->photo;
        $video = $get->groups->$chat_id->video;
        $audio = $get->groups->$chat_id->audio;
        $voice = $get->groups->$chat_id->voice;
        $stickers = $get->groups->$chat_id->stickers;
        $links = $get->groups->$chat_id->links;
        $bots = $get->groups->$chat_id->bots;
        $mark = $get->groups->$chat_id->mark;
        $user = $get->groups->$chat_id->user;
        $doc = $get->groups->$chat_id->doc;
        $gif = $get->groups->$chat_id->gif;
  bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"
 «🔒 » مقفول 
 « 🔐 » مفتوح
ء────────────────ء
 🎐≫  الصور   $photo

 🎐≫  الملصقات  $sticker

🎐≫  الفيديو  $video

 🎐≫  الروابط   $links

 🎐≫  الجهات  $contact

 🎐≫  الملفات  $doc

 🎐≫  التوجيه  $fwd

 🎐≫  البصمات  $voice

 🎐≫  الصوت  $audio

 🎐≫  المعرف  $user

 🎐 ≫ الماركداون  $mark
ء────────────────
ء•【تابــعنا】 :- @css_1",
]);
}
if($text=="الاوامر"){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"( close ) » (قفل) 🔒
 (open) » ( فتح )  🔐
 ء──────────────
ء link ⇦ الروابــط
ء| user » المعرف

ء| mark » الماركدون
ء| bots » البوتات
ـ───────────────
ء| photo » الصور
ء| sticker » الملصقات

ء| video » الفيديو
ء| fwd » التوجيه
ء| audio » الاغاني
ء| contact » جهات الاتصال

ء| doc » الملفات
ء| gif » المتحركه 
ـ───────────────
• /delet → لحذف رســاله بالــرد 
• /mudir → لرفع مديــر بالــرد 
• /setname → لوضــع اسم + الاســم
• /pine → لتثبيت رســاله بالرد 
• /band → لحــظر عضــو بالرد 
• /kick → طــرد عــضو بالرد ,
∼∼∼∼∼∼∼∼∼∼∼
• 【تابــعنا】 • :- @css_1",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
   

$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info = json_decode($get, true);
$you = $info['result']['status'];
if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if ($text == "تفعيل" ) {
 $get = json_decode(file_get_contents("data.json"), true);
  $id   = $message->from->id; 
  if (!in_array($id, $get['groups'])) {
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔎┇تــم تفعيــل البــوت في المجموعه
🎓┇اســم المجموعه【 $gp_name 】
📯┇ايــدي المجمــوعه【  $chat_id  】
🎌┇ايديــك【 $from_id 】"  
    ]);
  }else{
      bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🎓┇ايديــك【 $from_id 】
🎐┇المجمــوعه مغعلــه مسبقا🎋"  
    ]);
  }
}
$re_user    = $update->message->reply_to_message->from->username;
  if($re  &&  $text == "/del" ){
    bot('deleteMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$re_msgid
    ]);
  }
  if($re and $re_id != $bot and $re_id != $sudo and $text == "حظر" or $text=="طرد"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
$id   = $message->from->id,
      'text'=>"🎐┇العضــو 【 @$re_id 】
📯┇تــم حضــره من المجمــوعه",
  'reply_to_message_id'=>$mid
      ]);
    bot('kickChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$re_id
      ]);
  }
  if($re and $re_id != $bot and $re_id != $sudo and $text == "الغاء حظر"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
$id   = $message->from->id,
      'text'=>"🎐┇العضــو 【 @$re_id 】
📯┇تــم الغاء حضــره من المجمــوعه",
  'reply_to_message_id'=>$mid
      ]);
    bot('unbanChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$re_id
      ]);
    }
  if($text == "رفع مدير"){
      bot('sendMessage',[
        'chat_id'=>$chat_id,
$id   = $message->from->id,
        'text'=>"🎐┇العضــو 【 @$re_id 】
📯┇تــم رفعــه مديــر للمجمــوعه
📫┇بواســطة≫ 【 $name 】",
  'reply_to_message_id'=>$mid
      ]);
      bot('promoteChatMember',[
          'chat_id'=>$chat_id,
          'user_id'=>$re_id
        ]);
  }
  $ename = str_replace("/setname ", "$ename", $text);
  $aname = str_replace("ضع اسم ", "$aname", $text);
   if($text == "ضع اسم $aname"){
     bot('setChatTitle',[
      'chat_id'=>$chat_id,
      'title'=>$aname 
      ]);
   }
   if($re and $text == "تثبيت"){
    bot('pinChatMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$re_msgid
      ]);
   }
if($text == "قفل الصور"){
  $str = str_replace('/lock ', '', $text);
    lock($chat_id,'photo');
    $id   = $message->from->id; 
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم قفــل الصــور
🗑┇خاصية ~⪼【القفــل】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
 
   if($text == "فتح الصور"){
    open($chat_id,'photo');
    $id   = $message->from->id; 
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم فتح الصــور
🗑┇خاصية ~⪼【الفتــح】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
 
    if($text == "قفل الملصقات"){
     lock($chat_id,'sticker');
    $id   = $message->from->id; 
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم قفــل الملصــقات
🗑┇خاصية ~⪼【القفــل】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
       if($text == "فتح الملصقات"){
    open($chat_id,'sticker');
$id   = $message->from->id; 
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم فتح الملصــقات
🗑┇خاصية ~⪼【الفتــح】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
       if($text == "قفل الجهات"){
     lock($user_id,'contact');
$id   = $message->from->id;
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم قفــل الجهات
🗑┇خاصية ~⪼【القفــل】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
 if($text == "فتح الجهات"){
    open($chat_id,'contact');
$id   = $message->from->id;
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم فتح الجهــات
🗑┇خاصية ~⪼【الفتــح】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
   if($text == "قفل الملفات"){
    lock($chat_id,'doc');
$id   = $message->from->id;
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم قفــل الجهــات
🗑┇خاصية ~⪼【القفــل】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
  if($text == "فتح الملفات"){
    open($chat_id,'doc');
$id   = $message->from->id;
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم فتح الجهــات
🗑┇خاصية ~⪼【الفتــح】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
if($text == "قفل التوجيه"){
    lock($chat_id,'fwd');
$id   = $message->from->id;
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم قفــل التوجيــه
🗑┇خاصية ~⪼【القفــل】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
   if($text == "فتح التوجيه"){
    open($chat_id,'fwd');
$id   = $message->from->id;
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم فتح التوجيــه
🗑┇خاصية ~⪼【الفتــح】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
   if($text == "قفل البصمات"){
    lock($chat_id,'voice');
$id   = $message->from->id;
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم قفــل البصــمات
🗑┇خاصية ~⪼【القفــل】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
     if($text == "فتح البصمات"){
    open($chat_id,'voice');
$id   = $message->from->id;
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم فتح البصــمات
🗑┇خاصية ~⪼【الفتــح】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
     if($text == "قفل الروابط"){
    lock($chat_id,'links');
$id   = $message->from->id;
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم قفــل الروابــط
🗑┇خاصية ~⪼【القفــل】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
   if($text == "فتح الروابط"){
    open($chat_id,'links');
$id   = $message->from->id;
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم فتح الروابــط
🗑┇خاصية ~⪼【الفتــح】 ",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
   if($text == "قفل الصوت"){
    lock($chat_id,'audio');
$id   = $message->from->id;
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم قفــل الصــوت
🗑┇خاصية ~⪼【القفــل】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
   if($text == "فتح الصوت"){
    open($chat_id,'audio');
$id   = $message->from->id;
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم فتح الصــوت
🗑┇خاصية ~⪼【الفتــح】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
   if($text == "قفل الفيديو"){
    lock($chat_id,'video');
$id   = $message->from->id;
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم قفــل الفيــديو
🗑┇خاصية ~⪼【القفــل】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
   if($text == "فتح الفيديو"){
    open($chat_id,'video');
$id   = $message->from->id;
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم فتح الفيــديو
🗑┇خاصية ~⪼【الفتــح】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
   if($text == "قفل المعرف"){
    lock($chat_id,'user');
$id   = $message->from->id;
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم قفــل المعــرفات
🗑┇خاصية ~⪼【القفــل】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
   if($text == "فتح المعرف"){
    open($chat_id,'user');
$id   = $message->from->id;
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم فتح المعــرفات
🗑┇خاصية ~⪼【الفتــح】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
    if($text == "قفل الماركدون"){
    lock($chat_id,'mark');
$id   = $message->from->id;
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم قفــل الماركــدون
🗑┇خاصية ~⪼【القفــل】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
   if($text == "فتح الماركدون"){
    open($chat_id,'mark');
$id   = $message->from->id;
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم فتح الماركــدون
🗑┇خاصية ~⪼【الفتــح】",
  'reply_to_message_id'=>$mid
      ]);
   }
  if($text == "قفل البوتات"){
    lock($chat_id,'bots');
$id   = $message->from->id;
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم قفــل البــوتات
🗑┇خاصية ~⪼【القفــل】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
   if($text == "فتح البوتات"){
    open($chat_id,'bots');
$id   = $message->from->id;
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم فتح البــوتات
🗑┇خاصية ~⪼【الفتــح】",
  'reply_to_message_id'=>$mid
      ]);
   }
   if ($text == "قفل المتحركه") {
     lock($chat_id,'gif');
$id   = $message->from->id;
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم قفــل المتحــركه
🗑┇خاصية ~⪼【القفــل】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
   if ($text == "فتح المتحركه") {
     open($chat_id,'gif');
$id   = $message->from->id;
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♻┇بواســطه ≫ ( $name )
ه──────────
☑┇تم فتح المتحــركه
🗑┇خاصية ~⪼【الفتــح】",
  'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
      ]);
   }
}
if($you != "creator" && $you != "administrator" && $from_id != $sudo){
   if($photo && is_lock("photo")){
        bot('deleteMessage',[
            'chat_id'=>$chat_id,
            'message_id'=>$message->message_id
        ]);
    }

    if($voice and is_lock("voice")){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    } 
    if($audio && is_lock("audio")){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($video && is_lock("video")){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if(is_lock("links") and preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me|(.*)telesco.me|telesco.me(.*)/i',$text) ){
       bot('deleteMessage',[
         'chat_id'=>$chat_id,
         'message_id'=>$message->message_id
      ]);
    } 
    if(is_lock("user") and  preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
       bot('deleteMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$message->message_id
       ]);
    }
    if($doc and is_lock("doc")){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($sticker and is_lock("sticker")){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($update->message->forward_from && is_lock("fwd")){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($message->entities and is_lock("mark")){
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
    if($new and is_lock("bots")){
      $new_user = $new->username;
      if (preg_match('/^(.*)([Bb][Oo][Tt]/', $new_user)) {
        bot('kickChatMember',[
          'chat_id'=>$chat_id,
          'user_id'=>$new->id
          ]);
      }
    }
    if ($message->document and $message->document->mime_type == "video/mp4" and is_lock('gif')) {
      bot('deleteMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message->message_id
      ]);
    }
  }
    
    $id   = $message->from->id; 
$js = json_decode(file_get_contents("http://rueslinks.000webhostapp.com/Date.php?from=date"));
$date = $js->Date;
$time = $js->Time;
$user = $message->from->username; 
$name = $message->from->group_name; 
if($text == "/groups"){
  $c = count($groups);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"$c"
    ]);
 }
if($text=="موقعي" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎋┇عزيــزي ↭ انت مـنشـئ المـجمـوعـه

🎓┇معرفك ↭ $user

💡┇ ايديــك ↭ $from_id 

📬┇رسائــلك ⇦ $memb
ء➖➖➖➖➖➖➖➖➖➖➖ء
",
]);
}
if($text=="موقعي" and  $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
  📫【 انــت ادمـن بالـمـجـمـوعـه 】

 📫【 مــعــرفــك : @$user 】

 📫【 ايــديــك : $from_id 】

 📫【 رسائــلك :- $memb 】
ء➖➖➖➖➖➖➖➖➖➖➖ء
 
",
]);
}
if($text=="موقعي" and  $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
  📬【 انــت عــضـو باالـمـجـمـوعـه 】

 📬【 مــعــرفــك : @$user 】

 📬【 ايــديــك : $from_id 】

 📬【 رسائــلك :-  $memb 】

ء➖➖➖➖➖➖➖➖➖➖➖ء
 
",
]);
}
 
$idbotid = bot('getme',['534591940'])->result->id;  // id for your bot
$groups  = explode("\n",file_get_contents("groups.txt")); 

if($message->new_chat_member and $message->new_chat_member->id == $idbotid) {

if(!in_array($chat_id,$groups)) {

file_put_contents("groups.txt", "$chat_id\n", FILE_APPEND);

}
}

if($text == "/gp"){
$c = count($groups);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"Groups ~> $c "
]); 
}
$mem  = explode("\n",file_get_contents("mem.txt")); 

if($text == "/start") {

if(!in_array($chat_id,$mem)) {

file_put_contents("mem.txt", "$chat_id\n", FILE_APPEND);

}
}
$sudo = 210812472; 
$rdod = json_decode(file_get_contents("rep.json"),true);
if(preg_match('/^(اضف)(.*)/',$text)){
 $text = str_replace('اضف ','',$text);
 $text = explode("\n",$text);
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📣【تــم اضافــة الرد بنجــاح】"
 ]);
$rdod[$text[0]] = $text[1]; file_put_contents('rep.json',json_encode($rdod));
}
foreach($rdod as $key => $val){
 if($text == $key){
   bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"$rdod[$key]",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid

 ]);
 }
}
if($text == "/link" or $text == "الرابط"){
    $export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
    $l = $export->result;
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"🎐¦رابـط الـمـجـمـوعه 🎐
🌿¦$t :

$l",
      'disable_web_page_preview'=>true,
      'reply_to_message_id'=>$message->message_id,
      ]);
  
   }
$me = $message->reply_to_message; 
$mem = $me->message_id;
$HMOD = explode('كله',$text);
if($HMOD){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$HMOD[1],
'reply_to_message_id'=>$mem,
]);
}
$HMOD = explode('كول',$text);
if($HMOD){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$HMOD[1],
]);
}
$sudo = 210812472;
if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if ($text == "تفعيل" or $text == '/add' and  $you == "administrator") {
$result2 = $json2->result;
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>" ",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
💡┇عزيــزي المطــور 
📯┇قــام احد المدراء او الادمنــيه بتفعيــل البوت في مجموعــته
👥¦ $t
🔔┇اســم المجمــوعه【  $gp_name  】
🎐┇ ايــدي المجمــوعه » $chat_id
🎓┇ عــدد الاعضــاء » 【  $result2  】 عضو 🗣
📯┇ يوزر الــذي قام بتفــعيل البــوت »
@$user
",
]);
}
}
if($text == "الكروبات"){
  $c = count($groups);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"$c"
    ]);
 }
 $id = $message->from->id;
$idev = 210812472;
$mybot = "@se12y_bot";

if($text == "/leave" or $text == "غادر" or $text == "/leave@user" && $id == $idev){
bot('leaveChat',[
'chat_id'=>$chat_id,
]);
}
if($text == "المشتركين" and $from_id == $sudo){
$m = count($u)-1;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "💯¦ عدد مشــتركين البــوت 
الخــاص بك هو :- { $m }" ,
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == 'المطور' or $text == "مطور"){
bot('sendContact',[
'chat_id'=>$chat_id,
'phone_number'=>"+9647817445705",
'first_name'=>"┛محمد┗",
'last_name'=>"(ابن ميسان)",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($editMessage){
	 bot('sendMessage',[
	 'chat_id'=>$chatedit,
	 'text'=>'شفــتك سميــر😏😂
سحكــت وعدلت',
	 'message_id'=>$message->edited_message->message_id,
	 'reply_to_message_id'=>$update->edited_message->message_id,
	 ]);
 }
$New_member = $message->new_chat_member;
$usser = $New_member->username;
$id = $New_member->id; 
$id_bot = 592557902;
if(preg_match('/^(.*)([Bb][Oo][Tt])/',$usser) and $New_member and $id != $id_bot and  $you == "member"){
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🎓¦ عزيــزي : @$user
🎁¦ ايديــك : $from_id
🎐┇ مـمـنوع آضـآفة آلبوتآت هنا
📛¦ تم طـرد آلبوت التــزم بالقوانين
✘",
]);
}
$sudo = 210812472;
if($text == "اذاعه" and $for == $sudo){
  file_put_contents("mode.txt", "bc");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"عزيــزي⇓
ارســل الكليشه للأذاعــه🎋"
    ]);
}
$mode = file_get_contents("mode.txt");
if($text != "اذاعه" and $mode=="bc" and $for == $sudo){
  for ($i=0; $i < count($groups); $i++) { 
    bot('sendMessage',[
      'chat_id'=>$groups[$i],
      'text'=>" $text"
    ]);
  }
  unlink("mode.txt");
}
$id   = $message->from->id; 
$user = $message->from->username; 
$name = $message->from->first_name;
if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($rep && $text == "تقيد" or $text == 'تقييد' and  $you == "administrator"){
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => "
📯┇العضــو 【@$re_user 】
📬┇ايديــه 【 $re_id 】
☑┇تــم تقييــده ",
'reply_to_message_id'=>$mid
]);
bot('restrictChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$re_id
]);
}
}
if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($rep && $text == "الغاء التقييد" or $text == 'رفع التقييد' and  $you == "administrator"){
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => "🎐┇عزيــزي
📯┇العضــو ⇦ 【 @$re_user 】
📬┇ايديــه ⇦ 【 $re_id 】
☑┇تــم الغاء  تقييــده ",
'reply_to_message_id'=>$mid
]);
bot('UnrestrictChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$re_id
]);
}
}
if($text == "عدد الرسائل" && $message->message_id > 1000 && $message->chat->type == "supergroup"){
bot( sendMessage ,[
 chat_id =>$chat_id,
 text =>"عدد رســائل الكــروب 👥🔹  : " . "*$message->message_id*" . "\nمبــروك  مجموعــتك متــفاعله💯 ",
 reply_to_message_id =>$message->message_id,
 parse_mode => Markdown 
]);   
}
if($re and $text == "ايديه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"️【 $re_id 】",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($re and $text == "اسمه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"$re_name",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($re and $text == "معرفه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"️【 $re_user 】",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اسم المجموعه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"️【 $gp_name  】",
'reply_to_message_id'=>$message->message_id, 
]);
}
$aname = str_replace("ضع اسم للمجموعه", "$aname", $text);
 if($text == "ضع اسم للمجموعه  $aname"){
     bot('setChatTitle',[
      'chat_id'=>$chat_id,
      'title'=>$aname 
      ]);
     }
 if($text == "ايدي"){
$username = $message->from->username;
$photo = "http://telegram.me/$username";
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>$photo,
'caption'=>"
💡┇اســمك【 $name 】
- 📫┇معرفــك【 @$username 】
- 📮┇ايديــك【  $from_id  】
- 📯┇ايــدي المجمــوعه 【  $chat_id  】
🎓┇ رسائــلك ⇨ $memb",
    'parse_mode'=>"markdown",
    
]);
}
$sudo = 210812472;
if($you == "creator" or $you == "administrator" or $you == "member" or $from_id == $sudo){
if ($text == "المطور" or $text == 'مطور' and  $you == "administrator") {
$result2 = $json2->result;
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎐┇نعــم حبي
💡┇هســه سويت استدعاء للمطور شوي ويجــي",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
💡┇عزيــزي المطــور 
📯┇قــام احد الاشخاص بأستدعائــك
👥¦ $t
🔔┇اســم المجمــوعه【  $gp_name  】
🎐┇ ايــدي المجمــوعه » $chat_id 🗣
📯┇ يوزر الــذي قام بأستدعائــك  » @$user
",
]);
}
}
if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if ($text == "الاوامر" or $text == '/help' and  $you == "administrator") {
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"️💡┇عزيــزي هاذه قائــمة الاوامر
📫┇اضغــط (م1) لعرض اوامــر الحمايه
📮┇اضغــط (م2) لعــرض اوامر الحضر والتقييد
🎐┇اضغــط (م3) لعــرض اوامر التحشيــش
🎓┇اضغــط (م المطور) لعرض اوامــر المطور",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if ($text == "م1" or $text == '1م' and  $you == "administrator") {
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"️📯┇اهــلا عزيزي هاذه اوامر الحمــايه
🔐┇استخــدم 【قفل】للقفــل
🔓┇استخــدم 【فتح】للفتــح
ه≪●●●●●●●●●●●●●●●●≫
الروابــط
ء| user » المعرف

ء| mark » الماركدون
ء| bots » البوتات
ـ ≪●●●●●●●●●●●≫
ء| photo » الصور
ء| sticker » الملصقات

ء| video » الفيديو
ء| fwd » التوجيه
ء| audio » الاغاني
ء| contact » جهات الاتصال

ء| doc » الملفات
ء| gif » المتحركه ",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if ($text == "م2" or $text == '2م' and  $you == "administrator") {
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"️📌┇عزيزي اليــك اوامــر الحضر والتقييد بالمجموعــه
≪●●●●●●●●●●●●●●●●≫ 
📛⇦【اكتب (حضر او طرد)بالــرد لطرد عضو】
📛⇨【اكتب (الغاء الحضر) بالرد لالغاء حض
】العضو
≪●●●●●●●●●●●●●●●●≫ 
📛⇨【اكتب(تقييد) بالــرد لتقييد عضو】
📛⇨【اكتب (رفع التقييد) بالرد لرفع التقييد عن عضو】
≪●●●●●●●●●●●●●●●●≫ ",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if ($text == "م3" or $text == '3م' and  $you == "administrator") {
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"️☑┇اهــلا عزيزي اليك اوامر التحشيــش
🔱┇اكتــب (كله+الكلمه)ليرد البوت على الشخص
🎋┇اكتــب (كول+الكلمه) ليتكلم البوت بالكلمه الذي ارسلتــها",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "صورتي"){
$username = $message->from->username;
$photo = "http://telegram.me/$username";
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>$photo,
'text'=>"عزيزي هاذه صورتك",
]);
} 
