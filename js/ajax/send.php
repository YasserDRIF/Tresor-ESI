<?php
/**
 * Created by PhpStorm.
 * User: Noureddine
 * Date: 05/05/2017
 * Time: 20:15
 */
require_once 'Mail/phpMailer.php';

function check($string){
    $string = strip_tags($string);
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    $string = htmlspecialchars($string, ENT_QUOTES);
    return $string;
}
function mailvalidation($mail){
    $exp = '/^(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){255,})(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){65,}@)(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22))(?:\.(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\]))$/';
    if(preg_match($exp , $mail)){
        return true;
    }else{
        return false;
    }
}
$repense = 'Error';
$div = 'sendmessage';
$sender_name    = $_POST['name'];
$sender_email   = $_POST['email'];
$radio_reason   = $_POST['radio-Reason'];
$sender_message = $_POST['message'];

//Validation.....


if(isset($sender_name) && isset($sender_email) && isset($radio_reason) && isset($sender_message))
{
  if( !empty($sender_name) )
  {
    if( !empty($sender_email) )
    {
      if( !empty($radio_reason) )
      {
        if( !empty($sender_message) )
        {
          if(mailvalidation($sender_email)){
            $sender_name    = check($sender_name);
            $sender_email   = check($sender_email);
            $radio_reason   = check($radio_reason);
            $sender_message = check($sender_message);
            try{
              $res_mail = mailTo($sender_name , $sender_email , $radio_reason , $sender_message);
              if($res_mail){
                $repense = 'OK';
                $div = '';
              }else {
                //$repense = 'OK';
                $div = 'email';
              }
            }catch (Exception $ex) {

            }
          }else{
            $repense = 'Form email non valide';
            $div = 'email';
          }
        }else{
          $repense = 'message require';
          $div = 'message';
        }
      }else{
        $repense = 'reason require';
        $div = 'reason';
      }
    }else{
      $repense = 'email require';
      $div = 'email';
    }
  }else{
    $repense = 'name require';
    $div = 'name';
  }
}else{
  $repense = 'Non isset';
  $div = 'name';
}

echo json_encode(['reponse' => $repense, 'div'=> $div]);

?>
