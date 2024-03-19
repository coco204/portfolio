<?php if($_POST ){ 
    mb_language("Japanese");
    //↑マルチバイトの言語設定を日本語にします
    
    mb_internal_encoding("UTF-8");
    //↑マルチバイトの文字エンコーディングをUTF-8にします
    
    if($_POST) {
      $to = 'hiroko.tanaka.126@gmail.com';
      //↑このお問い合わせフォームに入力された内容を送る先のメールアドレス。
      //通常は、お問い合わせフォームがあるホームページを管理している人のメールアドレスです。
    
      $subject = $_POST['sunbject'];
      //↑送信されるメールの題名です。
    
      //↓以下は、送信するメールの本文です。1行ずつ$messageに追記する形です。
      // \nは、改行の意味。
      $message = "name\n";
      $message .= $_POST["name"];
      $message .= "\n"; 
      $message .= "email:\n";
      $message .= $_POST["email"]; 
      $message .= "\n"; 
      $message .= "country\n";
      $message .= $_POST['country'];
      $message .= "\n"; 
      $message .= "-----\n";
      $message .= $_POST['subject'];
      $message .= "\n"; 
      $message .= "menu\n";
      $message .= $_POST['menu'];
      $message .= "\n"; 
      $message .= "PDD\n"; 
      $message .= $_POST['Ddate'];
      $message .= "\n"; 
      $message .= "message:\n";
      $message .= $_POST["message"]; 
      $message .= "\n"; 
      $message .= $_POST["happy"]; 

    //   ------------------
//    confirm page 
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
echo "From:" . "&nbsp;" . $name. '<br>';
$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
echo "E-mail:" . "&nbsp;" . $email. '<br>';
$country = htmlspecialchars($_POST['country'], ENT_QUOTES);
echo "お住まいの国:" . "&nbsp;" . $country. '<br>';
$subject = htmlspecialchars($_POST['subject'], ENT_QUOTES);
echo "件名:" . "&nbsp;" . $subject. '<br>';
$menu = htmlspecialchars($_POST['menu'], ENT_QUOTES);
echo "メニュー:" . "&nbsp;" . $menu. '<br>';
$Ddate = htmlspecialchars($_POST['Ddate'], ENT_QUOTES);
echo "希望納期:" . "&nbsp;" . $Ddate. '<br>';
$message = htmlspecialchars($_POST['message'], ENT_QUOTES);
echo "内容:" . "&nbsp;" . $message. '<br>';
$happy = htmlspecialchars($_POST['happy'], ENT_QUOTES);
echo "Have a" . $message. 'day' . "&nbsp;" . ":)";
} else { 
//  input page 
echo "失敗";}
