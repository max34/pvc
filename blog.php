<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Blog</title>
        <link rel="stylesheet" href="pv.css" type="text/css">
        <meta name="google-translate-customization" content="ef8c58b6dd052243-6fc8ffd8c48831ab-g97f64ea21ac42e14-21"></meta>

    </head>
    <body>
        <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <div id="blogDisplay">
        <?php
         
    
         $con = mysqli_connect('localhost', 'pvc', 'passaic01', 'pvcBlog');
                   
          if (mysqli_connect_errno($con)){ 
            
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
           
              }else{
                if (!$_POST['title']||!$_POST['content']){
                    echo 'enter some data';
                }else{
                $query = "INSERT INTO blog (postTitle, post, postDate) 
                    VALUES ('".$_POST['title']."', '".$_POST['content']."', now())";
                
                $res = mysqli_query($con, $query);
                
                if($res == true){
                    
                    echo 'your post have been added';
                    
                }else{
                    printf("could not insert new user:%s\n", mysqli_error($con));
                }
           
           
    
            }
           }
           $get_query = mysqli_query($con,"SELECT postTitle, post FROM blog");
           
           echo "<table>";
          
           
           while ($row = mysqli_fetch_array($get_query))
                {
                 echo "<tr>";
                 echo "<th>" .$row['postTitle']. "</th>";
                 echo "</tr>";
                 echo "<tr>";
                 echo "<td>" .$row['post']. "</td>";
                 echo "</tr>";
                }
                echo "</table>";
                
                mysqli_close($con);
        ?>
        </div>
        <div id="blogInput">
      <form action="blog.php" method="POST">
        <strong>Title:</strong><br/>
        <input type="text" name="title" size="25" required><br/>
        <strong>Content:</strong><br/>
        <textarea name="content" rows="8" cols="40" wrap="virtual"></textarea><br/>
        <input type="submit" name="post" value="post">
       </form>
        </div><!--end of blog input -->
        <a href="index.php">HOME</a>
    </body>
</html>
