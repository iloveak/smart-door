<?php include("head.php"); 

?>
<div class="container" style="margin:5%">

      <div class="col-sm-6">
      <button type="button"  onclick="location.href='files.php?user=true'" class="btn btn-lg btn-success btn-block">
      <a class="fa fa-folder-open" id="buttonIcon"></a>Users Login
      </button><br>
      </div>

   
      <div class="col-sm-6">
      <button type="button" onclick="location.href='files.php?visitor=true'" class="btn btn-lg btn-danger btn-block">
      <a class="fa fa-folder-open" id="buttonIcon"></a>Visitor
      </button><br>
      </div>
           
  
  <div class="images">
      <?php 
      
      function visitor(){
   
    
$dir = "face/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
    ?>
    <div class="col-sm-3">
     <?php echo "<img src='$dir/$file'><br>".$file; ?>
      </div>
<?php    }
    closedir($dh);
  }
}    
}
function user(){
   
    
$dir = "face/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
    ?>
    <div class="col-sm-3">
     <?php echo "<img src='$dir/$file'><br>".$file; ?>
      </div>
<?php    }
    closedir($dh);
  }
}    
}


if (isset($_GET['user'])) {
    user();
  }
if (isset($_GET['visitor'])){
    visitor();
}

      ?>  
            
  </div>
   
    
      <div>
   <form action="index.php">
   <button type="submit" class="fas fa-home" id='home'></button>
   </form>
    </div>
</div>
    
 
 <?php include("footer.php"); ?>