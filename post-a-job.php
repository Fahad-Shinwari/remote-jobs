<?php
 ob_start();
?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
function showDiv(select){
   if(select.value==0){
    document.getElementById('hidden_div').style.display = "block";
    document.getElementById('hidden_div2').style.display = "none";
   } else if(select.value==1){
    document.getElementById('hidden_div2').style.display = "block";
    document.getElementById('hidden_div').style.display = "none";
   }
}
</script>
  <style>
  *{
    margin: 0;
    padding: 0;
  }
  body{
    font-size: 18px;
    font-family: 'verdana',serif;

  }
  h2{
    font-size: 180%;
    color: #41b4bb;
    text-transform: uppercase;
    letter-spacing: 2px;
  }
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .container {
      height: auto;
      width:1200px;
      margin: 0 auto;
    }

    /* Set gray background color and 100% height */
    .content {
       width:73%;
       height: auto;
       margin: 2% 0 3% 3%;
       float: left;
    }
    .sidebar{
      width: 20%;
      height: auto;
      margin: 2% 0 3% 2%;
      float: right;
      background-color: #ccc;
    }
     img{
  max-width: 100%;
 }
      label{
width:300px;
height:100px;
}
     li{
    list-style-type:none;

}
 input{
       width:390px;
       height:40px;
 }
  select{
       width:390px;
       height:40px;
       font-size:20px;
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
   h2{
    font-size: 140%;
   }
  .container{
    width: 96%;
    margin: 0 auto;
  }
  .content{
    width: 100%;
  }
   .sidebar{
    width: 100%;
   }
   input{
     width:100%;
   }
   select{
   width:100%;
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
       <?php  include_once "head/header.php"; ?>
<div class="container">


    <div class="content">
      <h2>Create Your Job Listing</h2>

      <hr>

                         <br> <form action="post-a-job" method="post" enctype="multipart/form-data">
                            <li>
                                <label>Job title</label>
                                <input data-val="true" data-val-required="Required" id="BillingAddress_Zip" name="title"/>
                                  </li>
                                   <hr>
                                             <br>

       <li>
                                <label>Skills</label>
                                  <select name="skills">
                                        <option value="Design-and-User-Experience"> Design and User Experience</option>
                                         <option value="Front-end-Engineering">Front-end Engineering</option>
                                         <option value="Back-end-Engineering">Back-end Engineering</option>
                                          <option value="Apps">Apps</option>
                                         <option value="Product-Management">Product Management</option>
                                         <option value="Content-and-Copywriting">Content and Copywriting</option>
                                         <option value="Marketing-and-Sales">Marketing and Sales</option>
                                          <option value="Customer-and-Community">Customer and Community</option>
                                         <option value="Management">Management</option>
                                          <option value="Miscellaneous">Miscellaneous</option>
                                   </select>  </li>
                                   <hr>

                <br>
       <li>
                                <label>Level</label>
                                  <select name="level">
                                        <option value="founder"> Founder/Co-Founder</option>
                                         <option value="director"> Director/Manager</option>
                                         <option value="lead"> Lead</option>
                                         <option value="senior">Senior</option>
                                         <option value="mid"> Mid</option>
                                         <option value="junior">Junior</option>
                                         <option value="freelancer"> Freelancer</option>
                                         <option value="student"> Student</option>
                                   </select>  </li>
                                   <hr>

                         <br>
       <li>
                                <label>Salary</label>
                                  <select name="salary">
                                         <option value="Salary Negotiable">Salary Negotiable</option>
                                         <option value="29,000"> Under $29,000</option>
                                         <option value="30,000-49,000"> $30,000-$49,000</option>
                                         <option value="50,000-74,000"> $50,000-$74,000</option>
                                          <option value="75,000-99,000"> $75,000-$99,000</option>
                                         <option value="100,000"> $100,000 or more</option>
                                   </select> </li>
                                   <hr>
                                             <br>

       <li>
                                <label>Headquarters:</label>
                                <input data-val="true" data-val-required="Required" placeholder="'San Francisco, CA', 'Seattle', 'London'" id="BillingAddress_Zip" name="location"/>
                                </li>


                                   <hr>
                                             <br>
       <li>
                                <label>Description</label>
                                <textarea name="description" rows="15"></textarea>
 </li>
                                   <hr>
                                             <br>
       <li>

                                <label>Apply for this job through?</label>
                               <input data-val="true" data-val-required="Required" id="BillingAddress_Zip" name="apply_urlu" placeholder="Enter url of web page/Email"/>
                                 <hr>
                                  </li>
                                             <br>
                                              <h2>Company information</h2> <br>
      <hr>
       <li>
                                <label>Company name</label>
                                <input data-val="true" data-val-required="Required" id="BillingAddress_Zip" name="company_name"/>
                                  </li>
                                   <hr>
                                             <br>
       <li>
                                <label>Company url</label>
                                <input data-val="true" data-val-required="Required" id="BillingAddress_Zip" name="company_url"/>
                                  </li>
                                   <hr>

                                             <br>
       <li>
                                <label>Profile photo</label>
                                <input data-val="true" input type="file" data-val-required="Required" id="BillingAddress_Zip" name="product_image" style="font-size:20px;"/>
                                  </li>
                                   <hr>
                                             <br>
                                  <input type="submit" name="sub" value="submit the job">
                                   <br>
                                   <hr>
                                    <br>
                                   </form>
    </div>
     <div class="sidebar">


    </div>
</div>
</body>
</html>

<?php

date_default_timezone_set('Asia/Karachi');
 //$job_time=date("h:i:sa");
  $job_date = date("Y-m-d h:i:sa");
  $datee= date("Y-m-d");
 $date=date_create($datee);
  date_add($date,date_interval_create_from_date_string("30 days"));
 $exp_date= date_format($date,"Y-m-d");
 chmod("product_images/",0777);
          include "connect.php";
       if(isset($_POST["sub"])){
        chmod("product_images/",0777);

            $skills = $_POST["skills"];
            $level = $_POST["level"];
            $salary = $_POST["salary"];
            $title = $_POST["title"];
            $location = $_POST["location"];
            $description = $_POST["description"];
            $apply_urlu = $_POST["apply_urlu"];
               $company_name = $_POST["company_name"];
            $company_url = $_POST["company_url"];
              $highlight_job = $_POST["highlight_job"];
             $product_image=$_FILES["product_image"]["name"];
             $product_image_tmp = $_FILES["product_image"]["tmp_name"];
             move_uploaded_file($product_image_tmp,"product_images/$product_image");
               if(!empty($skills) && !empty($level) && !empty($salary)  && !empty($title)&&  !empty($description)
                && !empty($company_name) && !empty($company_url)){
                 session_start();


               $query="INSERT INTO `skip` (`id`, `skills`, `level`, `salary`, `title`, `location`, `description`,
              `apply_urlu` ,`company_name`, `company_url`,
                 `profile_photo`, `on_off`, `job_date` ,`exp_date`) VALUES ('', '".mysql_real_escape_string($skills)."', '".mysql_real_escape_string($level)."',
                 '".mysql_real_escape_string($salary)."', '".mysql_real_escape_string($title)."', '".mysql_real_escape_string($location)."', '".mysql_real_escape_string($description)."',
                  '".mysql_real_escape_string($apply_urlu)."' ,'".mysql_real_escape_string($company_name)."'
                  , '".mysql_real_escape_string($company_url)."', '".mysql_real_escape_string($product_image)."','1', '$job_date' ,'$exp_date')";

                 $query_run = mysql_query($query);
              echo "<script>alert('congratss... your data has been successfully inserted')</script>";
                 // echo "<script>window.open('about.php','_self')</script>";

              }
                 }
                 */    include_once "footer.php";

                  ?>
