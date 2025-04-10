<?php

  $receiving_email_address = 'kosasihcynthia127@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['Cynthia Kosasih'];
  $contact->from_email = $_POST['kosasihcynthia127@gmail.com'];
  $contact->subject = $_POST['Portofolio'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['Cynthia Kosasih'], 'Medan');
  $contact->add_message( $_POST['kosasihcynthia127@gmail.com'], 'kosasihcynthia127@gmail.com');
  $contact->add_message( $_POST['0821'], '0821', 10);

  echo $contact->send();
?>
