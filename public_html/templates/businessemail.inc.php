<?php

$emailHeader = [
	'from' => 'Dining Mate Team < mailgun@' .$domain. '>',
	'to' => '<'.$aboutbusiness->email.'>',
	'subject' => 'Thanks for sending us an enquiry form'
	];
?>

Hi <?php echo $aboutbusiness->name; ?>,

Thank you for sending us an enquiry form. We will contact you within 48 hours. 

Regards

Dining Mate Team 
