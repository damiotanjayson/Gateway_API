<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Login</title>
      <link rel="icon" href="https://i.dlpng.com/static/png/6459177_preview.png" type="image/gif" sizes="16x16">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
      <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"/>
      <style type="text/css">
         body {
            background-image: url('https://images.unsplash.com/photo-1527903789995-dc8ad2ad6de0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1007&q=80');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
         }

         .container{
            width:300px;
            margin-top:50px;
            background-color:white;   
         }

         .border{
            padding:30px 0px 30px 0px;
         }

         .login-form{
            margin:15px; 
         }
        
   </style>

   <body>
      <div class ="container border rounded">
         <div class = "text-center">
            <h2> Login </h2>
         </div>
         <div class="login-form">
         <form action="check" method="get">
               <label for="username">Username:</label>
               <input type="text" name="user" placeholder="Enter username" required autofocus></br></br>
               <label for="password">Password:</label>
               <input type="password" name="pass" placeholder="Enter password" required></br></br>
               <input type="submit"class= "btn btn-primary btn-block" value="Login">
         </form>
         </div>
      </div>
   </body>
</html>
