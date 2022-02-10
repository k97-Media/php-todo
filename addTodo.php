<?php 
	require "./includes/head.php";
	if(isset($_POST["submit"])){
		$sql = "INSERT INTO posts (title, text) VALUES ('{$_POST['title']}', '{$_POST['text']}')";
		if($db_conn-> query($sql) === TRUE){
			header("Location: ./index.php?msg=success");
		}else{
			echo "Error:".$sql."<br>".$db_conn->error;
		}
	}
?>
	<h1 class="m-4">Add Todo</h1>
	<form action="./addTodo.php" method="POST" class="m-4">
		<div class="form-group">
			<label for="title" class="form-label">Title: </label>
			<input type="text" name="title" class="form-control" id="title" placeholder="Study" required>
		</div>
		<div class="form-group">
			<label for="text" class="form-label">Text: </label>
			<textarea class="form-control" id="text" rows="3" name="text" required>
			</textarea>
		</div>
		<input type="submit" name="submit" class="btn btn-info mt-5" value="Save">
	</form>

<?php require "./includes/footer.php" ?>