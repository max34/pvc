<?php
?>
<link rel="stylesheet" href="pv.css" type="text/css">
<meta name="google-translate-customization" content="ef8c58b6dd052243-6fc8ffd8c48831ab-g97f64ea21ac42e14-21"></meta>

<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<!--This part of the file will serve the user as a reference to make an appt -->
<div id="appt">
     <div id="operation">
            <h3>Hours of Operation</h3>
            <table>
                <tr>
                    <th>Day</th>
                    <th>hours</th>
                </tr>
                <tr>
                    <td>Monday</td>
                    <td>Closed</td>
                </tr>
                
                <tr>
                    <td>Tuesday</td>
                    <td>12:00p.m.- 12:00a.m.</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>12:00p.m.- 12:00a.m.</td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td>12:00p.m.- 12:00a.m.</td>
                </tr>
                 <tr>
                    <td>Friday</td>
                    <td>12:00p.m.- 12:00a.m.</td>
                </tr>
                 <tr>
                    <td>Saturday</td>
                    <td>12:00p.m.- 12:00a.m.</td>
                </tr>
                 <tr>
                    <td>Sunday</td>
                    <td>12:00p.m.- 12:00a.m.</td>
                </tr>
            </table>
    </div><!--end of operation-->
    
<!-- this portion of the file will handle data for appointments from the user-->
<form action="" method="">
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
    <td><input type="tel" required name="telephone"></td>
    </tr>
    <tr>
    <td>Appointment Date:</td>
    <td><input type="date"required name="date"></td>
    </tr>
    <tr>
    <td>Reason of the visit:</td>
    <td><textarea row="10" columns="100"></textarea></td>
    </table>
    <input type="submit" value="Send">
</form>
</div><!--end of appt-->
<span><strong>*Passaic Vision Center Staff will call your back for appointment confirmation*</strong></span>
<!--end of the file-->
