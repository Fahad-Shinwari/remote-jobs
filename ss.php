<!DOCTYPE html>
<html lang="en">
  <body>
<?php include_once "head/header.php";?>
<div id="banner-wrapper">
<?php isset($_GET["s"]);
$skills= $_GET["s"];
 isset($_GET["keywords"]);
 $keyword= $_GET["keywords"];
?>

      <h1>Remote <?php echo $skills;?> Jobs</h1>
       <p>Looking for a remote job ? Remote job seekers is the perfect platform to work remote . Browse openings in developers, marketing, customer services, design
          and more below. Find a job and start working from home. It is the best place to find remote jobs because it gives best remote job
          opportunities in the most recruited job categories
       </p>
      <section class="one-seven">

<!-- Microdata markup added by Google Structured Data Markup Helper. -->

<head>
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=593d80b2699595001138ac71&product=sticky-share-buttons"></script>
     	<link href="../style.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php
  if(isset($_GET["s"])){
    $skills= $_GET["s"];



?>
    <title>Remote <?php echo $skills; ?> jobs | Remote Job seekers</title>
    <meta name="robots" content="noodp"/>
<link rel="canonical" href="https://remotejobseekers.com/category/<?php echo $skills; ?>" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
 <meta name="description" content="Remote jobs for you.Start your <?php echo $skills; ?> career and work from home Online.
" />
<meta property="og:url" content="https://remotejobseekers.com/category/<?php echo $skills; ?>" />
<meta property="og:site_name" content="Remotejobseekers.com" />
  <?php  } else { ?>
      <title>Remote jobs:Telecommute,work from home,online jobs|Remote Job seekers</title>
 <?php }  ?>
        <link rel="icon" href="../img/remote job seekers logo.png" type="image/png">

          <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <!-- SEO Meta Data -->
        <meta name="keywords" content="remote jobs , remote jobseekers ,online jobs ,work from home, Remote job search, Remote search engine, work in Remote" />




</head>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "Remote job seekers",
  "url": "https://remotejobseekers.com/remote-jobs",
  "logo": "https://remotejobseekers.com/img/remote job seekers logo.png",
  "sameAs": [
    "https://www.facebook.com/remotejobseekers/",
    "https://twitter.com/RemoteJobseek",
    "https://plus.google.com/118210118294483029358"
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "name": "Remote job seekers",
  "url": "https://remotejobseekers.com/remote-jobs"

}
</script>

 <?php     session_start();
       error_reporting (0);

          session_destroy();
        unset($query);

                         isset($_GET["keywords"]);
                          isset($_GET["skills"]);
                           isset($_GET["type"]);
                            isset($_GET["sal"]);
   $title= addslashes($_GET["keywords"]);
                        $skill= addslashes($_GET["skills"]);
                        $type=addslashes($_GET["type"]);
                        $sal= addslashes($_GET["sal"]);

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
    //$time_elapsed=timeAgo();
    ?>


