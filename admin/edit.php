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

    <title>Edit Blog</title>
</head>
<body style="background: #141e30;">
<style>
    .file::-webkit-file-upload-button {
        background-color:rgba(255,255,255,0.1);
        margin-bottom:2vh;
        border:none;
        color:white;
    }
</style>
<div class="container mt-5">
    <?php foreach ($query as $q) { ?>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" value='<?php echo $q['id']; ?>' name="id">
            <input type="text" placeholder="Blog Title" class="form-control my-3 bg-dark text-white text-center" name="title" value="<?php echo $q['title']; ?>">
            <input type="text" placeholder="Blog Author" class="form-control my-3 bg-dark text-white text-center" name="author" value="<?php echo $q['author']; ?>">
            
            <div class="form-control my-3 bg-dark text-white text-center">
                <input type="file" name="file" class="file" accept="image/*" value="../blog_images/440px-Blood_donation_at_Fleet_Week_USA.jpeg">
            </div>

            <textarea name="content" class="form-control my-3 bg-dark text-white" cols="30" rows="10"><?php echo $q['content']; ?></textarea>
            <button class="btn btn-dark" name="update">Update</button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="view.php?id=<?php echo $q['id']; ?>" class="btn btn-dark" name="back">Go Back</a>
        </form>
    <?php } ?>    
</div>


    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>