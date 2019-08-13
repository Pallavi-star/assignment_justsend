<!DOCTYPE html>
<html>
<head>
	<title>JUstSend</title>
	<link rel="stylesheet" type="text/css" href="send.css">
</head> 
<body>
    <div class="container">
    <h1>JUstSend</h1>
	<div class="main">
        <form method="post" action="msg_details.php" class="abc" enctype="multipart/form-data">
        
        <div class="link">
     	    <input  type="text" name="name" placeholder="Your name"><br>
        </div>

        <div class="link">
     	    <input type="text" name="email_id" placeholder="Your email"><br>
        </div>
        <div class="link"> 	
     	    <input  type="text" name="subject" placeholder="Subject"><br>
        </div>

        <div class="link"> 	
     	    <textarea cols="30"  rows="4" name="msg" placeholder="Message"></textarea>
        </div> 	

        <div class="link">
            <input class="btn1" name="pict_file" type="file" placeholder="select image">
        </div>

        <div>
            <input class="btn1" name="files" type="file" placeholder="Select files">
        </div>

        <div class="link">
            <button class="btn_read" name="submit" type="submit">Send</button> 
        </div>
        <button><a href="index.php" class="back">HOME</a> </button>
        
    </form>

     	
   </div>

</body>
</html>