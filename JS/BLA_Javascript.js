function initializeVar(){
    
    var isContact = ["kurt", "luke", "emma"]; // Array defining who is in your contacts
    localStorage.setItem('isContact', JSON.stringify(isContact)); // Array "isContact" is transformed into a format (string) that can be stored in the local storage. The local storage stores the array for the duration as the browser session.
    
    var userStatus = []; // Array defining that premium status is not on  / array is empty
    localStorage.setItem('userStatus', JSON.stringify(userStatus));
    
    var inBucketList = ["bl_marathon", "bl_grandcanyon", "bl_nicaragua", "bl_dolphins"]; // Array defining what is in my bucket list in the beginning
    localStorage.setItem('inBucketList', JSON.stringify(inBucketList)); // Array "inBucketList" is transformed into a format (string) that can be stored in the local storage. The local storage stores the array for the duration as the browser session.
    
    var inExperiences = ["exp_skydining", "exp_sledding", "exp_diving", "exp_saltflats", "exp_swinging"]; // Array defining what is in my experiences in the beginning
    localStorage.setItem('inExperiences', JSON.stringify(inExperiences)); // Array "inExperiences" is transformed into a format (string) that can be stored in the local storage. The local storage stores the array for the duration as the browser session.
    
    var senttoKurt = []; // Array defining messages sent to Kurt in this session
    localStorage.setItem('senttoKurt', JSON.stringify(senttoKurt));
    
    var senttoLuke = []; // Array defining messages sent to Emma in this session
    localStorage.setItem('senttoLuke', JSON.stringify(senttoLuke));
    
    var senttoEmma = []; // Array defining messages sent to Emma in this session
    localStorage.setItem('senttoEmma', JSON.stringify(senttoEmma));
}  
   


/* ******************************************************** 00: HELP BOX ************************************************************* */

/* Set the width of the help box to 100% */
function openHelp() {
    document.getElementById("helpbox1").style.width = "100%"; // help dialogue opens with a width of 100%
    document.getElementById("helpbox1").style.height = "100%"; // help dialogue opens with a height of 100%
}

/* Set the width of the helpbox to 0 */
function closeHelp() {
    document.getElementById("helpbox1").style.width = "0"; // help dialogue closes --> width = 0
    document.getElementById("helpbox1").style.height = "0"; // help dialogue closes --> height = 0
} 


/* **************************************************** 01: BUCKET LIST: Dialogue Box **************************************************** */

// Completing a Bucket List Item and shifting it to Experiences

function AskComplete(selectedBlItem) {
    document.getElementById("addedtoexperiences1").style.display = "block";
    document.getElementById("addedtoexperiences1_2").style.display = "none";
    document.getElementById("addedtoexperiences1_3").style.display = "none";    
    document.getElementById("deleted1").style.display = "none";
    document.getElementById("deleted2").style.display = "none";
    localStorage.setItem('item', selectedBlItem); // Key is item and value is "selectedBlItem"
    document.getElementById("uploadValue").value = selectedBlItem; // The upload value gets exactly the value of what is between the brackets in the Ask Complete function of the respective BL item
}

function askUpload() {
    document.getElementById("addedtoexperiences1").style.display = "none";
    document.getElementById("addedtoexperiences1_2").style.display = "block";
    document.getElementById("addedtoexperiences1_3").style.display = "none";     
    document.getElementById("deleted1").style.display = "none";
    document.getElementById("deleted2").style.display = "none";
}

function doUpload() {
    document.getElementById("addedtoexperiences1").style.display = "none";
    document.getElementById("addedtoexperiences1_2").style.display = "none";
    document.getElementById("addedtoexperiences1_3").style.display = "block";     
    document.getElementById("deleted1").style.display = "none";
    document.getElementById("deleted2").style.display = "none";
}

