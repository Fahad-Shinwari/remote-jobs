<!DOCTYPE html>
<html lang="en">
<head>
       <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({
  selector: 'textarea',
  height: 500,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
  ],
  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });</script>
      <style>
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
      </style>
</head>

<form action="" method="post" enctype="multipart/form-data">
                                   <li>
                                <label>Title</label>
                                <input type="text" name="title"/>
                                  </li>
                                     <li>
                                <label>Short description</label>
                                <input type="text" name="sdesc"/>
                                  </li>

                            <li>
                                <label>Description</label>
                               <textarea name="description" rows="15"></textarea>
                                  </li>
                                <li>
                                <label>Profile photo</label>
                                <input data-val="true" input type="file" name="product_image" style="font-size:20px;"/>
                                  </li>
                          <li>
                               <input type="submit" name="sub" value="submit">
                                  </li>


</form>
<?php

    include_once "connect.php";
   if(isset($_POST["sub"])){
     $date=date("m.M.Y");
     chmod("product_images/",0777);
         $title=$_POST["title"];
         $sdesc=$_POST["sdesc"];
         $description=$_POST["description"];
           $string = str_replace(" ", "-", $title);
            $product_image=$_FILES["product_image"]["name"];
             $product_image_tmp = $_FILES["product_image"]["tmp_name"];
             move_uploaded_file($product_image_tmp,"imagess/$product_image");
           $sql=mysql_query("INSERT INTO `blog` (`id`,`title`, `description`, `url`,`date`,`profile_photo`,`sdesc`) VALUES ('','$title', '".mysql_real_escape_string($description)."',
            '$string','$date'
           ,'$product_image','$sdesc')");
           echo "ok";
   }



?>

</html>