   <section class="one-three">
       	   <h4>Remote Jobs Delivered</h4>
       	   <form action="" method="post">
       	   <input type="email" name="email" required>
       	   <input type="submit" value="Submit" class="two">
           </form>
           <?php
      if(isset($_POST["email"])){
      include "connect.php";
      $email=$_POST["email"];
      $sql=mysql_query("select * from signup where email='$email'");
      $nr=mysql_num_rows($sql);
      if($nr==0){
      $sql = mysql_query("INSERT INTO `signup` (`id`, `email`) VALUES ('', '$email')");
       echo "<script>window.open('../remote-jobs/','_self')</script>";
      echo "Email insertion successful";
      }else{
        echo "Email already exists";
      }
      }

?>
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- remote jobs -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4160193222199546"
     data-ad-slot="9564467914"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
       </section>