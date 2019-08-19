<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>



<div class="row">
  <div class="col-75">
    <div class="container">
    	<center><h1>JustSend</h1></center>
      <form action="codeg.php" method="post" enctype="multipart/form-data" onsubmit="return validate()">
      
        <div class="row">
          <div class="col-50">

            

            <label for="fname"> Name</label>
            <input type="text" id="name" name="name" >

           <label for="email"> Mobile number</label>
            <input type="text" id="email" name="email">

            <label for="subject">Subject</label>
            <textarea  id="subject" name="subject"></textarea>

            <label for="message"> Message</label>
            <textarea  id="msg" name="msg"></textarea>
            <br>
            <br>
            <label for="profile">Profile</label>
             <input type="file" name="image" id="image">
                        <br>
                        <br>
            <label for="profile"> file</label>
             <input type="file" name="file" id="image">
                       
          </div>
        </div>
        <input type="submit" name="submit" value="send" class="btn">
    </form>
    
</div>
</div>
	<script type="text/javascript">
    function validate(){
      var name=document.getElementById('name').value;
      var email=document.getElementById('email').value;

       if (name==null || name==""){  
          alert("Name can't be blank");  
          return false;  
      }else if (email==null || email==""){  
          alert("Contact field can't be blank");  
          return false;
      }
       return true;
    }
  </script>
  </body>
	</html>