<!DOCTYPE html>
			<html>
			<head>
			 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="style.css">
				<title>Remote Work: Jobs, Blog & many more - Remotejobseekers.com</title>
				<meta name="description" content="Remotejobseekers.com gives you an opportunity to work from home.You can manage your team and hire remote talent."/>
<meta name="robots" content="noodp"/>
<link rel="canonical" href="https://remotejobseekers.com/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Remote Work: Jobs, Blog & many more - Remotejobseekers.com" />
<meta property="og:description" content="Remotejobseekers.com gives you an opportunity to work from home.You can manage your team and hire remote talent." />
<meta property="og:url" content="https://remotejobseekers.com/" />
<meta property="og:site_name" content="remotejobseekers.com" />
<meta name="google-site-verification" content="qWT7N2YJbNa7KuD72HiCvzaQutCJMF3d9m7VCGkukg0" />
			</head>
			<body>
			<?php include_once "head/header.php";?>
			       <section class="intro">
			       	 <div class="inner">
			       	 	<section class="content">
			       	 		<h1>Remote Work from anywhere</h1>
			       	 		<ul>
			       	 		    <li><a class="btn" href="../remote-jobs/">Remote Jobs</a></li>
                                <li><a class="btn" href="../post-a-job">Post Job</a></li>
			       	 		</ul>

			       	 	</section>
			       	 </div>
			       </section>
			       <div id="banner-wrapper">
                           <h2>Why remote Job seekers?</h2>
                           <p>Remote job seekers is a platform for every one who wants to work from anywhere.We provide 100% remote jobs to help you.Our mission
                            is to remove unemployment and help job seekers to work in their own way.Remote work is a new trend in the jobs industry.We offer remote
                             work in Design, Front-end, Back-end, project management, customer services, marketing and many more.So stay in touch with us by
                              regularly visiting us.Our blog is also helping job seekers to improve their skills and get in touch with the new skills and
                              development.</p>
        <section class="one-seven">
         <a href="../remote-jobs/"><h2>Recent Remote jobs</h2></a>

                  <?php

              include_once "connect.php";
                   $val2 = date("Y-m-d h:i:sa");
                  $sql=mysql_query("SELECT * FROM skip WHERE  on_off=1 && exp_date >'$val2' ORDER BY id DESC limit 0,3");
               while($row = mysql_fetch_array($sql)) {
                    $job_title = $row["title"];
                   $profile_photo= $row["profile_photo"];
                   if($profile_photo==""){
                       $profile_photo2="../imagess/company-blank-hiring.png";
                       }else{
                           $profile_photo2="../product_images/$profile_photo";
                         }
                   $id= $row["id"]; ?>
                    <div class="one-half">
                   <a href='../viewjob/<?php echo $id;?>'><img src='<?php echo $profile_photo2;?>' alt='<?php echo $job_title;?>' style="height:175px;">
                   <h4> <?php echo $job_title;?></h4>  </a>
                   </div>
                   <?php
               }


                 ?>  <div class="clearfix"></div>
                <br> <br>
              <a href="../blog"><h3>Remote Work Blog</h3></a>
              <?php
               $sql=mysql_query("select * from blog limit 0,3");
               while($row = mysql_fetch_array($sql)) {
                   $job_title = $row["title"];
                   $url= $row["url"];
                   $sdesc= $row["sdesc"];
                   $date= $row["date"];
                   $profile_photo= $row["profile_photo"]; ?>
                    <div class="one-half">
                   <a href="../blog.php?search=<?php echo $url;?>"><img src='../imagess/<?php echo $profile_photo;?>'  alt='<?php echo $job_title;?>'>
                   <h3> <?php echo $job_title;?></h3></a>
                   <p><?php echo $sdesc;?></p>
                   </div>
                   <?php
               }


                 ?>

        </section>
      <?php include_once "sidebar.php";?>

			       </div>
			       <?php include_once "footer.php";?>
			</body>
			</html>