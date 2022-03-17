<?php
                include_once "db.php";

                //executing the sql query for inserting data 

                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $event = $_POST['event'];
                    $message = $_POST['message'];

                    $sql = "INSERT INTO `quotation`(`Name`, `Email`, `phone`, `Event`, `Description`) VALUES ('$name','$email','$phone','$event','$message')";

                    try {
                        $result = mysqli_query($conn, $sql);
                    } catch (\Throwable $th) {
                        exit(false);
                    }

                    if ($result) {
                        exit(true);
                    } else {
                        exit(false);
                    }
?>