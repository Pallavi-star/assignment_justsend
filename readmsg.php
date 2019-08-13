<?php
    //session_start();
    include'conn.php';
    $db=mysqli_connect($servername,$username,$password,$dbname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="style.css">
    <title>JUstSend</title>
</head>
<body>
    <div class="container">
        <div class="main">
        <?php 
            if(isset($_POST['submit'])){
                
                $random_code=$_POST['random_code'];
                
                $ans="SELECT name,email_id,subject,msg,image,id FROM  message WHERE random_code='$random_code'";
                $id="";

                $res=mysqli_query($db,$ans);        
                
                if(mysqli_num_rows($res) > 0){
                
                    while($roww = mysqli_fetch_array($res)) {
                        $id=$roww[5];
                       
                        echo('
                           
                            <div class="info">
                            <h1 class="title">JUstSend</h1>
                            <lable>name :</lable>
                                '.$roww[0]." <br>
                            <lable>email :</lable>
                                ".$roww[1].'<br>
                            <lable>subject :</lable>
                                '.$roww[2].'<br>
                            <lable>Message :</lable>
                                '.$roww[3].'<br>
                            <lable>image :</lable><br>
                                <img src="data:image/jpg;base64,'.base64_encode(  $roww[4] ).'"><br>
                            
                            </div> ');

                    }//close while

                }//close if mysqli_num_rows

            }//close if submit
        ?>

        <div class="link">
                 <a href="delete.php?del=<?echo $id; ?>" class="start">Delete message</a>   
                 <a href="#" class="read" name="">Read a message</a>
          </div>         
                <div class="button"><br><br>      
                   <button><a href="index.php" class="back">HOME</a> </button>
                </div> 
      
    </div>

    </div><!---close container-->
</body>
</html>