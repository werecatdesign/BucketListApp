<html>
    <head>
        <title>MY BUCKET LIST</title>
        <meta name="viewport" content="width=device-width,user-scalable= no" />
        <meta charset = "UTF-8">
        
        <!--- Self-created standard stylesheet for this project --->
        <link rel = "stylesheet" href = "00_StandardStylesheet.css">
        
        <!--- Self-created profile stylesheet --->
        <link rel = "stylesheet" href = "01_My_Bucket_List_Stylesheet.css">
        
        <!--- J-QUERY file to make the self-created Javascript work --->
        <script src="JS/jquery-3.1.1.min-BLA.js"></script>
        
        <!--- Self-Created Javascript to make the Bucket List App run smoothly --->
        <script src="JS/BLA_Javascript.js"></script>
                
        <!--- Bootstrap CSS stylesheet --->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <!--- Bootstrap Javascript files --->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body id = "upload-body">
         <div class = "helptext" id = "addedtoexperiences2">
            <?php
                $target_dir = "uploads/";
                $target_file = $target_dir . $_POST['uploadValue'] . ".JPG";
                $uploadOk = 1;
                $renamed = 0;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                // Existing files are overwritten   
             
                // Check file size
                if ($_FILES["customFile"]["size"] > 500000) {
                    echo "<p>Sorry, your file is too large.</p>";
                    $uploadOk = 0;
                }
                // Allow certain file formats
                if($imageFileType != "jpg") {
                    echo "<p>Sorry, only JPG files are allowed.</p>";
                    $uploadOk = 0;
                }
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo "<p>Sorry, your file was not uploaded.</p>";
                // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["customFile"]["tmp_name"], $target_file)) {
                        echo "<p>Congratulations! You have successfully crossed an item off your bucket list by completing it. <br>
                                This item has been moved from your bucket list to your experiences.</p>";

                    } else {
                        echo "<p>Sorry, there was an error uploading your file.</p>";
                    }
                }
             ?>         
                   
            <div class = "halfwidthtextboxes">
                <a href = "01_my_experiences.html" class = "fullwidthtextbox" id = "yesorno"><h2 class = "buttonheading">Go to my experiences</h2></a>                        
            </div>
            <div class = "halfwidthtextboxes">                        
                <a href = "01_my_bucketlist.html" class = "fullwidthtextbox" id = "yesorno"><h2 class = "buttonheading">Return to bucket list</h2></a>
            </div>
        </div>
    </body>
</html>