function confirmCompleted() {
    document.getElementById("addedtoexperiences1").style.display = "none";
    document.getElementById("addedtoexperiences1_2").style.display = "none";
    document.getElementById("addedtoexperiences1_3").style.display = "none";
    document.getElementById("addedtoexperiences2").style.display = "block"; 
    document.getElementById("deleted1").style.display = "none";
    document.getElementById("deleted2").style.display = "none";
}

// Deleting a Bucket List Item without shifting it to Experience

function AskDelete(item) {
    document.getElementById("addedtoexperiences1").style.display = "none";
    document.getElementById("addedtoexperiences1_2").style.display = "none";
    document.getElementById("addedtoexperiences1_3").style.display = "none";    
    document.getElementById("deleted1").style.display = "block";
    document.getElementById("deleted2").style.display = "none";
    localStorage.setItem('item', item); // Key is item and value is "item"
}

function confirmDelete() {
    document.getElementById("addedtoexperiences1").style.display = "none";
    document.getElementById("addedtoexperiences1_2").style.display = "none";
    document.getElementById("addedtoexperiences1_3").style.display = "none";     
    document.getElementById("deleted1").style.display = "none";
    document.getElementById("deleted2").style.display = "block";
}

// Delete bucket list item from the Bucket List

function deleteBLItem(){
    var item = localStorage.getItem('item'); // Depending on the value of the key 'item', the respective value is retrieved
    var inBucketList = JSON.parse(localStorage.getItem('inBucketList')); // Array "inBucketList" is retrieved from local storage
    var blIndex = inBucketList.indexOf(item); // Respective item that has been clicked on to be deleted is retrieved from Array
    document.getElementById(item).style.display = "none"; // The item that has been removed from the array is no longer visible in the BL
    inBucketList.splice(blIndex, 1); // Item is removed from Bucket List Array
    localStorage.setItem('inBucketList', JSON.stringify(inBucketList)); // Array is stored in local storage
}

// Checking if a Bucket List Item is in the Array "inBucketList" and if so, displaying it

function checkBucketList() {
    var inBucketList = JSON.parse(localStorage.getItem('inBucketList'));
    console.log(inBucketList.length);
    for(i=0; i<inBucketList.length; i++){
        document.getElementById(inBucketList[i]).style.display = "flex";
    }
    var input = localStorage.getItem('inputKey');
    document.getElementById("textentry_new").innerHTML = input;
}


// ADDING A BUCKET LIST ITEM FROM SOMEONE ELSE'S BUCKET LIST

function addBLItem(blItem) { // variable is initialised automatically by setting it between the brackets
    var inBucketList = JSON.parse(localStorage.getItem('inBucketList')); // Array "inBucketList" is retrieved from local storage
    inBucketList.push(blItem); // Item is added to Bucket List Array
    localStorage.setItem('inBucketList', JSON.stringify(inBucketList)); // Array is stored in local storage
}

// NEW BUCKET LIST ITEM ENTRY BOX

// Opening the entry box for entering a new bucket List Item

function openEntry () {
    document.getElementById("entrybox").style.width = "100%";
    document.getElementById("entrybox").style.height = "100%";
}

function closeEntry () {
    document.getElementById("entrybox").style.width = "0";
    document.getElementById("entrybox").style.height = "0";
}

// creating a new item from the text entered in the input field

function createItem() {
    var input = document.getElementById("iteminputfield").value;
    document.getElementById("textentry_new").innerHTML = input;
    var inBucketList = JSON.parse(localStorage.getItem('inBucketList')); 
    inBucketList.push("bl_new");
    localStorage.setItem('inBucketList', JSON.stringify(inBucketList));
    localStorage.setItem('inputKey', input); // store the text entered in the input field in the entry box
    checkBucketList();
}

/* **************************************************** 01: EXPERIENCES *********************************************************** */

// Saving a checked item as an experience

