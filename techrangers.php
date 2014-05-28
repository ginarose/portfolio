<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>title</title>
 </head>
 <body>
  <form method="post" action="process.php">
  	<input type="text" name="str" /> 
  	<input type="submit" name="submit" id="submit"/> 
  </form>
 
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

<script type="text/javascript">
	//on the click
	$('#submit').on("click", function(e){
		//stop anything from happening
		e.preventDefault();
		var obj={};
		//put the value of the input box into the variable words
		obj.words = $('input[name=str]').val();

		//send the form variables to process.php and return whatever is echoed through a function
		$.post('process.php',obj, function(data){
			alert(data);
		});

	});
</script>


 </body>
</html>