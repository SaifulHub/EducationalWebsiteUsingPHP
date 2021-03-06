<html>
  <head>

    <style>
      body{
        background: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.3)),url("pencil.jpg") no-repeat center center fixed; 
      }
      .login-box{
        max-width:700px;
        float:none;
        margin:150px auto;
      }
      .left{
        background: rgba(211,211,211,0.5);
        padding:30px;
      }
      .right{
        background:white;
        padding:30px;
      }
      .form-control{
        background-color: transparent !important;
      }

    </style>
    <title>Userlogin and Registration form</title>
    <link rel="icon" href="Youtube Profile.png">
    <link rel ="stylesheet" type ="text/css" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
  </head>
  <body>
    <div class="container">
    <div class="login-box">
      <div class="row">
        <div class="col-md-6 left">
           <h2>Log In Here</h2>
           <form action="validation.php" method = "post">
           
           <div class="form-group">
            <label>Username</label>
            <input type="text" name = "user" class = "form-control" rquired>
           </div>

           <div class="form-group">
            <label>Password</label>
            <input type="password" name = "password" class = "form-control" rquired>
           </div>

           <button type = "submit" class = "btn btn-primary">Log In</button>
           </form>
        </div>
        <div class="col-md-6 right">
           <h2>Get Regisered Here</h2>
           <form action="registration.php" method = "post">
           
           <div class="form-group">
            <label>Username</label>
            <input type="text" name = "user" class = "form-control" rquired>
           </div>

           <div class="form-group">
            <label>Email</label>
            <input type="email" name = "email" class = "form-control" rquired>
           </div>

           <div class="form-group">
            <label>Class</label>
            <input type="number" name = "class" class = "form-control" rquired>
           </div>

           <div class="form-group">
            <label>Password</label>
            <input type="password" name = "password" class = "form-control" rquired>
           </div>

           <button type = "submit" name = "submit" class = "btn btn-primary">Register</button>
           </form>
        </div>
      </div>
      </div>
    </div>
  </body>
</html>