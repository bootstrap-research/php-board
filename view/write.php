<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
            rel="stylesheet" 
            integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" 
            crossorigin="anonymous">
    <title>Write - Blog</title>
</head>
<body>
	
	<div style="min-width: 450px" class="rounded-3 border border-1 shadow-lg w-75 h-75 p-5 position-absolute top-50 start-50 translate-middle">
	
		<form action="../config/writesave.php" method="post">

		
				<div class="mb-3">
					<label for="floatinginputarea" class="form-label">Title</label>
					<input type="text" class="form-control" id="floatinginputarea" 
						placeholder="Enter the title!" name="title">
				</div>
			
			
				<div class="mb-3">
					<label for="floatingTextarea" class="form-label">contents</label>
					<textarea class="form-control" id="floatingTextarea" 
						style="height: 480px" name="contents"></textarea>
				</div>
	
				<button type="submit" class="btn btn-dark col ms-3">submit</button>

		</form>
	
	</div>

</body>