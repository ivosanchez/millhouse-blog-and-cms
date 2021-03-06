<?php
require 'partials/session.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
require 'head.php';
require 'partials/database.php';
require 'partials/functions.php'; 

$user = $_SESSION["user"]["id"];
$posttoedit = $_GET["posttoedit"];

    $statement = $pdo->prepare("
    SELECT id, user, title, post, category, image FROM posts WHERE id = :posttoedit
    ");
    $statement->execute(array(
    ":posttoedit" => $posttoedit
    ));
    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    // CHECKING IF SESSION ID IS MATCHING ID OF THE USER WHO WROTE THE BLOGPOST
    // OR IS 1 = ID OF ADMIN. IF NOT, SHOW ERROR MESSAGE
    foreach($posts as $safe_check){
        if(!($_SESSION["user"]["id"] == ($safe_check["user"] || "1"))){
                echo "Du har inte behörighet till denna sida.";
                    //header("Location: ../error.php");
        }else{ ?>
<body>
    <?php
    require 'nav.php';
    ?>
    <div class="container">



        <div class="row">
            <div class="col-xs-12 col-md-12">
    

<?php

 foreach($posts as $poster){ 
?>
 

 <div class="container mt-5">
  <h4>Redigera inlägg:</h4>
  
  <form action="partials/edit_post.php" method="POST" enctype="multipart/form-data">
  
    <div class="form-group">
        <input type="hidden" name="user" value="<?= $_SESSION["user"]["id"]; ?> " class="form-control">
    </div>
  
    <div class="form-group">
      <label for="post_title"> Rubrik: </label>
      <input type="text" name="post_title" value="<?= $poster["title"]; ?>" class="form-control">
    </div>
   
    <div class="form-group">
      <label for="new_post"> Inlägg: </label>
        <textarea type="text" name="new_post" id="editor">
            <?= $poster["post"]; ?>
        </textarea>
    </div>
    
    <div class="form-group">
      <input type="hidden" name="blog_id" value="<?= $poster["id"]; ?>" class="form-control">
    </div>
    
    <div class="form-group">
      <label for="sel1">Select list:</label>
      <select class="form-control" name="category" value="<?= $poster["category"]; ?>" id="sel1">
        <option>Solglasögon</option>
        <option>Klockor</option>
        <option>Inredning</option>
      </select>
    </div>
     
        <div class="form-group">
          <label for="new_post">Bild (valfritt): </label>
          <input type="file" name="uploaded_file" value="<?= $poster["image"]; ?>">
        </div>
      
    
    <div class="form-group">
      <input type="submit" class="btn btn-primary">
    </div>
    
  </form>
</div>

<?php

    }

?>



            </div>  
        </div>


    </div> <!-- END DIV / CONTAINER -->

    <?php
    require "footer.php";
    ?>
    



<!--    Detta script är till wysiwyg editorn:-->
    <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


</body>

<?php
        }
    }
?>

</html>