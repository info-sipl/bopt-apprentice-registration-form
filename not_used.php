<!DOCTYPE html>
<html>
<head>
<title>APPRENTICESHIP CONTRACT REGISTRATION FORM</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="css/style.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<style>

input[type=submit]
{
  /*background-color: blue;*/
  border: none;
  color: white;
  font-weight:bold;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
  background-image: linear-gradient(darkgreen,#53c653);
}

input[type=text],input[type=number],input[type=email] {
  width:50%;
  /*padding: 12px 20px;*/
  height:47px;
  margin: 8px 0;
  box-sizing: border-box;
  border-color:blue;
  border-radius: 12px;
  padding-left: 10px;
}

#submit[disabled]
{
 background: red;
}


body{
    
    background-image: linear-gradient(#3385ff, #ff9966,#00cccc);
}


h3,h6{
  font-family: Calibri;
  font-style: normal; 
  font-weight: bold; 
  color:black;
  text-align: center; 
  text-decoration: underline;
}

table{
    display: inline-grid;
  font-family: Calibri; 
  color:white; 
  font-size: 14pt; 
  font-style: normal;
  font-weight: bold;
  /*background-color: #1a75ff; */
  background-image: linear-gradient(#4d94ff, #ff9966,#00cccc);
  border: 2px solid white;
}
table.inner{
  border: 0px;
}
</style>


<!--<script>-->
<!--    function validateForm() {-->
<!--    var mobile_no = document.forms["reg_form"]["mobile_no"];-->
<!--    if (mobile_no.value == "")-->
<!--           {-->
<!--                document.getElementById("mobile_no_error").innerText = "Please Enter Mobile Number";-->
<!--                document.forms["reg_form"]["submit"].disabled = true;-->
<!--               return;-->
<!--           }-->
<!--           if (mobile_no.value.length != 10) -->
<!--           {-->
<!--                document.getElementById("mobile_no_error").innerText = "Please enter your 10 Digit Contact Number";-->
<!--                document.forms["reg_form"]["submit"].disabled = true;-->
<!--                return;-->
<!--           }-->
<!--           else{-->
<!--               document.getElementById("mobile_no_error").innerText = "";-->
<!--               document.forms["reg_form"]["submit"].disabled = false;-->
<!--                return;-->
<!--           }-->
           
<!--    }-->
<!--</script>-->



</head>
<body>
<div class="container-fluid">
        <div class="container">
            <h3 style="text-align:center;"> <img src="image/logo.png" style="height:90px; width:80px;">&nbsp;APPRENTICESHIP CONTRACT REGISTRATION FORM <img src="image/nats-logo-3.png" style="height:90px; width:80px;"></h3>
            <p style="text-align:center;font-weight:bold;">(Graduate or equivalent in general streams such as B.A, B.Sc & B.Com)</p>

            <div class="grid-container">
                <div class="grid-item" style="background-color: white;"><b>Category of Apprentice</b></div>
                <div class="grid-item" style="background-color: white;"><b>Graduate</b></div>
            </div>
            </div>
            </div>
            
            <br>

<form action="Db_Insert.php" method="POST" name="reg_form" id="reg_form" oninput="validateForm()">
<table align="center" cellpadding = "12">
 
 
<tr>
<td>1. Subject Field of training(Designated or Optional Trade):</td>
<td><input type="text" name="subject_field" required style="text-transform:uppercase"/>
(characters A-Z)
</td>
</tr>



<tr>
<td>2. Name of the Apprentice
(Block Letters) (As per Aadhaar Card) : </td>
<td><input type="text" name="adhar_card_name" required style="text-transform:uppercase"/>
(characters A-Z)
</td>
</tr>

<tr>
<td>3. Father's Name : </td>
<td><input type="text" name="father_name" required style="text-transform:uppercase"/>
</td>
</tr>


<tr>
<td>4. Mother's Name : </td>
<td><input type="text" name="mother_name" required style="text-transform:uppercase"/>
</td>
</tr>


<tr>
<td>5. Aadhar Number : </td>
<td><input type="text" name="adhar_card" required maxlength="12" />
(max 12 digits)
</td>
</tr>


<tr>
<td>6. Communication Address of the Apprentice : </td>
<td><input type="text" name="address" required style="text-transform:uppercase"/>
</td>


<tr>
<td>&nbsp;&nbsp;&nbsp; PIN</td>
<td><input type="number" name="pin" required/></td>
</tr>



<tr>
<td>&nbsp;&nbsp;&nbsp; E-mail ID: </td>
<td><input type="email" name="email" required/>
</td>
</tr>



<tr>
<td>&nbsp;&nbsp;&nbsp; Mobile Number :</td>
<td><input type="text" name="mobile_no" required maxlength="10"/>
(max 10 characters 0-9)
</td>
</tr>


<tr>
<td><p id="mobile_no_error" style="color:red"></p></td>
</tr>


<tr>
<td>&nbsp;&nbsp;&nbsp; State :</td>
<td>
<select id="state" name="state">
<option>Select State</option>
<option value="AN">Andaman and Nicobar Islands</option>
<option value="AR">Arunachal Pradesh</option>
<option value="AS">Assam</option>
<option value="BR">Bihar</option>
<option value="JH">Jharkhand</option>
<option value="MN">Manipur</option>
<option value="ML">Meghalaya</option>
<option value="MZ">Mizoram</option>
<option value="NL">Nagaland</option>
<option value="OD">Odisha</option>
<option value="SK">Sikkim</option>
<option value="TR">Tripura</option>
<option value="WB">West Bengal</option>
</select>
</td>
</tr>
 
 
 
<tr>
<td>7. GENDER(Please Tick in appropriate box)</td>
<td>
Male <input type="radio" name="gender" value="M" />
Female <input type="radio" name="gender" value="F" />
Transgender <input type="radio" name="gender" value="Trans" />
</td>
</tr>


<tr>
<td>8. Date of Birth :</td>
<td>
<input type="date" name="dob" required/>
</td>
</tr>


<tr>
<td>9. Community(Please Tick in appropriate box): </td>
<td>
S.C. <input type="radio" name="community" value="sc" />
S.T. <input type="radio" name="community" value="st" />
O.B.C. <input type="radio" name="community" value="obc" />
P.W.D. <input type="radio" name="community" value="pwd" />
MINORITY <input type="radio" name="community" value="minority" />
GENERAL <input type="radio" name="community" value="general" />
</td>
</tr>

<tr>
<td>10. Education Qualification considered eligible for apprenticeship training under the Act :</td>
<td>
<table>
 
<tr>
<th align="left"><b>Name of the Institution/College University</b></th>
<th align="center"><b>Qualification</b></th>
<th align="center"><b>Period of course (Yrs.) </b></th>
<th align="center"><b>Year & Month of Passing</b></th>
</tr>

<tr>
<td><input type="text" name="name_college" style="text-transform:uppercase"/></td>
<td>
    <select name="course_name">
        <option value=" ">Course</option>
        <option value="01">BCA</option>
        <option value="02">BSC</option>
        <option value="03">BBA</option>
        <option value="04">BTECH</option>
        <option value="05">DIPLOMA</option>
        <option value="06">BA</option>
    </select>
    </td>
<td><input type="text" name="course_duration" style="text-transform:uppercase"/></td>
<td>
    <select name="month">
        <option value=" ">Month</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        </select>
        <select name="year">
            <option value=" ">Year</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option> 
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            </select>
            
</td>
</tr>
</table>
</td>
</tr>
 
*******************************************************************************************************************************************
<tr>
<td>11. Date of Commencement of Training :</td>
<td><input type="date" name="commencement_training" required/>
</td>
</tr>
 

<tr>
<td>12. Period of Training (Minimum 6 months to Maximum 36 months) :</td>
<td><input type="text" name="period_of_training" required style="text-transform:uppercase"/>
</tr>
 
 <tr>
<td>13. Rate of Stipend payable by the establishment (<i class="fa fa-inr" aria-hidden="true"></i>):</td>
<td><input type="text" name="rate_stipend" required/>
</tr>
 
 

<tr>
<td>14. Bank A/c No. to which STIPEND will be credited by the employer :</td>
<td><input type="text" name="bank_ac" required style="text-transform:uppercase"/></td>
</tr>
 
<tr>
<td>15. IFS Code of the Branch :</td>
<td><input type="text" name="ifs_bank" required style="text-transform:uppercase"/></td>
</tr>
*************************************************************************************************************************************************

<tr>
<td>16. Name & Address of the Employer :</td>
<td><input type="text" name="name_address_emp" required style="text-transform:uppercase"/>
</td>

<tr>
<td>&nbsp;&nbsp;&nbsp; PIN</td>
<td><input type="number" name="pin_emp"/></td>
</tr>


<tr>
<td>&nbsp;&nbsp;&nbsp; E-mail ID: </td>
<td><input type="email" name="email_emp"/>
</td>
</tr>


<tr>
<td>&nbsp;&nbsp;&nbsp; Telephone Number: </td>
<td><input type="number" name="telephone_emp" />
(max 10 digits)
</td>
</tr>

************************************************************************************************************************************************* 
<tr>
<td>17. Signature of Surety with Name & Address :</td>
<td><input type="text" name="sign_surety" style="text-transform:uppercase"/></td>
</tr> 
 
 
<tr>
<td>FOR BOARD's USE: Registered under Sec. 4 of the Apprentices Act
Vide Registration: </td>
<td><input type="text" name="board_use" style="text-transform:uppercase"/></td>
</tr>
 <tr>
<td>REGIONAL CENTRAL APPRENTICESHIP ADVISER: </td>
<td><input type="text" name="regional_adviser" style="text-transform:uppercase"/></td>
</tr>
</table>
<div align="center">
<input type="submit" value="Submit" name="submit" id="submit">
</div>
</form>
</body>
</html>