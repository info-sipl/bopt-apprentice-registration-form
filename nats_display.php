<?php
    $user = 'bopter';
    $password = 'Df,y]2_0N9y{'; 
    $database = 'bopt'; 
    $servername='localhost';
    $mysqli = new mysqli($servername, $user, $password, $database);
    if ($mysqli->connect_error) 
    {
        die('Connect Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
    }
    $sql = "SELECT * FROM apprenticeship_contract_registration_form WHERE id = ".base64_decode($_GET['id'])." ORDER BY id DESC ";
    $result = $mysqli->query($sql);
    
    // All the acquired data will be saved here
    // $res = mysqli_fetch_assoc($result);
     $mysqli->close(); 
?>



<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
    <link rel="shortcut icon" href="image/logo.png" type="image/x-icon">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

       
        <title>National Apprenticeship Training Scheme (NATS)</title>

</head>
    <body class="g-sidenav-hidden" style="min-height: 100vh;">
    
                                              

        <div class="main-content">
            <!-- Top navbar -->
 
<div id="undefined-sticky-wrapper" class="sticky-wrapper" style="height: 80px;">

<div id="undefined-sticky-wrapper" class="sticky-wrapper" style="height: 0px;"><header class="header_area sticky-header" style="">
<div class="main_menu">
<nav class="navbar navbar-expand-lg navbar-light main_box">
<div class="container">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="swisslogo">
<a href="" class="homelink"><img src="image/logo2.png" style="height:100px"></a>
</div>
<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 hidden-xs">
<h1 class="app_heading_font">National Apprenticeship Training Scheme (NATS)</h1>

<p class="insituted_tag">Instituted by Board of Apprenticeship Practical Training</p>

<p class="ministry_desc">Ministry of Education, Government of India</p>
</div>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-haspopup="true" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
<ul class="nav navbar-nav menu_nav ml-auto">

<li class="nav-item submenu dropdown">
<a href="https://app.etechapp.com/dashboard" class="dropdown-item">
                            <i class="fa fa-home"></i>
                            <span>Home</span>
                        </a>
                        <a href="https://app.etechapp.com/register-form" class="dropdown-item">
                            <i class="fa fa-id-badge"></i>
                            <span>Register</span>
                        </a>
                        <a href="https://app.etechapp.com/contact-us" class="dropdown-item">
                            <i class="ni ni-support-16"></i>
                            <span>Contact Us</span>
                        </a>

</li>
</ul>
</div>
</div>
</nav>
</div>

</header></div>

</div>

        
<style>
	.app_heading_font {
    color: #334f76;
    font-size: 28px;
    text-align: left;
    margin-bottom: 0px;
    margin-top: 10px;
}

.insituted_tag {
    text-align: left;
    font-size: 16px;
    margin-bottom: 0px;
    color: #867a7e;
}
.ministry_desc {
    text-align: left;
    font-size: 14px;
    color: #000;
}
.header_area .navbar .nav .nav-item.submenu{
	width:max-content;
}
.dropdown  a{
	text-decoration:none;
}
.dropdown  i{
	width:22px;
}
</style>




    
             
<br>           
<br>

 <div class="container-fluid">
        <div class="row1">
            <div class="col">
               <div class="card">
                    
                   
                   
    
 <div class="col-12 mt-2">
<table width="100%" style="font-size:17px;font-weight:bold;">
	<tbody>
		<tr>
			<td>
			<p style="text-align:center">BOARD OF PRACTICAL TRAINING (EASTERN REGION)<br>
			(An Autonomous Body Under Ministry of Human Resource Development,Department of Higher Education, Government of India)</p>
            <div style="float:left; width:12%">
            <img src="image/logo.png" style="width:98%">
            </div>
                <div style="float:right; width:12%">
            <img src="image/nats-logo-3.png" style="width:98%">
            </div>  
			<p style="text-align:center">Block- EA, Sector- I , Salt Lake City, Opp to Labony Estate , Kolkata - 700064 Phone No: 033 - 23370750 / 23370751 Fax No: 033-2321 6814 Email: info@bopter.gov.in Website: http://www.mhrdnats.gov.in/</p>
            

			<p style="font-weight:bold;text-align:center;">APPRENTICESHIP CONTRACT REGISTRATION FORM</p>
			</td>
		</tr>
    </tbody>
</table>
</div>
<br>




</div>
</div>
</div>
</div>

<br>
<br>

        <p style="font-weight:bold;text-align:center;font-size:22px;color:red;">APPRENTICE INFORMATION</p>
        <br>


        <div class="container-fluid">
        <div class="row1">
        <div class="col">
        <div class="card">

            

			
			<?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
                                                        
                                                        
                                                <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <h4>1. <u>Enrollment ID</u> : </h4> 
                                                    <?php echo $rows['enrollment_id'];?>
                                                </div>
                                            </div>
             
             
             
                                                <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <h4>2. <u>Subject field of training(Designated or Optional Trade)</u> : </h4> 
                                                    <p style="text-transform:uppercase"><?php echo $rows['subject_field'];?></p>
                                                </div>
                                            </div>
             
                
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <h4>3. <u>Personal Details</u></h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• Name of the Apprentice(As per Aadhar Card) :</b><br>
                                                        <p style="text-transform:uppercase"><?php echo $rows['adhar_card_name'];?></p>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Father's Name : </b><br>
                                                        <p style="text-transform:uppercase"><?php echo $rows['father_name'];?></p>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b> • Mother's Name : </b><br>
                                                       <p style="text-transform:uppercase"><?php echo $rows['mother_name'];?></p>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Aadhar Number :</b><br>
                                                        <?php echo $rows['adhar_card'];?>
                                                </div>
                                            </div>
                                            
                                             <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b> • State(In short name) : </b><br>
                                                        <?php echo $rows['state'];?>
                                                </div>
                                                    <div class="col-md-6 mb-3">
                                                    <b> • Gender : </b><br>
                                                        <?php echo $rows['gender'];?>
                                                </div>
                                                </div>
                                                
                                                <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b> • Date of Birth :</b><br>
                                                        <?php echo $rows['dob'];?>
                                                </div>
                                                    <div class="col-md-6 mb-3">
                                                    <b> • Community : </b><br>
                                                       <p style="text-transform:uppercase"><?php echo $rows['community'];?></p>
                                                    </div>
                                                </div>
                                                
                                                
                            </div>
                            </div>
                            </div>
                            </div>
                                                
                                                
                                                
                                                
                                  <br>
                                  <br>
                                                
                                    
         <div class="container-fluid">
        <div class="row1">
            <div class="col">
               <div class="card">
                                                
                                                <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <h4>4. <u>Communication Details</u> :</h4>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• Communication Address of the Appprentice :</b> <br>
                                                    <p style="text-transform:uppercase"><?php echo $rows['address'];?></p>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Pin Code :</b><br>
                                                    <?php echo $rows['pin'];?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• Email Address :</b> <br>
                                                    <?php echo $rows['email'];?>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Mobile Number :</b> <br>
                                                    <?php echo $rows['mobile_no'];?>
                                                </div>
                                            </div>
                                            
                                </div>
                                </div>
                                </div>
                                </div>
                                            
                                            <br>
                                            <br>
                                            
                                            
        <div class="container-fluid">
        <div class="row1">
            <div class="col">
               <div class="card">    
                                            
                                            
                                            
                                            
                                            
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <h4>5. <u>Education Qualification considered eligible for apprenticeship training under the Act</u></h4>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• Name of the Institution/College University :</b><br>
                                                    <p style="text-transform:uppercase"><?php echo $rows['name_college'];?></p>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Qualification :</b><br>
                                                    <?php echo $rows['course_name'];?>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• Period of course (Yrs.) :</b><br>
                                                    <?php echo $rows['course_duration'];?>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Month & Year of Passing :</b><br>
                                                    <?php echo $rows['month'];?>
                                                    <?php echo $rows['year'];?>
                                                </div>
                                            </div>
                                            
                                            
                                            </div>
                                            </div>    
                                            </div>
                                            </div>
                                            
                                            <br>
                                            <br>
                                            
                                            
        <div class="container-fluid">
        <div class="row1">
            <div class="col">
               <div class="card"> 
                                            
                                            
                                            
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <h4>6. <u>Training Detailed Information</u></h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• Date of Commencement of Training :</b><br>
                                                    <?php echo $rows['commencement_training'];?>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Period of Training<br>(Minimum 6 months to Maximum 36 months):</b><br>
                                                    <p style="text-transform:uppercase"><?php echo $rows['period_of_training'];?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• Rate of Stipend payable by the establishment (<i class="fa fa-inr" aria-hidden="true"></i>):</b><br>
                                                    <?php echo $rows['rate_stipend'];?>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Bank A/c No. to which STIPEND will be credited by the employer :</b><br>
                                                   <p style="text-transform:uppercase"><?php echo $rows['bank_ac'];?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• IFS Code of the Bank Branch :</b><br>
                                                    <p style="text-transform:uppercase"><?php echo $rows['ifs_bank'];?></p>
                                                </div>
                                                </div>
                                            
                                            
                                            
                                            
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            
                                            
                                           <br>
                                           <br>
                                            
                                            
                                            
                                            
                                            
        <div class="container-fluid">
        <div class="row1">
            <div class="col">
               <div class="card"> 
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4>7. <u>Employee Details</u></h4>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b>• Name & Address of the Employer :</b><br>
                                                    <p style="text-transform:uppercase"><?php echo $rows['name_address_emp'];?></p>
                                                </div>
                                                
                                                
                                                <div class="col-md-6 mb-3">
                                                    <b>• PIN Code of Employer : </b><br>
                                                    <p style="text-transform:uppercase"><?php echo $rows['pin_emp'];?></p>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <b> • E-mail Id of Employer :</b><br>
                                                    <?php echo $rows['email_emp'];?>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <b>• Telephone Number :</b><br>
                                                      <?php echo $rows['telephone_emp'];?>
                                                </div>
                                            </div>
                                            
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-12 mb-3">-->
                                            <!--        <h4>8. <u>Signature of Surety with Name & Address</u> :</h4> -->
                                            <!--        <?php echo $rows['sign_surety'];?>-->
                                                    
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-12 mb-3">-->
                                            <!--        <h4>9. <u>FOR BOARD's USE: Registered under Sec. 4 of the Apprentices Act Vide Registration</u> :</h4> -->
                                            <!--        <p style="text-transform:uppercase"><?php echo $rows['board_use'];?></p>-->
                                                    
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-12 mb-3">-->
                                            <!--        <h4>10. <u>REGIONAL CENTRAL APPRENTICESHIP ADVISER</u> :</h4> -->
                                            <!--        <?php echo $rows['regional_adviser'];?>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            
                                            
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                            
                            <br>
                            <br>
                            
                            
                            
                            
                            
                            
                            
                            
    <div class="container-fluid">
        <div class="row1">
            <div class="col">
               <div class="card">
                            <b>
                                <p style="color:red;text-align:center;font-size:20px;"><u>NOTE</u></p>
                                <br>
<p> 
Before forwarding this form to Board of Apprenticeship/ Practicle Training kindly ensure the following; otherwise, contract may not be registered.
<br>
All the columns are dully filled, and signatures and photograph are affixed at designated place.
Enclose Xerox copy of pass certificate / final year marksheet of Degree (as the case may be)
<br>
(*) Enclosure to Contract of Apprenticeship Training
<br>
<br>
The main provisions of the Apprenticeship Rules relating to Contract of Apprenticeship Training are:-
<br>
<br>
(a) It shall not be obligatory on part of the employer to offer any employment to the apprentice on successfully completing the apprenticeship training in their establishment nor shall it be obligatory on part of the apprentice to accept an employment under the employer
<br>
(b) If, however, there is condition in the contract of Apprenticeship that the apprentice shall, after the successful completion
<br>
The employer shall pay stipened per month to the Graduate apprentices at the minimum rates (as per the provisions of sub-rule (1) of rule 11 of the Apprenticeship Rules, 1992)[Revised timed to time by Govt. of india.]
<br>
<br>
Graduate Apprentices: ₹9000 P.M
<br>
<br>
<p style="text-align:left;">
The stipend prescribed for graduate apprentices shall be paid by the employer to those apprentices who possess a degree of minimum three years duration after 10+2 system of education and undergoing apprenticeship training in designated or optional trade.

The stipend for a particular month shall be paid by the tenth day day of the following month. No deduction shall be made from the stipened for the period during which an apprentice remains on leave as observed in the establishment.

Where the Contract of Apprenticeship is terminated through failure on the part of the employer in carrying out the terms and conditions of the Contract (as notified under the Apprenticeship Rules, 1992), he shall pay to the apprentice such compensation as may be provided by the Central Government.

In the event of premature termination of Contract of Apprenticeship for failure on the part of apprentice to carry out the terms and conditions of the Contract (as notified under the Apprenticeship Rules, 1992), the surety at the request of apprentice hereby guarantees to employer the payment of such amount as determined by the Apprenticeship Adviser as and towards the cost of training.

The liability of the surety is limited to an amount of teo thousand five hundred rupees with interest at twelve per cent per annum.
</p>

</p>
</b>


                                                    
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                                   <br>
<br>         
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                <?php
                    }
                ?>
    
                                            
    
    
</body>
</html>