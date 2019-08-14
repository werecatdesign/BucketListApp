<?php if (!empty($_POST)): ?>

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
    <body>
         <div class = "helptext" id = "addedtoexperiences2">
            <?php
                $target_dir = "uploads/";
                $target_file = $target_dir . $_POST['uploadValue'] . ".JPG";
                $uploadOk = 1;
                $renamed = 0;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                // Check if file already exists
                /*if (file_exists($target_file)) {
                    echo "Sorry, file already exists.";
                    $uploadOk = 0;
                }*/
                // Check file size
                if ($_FILES["fileToUpload"]["size"] > 500000) {
                    echo "Sorry, your file is too large.";
                    $uploadOk = 0;
                }
                // Allow certain file formats
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                    echo "Sorry, only JPG, JPEG & PNG files are allowed.";
                    $uploadOk = 0;
                }
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        echo "<p>Congratulations! You have successfully crossed an item off your bucket list by completing it. <br>
                                This item has been moved from your bucket list to your experiences.</p>";

                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
             ?>            
       
            
            <div class = "halfwidthtextboxes">
                <a href = "01_my_experiences.html" class = "fullwidthtextbox" id = "gotoexperiences" onclick="checkBucketList(); closeAdded()"><h2 class = "buttonheading">Go to my experiences</h2></a>
            </div>
        </div>
    </body>
</html>
<?php else: ?>

<!DOCTYPE HTML>
<!--- Messages (MY PROFILE) --->

