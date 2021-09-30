<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
            rel="stylesheet" 
            integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" 
            crossorigin="anonymous">
    <title>Write - Blog</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">

		<div class="container-fluid">

			<a class="navbar-brand" href="/view/main.php">PHP-BOARD</a>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>

			</div>
			
		</div>
	</nav>

    <div style="min-width: 450px" class="rounded-3 border border-1 shadow-lg w-50 h-75 p-5 position-absolute top-50 start-50 translate-middle">
        
        <form action="/view/main.php">
            <button type="submit" class="btn-close mb-3" "></button>
        </form>


        <?php 
        
        require "../config/db_connect.php";

        $board_id = $_GET['board_id'];

        $stmt = $conn -> prepare("SELECT * FROM board WHERE user_id=$board_id");
        $stmt -> execute();
        $boardResult = $stmt -> fetch();

        ?>



            <div class="mb-2">
                <p>Title</p>  
                <div class="rounded-3 border border-1 shadow-sm w-100 mb-4 p-2">
                    <?php echo $boardResult["title"] ?>
                </div>

                <p calss="">Contents</p>
                <div class="rounded-3 border border-1 shadow-sm w-100 p-2" style="height: 440px;">
                    <?php echo $boardResult["contents"] ?>
                </div>

            </div>

    </div>

</body>