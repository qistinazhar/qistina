<?php 
	    $user_name = get_post_meta( get_the_ID(), 'name', true);
?>
<head>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function setData() {
  var nameField = document.getElementById("name_textbox").value;
  var occupationField = document.getElementById("occupation_textbox").value;
  var acedamicField = document.getElementById("acedamic_textbox").value;
  var certificationField = document.getElementById("certification_textbox").value;
  $.ajax({
    type: "POST",
    url: 'https://arlink.arleta.my/resources/try.php',
    data: {
        'name': nameField,
        'occupation': occupationField
		'acedamic': acedamicField
		'certification': certificationField
    },
    cache: false,
    success: function(data) {
		console.log(data);
		alert('Respond:'+data);
		/*
      if (data === 'success') {
            console.log('Success');
            alert('Data successfully submitted.');
        } else {
            console.log('Unexpected response:', data);
            alert('Error submitting data:'+data);
        }*/
    }
  });
}
</script>
</head>
<body>

	
<h2>Fill the Form</h2>
    <form>
        <label for="name_textbox">Name:</label>
        <input type="text" id="name_textbox" name="name_textbox"><br><br>
        
        <label for="occupation_textbox">Occupation:</label>
        <input type="text" id="occupation_textbox" name="occupation_textbox"><br><br>
        
		<label for="acedamic_textbox">Acedamic:</label>
        <input type="text" id="acedamic_textbox" name="acedamic_textbox"><br><br>
		
		<label for="cetification_textbox">Certification:</label>
        <input type="text" id="certification_textbox" name="certification_textbox"><br><br>
		
        <input type="button" value="Submit" onclick="setData()">
    </form>
<p> 
	<?php
		echo $user_name;
	?>
</p>
	
</body>
