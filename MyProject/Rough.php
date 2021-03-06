<!DOCTYPE html>
<html>
  <head>

    <style>

      *{  
        margin:0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        font-family: Verdana, Geneva, Tahoma, sans-serif;}
      h1 {
        background:rgba(68, 143, 228, 0.938);
        font-size:40px;}
      .span1{
        color: white;}
      .span2{
        color: red;}
      form{
        font-size:20px;
      }

    </style>

  </head>
  <body>
  <center>
    <h1>Registration to <span class="span1">Learn</span><span class="span2">Academy</span></h1>
    <hr>
    <br>

<!-- I am using a table to show the form in an ogranised manner-->

   
     <form method = "post" action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
      <table>
        <tr>
          <td>Name</td>
          <td><input type="text" name = "name"></td>
        </tr>
  
        <tr>
          <td>Email</td>
          <td><input type="email" name = "email"></td>
        </tr>
  
        <tr>
          <td>Comment</td>
          <td><textarea name="comment" id="" cols="30" rows="5"></textarea></td>
        </tr>
  
        <tr>
          <td>Gender</td>
            <td>
                <input type="radio" name = "gender" value = "male">Male
                <input type="radio" name = "gender" value = "female">Female
                <input type="radio" name = "gender" value = "other">Other
            </td>
        </tr>
  
        <tr>
          <td></td>
          <td> <input name="submit" type = "submit" value = "Submit"></input> </td>
          <td> <input name="reset" type = "reset" value = "Clear"></input> </td>
        </tr>
        

      </table>
    </form>
</center>


    <!-- data accepting and printing through php-->
    <?php
      if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name    = $_POST["name"]; 
        $email   = $_POST["email"]; 
        $comment = $_POST["comment"]; 
        $gender  = $_POST["gender"]; 

        
        echo "Name: ". $name. "<br>";
        echo "Email: ". $email. "<br>";
        echo "Comment: ". $comment. "<br>";
        echo "Gender: ". $gender;
        
      }
    ?>
  </body>
</html>