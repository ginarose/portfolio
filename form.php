<form method="post" action="form.php">
   <!-- email input -->
   <span class="screenreaderformlabel">E-mail</span>
    <input class="forminput" type="text" name="email" cols="450" placeholder="Your email">
    <!-- comment input -->   
    <span class="screenreaderformlabel">Comment</span>
    <textarea class="forminput" type="textarea" name="concern" rows="5" cols="35" placeholder="Feel free to contact me with this handy form! Type your comments and concerns here. "></textarea><br/>
    <input id="formsubmit" type="submit" value="Submit" name="submit"> <!-- assign a name for the button -->
</form>
<!-- 
<?php


if (isset($_POST['submit'])) 
{

    //variables
    $concern = $_POST['concern'];
    $email = $_POST['email'];

    //if the message is blank or half-assedly filled out
	if(empty($concern)|| !preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", ($email)))
	{
		error();
	}
	else
	{
	   display();
	} 
}

//return the information if everything is filled out
function display()
{
    // set variables for the input boxes
    $concern = $_POST['concern'];
    $email = $_POST['email'];

   // display a confirmation
    $cleanconcern = htmlspecialchars($concern);

    echo "Thanks for contacting me! I have recieved your message and look forward to hearing from you again.";

    // email it to admin
    $message = $email. " says the following about your portfolio: " .$cleanconcern;
    mail("SmartFool@mailinator.com", "You have mail from a visitor!", $message, "From: a visitor");
}

//display error if not filled out
function error()
{
    echo "Please input some data for the form to process!";
}
?>
 -->