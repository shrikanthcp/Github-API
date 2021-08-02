
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="st.css" />
</head>
<body>
<div class="login-box">  
  <h2>Hey</h2>
  <h3 style='color:white'>You are in user dashboard page</h3>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="user-box">
      <span style='color:white'>Select PDFs to upload:</span>  
            <input type="file" name="files[]" multiple id="fileInput" >
   <div class="user-box">
      <input type="submit" name="submit" value="Click here to SUBMIT" required="">
    </div>
  </form>
</div>

</body>
  
</html>                    
