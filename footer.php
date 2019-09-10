<footer>
               <section class="one-four">
                     <h3>BLOG</h3><br>
                     <a href="../blog"><p>Remote Jobs Blog</p></a>

             </section>
              <section class="one-four">
                    <h3>Remote Jobs</h3><br>
                   <a href="../remote-jobs/"><p>Find Remote Jobs</p></a>
                   <a href="../post-a-job"><p> Post Remote Job</p></a>
                   <a href="../category/design"><p>Remote Design Jobs</p> </a>
                    <a href="../category/Front-end-Engineering"><p> Remote Front-end Jobs </p> </a>
                  <a href="../category/Back-end-Engineering"> <p> Remote Back-end  Jobs </p></a>
                  <a href="../category/Apps"> <p> Remote Apps Jobs </p> </a>
                   <a href="../category/Product-Management"> <p>Remote  Management Jobs </p> </a>
                  <a href="../category/Content-and-Copywriting"> <p> Remote Copywriting Jobs </p>  </a>
                  <a href="../category/Marketing-and-Sales"> <p> Remote Marketing Jobs </p> </a>
                  <a href="../category/Customer-and-Community"> <p> Remote Customer  Jobs  </p> </a>

             </section>
              <section class="one-four">
                    <h3>Get jobs Email</h3><br>
                     <form action="" method="post">
       	   <input type="email" name="email" required>  <br>
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

             </section>
         </footer>