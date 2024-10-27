<?php
    include "header.php";
    include "logic.php";
?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Admin Blog</title>
    <div class="container mt-5">

        <!-- Display any info -->
        <?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div class="alert alert-success" role="alert">
                    Post has been added successfully
                </div>
            <?php }?>
            <?php if($_REQUEST['info'] == "update"){?>
                <div class="alert alert-success" role="alert">
                    Post has been update successfully!
                </div>
            <?php }?>
            <?php if($_REQUEST['info'] == "delete"){?>
                <div class="alert alert-danger" role="alert">
                    Post has been deleted successfully!
                </div>
            <?php }?>
            <?php if($_REQUEST['info'] == "success"){?>
                <div class="alert alert-success" role="alert">
                    Login Successful!
                </div>
            <?php }?>
        <?php } ?>

        <!-- Create a new Post button -->
        <div class="text-center">
            <a href="create.php" class="btn btn-outline-dark" style="color:white;">+ Create a new post</a>
        </div>
       

    <section class="text-gray-600 body-font">
  <div class="container mx-auto">
  <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900" style="text-align:center;color:white;font-family:cursive;">Blog Post</h1>
    <div class="flex flex-wrap -m-4">
        <?php
function myTruncate($string, $limit, $break=".", $pad="...")
{
  // return with no change if string is shorter than $limit
  if(strlen($string) <= $limit) return $string;

  // is $break present between $limit and the end of the string?
  if(false !== ($breakpoint = strpos($string, $break, $limit))) {
    if($breakpoint < strlen($string) - 1) {
      $string = substr($string, 0, $breakpoint) . $pad;
    }
  }

  return $string;
}
        function nl2br2($string) {
$string = str_replace(array("\r\n", "\r", "\n"), "<br />", $string);
return $string;
}
        foreach($query as $q){
            
          $date = date( 'F j, Y', strtotime( $q['created_on']) );
          $time = date( 'g:i a', strtotime( $q['created_on'] ) );
          $shortdesc = myTruncate($q['content'], 100);
          $newlinedesc = nl2br2($shortdesc);
?>
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-400 border-opacity-60 rounded-lg overflow-hidden" >
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="../blog_images/<?php echo $q['images'];  ?>" alt="blog">
          <div class="p-6">
          <p class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1" style="color:gray;">By <?php echo $q['author'];?></p>
            <p class="title-font text-lg font-medium text-gray-900 mb-3" style="font-weight:bold;color:white;"><a href="view.php?id=<?php echo $q['id']?>"><?php echo $q['title']; ?></a></p>
            <p class="mb-3"><?php echo $newlinedesc; ?></p>
            <div class="flex items-center flex-wrap ">
              <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0" href="view.php?id=<?php echo $q['id']?>">Learn More
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
              <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-500">
              <?php echo "<a  style='color:gray;'>".$date."</a>";?>
              </span>
              <span class="text-gray-400 inline-flex items-center leading-none text-sm">
              <?php echo "<a  style='color:gray;'>".$time."</a>";?>
              </span>
            </div>
          </div>
        </div>
      </div>
      <?php
    } 
    ?>
    </div>
    </div>
  </div>
</section>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>