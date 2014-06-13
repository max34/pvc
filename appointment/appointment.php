<!-- this file will handle data for appointments from the user-->
<?php
include '../engines/pv.php';
$message = NULL;
if(isset($_POST['fname'])) $message = sendAppointmentEmail($_POST);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="../engines/pv.css" type="text/css">
        <link rel="stylesheet" href="../bootstrap.css" type="text/css">
        <link rel="stylesheet" href="../foundation.css" type="text/css">
        <script src="../engines/pv.js"></script>
        <title>Passaic Vision</title>
    </head>
<body>
<?php include '../header.php'; ?>
        
<section class="mainContainer">
<span id="message"><?php echo $message; ?></span>
<form class="apponintmentForm" name="appointmentForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <table>
        <tr>
            <td>First Name:</td>
    <td><input type="text" required name="fname"></td>
        </tr>
        <tr>
   <td> Last Name:</td>
   <td> <input type="text" required name="lname"></td>
   </tr>
   <tr>
    <td>Telephone Number:</td>
    <td><input type="tel" required name="telephone" maxlength="12" onkeyup=" phoneNumberValidation();" ></td>
    </tr>
    <tr>
    <td>Email :</td>
    <td><input type="email" required name="email" onchange=" emailValidation();"></td>
    </tr>
    <tr>
    <td>Doctor :</td>
    <td><input type="radio" required name="doctor" value="mendoza" onclick="doctorSchedule(this.value);">  Dr. Mendoza <br/>
          <input type="radio" required name="doctor" value="gunzburg" onclick="doctorSchedule(this.value);">  Dr. Gunzburg</td>
    </tr>
    <tr>
    <td>Appointment Date:</td>
    <td><input type="text" required name="date" maxlength="10" onchange=" dateValidation();" onkeyup="addSlashToDate();"><span id="spanDate">mm/dd/yyyy</span></td>
    </tr>
    <tr>
    <td>Reason for visit:</td>
    <td><textarea name="message" rows="10" cols="50"></textarea></td>
    </table>
    <input class="btn btn-primary"  type="button" value="Send" onclick="return signOnFormValidation();">
</form>
</section>
    
    <iframe width="300" height="201" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=289+Monroe+Street,+Passaic,+NJ+07055&amp;aq=0&amp;oq=289+Monroe+Street+Passaic,+NJ,+07055&amp;sll=40.07304,-74.724323&amp;sspn=6.279035,13.392334&amp;ie=UTF8&amp;hq=&amp;hnear=289+Monroe+St,+Passaic,+New+Jersey+07055&amp;ll=40.864893,-74.126276&amp;spn=0.012122,0.026157&amp;t=m&amp;z=14&amp;output=embed"></iframe>

<?php include '../footer.php'; ?>
         <script src="../jquery.min.js"></script>
         <script src="../bootstrap.min.js"></script>
  
</body>
</html>
<!--end of the file-->