function addExperience() { // variable is initialised automatically by setting it between the brackets
    var inExperiences = JSON.parse(localStorage.getItem('inExperiences')); // Array "inExperiences" is retrieved from local storage
    var selectedBlItem = localStorage.getItem('item');
    inExperiences.push(selectedBlItem); // Item is added to Experiences Array
    localStorage.setItem('inExperiences', JSON.stringify(inExperiences)); // Array is stored in local storage
}

function checkExperiences() {
    var inExperiences = JSON.parse(localStorage.getItem('inExperiences'));
    console.log(inExperiences.length);
    for(i=0; i<inExperiences.length; i++){
        console.log(inExperiences[i]);
        document.getElementById(inExperiences[i]).style.display = "block";
    }
    var input = localStorage.getItem('inputKey');
    document.getElementById("textentry_new").innerHTML = input;
}

/* ****************************************** 02: OTHER USER'S PROFILE: Added Item Confirmation ******************************************* */


function openUndo() {
    document.getElementById("addeditem2").style.width = "100%"; // delete contact check opens with a width of 100%
    document.getElementById("addeditem2").style.height = "100%"; // delete contact check opens with a height of 100%
}

function closeUndo() {
    document.getElementById("addeditem2").style.width = "0"; // delete contact check is discarded --> width = 0
    document.getElementById("addeditem2").style.height = "0"; // delete contact check is discarded --> height = 0
}

function AddKurt() { // see "UndoKurt()"
    var isContact = JSON.parse(localStorage.getItem('isContact')); 
    isContact.push("kurt"); // Kurt is added to Array
    localStorage.setItem('isContact', JSON.stringify(isContact));
    CheckContact();
}

function UndoKurt () {
    var isContact = JSON.parse(localStorage.getItem('isContact')); // Array is taken out of the local storage to be read and changed
    var contactIndex = isContact.indexOf("kurt"); // finding out at which position of the array "isContact" Kurt currently is
    isContact.splice(contactIndex, 1); // splice --> Go to position from line above and remove x = 1 elements there.
    localStorage.setItem('isContact', JSON.stringify(isContact)); // Array is restored in the local storage
    CheckContact();
}

function AddLuke() { // see UndoKurt
    var isContact = JSON.parse(localStorage.getItem('isContact')); 
    isContact.push("luke");
    localStorage.setItem('isContact', JSON.stringify(isContact));
    CheckContact();
}

function UndoLuke () { // see UndoKurt
    var isContact = JSON.parse(localStorage.getItem('isContact')); 
    var contactIndex = isContact.indexOf("luke"); 
    isContact.splice(contactIndex, 1); 
    localStorage.setItem('isContact', JSON.stringify(isContact)); 
    CheckContact();
}

function AddEmma() { // // see UndoKurt
    var isContact = JSON.parse(localStorage.getItem('isContact')); 
    isContact.push("emma");
    localStorage.setItem('isContact', JSON.stringify(isContact));
    CheckContact();
}

function UndoEmma () { // see UndoKurt
    var isContact = JSON.parse(localStorage.getItem('isContact')); 
    var contactIndex = isContact.indexOf("emma"); 
    isContact.splice(contactIndex, 1); 
    localStorage.setItem('isContact', JSON.stringify(isContact)); 
    CheckContact();
}


// For every page where you need to display who is in your contacts and who is not, you need to check the status of the isContact Array
// in html you write in the body: <body id = "bootstrap-overrides" onload = "CheckContacts()">
// The important part of "onload" is that when the page loads, the function Check Contacts() is called
// The same when the status of the Array is changed after adding / removing a contact

