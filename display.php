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
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>APPRENTICESHIP CONTRACT REGISTRATION FORM</title>
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
</head>
<body>
    
    <h2 style="text-align:center;color:red;">User Details</h2>
    <section>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>Enrollment ID</th>
                <th>Subject Field</th>
                <th>Aadhar Card Name</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Aadhar Card Number</th>
                <th>Communication Address of the Apprentice</th>
                <th>Pin</th>
                <th>Email ID</th>
                <th>Mobile Number</th>
                <th>State(short Name)</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Community</th>
                <th>Name of Institute/College</th>
                <th>Course Name</th>
                <th>Period of Course</th>
                <th>Month</th>
                <th>Year</th>
                <th>Date of Commencement of Training</th>
                <th>Period of Training</th>
                <th>Rate of Stipend</th>
                <th>Bank A/c Number</th>
                <th>IFS Code of Branch</th>
                <th>Name and Address of employer</th>
                <th>Pin(employer)</th>
                <th>Email id(employer)</th>
                <th>Telephone Number(Employer)</th>
                <th>Signature of Surety</th>
                <th>Board's Use</th>
                <th>REGIONAL CENTRAL APPRENTICESHIP ADVISER</th>
            </tr>
            
        
            
            
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['enrollment_id'];?></td>
                <td><?php echo $rows['subject_field'];?></td>
                <td><?php echo $rows['adhar_card_name'];?></td>
                <td><?php echo $rows['father_name'];?></td>
                <td><?php echo $rows['mother_name'];?></td>
                <td><?php echo $rows['adhar_card'];?></td>
                <td><?php echo $rows['address'];?></td>
                <td><?php echo $rows['pin'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['mobile_no'];?></td>
                <td><?php echo $rows['state'];?></td>
                <td><?php echo $rows['gender'];?></td>
                <td><?php echo $rows['dob'];?></td>
                <td><?php echo $rows['community'];?></td>
                <td><?php echo $rows['name_college'];?></td>
                <td><?php echo $rows['course_name'];?></td>
                <td><?php echo $rows['course_duration'];?></td>
                <td><?php echo $rows['month'];?></td>
                <td><?php echo $rows['year'];?></td>
                <td><?php echo $rows['commencement_training'];?></td>
                <td><?php echo $rows['period_of_training'];?></td>
                <td><?php echo $rows['rate_stipend'];?></td>
                <td><?php echo $rows['bank_ac'];?></td>
                <td><?php echo $rows['ifs_bank'];?></td>
                <td><?php echo $rows['name_address_emp'];?></td>
                <td><?php echo $rows['pin_emp'];?></td>
                <td><?php echo $rows['email_emp'];?></td>
                <td><?php echo $rows['telephone_emp'];?></td>
                <td><?php echo $rows['sign_surety'];?></td>
                <td><?php echo $rows['board_use'];?></td>
                <td><?php echo $rows['regional_adviser'];?></td>
                
                
                
                
                
                
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>
  
</html>