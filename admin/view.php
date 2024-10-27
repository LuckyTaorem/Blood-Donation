<?php
    include "header.php";
    include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>View Blog</title>
</head>
<body style="background: #141e30;">

   <div class="container mt-5">

        <?php
        function nl2br2($string) {
$string = str_replace(array("\r\n", "\r", "\n"), "<br />", $string);
return $string;
}
        foreach($query as $q){
            $date = date( 'F j, Y', strtotime( $q['created_on']) );
            $time = date( 'g:i a', strtotime( $q['created_on'] ) );    
            $newlinedesc = nl2br2($q['content']);
            ?>
            <div class="bg-dark p-5 rounded-lg text-white text-center">
            <img src="../blog_images/<?php echo $q['images']; ?>" style="width:60%;">
                <h2><?php echo $q['title'];?></h2>

                <div class="d-flex mt-2 justify-content-center align-items-center">
                    <form method="POST">
                    <a href="edit.php?id=<?php echo $q['id']?>" class="btn btn-light btn-sm ml-2" name="edit">Edit</a>
                        <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                        <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
                    </form>
                </div>

            </div>
            <legend style="color:white;">Author: </legend>
            <p class="mt-5 border-left border-dark pl-3" style="color:white; display:inline;"><?php echo $q['author'];?></p>
            <br><br>
            <legend style="color:white;">Content: </legend>
            <p class="mt-5 border-left border-dark pl-3" style="color:white; display:inline;"><?php echo $newlinedesc;?></p>
            <br><br>
            <legend style="color:white;">Published on: </legend>
            <span class="text-white mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-white">
              <?php echo "<a  style='color:white;'>".$date."</a>";?>
              |
              <?php echo "<a  style='color:white;'>".$time."</a>";?>
              </span>
        <?php } ?>    

        <a href="admin.php" class="btn btn-outline-dark my-3" style="color:white; display:block; width:fit-content;">Go Back</a>
   </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>