function CheckContact(name) {
    var isContact = JSON.parse(localStorage.getItem('isContact'));
    console.log(isContact.length);
    
    if(name == 'kurt') {
        //Kurt
        if (isContact.indexOf("kurt") != -1) { // if Kurt is found in the Array of contacts (isContact) --> -1 if he wasn't a contact
            document.getElementById("iconcontainer_complete_02_kurt").style.display = "block"; // check mark gets shown --> Kurt is a contact
            document.getElementById("iconcontainer_add_02_kurt").style.display = "none"; // plus sign gets hidden --> Kurt has already been added
        }
        if (isContact.indexOf("kurt") == -1) {
            document.getElementById("iconcontainer_complete_02_kurt").style.display = "none"; // check mark gets hidden --> Kurt is no contact
            document.getElementById("iconcontainer_add_02_kurt").style.display = "block"; // plus sign gets shown --> Kurt can be added
        } 
    } else if(name == 'luke') {    
        //Luke
        if (isContact.indexOf("luke") != -1) { 
            document.getElementById("iconcontainer_complete_02_luke").style.display = "block"; 
            document.getElementById("iconcontainer_add_02_luke").style.display = "none"; 
        }
        if (isContact.indexOf("luke") == -1) {
            document.getElementById("iconcontainer_complete_02_luke").style.display = "none"; 
            document.getElementById("iconcontainer_add_02_luke").style.display = "block"; 
        }
    } else {
    
        //Emma
        if (isContact.indexOf("emma") != -1) { 
            document.getElementById("iconcontainer_complete_02_emma").style.display = "block"; 
            document.getElementById("iconcontainer_add_02_emma").style.display = "none"; 
        }
        if (isContact.indexOf("emma") == -1) {
            document.getElementById("iconcontainer_complete_02_emma").style.display = "none"; 
            document.getElementById("iconcontainer_add_02_emma").style.display = "block"; 
        }
    }
}

/* *********************************************** 03: CONTACTS: Remove Contact from List ******************************************** */


function yesKurt() { // Yes Button for Kurt is displayed in the check dialogue 
    document.getElementById("yes_kurt").style.display = "block"; 
    document.getElementById("yes_luke").style.display = "none";
    document.getElementById("yes_emma").style.display = "none";
}

function RemoveContact1 () { // Kurt
    var isContact = JSON.parse(localStorage.getItem('isContact'));
    var contactIndex = isContact.indexOf("kurt"); // finding out at which position of the array "isContact" Kurt currently is
    isContact.splice(contactIndex, 1); // splice --> Go to position from line above and remove x = 1 elements there.
    localStorage.setItem('isContact', JSON.stringify(isContact));
    CheckContactList();
      
}

function yesLuke() {
    document.getElementById("yes_kurt").style.display = "none"; 
    document.getElementById("yes_luke").style.display = "block";
    document.getElementById("yes_emma").style.display = "none";
}

function RemoveContact2 () { // Luke --> See RemoveContact1
    var isContact = JSON.parse(localStorage.getItem('isContact'));
    var contactIndex = isContact.indexOf("luke"); // finding out at which position of the array "isContact" Kurt currently is
    isContact.splice(contactIndex, 1); // splice --> Go to position from line above and remove x = 1 elements there.
    localStorage.setItem('isContact', JSON.stringify(isContact));
    CheckContactList();
}

function yesEmma() {
    document.getElementById("yes_kurt").style.display = "none"; 
    document.getElementById("yes_luke").style.display = "none";
    document.getElementById("yes_emma").style.display = "block";
}

function RemoveContact3 () { // Emma --> See RemoveContact1
    var isContact = JSON.parse(localStorage.getItem('isContact'));
    var contactIndex = isContact.indexOf("emma"); // finding out at which position of the array "isContact" Kurt currently is
    isContact.splice(contactIndex, 1); // splice --> Go to position from line above and remove x = 1 elements there.
    localStorage.setItem('isContact', JSON.stringify(isContact));
    CheckContactList(); 
}

// Check the contact list on the 03: CONTACTS page

