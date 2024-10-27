<?php
include 'cHeader.php';
    // Don't display server errors 
    ini_set("display_errors", "off");
$rss = new DOMDocument();
$feed = array();

$urlarray = array(
        array( 'url' => 'http://news.google.com/news?q='.$_REQUEST['title'].'&hl=en-US&sort=date&gl=IN&num=25&output=rss' ),
      );
foreach ( $urlarray as $url ) {
  $rss->load( $url['url'] );

  foreach ( $rss->getElementsByTagName( 'item' ) as $node ) {
  $item = array(
    'site'  => $node->getElementsByTagName( 'source' )->item( 0 )->nodeValue,
    'title' => $node->getElementsByTagName( 'title' )->item( 0 )->nodeValue,
    'creator' => $node->getElementsByTagName( 'creator' )->item( 0 )->nodeValue,
    'desc'  => $node->getElementsByTagName( 'description' )->item( 0 )->nodeValue,
    'link'  => $node->getElementsByTagName( 'link' )->item( 0 )->nodeValue,
    'date'  => $node->getElementsByTagName( 'pubDate' )->item( 0 )->nodeValue,
  );

  array_push( $feed, $item );
  }
}
usort( $feed, function( $a, $b ) {
  return strtotime( $b['date'] ) - strtotime( $a['date'] );
});


?>
        <title>RSS Zone</title>
        <link href="../css/bootblog.css" rel="stylesheet" />
        <!-- Page header with logo and tagline-->
        <header class="py-3 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-3">
                    <h2 class="fw-bolder" style="font-family:cursive;">Welcome to News Zone!</h2>
                </div>
            </div>
        </header>
        <?php
        $site = $feed[ 0 ]['site'];
        $creator =$feed[ 0 ]['creator'];
      $title = $feed[ 0 ]['title'];
      $link = $feed[ 0 ]['link'];
      $date = date( 'F j, Y', strtotime( $feed[ 0 ]['date'] ) )
?>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="small text-muted">From: <?php echo $site;?></div>
                            <h2 class="card-title"><?php echo $title; ?></h2>
                            <div class="small text-muted"><?php echo $creator;?> on <?php echo $date;?></div>
                            <a class="btn btn-primary" href="<?php echo $link;?>" target="_blank">To Learn more, Visit Site →</a>
                        </div>
                    </div>
            <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                    <?php
    for ( $a = 0; $a < 1; $a++ ) {
        for ( $x = 1; $x < 21; $x++ ) {
      $site = $feed[ $x ]['site'];
      $creator = $feed[ $x ]['creator'];
      $title = $feed[ $x ]['title'];
      $link = $feed[ $x ]['link'];
      $date = date( 'F j, Y', strtotime( $feed[ $x ]['date'] ) );
      $tagremove= preg_replace("/href/i","", $shortdesc2);
?>
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="small text-muted">From: <?php echo $site;?></div>
                                    <h5 class="card-title h4" style="font-weight:bold;"><?php echo $title; ?></h5>
                                    <div class="small text-muted"><?php echo $creator;?> on <?php echo $date;?></div>
                                    <a class="btn btn-primary" href="<?php echo $link;?>"target="_blank">To Learn more, Visit Site →</a>
                                </div>
                            </div>
                        </div>
                        <?php
       
    }
    }
                        ?>
                    </div>
    
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4" id="sidewidget">
                    <!-- Categories widget-->
                    <div class="card mb-4">
                    <div class="card-header"><form action="" method="GET" style="text-align:center;"class="mt-3"><input type="search" class="form-control" name="title" style="width:60%; display:inline;" placeholder="Search Topic" required><button  class="btn btn-primary">Search</button></form></div>
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="?title=covid-19">Covid-19</a></li>
                                        <li><a href="?title=health">Health</a></li>
                                        <li><a href="?title=sport">Sports</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="?title=food">Food</a></li>
                                        <li><a href="?title=politics">Politics</a></li>
                                        <li><a href="?title=blood-donation">Blood Donation</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">States</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="?title=andrapradesh">Andra Pradesh</a></li>
                                        <li><a href="?title=assam">Assam</a></li>
                                        <li><a href="?title=chhattisgarh">Chhattisgarh</a></li>
                                        <li><a href="?title=gujarat">Gujarat</a></li>
                                        <li><a href="?title=himachalpradesh">Himachal Pradesh</a></li>
                                        <li><a href="?title=karnataka">Karnataka</a></li>
                                        <li><a href="?title=madhyapradesh">Madhya Pradesh</a></li>
                                        <li><a href="?title=manipur">Manipur</a></li>
                                        <li><a href="?title=mizoram">Mizoram</a></li>
                                        <li><a href="?title=odisha">Odisha</a></li>
                                        <li><a href="?title=rajasthan">Rajasthan</a></li>
                                        <li><a href="?title=tamilnadu">Tamil Nadu</a></li>
                                        <li><a href="?title=tripura">Tripura</a></li>
                                        <li><a href="?title=uttarpradesh">Uttar Pradesh</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="?title=arunachalpradesh">Arunachal Pradesh</a></li>
                                        <li><a href="?title=bihar">Bihar</a></li>
                                        <li><a href="?title=goa">Goa</a></li>
                                        <li><a href="?title=haryana">Haryana</a></li>
                                        <li><a href="?title=jharkhand">Jharkhand</a></li>
                                        <li><a href="?title=kerala">Kerala</a></li>
                                        <li><a href="?title=maharashtra">Maharashtra</a></li>
                                        <li><a href="?title=megalaya">Meghalaya</a></li>
                                        <li><a href="?title=nagaland">Nagaland</a></li>
                                        <li><a href="?title=punjab">Punjab</a></li>
                                        <li><a href="?title=sikkim">Sikkim</a></li>
                                        <li><a href="?title=telangana">Telangana</a></li>
                                        <li><a href="?title=uttarakhand">Uttarakhand</a></li>
                                        <li><a href="?title=westbengal">West Bengal</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <style>
                    #sidewidget li a{
                        text-decoration:none;
                    }
                </style>
                    <div class="card mb-4">
                        <div class="card-header">Country</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="?title=india">India</a></li>
                                        <li><a href="?title=america">America</a></li>
                                        <li><a href="?title=canada">Canada</a></li>
                                        <li><a href="?title=bangladesh">Bangladesh</a></li>
                                        <li><a href="?title=afganistan">Afganistan</a></li>
                                        <li><a href="?title=germany">Germany</a></li>
                                        <li><a href="?title=finland">Finland</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="?title=japan">Japan</a></li>
                                        <li><a href="?title=china">China</a></li>
                                        <li><a href="?title=nepal">Nepal</a></li>
                                        <li><a href="?title=russia">Russia</a></li>
                                        <li><a href="?title=england">England</a></li>
                                        <li><a href="?title=australia">Australia</a></li>
                                        <li><a href="?title=bhutan">Bhutan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/bootscripts.js"></script>
    </body>
</html>
