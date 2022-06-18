
<?php

  session_start();
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;


  if(isset($_POST['regBtn'])){

    if($_POST['password'] == $_POST['cPassword'] && $_POST['cPassword'] != NULL){

        $mail = new PHPMailer(TRUE);
        try {
          $mail->SMTPDebug = 0;
          $mail->isSMTP();
          $mail->Host = 'smtp.gmail.com';
          $mail->SMTPAuth = true;
          $mail->username = "dlc.duet@gmail.com";
          $mail->Password = 'S_hacker_10001';
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
          $mail->Port = 587;
          $mail->setForm('dlc.duet@gmail.com');
          $mail->addAddress($email, $name);
          $mail->isHTML(TRUE);
          $varificationCode = 

        } catch (\Exception $e) {

        }


        header('location:userGmailVarification.php');

    }
  }

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Regisert Form</title>
    <link rel="stylesheet" href="registation.css" media="all">
  </head>
  <body>
    <?php if(isset($_POST['msg'])) echo $_POST['msg']; ?>
    <div class="Registation-now">
      <form class="" action="" method="post">
        <h2>Register</h2>
        <div class="input-style">
          <label for="a">Firs Name</label>
          <input type="text" name="fname" placeholder="Firs Name" id="a">
          <label for="a">Last Name</label>
          <input type="text" name="lname" placeholder="Last Name" id="b">
          <label for="a">Your Email</label>
          <input type="email" name="email" placeholder="Email" id="c">
          <label for="a">Phone Number</label>
          <input type="text" name="number" placeholder="Phone Number" id="d">
          <label for="a">Enter Password</label>
          <input type="password" name="password" placeholder="password" id="e">
          <label for="a">Confirm Password</label>
          <input type="password" name="cPassword" placeholder="password" id="f">
        </div>
        <div class="regBtnStyl">
          <input type="submit" name="regBtn" value="Submit">
        </div>
      </form>
    </div>

  </body>
</html>