function CheckContactList() {
    var isContact = JSON.parse(localStorage.getItem('isContact'));
    console.log(isContact.length);
    
    //Kurt
    if (isContact.indexOf("kurt") != -1) { // if Kurt is found in the Array of contacts (isContact) --> -1 if he wasn't a contact
        document.getElementById("contact_kurt").style.display = "flex"; // on the "my contacts" page, Kurt gets displayed as a contact
    }
    if (isContact.indexOf("kurt") == -1) {
        document.getElementById("contact_kurt").style.display = "none"; // on the "my contacts" page, Kurt is no longer a contact
    }
    
    //Luke
    if (isContact.indexOf("luke") != -1) { 
        document.getElementById("contact_luke").style.display = "flex"; 
    }
    if (isContact.indexOf("luke") == -1) {
        document.getElementById("contact_luke").style.display = "none"; 
    }
    
    //Emma
    if (isContact.indexOf("emma") != -1) { 
        document.getElementById("contact_emma").style.display = "flex"; 
    }
    if (isContact.indexOf("emma") == -1) {
        document.getElementById("contact_emma").style.display = "none"; 
    }
}


// Send a message to an individual user

/* KURT */

function checkKurtsMessages() {    
    var senttoKurt = JSON.parse(localStorage.getItem('senttoKurt'));
    for(i=0; i<senttoKurt.length; i++){
        document.getElementById(senttoKurt[i]).style.display = "block";
    }
    var input = localStorage.getItem('inputKurt');
    document.getElementById("newmessage_kurt_text").innerHTML = input;
}

function createMessagetoKurt() {
    var input = document.getElementById("messageinputfield").value;
    document.getElementById("newmessage_kurt_text").innerHTML = input;
    var senttoLuke = JSON.parse(localStorage.getItem('senttoKurt')); 
    senttoLuke.push("newmessage_kurt");
    localStorage.setItem('senttoKurt', JSON.stringify(senttoLuke));
    localStorage.setItem('inputKurt', input); // store the text entered in the input field in the entry box
    checkKurtsMessages();
}

/* LUKE */

function checkLukesMessages() {    
    var senttoLuke = JSON.parse(localStorage.getItem('senttoLuke'));
    for(i=0; i<senttoLuke.length; i++){
        document.getElementById(senttoLuke[i]).style.display = "block";
    }
    var input = localStorage.getItem('inputLuke');
    document.getElementById("newmessage_luke_text").innerHTML = input;
}

function createMessagetoLuke() {
    var input = document.getElementById("messageinputfield").value;
    document.getElementById("newmessage_luke_text").innerHTML = input;
    var senttoLuke = JSON.parse(localStorage.getItem('senttoLuke')); 
    senttoLuke.push("newmessage_luke");
    localStorage.setItem('senttoLuke', JSON.stringify(senttoLuke));
    localStorage.setItem('inputLuke', input); // store the text entered in the input field in the entry box
    checkLukesMessages();
}

/* EMMA */

function checkEmmasMessages() {    
    var senttoEmma = JSON.parse(localStorage.getItem('senttoEmma'));
    for(i=0; i<senttoEmma.length; i++){
        document.getElementById(senttoEmma[i]).style.display = "block";
    }
    var input = localStorage.getItem('inputEmma');
    document.getElementById("newmessage_emma_text").innerHTML = input;
}

function createMessagetoEmma() {
    var input = document.getElementById("messageinputfield").value;
    document.getElementById("newmessage_emma_text").innerHTML = input;
    var senttoEmma = JSON.parse(localStorage.getItem('senttoEmma')); 
    senttoEmma.push("newmessage_emma");
    localStorage.setItem('senttoEmma', JSON.stringify(senttoEmma));
    localStorage.setItem('inputEmma', input); // store the text entered in the input field in the entry box
    checkEmmasMessages();
}

// Time variable 

/*var currentdate = new Date();
var datetime = "currentdate.getHours() + ":" + currentdate.getMinutes();
document.getElementById("time_sent").innerHTML = datetime; */

/* *********************************************** 04: DISCOVER SUB: Added Item Confirmation ******************************************** */

