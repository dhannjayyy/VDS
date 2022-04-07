<?php
                include_once "db.php";
                use PHPMailer\PHPMailer\Exception;
                use PHPMailer\PHPMailer\PHPMailer;
                require 'vendor/autoload.php';

                //executing the sql query for inserting data 

                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $date = $_POST['date'];
                    $class = $_POST['classes'];

                    $sql = "INSERT INTO `democlass`(`Name`, `email`, `phone`, `Date`, `class`) VALUES ('$name','$email','$phone','$date','$class')";

                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                    $subject = 'VDS - Demo Class Booked ';
                    $message_body = "<html><body>";
                    $message_body .= "Greetings from The Voyage Dance Studio. <br>
                                      Thank you <b>" . $name . "</b> for registering with us.<br>.<br>";

                    $message_body .= "</body></html>";

                    $mail = new PHPMailer(true); // Passing `true` enables exceptions
                    try {
                      //Server settings
                      //$mail->SMTPDebug = 2; // Enable verbose debug output
                     // $mail->isSMTP(); // Set mailer to use SMTP
                      $mail->Host       = 'smtp.gmail.com'; // Specify main and backup SMTP servers
                      $mail->SMTPAuth   = true; // Enable SMTP authentication
                      $mail->Username   = 'placements@pgdav.du.ac.in'; // SMTP username
                      $mail->Password   = 'thepc@03'; // SMTP password
                      //$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
                     // $mail->Port       = 587;

                      $mail->setFrom('placements@pgdav.du.ac.in', 'Placement Cell');
                      $mail->addAddress($email);

                      $mail->isHTML(true);
                      $mail->Subject = $subject;
                      $mail->Body    = $message_body;

                      $mail->send();
                    }
                    catch (Exception $e) {
                      echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                      die();
                    }
                        exit(true);
                    } else {
                        echo '<div class="unsuccess-message"> HAVING SOME ISSUE AT OUR END, PLEASE TRY AGAIN LATER!! </div>';
                    }
