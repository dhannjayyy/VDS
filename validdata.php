<?php
                include_once "assets/db.php";

                //executing the sql query for inserting data 

                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $date = $_POST['date'];
                    $class = $_POST['classes'];

                    $sql = "INSERT INTO `democlass`(`Name`, `email`, `phone`, `Date`, `class`) VALUES ('$name','$email','$phone','$date','$class')";

                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        exit(true);
                    } else {
                        echo '<div class="unsuccess-message"> HAVING SOME ISSUE AT OUR END, PLEASE TRY AGAIN LATER!! </div>';
                    }
?>