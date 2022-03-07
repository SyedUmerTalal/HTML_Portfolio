<?php 
  $body = '';
  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'jhanzaibkhan@hotmail.com';
//   if( file_exists($php_email_form = '../front/jahanzaib/forms/contact.php' )) {
//     include( $php_email_form );
//   } else {
//     die( 'Unable to load the "PHP Email Form" Library!');
//   }

//   $contact = new PHP_Email_Form;
//   $contact->ajax = true;
  
//   $contact->to = $receiving_email_address;
//   $contact->from_name = $_POST['name'];
//   $contact->from_email = $_POST['email'];
//   $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
 
//   $contact->smtp = array(
//     'host' => 'smtp.gmail.com',
//     'username' => 'minhaj123technado@gmail.com',
//     'password' => 'geeks&bachelors!',
//     'port' => '587'
//   );
  
    
//   $contact->add_message( $_POST['name'], 'From');
//   $contact->add_message( $_POST['email'], 'Email');
//   $contact->add_message( $_POST['message'], 'Message', 10);
    // send email
  $body = '<h1>'. $_POST['name'].'</h1>';
  $body .= '<h1>'. $_POST['message'].'</h1>';
  mail("jhanzaibkhan@hotmail.com","Email from Portfolio",$body);
  
  header("Location: thankyou.php");
  
//   echo $contact->send();
?>
