<?php 
/*$emailConfig = array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com', //'smtp.globalassignmentexpert.com',
				'smtp_port' => 465,
				'smtp_user' => 'help@globalassignmentexpert.com',
				'smtp_pass' => 'Helpdesk@98761#',
				'charset' => 'utf-8',
				'mailtype' => 'html',
			    'mailpath'     => '/usr/sbin/sendmail',
                //'charset'      => 'iso-8859-1',
                'charset'   => 'utf-8',
               'wordwrap'     => TRUE
				
				);*/
//testing mail by sumit verma 31/3/22 added code
$config = array(
    'driver' => 'mail',
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'smtp.gmail.com', 
    'smtp_port' => 587,
    'smtp_user' => 'echoitsolution@gmail.com',
    'smtp_pass' => 'Echoitsolution@321',
    'smtp_crypto' => 'tls', //can be 'ssl' or 'tls' for example
    'mailtype' => 'html', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '4', //in seconds
    'charset' => 'utf-8',
    'wordwrap' => TRUE
);

				
     
?>