/* Set the width of the add item dialogue to 100% --> The same principle is applied for adding a contact, where the id is "addeditem2" */
function openAdded () {
    document.getElementById("addeditem1").style.width = "100%";
    document.getElementById("addeditem1").style.height = "100%";
}

/* Set the width of the dialogue to 0 */
function closeAdded () {
    document.getElementById("addeditem1").style.width = "0";
    document.getElementById("addeditem1").style.height = "0";
} 

/* *********************************************** 05: LOTTERY: Premium Membership Settings ********************************************* */

// On "my Profile" where you can switch to a premium membership

function CheckUserStatus () { // check if he is a premium user or not
    var userStatus = JSON.parse(localStorage.getItem('userStatus'));
    if (userStatus.indexOf("premium") != -1) {
        document.getElementById("downgrade").style.display = "block";
        document.getElementById("upgrade").style.display = "none";
    } else {
        document.getElementById("upgrade").style.display = "block";
        document.getElementById("downgrade").style.display = "none";
    }
}

/* Set the width of the add item dialogue to 100% --> The same principle is applied for adding a contact, where the id is "addeditem2" */
function editPremium () {
    document.getElementById("editpremium").style.width = "100%";
    document.getElementById("editpremium").style.height = "100%";
}

/* Set the width of the dialogue to 0 */
function closePremium () {
    document.getElementById("editpremium").style.width = "0";
    document.getElementById("editpremium").style.height = "0";
}

function AskPremium () {
    console.log("test");
    document.getElementById("settings1").style.display = "block"; // textbox with information about premium in the dialogue box is shown
    document.getElementById("settings2").style.display = "none"; // textbox with Congratulations in the dialogue box is still hidden
    document.getElementById("settings3").style.display = "none"; // textbox with undoing premium in the dialogue box is still hidden
}

function GoPremium () {
    var userStatus = JSON.parse(localStorage.getItem('userStatus')); 
    userStatus.push("premium"); // Premium is added to the Array "userStatus"
    localStorage.setItem('userStatus', JSON.stringify(userStatus));
}

function UndoPremium () {
    var userStatus = JSON.parse(localStorage.getItem('userStatus')); 
    var userIndex = userStatus.indexOf("premium"); 
    userStatus.splice(userIndex, 1); // Premium is removed from the Array "userStatus"
    localStorage.setItem('userStatus', JSON.stringify(userStatus));     
}
      
function showCongrats () {
    document.getElementById("settings1").style.display = "none"; // textbox with information about premium in the dialogue box is shown
    document.getElementById("settings2").style.display = "block"; // show the textbox with Congratulations in the dialogue box 
    document.getElementById("settings3").style.display = "none"; // textbox with undoing premium in the dialogue box is still hidden
}

function UndoPremiumCheck () {
    document.getElementById("settings1").style.display = "none"; // textbox with information about premium in the dialogue box is shown
    document.getElementById("settings2").style.display = "none"; // textbox with congratulations about going premium is hidden
    document.getElementById("settings3").style.display = "block"; // textbox with undoing premium in the dialogue box is shown
}


// On "Lottery" --> Check if the lottery has been activated

function CheckLottery () { // check if he is a premium user or not and if he can thus use the lottery
    console.log("test");
    var userStatus = JSON.parse(localStorage.getItem('userStatus'));
    if (userStatus.indexOf("premium") != -1) {
        document.getElementById("premiumonly").style.display = "none";
        document.getElementById("winnersheading").style.display = "block";
        document.getElementById("winner1").style.display = "flex";
        document.getElementById("winner2").style.display = "flex";
        document.getElementById("winner3").style.display = "flex";
    } else {
        document.getElementById("premiumonly").style.display = "block";
        document.getElementById("winnersheading").style.display = "none";
        document.getElementById("winner1").style.display = "none";
        document.getElementById("winner2").style.display = "none";
        document.getElementById("winner3").style.display = "none";
    }
}

