<?php
/**
 * Created by PhpStorm.
 * User: Noureddine Metourni
 * Date: 20/02/2017
 * Time: 01:15
 */
require_once 'PHPMailerAutoload.php';
function mailTo($sender_name , $sender_email , $sender_subject,$sender_message )
{

    $mail = new  PHPMailer;
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'phpmailto@gmail.com';                 // SMTP username
    $mail->Password = 'azerty12345';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->setFrom('phpmailto@gmail.com', $sender_name);
    //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress('en_metourni@esi.dz');               // Name is optional
    $mail->addCC('gy_drif@esi.dz');
    //$mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Site : ('.$sender_subject.') BY '.$sender_name.'';
    /*$mail->Body    = '
    <html>
     <head>
      <title>'.$sender_subject.'</title>
     </head>
     <body>
     <div class="meto" style="width: 750px;display: inline-block">
    <div id="meto1" class="ii gt adP adO">
        <div bgcolor="#ffffff">
            <table style="table-layout:fixed" width="100%" border="0" cellspacing="0" cellpadding="0"
                   bgcolor="#000000">
                <tbody>
                <tr>
                    <td width="100%" align="center">

                        <table style="width:100%;min-width:100%;padding:10px 0 10px 0" width="100%" border="0"
                               cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                            <tr>
                                <td style="color:#cccccc;font-family:\'Roboto\',Arial,sans-serif;font-weight:300;font-size:12px;line-height:16px;word-wrap:break-word"
                                    height="30" valign="middle" align="center">
                                    <br>National High School of Computer Science in Algiers (ESI ex: INI)
                                    <br>CSE club scientifique de l\'ESI,
                                    2017 <br>
                                    <!--<a href="#"-->
                                    <!--style="color:#00bcd4" target="_blank"-->
                                    <!--data-saferedirecturl="#">View-->
                                    <!--this email in your browser</a>-->
                                    <br><br>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </td>
                </tr>
                </tbody>
            </table>
            <table style="table-layout:fixed" width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                <tr align="center" style="background: url(\'https://img15.hostingpics.net/pics/184507cover2.jpg\');background-size:cover;">

                    <td style="padding:0 25px 0 25px;
                                    background: linear-gradient(141deg,
                                                                rgba(15, 184, 173, 0.42) 0%,
                                                                rgba(31, 200, 219, 0.42) 50% ,
                                                                rgba(44, 181, 232, 0.42) 75%);"
                        width="100%"
                        valign="top" align="center"><!-- #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);-->

                        <table style="max-width:730px" width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td width="100%" valign="middle" align="center">

                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>
                                        <tr>
                                            <td style="max-width:730px" height="100" valign="bottom" align="center">
                                                <a
                                                        href="#"
                                                        target="_blank"
                                                        data-saferedirecturl="">
                                                    <img
                                                            src="https://img15.hostingpics.net/pics/679325footer.png"
                                                            alt=""
                                                            style="
                                                                    display:block;
                                                                    border:0px;
                                                                    color:#002835;
                                                                    font-family:\'Roboto\',Arial,sans-serif;
                                                                    font-weight:300;
                                                                    font-size:18px;
                                                                    margin-top: 20px;
                                                                    "
                                                            width="100px" class="CToWUd">
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>
                            <tr>
                                <td align="center">

                                    <table>
                                        <tbody>
                                        <tr>
                                            <td style="color:#ffffff;font-family:\'Roboto\',Arial,sans-serif;font-weight:100;font-size:16px;line-height:38px;max-width:730px;word-wrap:break-word;padding:0 10px 25px 10px"
                                                width="100%" align="center">
                                                <a
                                                        href=""
                                                        style="text-decoration:none;color:#ffffff" target="_blank"
                                                        data-saferedirecturl="">
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>
                            <tr>
                                <td align="center">

                                    <table>
                                        <tbody>
                                        <tr>

                                            <td style="color:gold;font-family:\'Roboto\',Arial,sans-serif;font-weight:700;font-size:36px;line-height:38px;max-width:730px;word-wrap:break-word;padding:0 10px"
                                                width="100%" align="center">
                                                <a
                                                        href=""
                                                        style="text-decoration:none;color:gold" target="_blank"
                                                        data-saferedirecturl="#">
                                                    <span style="color: #2081b4 ;background: rgba(12,14,23,.5);">Innovate</span>
                                                    <span style="color: white">,</span>
                                                    <span style="color: #ecdd4a ;background: rgba(12,14,23,.5);">Collaborate</span>
                                                    <span style="color: white">and</span>
                                                    <span style="color: black ;background: rgba(12,14,23,.5);">Succeed</span>
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>
                            <tr>
                                <td align="center">

                                    <table>
                                        <tbody>
                                        <tr>

                                            <td style="color:#ffffff;font-family:\'Roboto\',Arial,sans-serif;font-weight:500;font-size:21px;line-height:24px;max-width:730px;word-wrap:break-word;padding:10px 10px 50px 10px"
                                                width="100%" align="center"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>


                            </tr>
                            </tbody>
                        </table>
                    </td>


                </tr>

                <tr>
                    <td style="padding:0px" height="10" align="center">&nbsp;</td>
                </tr>


                <tr>
                    <td>
                        <table class="body" style="table-layout:fixed" width="100%" border="0" cellspacing="0"
                               cellpadding="0"
                               bgcolor="#ffffff">
                            <tbody>
                            <tr>
                                <td width="100%" height="100%" valign="top" align="center">


                                    <table style="max-width:530px" width="100%" border="0" cellspacing="0"
                                           cellpadding="0" align="center">
                                        <tbody>
                                        <tr>
                                            <td style="font-size:0;padding:0" width="20"></td>
                                            <td style="padding:0px 0px 30px;border-style:none" align="left">

                                                <table style="max-width:530px" width="100%" border="0"
                                                       cellspacing="0"
                                                       cellpadding="0" align="center">
                                                    <tbody>
                                                    <tr>
                                                        <td style="padding:35px 0 15px 0;color:#002835;font-family:\'Roboto\',Arial,sans-serif;font-weight:700;font-size:27px;line-height:36px;max-width:730px;word-wrap:break-word"
                                                            width="100%" valign="top" align="left">'.$sender_name.' <'.$sender_email.' >'.'
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                                <table style="max-width:530px" width="100%" border="0"
                                                       cellspacing="0"
                                                       cellpadding="0" align="center">
                                                    <tbody>
                                                    <tr>
                                                        <td style="padding:0 0 20px 0;color:#002835;font-family:\'Roboto\',Arial,sans-serif;font-weight:300;font-size:16px;line-height:21px;max-width:730px;word-wrap:break-word"
                                                            width="100%" valign="top" align="left">
                                                            '.$sender_message.'
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:0 0 20px 0;color:#002835;font-family:\'Roboto\',Arial,sans-serif;font-weight:300;font-size:16px;line-height:21px;max-width:730px;word-wrap:break-word"
                                                            width="100%" valign="top" align="center">

                                                            <table bgcolor="#2196f3"
                                                                   style="background-color:#2196f3;border-radius:5px"
                                                                   border="0" cellspacing="0" cellpadding="0">
                                                                <tbody>
                                                                <tr>
                                                                    <td style="color:#ffffff;font-family:\'Roboto\',Arial,sans-serif;font-size:14px;font-weight:300;line-height:150%;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px;text-decoration:none;word-wrap:break-word"
                                                                        valign="middle" align="center">
                                                                       
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:0 0 20px 0;color:#002835;font-family:\'Roboto\',Arial,sans-serif;font-weight:300;font-size:16px;line-height:21px;max-width:730px;word-wrap:break-word"
                                                            width="100%" valign="top" align="left">
                                                          
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:0 0 20px 0;color:#002835;font-family:\'Roboto\',Arial,sans-serif;font-weight:300;font-size:16px;line-height:21px;max-width:730px;word-wrap:break-word"
                                                            width="100%" valign="top" align="left">
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:0 0 20px 0;color:#002835;font-family:\'Roboto\',Arial,sans-serif;font-weight:300;font-size:16px;line-height:21px;max-width:730px;word-wrap:break-word"
                                                            width="100%" valign="top" align="center">

                                                            <table bgcolor="#2196f3"
                                                                   style="background-color:#2196f3;border-radius:5px"
                                                                   border="0" cellspacing="0" cellpadding="0">
                                                                <tbody>
                                                                <tr>
                                                                  <td style="color:#ffffff;font-family:\'Roboto\',Arial,sans-serif;font-size:14px;font-weight:300;line-height:150%;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px;text-decoration:none;word-wrap:break-word"
                                                                      valign="middle" align="center">
                                                              
                                                                  </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:0 0 20px 0;color:#002835;font-family:\'Roboto\',Arial,sans-serif;font-weight:300;font-size:16px;line-height:21px;max-width:730px;word-wrap:break-word"
                                                            width="100%" valign="top" align="left">
                                                            
                                                        </td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </td>
                                            <td style="font-size:0;padding:0" width="20"></td>


                                        </tr>
                                        </tbody>
                                    </table>


                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <table class="footer-head" style="table-layout:fixed" width="100%" border="0"
                               cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr align="center">
                                <td width="100%" valign="bottom" align="center">

                                    <table style="max-width:365px" width="100%" border="0" cellspacing="0"
                                           cellpadding="0">
                                        <tbody>
                                        <tr>
                                            <td width="100%" valign="top" align="center">
                                                <img src="https://img15.hostingpics.net/pics/830594footerhead.png"
                                                     style="display:block"
                                                     class="m_2200944072283864894img-max CToWUd"
                                                     width="365">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>
                            </tbody>
                        </table>


                        <table class="footer-body" style="table-layout:fixed" width="100%" border="0"
                               cellspacing="0" cellpadding="0"
                               bgcolor="#f5f8f9">
                            <tbody>
                            <tr>

                                <td style="background:#002835 url(\'https://img15.hostingpics.net/pics/966293footerbody.jpg\');background-size:cover;padding:0 15px 0 15px"
                                    width="100%"
                                    background="footer-body.jpg"
                                    valign="top" bgcolor="#002835" align="center">


                                    <table style="max-width:730px" width="100%" border="0" cellspacing="0"
                                           cellpadding="0" align="center">
                                        <tbody>
                                        <tr>
                                            <td style="font-size:0;padding:0" width="20"></td>
                                            <td style="font-size:0;padding:50px 0 20px 0" valign="top"
                                                align="center">

                                                <table style="max-width:530px" width="100%" border="0"
                                                       cellspacing="0"
                                                       cellpadding="0" align="center">
                                                    <tbody>
                                                    <tr valign="top">

                                                        <td style="padding:20px 0;margin:0" valign="top"
                                                            align="center">

                                                            <table style="max-width:450px" width="100%" border="0"
                                                                   cellspacing="0" cellpadding="0" align="center">
                                                                <tbody>
                                                                <tr>
                                                                    <td style="color:#ffffff;font-family:\'Roboto\',Arial,sans-serif;font-size:24px;font-weight:100;line-height:150%;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px;text-decoration:none;word-wrap:break-word"
                                                                        valign="middle" align="center">
                                                                        <strong style="font-weight:700">
                                                                          CSE
                                                                        </strong><br>
                                                                        Is awssome
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>

                                                        </td>

                                                    </tr>
                                                    </tbody>
                                                </table>


                                                <table style="max-width:530px" width="100%" border="0"
                                                       cellspacing="0"
                                                       cellpadding="0" align="center">
                                                    <tbody>
                                                    <tr valign="top">
                                                        <td style="padding:30px 20px;margin:0" valign="bottom"
                                                            align="center">

                                                            <table style="background-color:#2196f3;border-radius:5px"
                                                                   border="0" cellspacing="0" cellpadding="0">
                                                                <tbody>
                                                                <tr>
                                                                    <td style="color:#ffffff;font-family:\'Roboto\',Arial,sans-serif;font-size:14px;font-weight:300;line-height:150%;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px;text-decoration:none;word-wrap:break-word"
                                                                        valign="middle" align="center">
                                                                        <a href="https://youtube/cse"
                                                                           style="color:#ffffff;text-decoration:none;word-wrap:break-word"
                                                                           target="_blank"
                                                                           data-saferedirecturl="https://www.google.com/url?hl=fr&amp;q=https://youtube/cse"><img
                                                                                src="https://img15.hostingpics.net/pics/611975footerplaybtn.png"
                                                                                style="float:left" width="20"
                                                                                class="CToWUd">&nbsp;&nbsp;How we are</a>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>

                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </td>
                                            <td style="font-size:0;padding:0" width="20"></td>
                                        </tr>
                                        </tbody>
                                    </table>


                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <table class="footer-tail" style="table-layout:fixed" width="100%" border="0"
                               cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr align="center">
                                <td width="100%" valign="top" align="center">

                                    <table style="max-width:365px" width="100%" border="0" cellspacing="0"
                                           cellpadding="0">
                                        <tbody>
                                        <tr>
                                            <td width="100%" valign="top" align="center">
                                                <img src="https://img15.hostingpics.net/pics/230303footertail.png"
                                                     style="display:block"
                                                     class="m_2200944072283864894img-max CToWUd"
                                                     width="365">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <br><br><br>


                        <table class="contact-cse" style="table-layout:fixed" width="100%" border="0" cellspacing="0"
                               cellpadding="0"
                               bgcolor="#ffffff">
                            <tbody>
                            <tr>
                                <td align="center">


                                    <table style="max-width:730px" width="100%" border="0" cellspacing="0"
                                           cellpadding="0" align="center">
                                        <tbody>
                                        <tr>
                                            <td style="font-size:0;padding:0" width="20"></td>
                                            <td align="center">

                                                <table style="max-width:730px" width="100%" border="0"
                                                       cellspacing="0"
                                                       cellpadding="0" align="center">
                                                    <tbody>
                                                    <tr>
                                                        <td style="padding:10px 0 10px 0;max-width:730px"
                                                            width="100%"
                                                            valign="top" align="center"><img
                                                                src="https://img15.hostingpics.net/pics/679325footer.png"
                                                                width="125" class="CToWUd"></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:0 0 10px 0;color:#666666;font-family:\'Roboto\',Arial,sans-serif;font-weight:300;font-size:16px;line-height:38px;word-wrap:break-word"
                                                            height="30" valign="middle" align="center">CSE,
                                                            2017
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:15px 0;color:#6f6f73;font-family:\'Roboto\',Arial,sans-serif;font-weight:500;font-size:14px;line-height:21px;max-width:730px"
                                                            width="100%" valign="middle" align="center"><a
                                                                href="https://www.facebook.com/cse"
                                                                style="text-decoration:none;color:#6f6f73"
                                                                target="_blank"
                                                                data-saferedirecturl="https://www.google.com/url?hl=fr&amp;q=https://www.facebook.com/cse">facbook</a>
                                                            &nbsp; <a
                                                                    href="https://twitter.com/cse"
                                                                    style="text-decoration:none;color:#6f6f73"
                                                                    target="_blank"
                                                                    data-saferedirecturl="https://www.google.com/url?hl=fr&amp;q=https://twitter.com/cse">twitter</a>
                                                            &nbsp; <a
                                                                    href="https://www.youtube.com/user/cse"
                                                                    style="text-decoration:none;color:#6f6f73"
                                                                    target="_blank"
                                                                    data-saferedirecturl="https://www.google.com/url?hl=fr&amp;q=https://www.youtube.com/user/cse%">youtube</a>
                                                            &nbsp; <a
                                                                    href="https://www.linkedin.com/cse"
                                                                    style="text-decoration:none;color:#6f6f73"
                                                                    target="_blank"
                                                                    data-saferedirecturl="https://www.google.com/url?hl=fr&amp;q=https://www.linkedin.com/cse">linkedin</a>
                                                            &nbsp; <a
                                                                    href="https://plus.google.com/cse"
                                                                    style="text-decoration:none;color:#6f6f73"
                                                                    target="_blank"
                                                                    data-saferedirecturl="https://www.google.com/url?hl=fr&amp;q=https://plus.google.com/cse">g+</a>
                                                            &nbsp; | &nbsp; <a
                                                                    href="mailto:cse@esi.dz"
                                                                    style="text-decoration:none;color:#6f6f73"
                                                                    target="_blank">
                                                                    Contact us
                                                              </a>
                                                              </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </td>
                                            <td style="font-size:0;padding:0" width="20"></td>
                                        </tr>
                                        </tbody>
                                    </table>


                                </td>
                            </tr>
                            </tbody>
                        </table>


                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

     </body>
    </html>
    ';*/

    $mail->Body='<html><head><title>Site : ('.$sender_subject.') BY '.$sender_name.'</title></head><body>You have received a new message from your website contact form.<br><br><br>Here are the details:<br><br>Name: '.$sender_name.'<br><br>Email: '.$sender_email.'<br><br>Reason:'.$sender_subject.'<br><br>Message:<br>'.$sender_message.'</body></html>';


    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if($mail->send()) {
        return true;
    } else {
        return false;
    }

}
