<?php 
      session_start();
      include_once('conn.php');
      $code=$_SESSION['random_code'];
?>      


<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="messagecode.css">
      <title>JUstSend</title>
</head>
<body>
      <div class="container">
            <div class="main">
      		<h1 class="title">JUstSend</h1>
                  <div class="link">
                       <h2>Message Code</h2>
                  </div>
                       
      		<div class="link">
      		     <input type="text" value="<?php echo $code; ?>">
      		</div>
                 <button><a href="index.php" class="back">HOME</a> </button>
      	</div>	
      </div>

</body>
</html>