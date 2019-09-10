  <?php          ob_start();
                             include "connect.php";
                           $show=$_GET["show"];
              if(isset($_GET["show"])){
                 $show= addslashes($_GET["show"]);

               $val2 = date("Y-m-d h:i:sa");
               $sql=mysql_query("SELECT * FROM skip WHERE id= '$show' && on_off=1 && exp_date >'$val2' ORDER BY id DESC");
               $nr = mysql_num_rows($sql); // Get total of Num rows from the database query



          $query="SELECT * FROM `skip` where `id` = '$show'";

          $query_run=mysql_query($query);

          $row=mysql_fetch_array($query_run);

   //include_once "header.php";
    $title = $row["title"];
	$description = $row["description"];
         $job_type=$row["job_type"];
	$location = $row["location"];
	$skills= $row["skills"];
	$remote = $row["remote"];
	$salary = $row["salary"];
	$company_name = $row["company_name"];

       ?>
       <!DOCTYPE html>
<html>

<head>
         <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=593d80b2699595001138ac71&product=sticky-share-buttons"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Remote jobs:<?php echo $title;?></title>

           <link rel="icon" href="../img/remote job seekers logo.png" type="image/png">
          <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <!-- SEO Meta Data -->
        <meta name="keywords" content="remote jobs" />
        <meta name="description" content="Skills:<?php echo $skills;?>. Company :<?php echo $company_name;?>. Salary: <?php echo $salary;?>$ " />
         <!--Twitter App Card Schema Begin -->
        <meta name="twitter:card" content="app">
        <meta name="twitter:description" content="<?php echo $title;?>">
        <meta name="twitter:app:country" content="usa,uk,canada">
        <meta name="twitter:app:name:googleplay" content="remotejobseekers.com remote Jobs">
        <meta name="twitter:app:id:googleplay" content="com.remotejobseekers.remotejobs">
        <!--Twitter App Card Schema End -->
         <?php
	 if($nr==0){

               echo "<meta name='robots' content='nofollow' />";
         }
         ?>
</head>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  <style>
    *{
      margin:0;
      padding: 0;
      border: 0;
    }
    body{
      font-family: verdana;
      font-size: 18px;
      position: relative;
    }
    h1{
      font-size: 180%;
      text-transform: uppercase;
      letter-spacing: 1px;
    }
    p{
      font-size: 110%;
    }
    .container{
      height: auto;
      width:1070px;
      margin: 0 auto;
    }
    .content{
      width:73%;
      float: left;
      margin: 2% 1% 2% 2%;
    }
    .content ul{
      list-style-type: none;

    }
    .content ul li{
      display: inline-block;
      margin-right: 5%;
    }

    .sidebar{
      width: 20%;
      float: right;
      margin: 2% 0 2% 3%;
    }
    .sidebar li{
      list-style-type: none;
    }
    img{
      max-width: 100%;
      height: auto;
    }
    .desc ul li{
        display: block;
        list-style-type: value !important;
        font: 0.8em/2.5 verdana !important;
    }
    .apply{
      background-color:#efefef;
      padding-top:1%;
      padding-bottom:2%;
      padding-left:3%;
    }
    .apply h3{
           font-size:22px;
    }
    .apply p{
              font-size:20px;
             color:#337ab7;
    }
     footer{
	width: 100%;
	background-color: #3a3a3a;
	overflow: auto;
	margin-top: 2%;
}
footer p{
	color: #fff;
	font-size:80%;
}
footer .one-four h3{
	color: #fff;
        font-size:90%;

}
footer .one-four{
        width:26%;
        float:left;
        margin:2% 0 2% 6%;

}
footer .one-four i{
	font-size: 170%;
	margin: 1% 7% 4% 5%;
	color: #ccc;
	align: center;
}
.one-four input{
	height: 35px;
	width: 100%;
	margin-bottom: 6%;
}
.one-four input.two{
	width: 100%;
	height: 44px;
	background-color: #00a2e1;
	color: #fff;
	font-size: 20px;
	letter-spacing: 1px;
}

    /*media queries*/
@media screen and (max-width: 768px){
  h1{
    font-size:140%;
    text-align: center;

  }
    .container{
     width: 100%;
    }
    .content{
      width: 96%;
      margin: 0 auto;
    }
    .content ul li{
       display: block;
       font-size: 110%;
       margin-bottom: 4%;
    }
    .sidebar{
      width: 96%;
      margin: 0 auto;
    }
    .apply h3{
       font-size:16px;
    }
     .apply p{
       font-size:13px;
    }
    footer{
     width:99%;
    }
    footer .one-four{
    width:92%;
    }
}

  </style>
</head>
<body>
<?php include_once "head/header.php";?>
    <div class="container">

     <?php

// error_reporting (0);
  function timeAgo($time_ago)
{
    $time_ago = strtotime($time_ago);
    $cur_time   = time();
    $time_elapsed   = $cur_time - $time_ago;
    $seconds    = $time_elapsed ;
    $minutes    = round($time_elapsed / 60 );
    $hours      = round($time_elapsed / 3600);
    $days       = round($time_elapsed / 86400 );
    $weeks      = round($time_elapsed / 604800);
    $months     = round($time_elapsed / 2600640 );
    $years      = round($time_elapsed / 31207680 );
    // Seconds
    if($seconds <= 60){
        return "just now";
    }
    //Minutes
    else if($minutes <=60){
        if($minutes==1){
            return "One minute ago";
        }
        else{
            return "$minutes minutes ago";
        }
    }
    //Hours
    else if($hours <=24){
        if($hours==1){
            return "An hour ago";
        }else{
            return "$hours hrs ago";
        }
    }
    //Days
    else if($days <= 7){
        if($days==1){
            return "Yesterday";
        }else{
            return "$days days ago";
        }
    }
    //Weeks
    else if($weeks <= 4.3){
        if($weeks==1){
            return "A week ago";
        }else{
            return "$weeks weeks ago";
        }
    }
    //Months
    else if($months <=12){
        if($months==1){
            return "A month ago";
        }else{
            return "$months months ago";
        }
    }
    //Years
    else{
        if($years==1){
            return "One year ago";
        }else{
            return "$years years ago";
        }
    }
    }



            session_start();
             //echo $result;
             $id = $row["id"];
             $_SESSION["sess_user"]=$id;
              $id;
       $title = $row["title"];
	$description = $row["description"];
         $job_type=$row["job_type"];
	$location = $row["location"];
	$skills= $row["skills"];
	$remote = $row["remote"];
	$salary = $row["salary"];
         $time_elapsed = timeAgo("$row[job_date]");
         $time_elapsed;
         $company_name = $row["company_name"];
         $company_url = $row["company_url"];
         $profile_photo = $row["profile_photo"];
         $level = $row["level"];
         $job_date = $row["job_date"];
         $apply = $row["apply"];
         $apply_urlu = $row["apply_urlu"];

  ?>


    <div class="content">


      <hr>
             <h1><?php echo $title;?></h1>
                    <br>
                      <ul style="text-transform: uppercase;">
                         <h4>

                         <li>
                          Headquarters:&nbsp;<?php echo $location;?>
                         </li>
                           </ul>
                           <ul style="text-transform: uppercase;">
                         <li>

                         <?php echo $skills;?>
                         </li>
                          </ul>
                         <ul style="text-transform: uppercase;">
                         <li>

                         <?php echo $level;?>  </li>
                         </h4>
                      </ul>
                                   <hr>

                <p style="color:blue;">Posted :<?php echo $job_date;?> </p> <br>
              <div class="desc">
             <?php echo $description;?><br><hr></div>
              <div class="apply">
               <h3>Apply for this position:</h3>
               <p><?php echo  $apply_urlu;?></p> </div>
             <br>
          </div>
    <br>


     <div class="sidebar">

      <h4>Company Details</h4><hr>
      <?php
      if($profile_photo==""){
                       $profile_photo2="../imagess/company-blank-hiring.png";
                       }else{
                           $profile_photo2="../product_images/$profile_photo";
                         }     ?>
     <center> <img src="<?php echo $profile_photo2;?>" alt="<?php echo $title;?>" width="150px" height="100px">  </center>
      <li><center> <h3 style=" color:blue;"><?php echo"<a href=http://$company_url rel='nofollow'>";?><?php echo $company_name;?></a></h3></center></li>
      <li><center><h5><?php echo $company_url;?></h5></center></li>

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

      <br>
      <hr>
              <?php }
              ?>

  </div>
</div>
</body>
<?php include_once "footer.php";?>
</html>