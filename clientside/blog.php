<?php
    include 'cHeader.php';
    include "../admin/logic.php";

?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Blog</title>
    <section class="text-gray-600 body-font">
  <div class="container mx-auto">
  <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900" style="text-align:center;">Our Blog</h1>
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
        foreach($query as $q){
            $id = $q['id'];
          $date = date( 'F j, Y', strtotime( $q['created_on']) );
          $time = date( 'g:i a', strtotime( $q['created_on'] ) );
          $shortdesc = myTruncate($q['content'], 200);
?>
      <div class="p-4 md:w-1/3">
        <div class="h-full border-2 border-gray-400 border-opacity-60 rounded-lg overflow-hidden" >
          <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="../blog_images/<?php echo $q['images'];  ?>" alt="blog">
          <div class="p-6">
          <p class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1" style="color:gray;">Author: <?php echo $q['author'];?></p>
            <p class="title-font text-lg font-medium text-gray-900 mb-3" style="font-weight:bold;"><a href="blogview.php?id=<?php echo $q['id']?>">Blog Title: <?php echo $q['title']; ?></a></p>
            <p class="leading-relaxed mb-3">Content: <?php echo $shortdesc; ?></p>
            <div class="flex items-center flex-wrap ">
              <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0" href="blogview.php?id=<?php echo $q['id']?>" target="_blank">Learn More
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
            <div class="mb-3">
            <?php
            // Prepare the SQL statement
$sql = "SELECT AVG(user_rating) as average FROM review_table WHERE page_id = :page_id";
$stmt = $conn->prepare($sql);

// Bind the :page_id parameter
$stmt->bindParam(':page_id', $id, PDO::PARAM_INT);

// Execute the statement
$stmt->execute();

// Fetch the result
$rating_result = $stmt->fetch(PDO::FETCH_ASSOC);

// Initialize variables
foreach($rating_result as $r){
    $user_rating_array = array($rating_result['average']); // Store the average rating
    $user_rating = array_sum($user_rating_array);
    $count_array = array($id); // Assuming you want to count the number of pages with the given id
    $count = count($count_array);
        $average = $user_rating / $count;
        $rating = $average;

            ?>  

<p>
    <div class="placeholder" style="color: lightgray;">
        <i class="far fa-star" style="color:darkgray;"></i>
        <i class="far fa-star" style="color:darkgray;"></i>
        <i class="far fa-star" style="color:darkgray;"></i>
        <i class="far fa-star" style="color:darkgray;"></i>
        <i class="far fa-star" style="color:darkgray;"></i>
    </div>

    <div class="overlay" style="position: relative;top: -24px;">
        <?php
        while($rating>0){
            if($rating >0.5){
              ?>
                <i class="fas fa-star" style="color:yellow;"></i>
                <?php
            }else{
              ?>
                <i class="fas fa-star-half" style="color:yellow;"></i>
                <?php
            }
            $rating--;
        }
?>
    </div> 
</p>
<?php
            }
              ?>
	    				</div>
              
          </div>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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