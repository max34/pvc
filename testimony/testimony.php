<?php
$message = NULL;
        //This is the localhost at the server poondocom.ipagemysql.com, pvc, passaic01, pvcBlog
         $con = mysqli_connect('localhost', 'root', 'secret', 'pvcblog');
                   
          if (mysqli_connect_errno($con)){ 
            
              $message = "Failed to connect to MySQL: " . mysqli_connect_error();
           
              }else{
                if (!isset($_POST['title']) || !isset($_POST['content'])){
                }else{
                $query = "INSERT INTO blog (postTitle, post, postDate) 
                    VALUES ('".$_POST['title']."', '".$_POST['content']."', now())";
                
                $res = mysqli_query($con, $query);
                
                if($res == true){
                    
                    $message = 'your post have been added';
                    
                }else{
                    $message = "could not insert new user:%s\n" . mysqli_error($con);
                }
           
           
    
            }
           }
           $get_query = mysqli_query($con,"SELECT postTitle, post FROM blog");

                 mysqli_close($con);
        
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
        
<section class="mainContainerTestimony">
    
    <span id="message"><?php echo $message; ?></span>
    <section class="testimonios">
        <?php
        while ($row = mysqli_fetch_array($get_query))
                {
                echo "<section id='testimonyNode'>
                      <h3>$row[postTitle]</h3>
                      <p>$row[post]</p>
                      </section>";
                }
        ?>         
        <section id="testimonyNode">
            <form action="/passaicVision/testimony/testimony.php" method="POST">
                <h3>Name<input type="text" name="title" required></h3>
            <p><textarea name="content" rows="8" cols="40" ></textarea></p>
            <input type="submit" name="post" value="post">
            </form>
        </section><br/>
        <div>a</div> <!--- This is just a hack to get the container (testimonios) of floating elements not to collapse-->
     </section>
    </section>
<?php include '../footer.php'; ?>
         <script src="../jquery.min.js"></script>
         <script src="../bootstrap.min.js"></script>
  
</body>
</html>