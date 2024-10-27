<?php

    // Don't display server errors 
    ini_set("display_errors", "off");

    // Include the database connection file
    require '../app/db.conn.php';

    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }
    $date = new \DateTime();
    $date->setTimezone(new \DateTimeZone('+0530')); //GMT
    $indiandate = $date->format('Y-m-d H:i:s');
    // Get data to display on admin page
    $sql = "SELECT * FROM blog_data ORDER BY created_on DESC";
$stmt = $conn->prepare($sql);

// Execute the statement
$stmt->execute();

// Fetch all results as an associative array
$query = $stmt->fetchAll(PDO::FETCH_ASSOC);


    // Create a new post
    if(isset($_REQUEST['new_post'])){
        $title = $_REQUEST['title'];
        $author = $_REQUEST['author'];
        $content = $_REQUEST['content'];
        $filename = $_FILES["file"]["name"];
        $tempname = $_FILES["file"]["tmp_name"];  
        $folder = "../blog_images/".$filename;   
        $sql = "INSERT INTO blog_data(title, content,images,created_on,author) VALUES('$title', '$content','$filename','$indiandate','$author')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        if (move_uploaded_file($tempname, $folder)) {

            $msg = "Image uploaded successfully";

        }else{

            $msg = "Failed to upload image";

    }
        echo $msg;
        echo $sql;
        header("Location: admin.php?info=added");
        exit();
    }

    // Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
$sql = "SELECT * FROM blog_data WHERE id = :id ORDER BY created_on DESC";
$stmt = $conn->prepare($sql);

// Bind the :id parameter to the actual $id value
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

// Execute the statement
$stmt->execute();

// Fetch the result
$query = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Delete a post
    if (isset($_REQUEST['delete'])) {
        $id = $_REQUEST['id'];
        
        // Fetch the image path from the database
        $sql = "SELECT images FROM blog_data WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result && !empty($result['images'])) {
            $imagePath = "../blog_images/" . $result['images']; // Adjust the path as needed
            if (file_exists($imagePath)) {
                unlink($imagePath); // Delete the image file from the server
            }
        }
        
        // Now delete the post from the database
        $sql = "DELETE FROM blog_data WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $query = $stmt->execute();
    
        header("Location: admin.php?info=delete");
        exit();
    }
    

    // Update a post
    if (isset($_REQUEST['update'])) {
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $author = $_REQUEST['author'];
        $content = $_REQUEST['content'];
        $filename = $_FILES["file"]["name"];
        $tempname = $_FILES["file"]["tmp_name"];
        $folder = "../blog_images/" . $filename;
    
        // Get the current image path from the database
        $getImageQuery = "SELECT images FROM blog_data WHERE id = :id";
        $stmt = $conn->prepare($getImageQuery);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $currentImage = $stmt->fetchColumn();
    
        // If a new file is uploaded, delete the previous image if it exists
        if (!empty($filename)) {
            if ($currentImage && file_exists("../blog_images/" . $currentImage)) {
                unlink("../blog_images/" . $currentImage); // delete the previous image file
            }
        } else {
            $filename = $currentImage; // Keep the current image if no new one is uploaded
        }
    
        $sql = "UPDATE blog_data SET title = :title, content = :content, images = :images, created_on = :created_on, author = :author WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':images', $filename);
        $stmt->bindParam(':created_on', $indiandate);
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $query = $stmt->execute();
    
        if (move_uploaded_file($tempname, $folder)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }
    
        echo $msg;
        header("Location: admin.php?info=update");
        exit();
    }
    

    if (isset($_REQUEST['deldoctor'])) {
        $id = $_REQUEST['deldoctor'];
    
        // Get the filename from the database before deletion
        $stmt = $conn->prepare("SELECT cv FROM jdoctor WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $file = $stmt->fetchColumn();
    
        if ($file) {
            // Path to the file to be deleted
            $filePath = "../cv/" . $file;
            // Delete the file from the server
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }
    
        // Delete the record from the database
        $stmt = $conn->prepare("DELETE FROM jdoctor WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    
        header('location: adoctor.php?info=delete');
    }
    
    if (isset($_REQUEST['delnurse'])) {
        $id = $_REQUEST['delnurse'];
    
        $stmt = $conn->prepare("SELECT cv FROM jnurse WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $file = $stmt->fetchColumn();
    
        if ($file) {
            $filePath = "../cv/" . $file;
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }
    
        $stmt = $conn->prepare("DELETE FROM jnurse WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    
        header('location: anurse.php?info=delete');
    }
    
    if (isset($_REQUEST['delhtml'])) {
        $id = $_REQUEST['delhtml'];
    
        $stmt = $conn->prepare("SELECT cv FROM jhtml WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $file = $stmt->fetchColumn();
    
        if ($file) {
            $filePath = "../cv/" . $file;
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }
    
        $stmt = $conn->prepare("DELETE FROM jhtml WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    
        header('location: ahtml.php?info=delete');
    }
    
    if (isset($_REQUEST['delcontent'])) {
        $id = $_REQUEST['delcontent'];
    
        $stmt = $conn->prepare("SELECT cv FROM jcontent WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $file = $stmt->fetchColumn();
    
        if ($file) {
            $filePath = "../cv/" . $file;
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }
    
        $stmt = $conn->prepare("DELETE FROM jcontent WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    
        header('location: acontent.php?info=delete');
    }
    

if (isset($_REQUEST['add_camps'])) {
    // Gather data from the request
    $sdate = $_REQUEST['sdate'];
    $edate = $_REQUEST['edate'];
    $stime = $_REQUEST['stime'];
    $etime = $_REQUEST['etime'];
    $cname = $_REQUEST['cname'];
    $cadd = $_REQUEST['cadd'];
    $state = $_REQUEST['state'];
    $district = $_REQUEST['district'];
    $contact = $_REQUEST['contact'];
    $conducted = $_REQUEST['conducted'];
    $organized = $_REQUEST['organized'];

    // Prepare the SQL statement
    $sql = "INSERT INTO blood_camps (sdate, edate, stime, etime, cname, cadd, state, district, contact, conducted, organized) 
            VALUES (:sdate, :edate, :stime, :etime, :cname, :cadd, :state, :district, :contact, :conducted, :organized)";

    try {
        // Prepare the statement
        $stmt = $conn->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':sdate', $sdate);
        $stmt->bindParam(':edate', $edate);
        $stmt->bindParam(':stime', $stime);
        $stmt->bindParam(':etime', $etime);
        $stmt->bindParam(':cname', $cname);
        $stmt->bindParam(':cadd', $cadd);
        $stmt->bindParam(':state', $state);
        $stmt->bindParam(':district', $district);
        $stmt->bindParam(':contact', $contact);
        $stmt->bindParam(':conducted', $conducted);
        $stmt->bindParam(':organized', $organized);

        // Execute the statement
        $stmt->execute();

        $msg = "Blood Camps added successfully";
        header("Location: blood_camp.php?info=added");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}


if (isset($_REQUEST['del_blood_camp'])) {
    $id = $_REQUEST['del_blood_camp'];

    // Prepare the SQL statement
    $sql = "DELETE FROM blood_camps WHERE id = :id";

    try {
        // Prepare the statement
        $stmt = $conn->prepare($sql);

        // Bind the parameter
        $stmt->bindParam(':id', $id);

        // Execute the statement
        $stmt->execute();

        header('Location: blood_camp.php?info=delete&id='.$id.'');
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}


?>
