<?php
// database connection code
if(isset($_POST))
{
	// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
	$con = mysqli_connect('localhost', 'bopter', 'Df,y]2_0N9y{', 'bopt');
// 	$con = mysqli_connect('localhost', 'root', '', 'test');

    $generate_enroll = strtoupper('E'.$_POST['state'].'G'.$_POST['year'].$_POST['month'].$_POST['course_name'].rand(1111, 9999));

	// get the post records
	$enrollment_id             =   $generate_enroll;
	$subject_field			=	$_POST['subject_field'];
	$adhar_card_name		=	$_POST['adhar_card_name'];
	$father_name			=	$_POST['father_name'];
	$mother_name			=	$_POST['mother_name'];
	$adhar_card				=	$_POST['adhar_card'];
	$address				=	$_POST['address'];
	$pin					=	$_POST['pin'];
	$email					=	$_POST['email'];
	$mobile_no				=	$_POST['mobile_no'];
	$state				    =	$_POST['state'];
	$gender					=	$_POST['gender'];
	$dob					=	$_POST['dob'];
	$community				=	$_POST['community'];
	$name_college			=	$_POST['name_college'];
	$course_name			=	$_POST['course_name'];
	$course_duration		=	$_POST['course_duration'];
	$month		            =	$_POST['month'];
	$year		            =	$_POST['year'];
	$commencement_training	=	$_POST['commencement_training'];
	$period_of_training		=	$_POST['period_of_training'];
	$rate_stipend			=	$_POST['rate_stipend'];
	$bank_ac				=	$_POST['bank_ac'];
	$ifs_bank				=	$_POST['ifs_bank'];
	$name_address_emp		=	$_POST['name_address_emp'];
	$pin_emp				=	$_POST['pin_emp'];
	$email_emp				=	$_POST['email_emp'];
	$telephone_emp			=	$_POST['telephone_emp'];
	$sign_surety			=	$_POST['sign_surety'];
	$board_use				=	$_POST['board_use'];
	$regional_adviser		=	$_POST['regional_adviser'];

	// database insert SQL code
	$sql = "INSERT INTO `apprenticeship_contract_registration_form` (
		`enrollment_id`,
		`subject_field`,
		`adhar_card_name`,
		`father_name`, 
		`mother_name`,
		`adhar_card`,
		`address`, 
		`pin`, 
		`email`,
		`mobile_no`,
		`state`,
		`gender`,
		`dob`,
		`community`,
		`name_college`,
		`course_name`,
		`course_duration`,
		`month`,
		`year`,
		`commencement_training`,
		`period_of_training`,
		`rate_stipend`,
		`bank_ac`,
		`ifs_bank`,
		`name_address_emp`,
		`pin_emp`,
		`email_emp`,
		`telephone_emp`,
		`sign_surety`,
		`board_use`,
		`regional_adviser`
	) 
	VALUES 
	(
		'".$enrollment_id."', 
		'".$subject_field."', 
		'".$adhar_card_name."',
		'".$father_name."', 
		'".$mother_name."',
		'".$adhar_card."',
		'".$address."',
		'".$pin."',
		'".$email."',
		'".$mobile_no."',
		'".$state."',
		'".$gender."',
		'".$dob."',
		'".$community."',
		'".$name_college."',
		'".$course_name."',
		'".$course_duration."',
		'".$month."',
		'".$year."',
		'".$commencement_training."',
		'".$period_of_training."',
		'".$rate_stipend."', 
		'".$bank_ac."', 
		'".$ifs_bank."', 
		'".$name_address_emp."', 
		'".$pin_emp."', 
		'".$email_emp."',
		'".$telephone_emp."', 
		'".$sign_surety."', 
		'".$board_use."', 
		'".$regional_adviser."'
	)";

	// insert in database 
	$rs = mysqli_query($con, $sql);
// 	var_dump(mysqli_error($con));

	if($rs)
	{
	    
	    $last_id = $con->insert_id;
	    
		echo '<script>
                    alert("FORM SUBMITTED SUCCESSFULLY");
                    window.location.href="nats_display.php?id='.base64_encode($last_id).'";
                </script>';
                
// 		echo '<script>
//                     alert("FORM SUBMITTED SUCCESSFULLY");
//                     window.location.href="index.php";
//                 </script>';

}
}
else
{
	echo '<script>alert("Failed to update your request")</script>';
}
?>