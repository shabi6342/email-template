<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.mailtrap.io";
    $mail->Port = 2525; // or 587
    $mail->IsHTML(true);
    $mail->Username = "a4d93d43928c51";
    $mail->Password = "1a06caedefb06c";
    $mail->SetFrom("shoaibahmad6342@gmail.com");
    $mail->Subject = "Test";
    $mail->Body = '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            * {
                margin: 0%;
                padding: 0%;
            }
            
            @media screen and (max-width: 450px) {
                table {
                    width: auto;
                }
            }
            
            @media screen and (max-width: 800px) {
                table {
                    width: auto;
                }
            }
        </style>
    </head>
    
    <body>
        <table border="0" style="padding-bottom:20px ;" bgcolor="#eeeee4" align=" center " cellpadding="0 " cellspacing="0 " width="100% ">
            <tr>
                <td style="text-align:center ; margin:auto; ">
                    <!-- header section -->
                    <table border="0 " style="margin:auto; margin-top: 25px;margin-bottom: 25px; " cellpadding="0 " cellspacing="0 " width="40% ">
                        <tbody>
                            <tr>
                                <td>
                                    <p style=" font-size:25px;padding: 0px; margin: 0%; font-weight: bold; ">Loremipsum itamet.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- card body section -->
                    <table border="0 " style="margin:auto; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding:25px; " cellpadding="0 " cellspacing="0 " width="40% " bgcolor="white ">
                        <tbody>
                            <tr>
    
                                <td>
                                    <table cellpadding="0 " cellspacing="0 ">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p style="margin:0% ; padding:0%; font-weight: bolder; font-size: 25px ">
                                                        Hello!
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table cellpadding="0 " cellspacing="0 ">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p style="margin:0% ;color: grey; padding:0%; text-align: left; font-weight: normal; font-size: 20px; ">
                                                        ipsum dolor sit g elit. Odit, nihil exercitationem. Corrupti consequuntur totam dolores error impedit consequatur assumenda tenetur?
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <!-- button section started -->
                            <tr>
                                <td>
                                    <table cellpadding="0 " border="0" align="center" cellspacing="0 ">
                                        <tbody>
                                            <tr>
                                                <td style="width:10%; margin:auto;">
                                                    <button style=" background-color: #2d3748; color: white; border-radius: 7px;padding: 8px;font-weight: bold;font-size: large; margin: 25px; border:0%;  ">Go to our site</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table cellpadding="0 " cellspacing="0 ">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p style="margin:0% ;color: grey; padding:0%; text-align: left; font-weight: normal; font-size: 20px; ">
                                                        consequatur assumenda te
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table cellpadding="0 " cellspacing="0 ">
                                        <tbody>
                                            <tr>
                                                <td style="padding-top:20px; padding-bottom:20px;">
                                                    <p style="margin:0% ;color: grey; padding:0%; text-align: left; font-weight: normal; font-size: 20px; ">
                                                        menda tenetur?
                                                    </p>
                                                    <p style="margin:0% ;color: grey; padding:0%; text-align: left; font-weight: normal; font-size: 20px; ">
                                                        menda tenetur?
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table cellpadding="0 " cellspacing="0 " width="100% ">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <hr>
                                                    <br>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table cellpadding="0 " cellspacing=" " width="100% " class="bodyfooter ">
                                        <tbody>
    
                                            <tr>
                                                <td>
    
                                                    <p style="font-size:large; text-align: left; font-weight:normal; color: grey; padding: 0%; margin: 0%; ">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae deserunt facere blanditiis laborum sapiente unde! a
                                                        <a href="# ">https://pinetools.com</a>
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table cellpadding="0 " cellspacing="0 " width="30% " style=" margin: auto;margin-top: 20px;font-size: 1.3em; ">
                        <tbody>
                            <tr>
    
                                <td>
    
                                    <table cellpadding="0 " cellspacing="0 ">
                                        <tbody>
                                            <tr>
    
                                                <td>
                                                    <table cellpadding="0 " cellspacing="0 ">
                                                        <tbody>
    
                                                            <tr>
                                                                <td>
    
                                                                    <p style="text-align:center; color: rgb(156, 118, 118); ">2022 12 32 loremsm sdkimage.pngimage.png</p>
                                                                </td>
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
    
    
    
                    <!-- copy right section -->
                </td>
            </tr>
        </table>
    </body>
    
    </html>';
    $mail->AddAddress("email@gmail.com");

    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message has been sent";
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
