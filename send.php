<?php

	$mysqli = new mysqli("localhost", "username", "password", "someDB");

    if($mysqli->connect_error){

        echo $mysqli->connect_error;

    }

?>

<!DOCTYPE html>

<html>

	<head>

		<title>Comment</title>
		<meta charset="utf-8">

		<style type="text/css">

			@import url('https://fonts.googleapis.com/css?family=Quicksand');

			body {

				background-color: white;
				font-family: 'Quicksand', sans-serif;

			}

			#primary {

				background: linear-gradient(to right, rgb(244,83,115), 	rgb(255,179,112)); 
				position: absolute;
				top: 5%;
				left: 0%;
				min-height: 90%;
				max-height: 110%;
				width: 100%;
				margin-left: 0px;

			}
			
			h2 {

				text-align: center;
				color: white;
				font-size: 3em;

			}

			form {

				margin-left: 25%;
				font-size: 2em;
				color: white;

			}

			input {

				width: 60%;
				height: 30px;
				border: none;

			}

			input#age {

				margin-left: 31px;

			}

			textarea {

				width: 67%;
				height: 30%;

			}

			.submit {

				width: 67.3%;
				background: white;
				color:  rgb(244,83,115); 

			}

		</style>

	</head>

	<body>

		<div id="primary">

		    <h2>Comment</h2>

		    <form action="send.php" method="POST">

		    	<h4>Name: <input type="text" name="name" required> <br /> <br />

		        Age: <input type="number" name="age" reuired id="age">  <br /> <br />

		        <textarea rows="15" cols="130" name="comment" required></textarea> <br /></h4>

		        <h4><input type="submit" value="Submit" class="submit"><br /></h4>

		    </form>

		    <form action="actionTwo.php" method="POST">

		    	<h4><input type="submit" value="Open Comment History" class="submit"><br /><br /></h4>

		    </form>

		    <?php

		    	$n = $_POST['name'];
        		$a = $_POST['age'];
        		$c = $_POST['comment'];
        		$d = date('Y/m/d');

            	$mysqli->query("INSERT INTO FirstTB(name, age, comment, date) values('$n', '$a', '$c', '$d')");

        		if(!$mysqli) {

        			echo mysqli_error(); 

   				} else{

        			echo "Comment sent succesfully <br />";

    			}

		    ?>

		</div>

	</body>

</html>