<html>
    <!---------------------------------------------------------- HEAD ------------------------------------------------------------->
    
    <!--- Leave the head as it is for every page you create --->
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
    
    
    <!---------------------------------------------------------- BODY ------------------------------------------------------------->
    <body id = "bootstrap-overrides" onload="checkBucketList()">
        
        
         <!--- Help Section --->
            <div class = "helpbox" id="helpbox1">
                <button class = "closebutton" data-role = "navbutton" onclick="closeHelp()"></button>
                <div class = "helptext">
                    <h2 class = "helpheading"><b>My Bucket List</b></h2>
                    <p>This is the page where you can see all the items that are currently in your bucket list.<br></p>
                    <p><u>Buttons:</u><br>
                        <image src ="Design/Elements/complete_blue.png" alt = "complete item" height ="25px"></image> Mark the item as "Complete". <br>
                        <image src ="Design/Elements/delete_blue.png" alt = "delete item" height ="25px"></image> Delete the item from your bucket list. <br>
                        <image src ="Design/Elements/additem.png" alt = "add item" height ="25px"></image> Add new item to your bucket list.<br>
                        <image src ="Design/Elements/homebutton.png" alt = "Home Button" height ="25px"></image> Return to the home page.<br>
                        <image src ="Design/Elements/backbutton.png" alt = "Back Button" height ="25px"></image> Return to the previous page.</p>
                </div>
            </div>
        
        <!--- Add Item Confirmation: Move to Experiences or delete entirely --->
            <div class = "helpbox" id="addeditem1">
                <button class = "closebutton" data-role = "navbutton" onclick="checkBucketList(); closeAdded()"></button>
                <div class = "helptext" id = "addedtoexperiences1">
                    <p>Have you completed this item from your bucket list?</p>
                    <div class = "halfwidthtextboxes">
                        <a id = "yesorno" class="textboxleft" onclick="askUpload()"><h2 class = "buttonheading">Yes</h2></a>
                        <a id = "yesorno" class="textboxright" onclick="checkBucketList(); closeAdded()"><h2 class = "buttonheading">No</h2></a>
                    </div>
                </div>
                <div class = "helptext" id = "addedtoexperiences1_2">
                    <p>Please upload a picture of your experience to complete checking off your bucket list item.</p>
                    <div class = "halfwidthtextboxes">
                        <a id = "yesorno" class="textboxleft" onclick="doUpload()"><h2 class = "buttonheading">Upload Image</h2></a>
                        <a id = "yesorno" class="textboxright" onclick="deleteBLItem(); checkBucketList(); closeAdded()"><h2 class = "buttonheading">Delete Item</h2></a>
                    </div>
                </div>
                <div class = "helptext" id = "addedtoexperiences1_3">
                    <p>Upload the picture of your experience here.</p>
                    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post" enctype="multipart/form-data">
                        Select image to upload:
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <input type="submit" value="Upload Image" name="submit" id = "submitbutton" onclick="addExperience(); deleteBLItem(); confirmCompleted()">
                        <input type="hidden" name="uploadValue" id="uploadValue" value="">
                    </form>
                        <!--<a id = "yesorno" class="textboxleft" onclick="addExperience(); deleteBLItem(); confirmCompleted()"><h2 class = "buttonheading">Upload Image</h2></a>-->
                </div>
                <div class = "helptext" id = "addedtoexperiences2">
                    <p>Congratulations! You have successfully crossed an item off your bucket list by completing it. <br>
                        This item has been moved from your bucket list to your experiences.</p>
                    <div class = "halfwidthtextboxes">
                        <a href = "01_my_experiences.html" class = "fullwidthtextbox" id = "gotoexperiences" onclick="checkBucketList(); closeAdded()"><h2 class = "buttonheading">Go to my experiences</h2></a>
                    </div>
                </div>
                <div class = "helptext" id = "deleted1">
                    <p>Are you sure you want to delete this item from your bucket list without completing it?</p>
                    <div class = "halfwidthtextboxes">
                        <a id = "yesorno" class="textboxleft" onclick="confirmDelete(); deleteBLItem()"><h2 class = "buttonheading">Yes</h2></a>
                        <a id = "yesorno" class="textboxright" onclick="checkBucketList(); closeAdded()"><h2 class = "buttonheading">No</h2></a>
                    </div>
                </div>
                <div class = "helptext" id = "deleted2">
                    <p>This item has been deleted from your bucket list.</p>
                    <div class = "halfwidthtextboxes">
                        <a class = "fullwidthtextbox" id = "gotobucketlist" onclick="checkBucketList(); closeAdded()"><h2 class = "buttonheading">Close window</h2></a>
                    </div>
                </div>
            </div>
        
        <!--- Entry Box for new Item --->
            <div class = "helpbox" id="entrybox">
                <button class = "closebutton" data-role = "navbutton" onclick="closeEntry()"></button>
                <div class = "helptext" id = "entrytext">
                    <h2 class = "helpheading"><b>New Bucket List Item</b></h2>
                    <p>Please enter a title for the new item on your bucket list.<br></p>
                    <form action="" method="post" enctype="text/plain" id="entryform">
                        <input class ="newentry" id = "iteminputfield" type="textarea" name="entry"><br>
                        <br>
                    </form>
                    <div class = "halfwidthtextboxes">
                        <a id = "yesorno" class="textboxleft" onclick="createItem(); closeEntry()"><h2 class = "buttonheading">Save</h2></a>
                        <a id = "yesorno" class="textboxright" onclick="closeEntry()"><h2 class = "buttonheading">Cancel</h2></a>
                    </div>
                </div>                
            </div>
        
               <!---------------------------------------------------------- HEADER ------------------------------------------------------->
        <div class = "header" data-role = "header">
            <a class = "homebutton" data-role="navbutton" href = "00_home_page.html"></a>
            <h1 class = "headerheading" id = "smallerheading">
                My Bucket List
            </h1>
            <button class = "helpbutton" data-role="navbutton" onclick="openHelp()"></button>
        </div>
           <!------------------------------------------ NAVIGATION BAR ----------------------------------------------------->

                    <div class="navbar" id = "navigationbar">
                      <a href="01_my_bucketlist.html" class="active">Bucket List</a>
                      <a href="01_my_experiences.html">Experiences</a>
                    </div>
        <!---------------------------------------------------------- PAGE --------------------------------------------------------->
        <div class = "page" data-role = "page">
            
   
                  
            <!-------------------------------------------- Regular Page - Main Part -------------------------------------->
            <div class = "main">
                
            <!-- New Bucket List Item that can be created from scratch -->
                
                <div class = "fullwidthtextbox" data-role = "textbox" id = "bl_new" style="display: none">
                    <div class = "iconcontainer" id = "iconcontainer_item_one"></div>
                    <p id = "textentry_new"></p>
                    <a class = "iconcontainer" id = "iconcontainer_item_small" onclick="openAdded(); AskComplete('bl_new')"></a> 
                    <a class = "iconcontainer" id = "iconcontainer_item_smalltwo" onclick="openAdded(); AskDelete('bl_new')"></a>
                </div>
                        
            <!-- Bucket List Items that can be added from Kurt -->
                
                <div class = "fullwidthtextbox" data-role = "textbox" id = "bl_refugees" style="display: none">
                    <div class = "iconcontainer" id = "iconcontainer_item_one"></div>
                    <p>Collect money for refugees</p>
                    <a class = "iconcontainer" id = "iconcontainer_item_small" onclick="openAdded(); AskComplete('bl_refugees')"></a> 
                    <a class = "iconcontainer" id = "iconcontainer_item_smalltwo" onclick="openAdded(); AskDelete('bl_refugees')"></a>
                </div>
                
                <div class = "fullwidthtextbox" data-role = "textbox" id = "bl_weekendtrip" style="display: none">
                   <div class = "iconcontainer" id = "iconcontainer_item_one"></div>
                    <p>Weekend trip to an unknown destination</p>
                    <a class = "iconcontainer" id = "iconcontainer_item_small" onclick="openAdded(); AskComplete('bl_weekendtrip')"></a> 
                    <a class = "iconcontainer" id = "iconcontainer_item_smalltwo" onclick="openAdded(); AskDelete('bl_weekendtrip')"></a>
                </div>
                
                <div class = "fullwidthtextbox" data-role = "textbox" id = "bl_techcourse" style="display: none">
                    <div class = "iconcontainer" id = "iconcontainer_item_one"></div>
                    <p>Sign up for a technology course</p>
                    <a class = "iconcontainer" id = "iconcontainer_item_small" onclick="openAdded(); AskComplete('bl_techcourse')"></a> 
                    <a class = "iconcontainer" id = "iconcontainer_item_smalltwo" onclick="openAdded(); AskDelete('bl_techcourse')"></a>
                </div>
                
                <div class = "fullwidthtextbox" data-role = "textbox" id = "bl_sushi" style="display: none">
                    <div class = "iconcontainer" id = "iconcontainer_item_one"></div>
                    <p >Learn how to cook Japanese sushi</p>
                    <a class = "iconcontainer" id = "iconcontainer_item_small" onclick="openAdded(); AskComplete('bl_sushi')"></a> 
                    <a class = "iconcontainer" id = "iconcontainer_item_smalltwo" onclick="openAdded(); AskDelete('bl_sushi')"></a>
                </div>
                
                <div class = "fullwidthtextbox" data-role = "textbox" id = "bl_tennis" style="display: none">
                    <div class = "iconcontainer" id = "iconcontainer_item_one"></div>
                    <p >Start to play tennis on a professional level</p>
                    <a class = "iconcontainer" id = "iconcontainer_item_small" onclick="openAdded(); AskComplete('bl_tennis')"></a> 
                    <a class = "iconcontainer" id = "iconcontainer_item_smalltwo" onclick="openAdded(); AskDelete('bl_tennis')"></a>
                </div>
                
                <div class = "fullwidthtextbox" data-role = "textbox" id = "bl_theatre" style="display: none">
                    <div class = "iconcontainer" id = "iconcontainer_item_one"></div>
                    <p >Invite my wife to the theatre</p>
                    <a class = "iconcontainer" id = "iconcontainer_item_small" onclick="openAdded(); AskComplete('bl_theatre')"></a> 
                    <a class = "iconcontainer" id = "iconcontainer_item_smalltwo" onclick="openAdded(); AskDelete('bl_theatre')"></a>
                </div>
                
            <!-- Bucket List Items that can be added from Luke -->
                
                <div class = "fullwidthtextbox" data-role = "textbox" id = "bl_sketch" style="display: none">
                    <div class = "iconcontainer" id = "iconcontainer_item_one"></div>
                    <p>Sketch a portrait of a stranger</p>
                    <a class = "iconcontainer" id = "iconcontainer_item_small" onclick="openAdded(); AskComplete('bl_sketch')"></a> 
                    <a class = "iconcontainer" id = "iconcontainer_item_smalltwo" onclick="openAdded(); AskDelete('bl_sketch')"></a>
                </div>
                
                <div class = "fullwidthtextbox" data-role = "textbox" id = "bl_piano" style="display: none">
                   <div class = "iconcontainer" id = "iconcontainer_item_one"></div>
                    <p>Give free piano lessons to children</p>
                    <a class = "iconcontainer" id = "iconcontainer_item_small" onclick="openAdded(); AskComplete('bl_piano')"></a> 
                    <a class = "iconcontainer" id = "iconcontainer_item_smalltwo" onclick="openAdded(); AskDelete('bl_piano')"></a>
                </div>
                
                <div class = "fullwidthtextbox" data-role = "textbox" id = "bl_scotland" style="display: none">
                    <div class = "iconcontainer" id = "iconcontainer_item_one"></div>
                    <p>Backpack adventure in Scotland</p>
                    <a class = "iconcontainer" id = "iconcontainer_item_small" onclick="openAdded(); AskComplete('bl_scotland')"></a> 
                    <a class = "iconcontainer" id = "iconcontainer_item_smalltwo" onclick="openAdded(); AskDelete('bl_scotland')"></a>
                </div>
                
                <div class = "fullwidthtextbox" data-role = "textbox" id = "bl_familyparty" style="display: none">
                    <div class = "iconcontainer" id = "iconcontainer_item_one"></div>
                    <p >Throw a family party and cook for everyone</p>
                    <a class = "iconcontainer" id = "iconcontainer_item_small" onclick="openAdded(); AskComplete('bl_familyparty')"></a> 
                    <a class = "iconcontainer" id = "iconcontainer_item_smalltwo" onclick="openAdded(); AskDelete('bl_familyparty')"></a>
                </div>
                
                <div class = "fullwidthtextbox" data-role = "textbox" id = "bl_15kg" style="display: none">
                    <div class = "iconcontainer" id = "iconcontainer_item_one"></div>
                    <p >Lose 15kg through fitness training</p>
                    <a class = "iconcontainer" id = "iconcontainer_item_small" onclick="openAdded(); AskComplete('bl_15kg')"></a> 
                    <a class = "iconcontainer" id = "iconcontainer_item_smalltwo" onclick="openAdded(); AskDelete('bl_15kg')"></a> 
                </div>
                
                <div class = "fullwidthtextbox" data-role = "textbox" id = "bl_rocknpop" style="display: none">
                    <div class = "iconcontainer" id = "iconcontainer_item_one"></div>
                    <p >Visit the Rock 'n' Pop Museum in Gronau</p>
                    <a class = "iconcontainer" id = "iconcontainer_item_small" onclick="openAdded(); AskComplete('bl_rocknpop')"></a> 
                    <a class = "iconcontainer" id = "iconcontainer_item_smalltwo" onclick="openAdded(); AskDelete('bl_rocknpop')"></a>
                </div>
                
            <!-- Bucket List Items that can be added from Emma -->
                
                <div class = "fullwidthtextbox" data-role = "textbox" id = "bl_cupcake" style="display: none">
                    <div class = "iconcontainer" id = "iconcontainer_item_one"></div>
                    <p>Open my own cupcake business</p>
                    <a class = "iconcontainer" id = "iconcontainer_item_small" onclick="openAdded(); AskComplete('bl_cupcake')"></a> 
                    <a class = "iconcontainer" id = "iconcontainer_item_smalltwo" onclick="openAdded(); AskDelete('bl_cupcake')"></a>
                </div>
                
                <div class = "fullwidthtextbox" data-role = "textbox" id = "bl_opera" style="display: none">
                   <div class = "iconcontainer" id = "iconcontainer_item_one"></div>
                    <p>Go to the opera "The Turn of the Screw"</p>
                    <a class = "iconcontainer" id = "iconcontainer_item_small" onclick="openAdded(); AskComplete('bl_opera')"></a> 
                    <a class = "iconcontainer" id = "iconcontainer_item_smalltwo" onclick="openAdded(); AskDelete('bl_opera')"></a>
                </div>
                
                <div class = "fullwidthtextbox" data-role = "textbox" id = "bl_italian" style="display: none">
                    <div class = "iconcontainer" id = "iconcontainer_item_one"></div>
                    <p>Complete an Italian language course</p>
                    <a class = "iconcontainer" id = "iconcontainer_item_small" onclick="openAdded(); AskComplete('bl_italian')"></a> 
                    <a class = "iconcontainer" id = "iconcontainer_item_smalltwo" onclick="openAdded(); AskDelete('bl_italian')"></a>
                </div>
                
                <div class = "fullwidthtextbox" data-role = "textbox" id= "bl_yoga" style="display: none">
                    <div class = "iconcontainer" id = "iconcontainer_item_one"></div>
                    <p >Give yoga classes</p>
                    <a class = "iconcontainer" id = "iconcontainer_item_small" onclick="openAdded(); AskComplete('bl_yoga')"></a> 
                    <a class = "iconcontainer" id = "iconcontainer_item_smalltwo" onclick="openAdded(); AskDelete('bl_yoga')"></a>
                </div>
                
                <div class = "fullwidthtextbox" data-role = "textbox" id= "bl_reef" style="display: none">
                    <div class = "iconcontainer" id = "iconcontainer_item_one"></div>
                    <p >See the Great Barrier Reef</p>
                    <a class = "iconcontainer" id = "iconcontainer_item_small" onclick="openAdded(); AskComplete('bl_reef')"></a> 
                    <a class = "iconcontainer" id = "iconcontainer_item_smalltwo" onclick="openAdded(); AskDelete('bl_reef')"></a>
                </div>
                
                <div class = "fullwidthtextbox" data-role = "textbox" id="bl_homeless" style="display: none">
                    <div class = "iconcontainer" id = "iconcontainer_item_one"></div>
                    <p >Donate food to homeless people</p>
                    <a class = "iconcontainer" id = "iconcontainer_item_small" onclick="openAdded(); AskComplete('bl_homeless')"></a> 
                    <a class = "iconcontainer" id = "iconcontainer_item_smalltwo" onclick="openAdded(); AskDelete('bl_homeless')"></a>
                </div>
                
            <!-- Bucket List Items that are on my Bucket List from the start -->
               <div class = "fullwidthtextbox"  data-role = "textbox" id = "bl_marathon" style="display: none" > 
                    <div class = "iconcontainer" id = "iconcontainer_item_one"></div>                  
                    <a href="101_Details_Marathon.html" style="text-decoration: none;  color: #ffffff"><p>Run a 10K marathon</p></a>   
                    <a class = "iconcontainer" id = "iconcontainer_item_small" onclick="openAdded(); AskComplete('bl_marathon')"></a> 
                    <a class = "iconcontainer" id = "iconcontainer_item_smalltwo" onclick="openAdded(); AskDelete('bl_marathon')"></a>
                </div>  
                
                <div class = "fullwidthtextbox" data-role = "textbox" id = "bl_grandcanyon" style="display: none">
                   <div class = "iconcontainer" id = "iconcontainer_item_one"></div>
                     <a href="101_Details_GrandCanyon.html" style="text-decoration: none;  color: #ffffff" >
                    <p>See the Grand Canyon</p>                    
                    <a class = "iconcontainer" id = "iconcontainer_item_small" onclick="openAdded(); AskComplete('bl_grandcanyon')"></a> 
                    <a class = "iconcontainer" id = "iconcontainer_item_smalltwo" onclick="openAdded(); AskDelete('bl_grandcanyon')"></a>
                    </a>
                </div>
                
                <div class = "fullwidthtextbox" data-role = "textbox" id = "bl_nicaragua" style="display: none">
                    <div class = "iconcontainer" id = "iconcontainer_item_one"></div>
                    <a href="101_Details_Bolivia.html" style="text-decoration: none;  color: #ffffff" >
                    <p>Visit Bolivia with a friend</p>
                    <a class = "iconcontainer" id = "iconcontainer_item_small" onclick="openAdded(); AskComplete('bl_nicaragua')"></a> 
                    <a  class = "iconcontainer" id = "iconcontainer_item_smalltwo" onclick="openAdded(); AskDelete('bl_nicaragua')"></a>
                    </a>
                </div>
                
                 <div class = "fullwidthtextbox" data-role = "textbox" id = "bl_dolphins" style="display: none">
                    <div class = "iconcontainer" id = "iconcontainer_item_one"></div>
                        <a href="101_Details_swim.html" style="text-decoration: none;  color: #ffffff" >
                        <p >Swim with dolphins</p>
                        <a class = "iconcontainer" id = "iconcontainer_item_small" onclick="openAdded(); AskComplete('bl_dolphins')"></a> 
                        <a class = "iconcontainer" id = "iconcontainer_item_smalltwo" onclick="openAdded(); AskDelete('bl_dolphins')"></a>
                    </a>
                </div>
                
            <form>
                <input class = "backbutton" data-role="navbutton" type = "button" onclick="history.back()">
            </form>
                  <a class = "additem" data-role = "navbutton" onclick = "openEntry()"></a>
            </div>
            
              
            <div class = "footer" data-role = "footer"></div>
        </div>
        
        <!------------------------------------------------------ END PAGE ----------------------------------------------------------->
        
        
    </body>
</html>

<?php endif; ?>