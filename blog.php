<!DOCTYPE html>
<html>

<body>
<?php include_once "head/header.php";?>
<?php
if(isset($_GET["search"])){
   $title= $_GET["search"];
     include_once "connect.php";
               $sql=mysql_query("select * from blog where url = '$title'");
               $row = mysql_fetch_array($sql);
        $title = $row["title"];
       $description = $row["description"];
        $profile_photo = $row["profile_photo"];
                   $sdesc= $row["sdesc"];
    echo "<head>
	<title>$title</title>
	<link href='style.css' rel='stylesheet'>
";

  ?>
    <meta name="description" content="<?php echo $sdesc;?>"/>
<meta name="robots" content="noodp"/>
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Remote Job seekers Blog.Get ideas on Remote Work" />
<meta property="og:description" content="Remotejobseekers.com blog will give you an idea what is needed in the job market and how to accomplish the mission of getting job." />
<meta property="og:url" content="https://remotejobseekers.com/blog" />
<meta property="og:site_name" content="remotejobseekers.com" />
</head>
<div id="banner-wrapper">


      <section class="one-seven">
      <img src='../imagess/<?php echo $profile_photo;?>' alt='<?php echo $title;?>'>
      <h1><?php echo $title;?></h1>
                <p>
                   <?php echo $description;?>

                </p>
      </section>
 </div>
<?php
}else{
   echo "<head>
	<title>Remote Job seekers Blog.Get ideas on Remote Work</title>

	<link href='style.css' rel='stylesheet'>
";
  ?>
    <meta name="description" content="Remotejobseekers.com blog will give you an idea what is needed in the job market and how to accomplish the mission of getting job."/>
<meta name="robots" content="noodp"/>
<link rel="canonical" href="https://remotejobseekers.com/blog" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Remote Job seekers Blog.Get ideas on Remote Work" />
<meta property="og:description" content="Remotejobseekers.com blog will give you an idea what is needed in the job market and how to accomplish the mission of getting job." />
<meta property="og:url" content="https://remotejobseekers.com/blog" />
<meta property="og:site_name" content="remotejobseekers.com" />

</head>
  <div id="banner-wrapper">
<section class="one-seven">
              <h1>Remote Jobs Blog</h1>
              <?php
              include_once "connect.php";
               $sql=mysql_query("select * from blog");
               while($row = mysql_fetch_array($sql)) {
                   $job_title = $row["title"];
                   $url= $row["url"];
                   $sdesc= $row["sdesc"];
                   $date= $row["date"];
                   $profile_photo= $row["profile_photo"]; ?>
                    <div class="one-half">
                   <a href="blog.php?search=<?php echo $url;?>"><img src='../imagess/<?php echo $profile_photo;?>'  alt='<?php echo $job_title;?>'>
                   <h3> <?php echo $job_title;?></h3></a>
                   <p><?php echo $sdesc;?></p>
                   </div>
                   <?php
               }
                 }?>
        </section>
        <?php include_once "sidebar.php";?>
  </div>

        <?php include_once "footer.php";?>