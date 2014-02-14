<?php
/* Blog.php will take care of authentication and log in information.
 * herego only people who signs into the blog will have access to the blog.
 */
$con = mysqli_connect('localhost', 'pvc', 'passaic01', 'pvcBlog');

if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    printf("Host information: %s\n", mysqli_get_host_info($con));
if((!$_POST['uName'])||(!$_POST['fName'])||(!$_POST['lName'])||(!$_POST['email'])||(!$_POST['password'])||(!$_POST['rPassword']))
{
    echo 'no entry has been added';
}else{
    $query = "INSERT INTO blog_user (uName, name, lName, email, password, rPassword) 
        VALUES ('".$_POST['uName']."', '".$_POST['fName']."', '".$_POST['lName']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['rPassword']."')";
    
    $res = mysqli_query($con, $query);
    if ($res === TRUE) {
        echo "new user has been added.";
    } else {
        printf("could not insert new user:%s\n", mysqli_error($con));
    }//end of query
 }//end of if
}//end file
?>
<html>
    <head>
        <title>Mysql_test</title>
        <link rel="stylesheet" href="pv.css" type="text/css">
    </head>
    <body>
        <form action="login.php" method="POST">
            <strong>username</strong>
            <input type="text" name="uName" size="25" required><br/>
            <strong>First Name</strong>
            <input type="text" name="fName" size="25" required><br/>
            <strong>Last Name</strong>
            <input type="text" name="lName" size="25" required><br/>
            <strong>Email</strong>
            <input type="email" name="email" size="25" required><br/>
            <strong>Password</strong>
            <input type="password" name="password" size="8" required><br/>
            <strong>Retype Password</strong>
            <input type="password" name="rPassword" size="8" required><br/>
            <input type="submit" name="sign up" value="insert record">
        </form>
        <a href="index.php">Return Home</a>
    </body>
</html>