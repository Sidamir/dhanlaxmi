<?php
$config = array();
$config['protocol'] = 'smtp';
$config['smtp_host'] = '';
$config['smtp_user'] = '';
$config['smtp_pass'] = '';
$config['smtp_port'] = 465;
$config['mailtype'] = 'html';
$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;



 /*$message = ''; 
 $this->load->library('email', $config); 
 $this->email->set_newline("\r\n"); 
 $this->email->from('xxx@gmail.com'); // change it to yours 
 $this->email->to('xxx@gmail.com');
 // change it to yours 
 $this->email->subject('Resume from JobsBuddy for your Job posting'); $this->email->message($message); if($this->email->send()) { echo 'Email sent.'; } else { show_error($this->email->print_debugger()); }*/
?>