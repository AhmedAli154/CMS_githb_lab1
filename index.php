
<?php
echo "<h1>Application name :- CMS_PHP Class registration</h1>";

  echo '<span style="color:red;">* Required filed .</span>';
  echo '<br>';
  echo '<br>';

?>
<html>
    
    <body>

    

        <form action="<?php $_PHP_SELF ?>"  method="POST">
            <table >
           
            <tr>
                <td> <label for="name" aria-required="">Name:</label> </td>
                <td>  <input type="text" id="name" name="name" > <span id="ifNameEmpty"></span>   </td>
            </tr>
            <tr>
                <td> <label for="Email">E-mail:</label> </td>
                <td> <input type="email" id="email" name="email" Required ><br> </td>
            </tr>
            <tr>
                <td> <label for="Group">Group #</label> </td>
                <td><input type="number" id="Group" name="Group"> </td>
                
            </tr>
            <tr>
                <td> <label for="Class">  details: </label> </td>
                <td> <textarea name="details" id="details"></textarea> </td>
            </tr>
            <tr>
                <td> <label for="Gender">Gender: </label> </td>
                <td> 
                    <input type="radio" id="male" name="Gender" value="male">
					<label for="male">Male</label><br>
					<input type="radio" id="female" name="Gender" value="female">
					<label for="female">Female</label><br> 
                </td>
            </tr>
            <tr>
                <td><label for="Courses">Select Courses:</label> </td>
                <td><select multiple  size="4" courses="flower[ ]" >
                <option value="php">php</option>
                <option value="java script">java script</option>
                <option value="MySQl">MySQl</option>
                <option value="Html">Html</option>
                <option value="c++">c++</option>
                <option value="c">c </option>

                </select> </td>
            </tr>
            <tr>

            <td><label for="Agree">Agree </label> </td>
            <td><input type="checkbox" id="Agree" name="Agree" >
            </td>

            </tr>  
            <tr>

            <td> <input type = "submit" name="submit" />
            </td>
            

            </tr>  
            </table>
     
        </form>
        <?php
	$nameFormat = "/^[a-zA-Z]+$/i";
	echo '<br>';
    print_r($_POST);
	if (isset($_POST["submit"])) {
		if (!empty($_POST["name"])) {
			if (!preg_match($nameFormat, $_POST["name"])) {
                echo "<br> helolloooololo <br>";
				echo '<script>
			
			let name = document.getElementById("ifNameEmpty");
			name.innerText = "* Letters Only!";
			
			let email = document.getElementById("email");
			let g_no = document.getElementById("Group");
			let details = document.getElementsByName("details");
			let gender = document.getElementById("' . $_POST["Gender"] . '");
			

			gender.setAttribute("checked", "");			
			g_no.value = "' . $_POST["Group"] . '";
			email.value = "' . $_POST["email"] . '";
			details[0].value = "' . $_POST["details"] . '";


		

		</script>';
			} else {
				echo '<div style=" font-weight: bold; font-size:20px">';
				echo '<br> Your name: ' . $_POST["name"];
				echo '<br> Your Email: ' . $_POST["email"];
				echo !empty($_POST["Group"]) ? '<br> Group No:' . $_POST["Group"] : '';
				echo !empty($_POST["details"]) ? '<br> Class details: ' . $_POST["details"] : '';
				echo !empty($_POST["Gender"]) ? '<br> Gender: ' . $_POST["Gender"] : '';
				echo '<br>';
				if (!empty($_POST['courses'])) {
					echo 'Your courses are: ';
					foreach ($_POST["courses"] as $key => $value) {
						echo $value . '  ';
					}
				}
				echo '</div>';
			}
		};

		if (empty($_POST["name"])) {
			echo '<script>
			
			let name = document.getElementById("ifNameEmpty");
			name.innerText = "* Can not Empty!";
			
			let email = document.getElementById("email");
			let g_no = document.getElementById("Group");
			let details = document.getElementsByName("details");
			let gender = document.getElementById("' . $_POST["Gender"] . '");
			

			gender.setAttribute("checked", "");			
			g_no.value = "' . $_POST["Group"] . '";
			email.value = "' . $_POST["email"] . '";
			details[0].value = "' . $_POST["details"] . '";

		</script>';
		}
	}
	?> 
    </body>
</html>












