<form method="post" action="processform.php">
   <!-- email input -->
   <label class="screenreaderformlabel">E-mail</label>


    <input class="forminput" type="text" name="email" placeholder="Your email">
    <!-- comment input -->   
    <label class="screenreaderformlabel">Comment</label>
   
    <textarea class="forminput" type="textarea" id="concern" name="concern" placeholder="Feel free to contact me with this handy form! Type your comments and concerns here. "></textarea><br/>
    <input id="submit" type="submit" name="submit"> <!-- assign a name for the button -->
</form> 


<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

<script type="text/javascript">
	//on the click
	$('#submit').on("click", function(e){
		//stop anything from happening
		e.preventDefault();
		var obj={};
		//put the value of the input box into the variable email
		obj.email = $('input[name=email]').val();
		obj.concern = $('#concern').val();

		//send the form variable to processform.php and return whatever is echoed through a function
		$.post('processform.php',obj, function(data){
			alert(data);
		});

	});
</script>