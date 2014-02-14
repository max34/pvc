<?php
function connectionWeblog() //returns an array with DB handdler or connectionError at index[1]; tru or false at index[0].
	{                   //when uploading to server use poondocom.ipagemysql.com as localhost
			$connector = mysql_connect("localhost","goodcoders","yellowbananas");
			if (!$connector)
							{
						
						$result = array(0, mysql_error());
						mysql_close($connector);
		  				return $result;
		  				
							}
			mysql_select_db("poondo",$connector);
			$result = array(1, $connector);
			return $result;
	}
function sendAppointmentEmail($formValues)
{
        $result = NULL;
        $email = 'robimoller@gmail.com, adanolivos@gmail.com';
        $subject = "An appointment has been submitted through the website";
        $text = "\n\n Name : $formValues[fname] \n"
 . "Last Name : $formValues[lname] \n
 Phone Number : $formValues[telephone] \n
 Email : $formValues[email] \n
 Doctor: $formValues[doctor] \n
 Date for appointment : $formValues[date] \n
 Note/Message : $formValues[message] \n \n";
                            if(@mail($email,$subject,$text,NULL,NULL))
                                {
                                  $result = "*Email sent, we're going to be in contact with you shortly.";
                                  return $result;
				}
				else
					{
                                         $result = "Email could not be sent at this moment, please try again later.";
                                         return $result;
					}
}
function authenticateUser($email, $passw)//returns true or false at index[0]
{                                       //and userId or error at index[1]
    $result = NULL;
    $dbConnection = connectionWeblog();   
        if(!$dbConnection[0])
        {
            $result = array(FALSE, $dbConnection[1]);
            mysql_close($dbConnection[1]);
            return $result;
        }
        else
        {
            $email = mysql_real_escape_string($email, $dbConnection[1]);
            $string_query = "SELECT UID FROM USER WHERE UEMAIL='" . $email . "' AND PASSWORD='" . $passw . "'";
            $queryResult = mysql_query($string_query, $dbConnection[1]);
             if(!$queryResult)
				{

						
						$result = array(FALSE, mysql_error());
						mysql_close($dbConnection[1]);
		  				return $result;

					
						
				}
                $row = mysql_fetch_row($queryResult);
		
			if(!$row)
				{
				
						
					 	$result = array(FALSE, mysql_error());
					 	mysql_close($dbConnection[1]);
					 	return $result;
				}
                $result = array(TRUE, $row[0]);	
                mysql_close($dbConnection[1]);
                return $result;
        }
}   
function getBlogs($dbQuery)
{
    $result = NULL;
	$dbConnection = connectionWeblog();
        if(!$dbConnection[0])
        {
            $result = array(FALSE, $dbConnection[1]);
            mysql_close($dbConnection[1]);
            return $result;
        }
        else 
        {
			$query = mysql_query($dbQuery, $dbConnection[1]);
	
			if(!$query)
				{
						
					
						$result = array(FALSE, mysql_error());
						mysql_close($dbConnection[1]);
						return $result;
						
				}
                        $result = array(TRUE, $query);
			mysql_close($dbConnection[1]);
			return $result;

	}
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
