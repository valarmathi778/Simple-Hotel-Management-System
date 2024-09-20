<!DOCTYPE html>
<html>
<head>
<title>Food recipe</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<style>
	body{
		padding: 20px;
		background-color: yellow;
        color: black;
		justify-content: center;
		display: flex;
		align-items: center;
		height: 100vh;
	}
	.section{
		marign-left: 20px;
    }
	.container {
        background-color: #ffffff; 
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); 
	}
	.formgroup{
		margin-bottom: 20px;
		width: 500px;
	}
	.btn-submit {
        background-color: green; 
		color: white;
        border: 2px; 
    }

    .btn-submit:hover {
        background-color: #0056b3;
    }
</style>
<body>
  <div id="section">
	<h3 style="text-align: center;">Food Submission Form</h3>
	<form>
		<div class="formgroup">
			<label>Recipe Name:</label>
			<input type="text" class="form-control" id="foodname" placeholder="Recipe Name">
		</div>
		<div class="formgroup">
			<label>Ingredients:</label>
			<input type="text" class="form-control" id="foodingredient" placeholder="Recipe Ingredient">
		</div>
		<div class="formgroup">
			<label>Meal Type:</label>
			<input type="text" class="form-control" id="foodtype" placeholder="Recipe Type">
		</div>
		<div class="formgroup">
			<label>Cusinie:</label>
			<input type="text" class="form-control" id="cusinie" placeholder="Recipe Cusinie">
		</div>
		<div class="formgroup">
			<label>Serving Size:</label>
			<input type="text" class="form-control" id="size" placeholder="Recipe size">
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>
   </div>
</body>
</html>