<meta name="google-play-app" content="app-id=remotejobs">

   </head>



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






                <?php
             if(isset($_GET["s"])){
   $s= $_GET["s"];
    include "connect.php";

    $val2 = date("Y-m-d h:i:sa");

//////////////  QUERY THE MEMBER DATA USING THE $queryString variable's value        ER DATA USING THE $queryString variable's value
$sql = mysql_query("SELECT * FROM skip WHERE skills LIKE '%$s%' && on_off=1 && exp_date >'$val2' ORDER BY id DESC");
//////////////////////////////////// Adam's Pagination Logic ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 $nr = mysql_num_rows($sql); // Get total of Num rows from the database query

         echo "<h2>REMOTE $s JOBS</h2>";
          echo "<ul><a href='../remote-jobs/'><li><h3>Go to Home</h3></li></a></ul> <hr>";
while($row = mysql_fetch_array($sql)) {


       $id = $row["id"];
        $job_title = $row["title"];
          $job_company= $row["company_name"];
        date_default_timezone_set('Asia/Karachi');
           $exp_date = $row["exp_date"];

           $time_elapsed = timeAgo($row["job_date"]);
         $time_elapsed;
           $val1 = $exp_date;
           $val2 = date("Y-m-d h:i:sa");

$datetime1 = new DateTime($val1);
$datetime2 = new DateTime($val2);

         ?>

           <!--job starts here-->

       <ul><li class="job"><a href='../viewjob/<?php echo $id;?>'><?php echo $job_title;?></a></li><li class="company"><?php echo $job_company;?></li><li class="lit"><?php echo $time_elapsed;?></li></ul>
       <hr>

       <?php

         } echo "<br><br>";
             }elseif(isset($_GET["keywords"])){
                $keyword= $_GET["keywords"];
               include "connect.php";

    $val2 = date("Y-m-d h:i:sa");

//////////////  QUERY THE MEMBER DATA USING THE $queryString variable's value        ER DATA USING THE $queryString variable's value
$sql = mysql_query("SELECT * FROM skip WHERE (skills||title||description LIKE '%$keyword%') && on_off=1 && exp_date >'$val2' ORDER BY id DESC");
//////////////////////////////////// Adam's Pagination Logic ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 $nr = mysql_num_rows($sql); // Get total of Num rows from the database query

         echo "<h2>SEARCH RESULTS:</h2>";
          echo "<ul><a href='ss.php'><li><h3>Go to Home</h3></li></a></ul> <hr>";
while($row = mysql_fetch_array($sql)) {


       $id = $row["id"];
        $job_title = $row["title"];
          $job_company= $row["company_name"];
        date_default_timezone_set('Asia/Karachi');
           $exp_date = $row["exp_date"];

           $time_elapsed = timeAgo($row["job_date"]);
         $time_elapsed;
           $val1 = $exp_date;
           $val2 = date("Y-m-d h:i:sa");

$datetime1 = new DateTime($val1);
$datetime2 = new DateTime($val2);

         ?>

           <!--job starts here-->

       <ul><li class="job"><a href='../viewjob/<?php echo $id;?>'><?php echo $job_title;?></a></li><li class="company"><?php echo $job_company;?></li><li class="lit"><?php echo $time_elapsed;?></li></ul>
       <hr>

       <?php

         }
             echo "<br><br>";
               }else{
include "connect.php";

    $val2 = date("Y-m-d h:i:sa");

//////////////  QUERY THE MEMBER DATA USING THE $queryString variable's value        ER DATA USING THE $queryString variable's value
$sql = mysql_query("SELECT * FROM skip WHERE skills LIKE 'Design-and-User-Experience' && on_off=1 && exp_date >'$val2' ORDER BY id DESC");
//////////////////////////////////// Adam's Pagination Logic ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 $nr = mysql_num_rows($sql); // Get total of Num rows from the database query
   if($nr>0){
         echo "<a href='../ss.php?s=design'><h2>REMOTE DESIGN JOBS</h2></a>";
 $sql = mysql_query("SELECT * FROM skip WHERE skills LIKE 'Design-and-User-Experience' && on_off=1 && exp_date >'$val2' ORDER BY id DESC limit 0,3");

while($row = mysql_fetch_array($sql)) {


       $id = $row["id"];
        $job_title = $row["title"];
          $job_company= $row["company_name"];
        date_default_timezone_set('Asia/Karachi');
           $exp_date = $row["exp_date"];

           $time_elapsed = timeAgo($row["job_date"]);
         $time_elapsed;
           $val1 = $exp_date;
           $val2 = date("Y-m-d h:i:sa");

$datetime1 = new DateTime($val1);
$datetime2 = new DateTime($val2);

         ?>

           <!--job starts here-->

       <ul><li class="job"><a href='../preview/<?php echo $id;?>'><?php echo $job_title;?></a></li><li class="company"><?php echo $job_company;?></li><li class="lit"><?php echo $time_elapsed;?></li></ul>
       <hr>

        <?php

         }  ?>
        <p><a href="../ss.php?s=design">View all <?php echo $nr;?> REMOTE DESIGN JOBS</a></p><hr>

       <br>
        <?php  }  ?>

 <?php

       $sql = mysql_query("SELECT * FROM skip WHERE skills LIKE 'Front-end-Engineering' && on_off=1 && exp_date >'$val2' ORDER BY id DESC");
//////////////////////////////////// Adam's Pagination Logic ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 $nr = mysql_num_rows($sql); // Get total of Num rows from the database query
          if($nr>0){
         echo "<a href='../ss.php?s=Front-end-Engineering'><h2>REMOTE Front-end-Engineering JOBS</h2></a>";
       $sql = mysql_query("SELECT * FROM skip WHERE skills LIKE 'Front-end-Engineering' && on_off=1 && exp_date >'$val2' ORDER BY id DESC limit 0,3");
while($row = mysql_fetch_array($sql)) {

       $id = $row["id"];
        $job_title = $row["title"];
          $job_company= $row["company_name"];
        date_default_timezone_set('Asia/Karachi');
           $exp_date = $row["exp_date"];

           $time_elapsed = timeAgo($row["job_date"]);
         $time_elapsed;
           $val1 = $exp_date;
           $val2 = date("Y-m-d h:i:sa");

$datetime1 = new DateTime($val1);
$datetime2 = new DateTime($val2);

         ?>

           <!--job starts here-->

       <ul><li class="job"><a href='../preview/<?php echo $id;?>'><?php echo $job_title;?></a></li><li class="company"><?php echo $job_company;?></li><li class="lit"><?php echo $time_elapsed;?></li></ul>
       <hr>

        <?php  }  ?>
        <p><a href="../ss.php?s=Front-end-Engineering">View all <?php echo $nr;?> REMOTE Front-end-Engineering JOBS</a></p><hr>

       <br>
        <?php  }  ?>

 <?php

       $sql = mysql_query("SELECT * FROM skip WHERE skills LIKE 'Back-end-Engineering' && on_off=1 && exp_date >'$val2' ORDER BY id DESC");
//////////////////////////////////// Adam's Pagination Logic ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 $nr = mysql_num_rows($sql); // Get total of Num rows from the database query
           if($nr>0){
         echo "<a href='../ss.php?s=Back-end-Engineering'><h2>REMOTE Back-end-Engineering JOBS</h2></a>";
       $sql = mysql_query("SELECT * FROM skip WHERE skills LIKE 'Back-end-Engineering' && on_off=1 && exp_date >'$val2' ORDER BY id DESC limit 0,3");
while($row = mysql_fetch_array($sql)) {

       $id = $row["id"];
        $job_title = $row["title"];
          $job_company= $row["company_name"];
        date_default_timezone_set('Asia/Karachi');
           $exp_date = $row["exp_date"];

           $time_elapsed = timeAgo($row["job_date"]);
         $time_elapsed;
           $val1 = $exp_date;
           $val2 = date("Y-m-d h:i:sa");

$datetime1 = new DateTime($val1);
$datetime2 = new DateTime($val2);

         ?>

           <!--job starts here-->

       <ul><li class="job"><a href='../preview/<?php echo $id;?>'><?php echo $job_title;?></a></li><li class="company"><?php echo $job_company;?></li><li class="lit"><?php echo $time_elapsed;?></li></ul>
       <hr>

        <?php  }  ?>
        <p><a href="../ss.php?s=Back-end-Engineering">View all <?php echo $nr;?> REMOTE Back-end-Engineering JOBS</a></p><hr>

       <br>
        <?php  }  ?>

 <?php

       $sql = mysql_query("SELECT * FROM skip WHERE skills LIKE 'Apps' && on_off=1 && exp_date >'$val2' ORDER BY id DESC");
//////////////////////////////////// Adam's Pagination Logic ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 $nr = mysql_num_rows($sql); // Get total of Num rows from the database query
         if($nr>0){
         echo "<a href='../ss.php?s=Apps'><h2>REMOTE Apps JOBS</h2></a>";
       $sql = mysql_query("SELECT * FROM skip WHERE skills LIKE 'Apps' && on_off=1 && exp_date >'$val2' ORDER BY id DESC limit 0,3");
while($row = mysql_fetch_array($sql)) {

       $id = $row["id"];
        $job_title = $row["title"];
          $job_company= $row["company_name"];
        date_default_timezone_set('Asia/Karachi');
           $exp_date = $row["exp_date"];

           $time_elapsed = timeAgo($row["job_date"]);
         $time_elapsed;
           $val1 = $exp_date;
           $val2 = date("Y-m-d h:i:sa");

$datetime1 = new DateTime($val1);
$datetime2 = new DateTime($val2);

         ?>

           <!--job starts here-->

       <ul><li class="job"><a href='../preview/<?php echo $id;?>'><?php echo $job_title;?></a></li><li class="company"><?php echo $job_company;?></li><li class="lit"><?php echo $time_elapsed;?></li></ul>
       <hr>

        <?php  }  ?>
        <p><a href="../ss.php?s=Apps">View all <?php echo $nr;?> REMOTE Apps JOBS</a></p><hr>

       <br>
         <?php  }  ?>
 <?php
       $sql = mysql_query("SELECT * FROM skip WHERE skills LIKE 'Product-Management' && on_off=1 && exp_date >'$val2' ORDER BY id DESC");
//////////////////////////////////// Adam's Pagination Logic ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 $nr = mysql_num_rows($sql); // Get total of Num rows from the database query
       if($nr>0){
         echo "<a href='../ss.php?s=Product-Management'><h2>REMOTE Product-Management JOBS</h2></a>";
       $sql = mysql_query("SELECT * FROM skip WHERE skills LIKE 'Product-Management' && on_off=1 && exp_date >'$val2' ORDER BY id DESC limit 0,3");
while($row = mysql_fetch_array($sql)) {

       $id = $row["id"];
        $job_title = $row["title"];
          $job_company= $row["company_name"];
        date_default_timezone_set('Asia/Karachi');
           $exp_date = $row["exp_date"];

           $time_elapsed = timeAgo($row["job_date"]);
         $time_elapsed;
           $val1 = $exp_date;
           $val2 = date("Y-m-d h:i:sa");

$datetime1 = new DateTime($val1);
$datetime2 = new DateTime($val2);

         ?>

           <!--job starts here-->

       <ul><li class="job"><a href='../preview/<?php echo $id;?>'><?php echo $job_title;?></a></li><li class="company"><?php echo $job_company;?></li><li class="lit"><?php echo $time_elapsed;?></li></ul>
       <hr>

        <?php  }  ?>
        <p><a href="../ss.php?s=Product-Management">View all <?php echo $nr;?> REMOTE Product-Management JOBS</a></p><hr>

       <br>
         <?php  }  ?>
 <?php

       $sql = mysql_query("SELECT * FROM skip WHERE skills LIKE 'Content-and-Copywriting' && on_off=1 && exp_date >'$val2' ORDER BY id DESC");
//////////////////////////////////// Adam's Pagination Logic ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 $nr = mysql_num_rows($sql); // Get total of Num rows from the database query
         if($nr>0){
         echo "<a href='../ss.php?s=Content-and-Copywriting'><h2>REMOTE Content-and-Copywriting JOBS</h2></a>";
       $sql = mysql_query("SELECT * FROM skip WHERE skills LIKE 'Content-and-Copywriting' && on_off=1 && exp_date >'$val2' ORDER BY id DESC limit 0,3");
while($row = mysql_fetch_array($sql)) {

       $id = $row["id"];
        $job_title = $row["title"];
          $job_company= $row["company_name"];
        date_default_timezone_set('Asia/Karachi');
           $exp_date = $row["exp_date"];

           $time_elapsed = timeAgo($row["job_date"]);
         $time_elapsed;
           $val1 = $exp_date;
           $val2 = date("Y-m-d h:i:sa");

$datetime1 = new DateTime($val1);
$datetime2 = new DateTime($val2);

         ?>

           <!--job starts here-->

       <ul><li class="job"><a href='../preview/<?php echo $id;?>'><?php echo $job_title;?></a></li><li class="company"><?php echo $job_company;?></li><li class="lit"><?php echo $time_elapsed;?></li></ul>
       <hr>

        <?php  }  ?>
        <p><a href="../ss.php?s=Content-and-Copywriting">View all <?php echo $nr;?> REMOTE Content-and-Copywriting JOBS</a></p><hr>

       <br>
        <?php  }  ?>

 <?php

       $sql = mysql_query("SELECT * FROM skip WHERE skills LIKE 'Marketing-and-Sales' && on_off=1 && exp_date >'$val2' ORDER BY id DESC");
//////////////////////////////////// Adam's Pagination Logic ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 $nr = mysql_num_rows($sql); // Get total of Num rows from the database query
        if($nr>0){
         echo "<a href='../ss.php?s=Marketing-and-Sales'><h2>REMOTE Marketing-and-Sales JOBS</h2></a>";
       $sql = mysql_query("SELECT * FROM skip WHERE skills LIKE 'Marketing-and-Sales' && on_off=1 && exp_date >'$val2' ORDER BY id DESC limit 0,3");
while($row = mysql_fetch_array($sql)) {

       $id = $row["id"];
        $job_title = $row["title"];
          $job_company= $row["company_name"];
        date_default_timezone_set('Asia/Karachi');
           $exp_date = $row["exp_date"];

           $time_elapsed = timeAgo($row["job_date"]);
         $time_elapsed;
           $val1 = $exp_date;
           $val2 = date("Y-m-d h:i:sa");

$datetime1 = new DateTime($val1);
$datetime2 = new DateTime($val2);

         ?>

           <!--job starts here-->

       <ul><li class="job"><a href='../preview/<?php echo $id;?>'><?php echo $job_title;?></a></li><li class="company"><?php echo $job_company;?></li><li class="lit"><?php echo $time_elapsed;?></li></ul>
       <hr>

        <?php  }  ?>
        <p><a href="../ss.php?s=Marketing-and-Sales">View all <?php echo $nr;?> REMOTE Marketing-and-Sales JOBS</a></p><hr>

       <br>
        <?php  }  ?>

 <?php

       $sql = mysql_query("SELECT * FROM skip WHERE skills LIKE 'Customer-and-Community' && on_off=1 && exp_date >'$val2' ORDER BY id DESC");
//////////////////////////////////// Adam's Pagination Logic ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 $nr = mysql_num_rows($sql); // Get total of Num rows from the database query
         if($nr>0){
         echo "<a href='../ss.php?s=Customer-and-Community'><h2>REMOTE Customer-and-Community JOBS</h2>";
       $sql = mysql_query("SELECT * FROM skip WHERE skills LIKE 'Customer-and-Community' && on_off=1 && exp_date >'$val2' ORDER BY id DESC limit 0,3");
while($row = mysql_fetch_array($sql)) {

       $id = $row["id"];
        $job_title = $row["title"];
          $job_company= $row["company_name"];
        date_default_timezone_set('Asia/Karachi');
           $exp_date = $row["exp_date"];

           $time_elapsed = timeAgo($row["job_date"]);
         $time_elapsed;
           $val1 = $exp_date;
           $val2 = date("Y-m-d h:i:sa");

$datetime1 = new DateTime($val1);
$datetime2 = new DateTime($val2);

         ?>

           <!--job starts here-->

       <ul><li class="job"><a href='../preview/<?php echo $id;?>'><?php echo $job_title;?></a></li><li class="company"><?php echo $job_company;?></li><li class="lit"><?php echo $time_elapsed;?></li></ul>
       <hr>

        <?php  }  ?>
        <p><a href="../ss.php?s=Customer-and-Community">View all <?php echo $nr;?> REMOTE Customer-and-Community JOBS</a></p><hr>

       <br>
        <?php  }  ?>

 <?php

       $sql = mysql_query("SELECT * FROM skip WHERE skills LIKE 'Management' && on_off=1 && exp_date >'$val2' ORDER BY id DESC");
//////////////////////////////////// Adam's Pagination Logic ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 $nr = mysql_num_rows($sql); // Get total of Num rows from the database query
         if($nr>0){
         echo "<a href='../ss.php?s=Management'><h2>REMOTE Management JOBS</h2></a>";
       $sql = mysql_query("SELECT * FROM skip WHERE skills LIKE 'Management' && on_off=1 && exp_date >'$val2' ORDER BY id DESC limit 0,3");
while($row = mysql_fetch_array($sql)) {

       $id = $row["id"];
        $job_title = $row["title"];
          $job_company= $row["company_name"];
        date_default_timezone_set('Asia/Karachi');
           $exp_date = $row["exp_date"];

           $time_elapsed = timeAgo($row["job_date"]);
         $time_elapsed;
           $val1 = $exp_date;
           $val2 = date("Y-m-d h:i:sa");

$datetime1 = new DateTime($val1);
$datetime2 = new DateTime($val2);

         ?>

           <!--job starts here-->

       <ul><li class="job"><a href='../preview/<?php echo $id;?>'><?php echo $job_title;?></a></li><li class="company"><?php echo $job_company;?></li><li class="lit"><?php echo $time_elapsed;?></li></ul>
       <hr>

        <?php  }  ?>
        <p><a href="../ss.php?s=Management">View all <?php echo $nr;?> REMOTE Management JOBS</a></p><hr>

       <br>
        <?php  }  ?>

 <?php

       $sql = mysql_query("SELECT * FROM skip WHERE skills LIKE 'Miscellaneous' && on_off=1 && exp_date >'$val2' ORDER BY id DESC");
//////////////////////////////////// Adam's Pagination Logic ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 $nr = mysql_num_rows($sql); // Get total of Num rows from the database query
         if($nr>0){
         echo "<a href='../ss.php?s=Miscellaneous'><h2>REMOTE Miscellaneous JOBS</h2></a>";
       $sql = mysql_query("SELECT * FROM skip WHERE skills LIKE 'Miscellaneous' && on_off=1 && exp_date >'$val2' ORDER BY id DESC limit 0,3");
while($row = mysql_fetch_array($sql)) {

       $id = $row["id"];
        $job_title = $row["title"];
          $job_company= $row["company_name"];
        date_default_timezone_set('Asia/Karachi');
           $exp_date = $row["exp_date"];

           $time_elapsed = timeAgo($row["job_date"]);
         $time_elapsed;
           $val1 = $exp_date;
           $val2 = date("Y-m-d h:i:sa");

$datetime1 = new DateTime($val1);
$datetime2 = new DateTime($val2);

         ?>

           <!--job starts here-->

       <ul><li class="job"><a href='../preview/<?php echo $id;?>'><?php echo $job_title;?></a></li><li class="company"><?php echo $job_company;?></li><li class="lit"><?php echo $time_elapsed;?></li></ul>
       <hr>

        <?php  }  ?>
        <p><a href="../ss.php?s=Miscellaneous">View all <?php echo $nr;?> REMOTE Miscellaneous JOBS</a></p><hr>

       <br> <br>

        <?php  }  }?>
      </section>
      <?php include_once "sidebar.php";?>
      <div class="clearfix"></div>

</div>
 <?php include_once "footer.php";?>
</body>

