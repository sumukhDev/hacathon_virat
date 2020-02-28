<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($db,$_POST['email']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT email,password FROM users WHERE email = '$username' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      if($count == 1) {
         //session_register("username");
         $_SESSION['login_user'] = $username;
         
         header("location: dashboard.php");
      }else {
         $er= "Your Login Name or Password is invalid";
      }
   }
   ?>
<html>
   
  



    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <!--   Favicon -->

      <link rel="shortcut icon" href="./Images/login.ico" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style type="text/css">
       body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }

    .field-icon {

        float: right;

        margin-left: -25px;

        margin-top: -25px;

        position: relative;

        z-index: 3;

        margin-right: 3px

    }



    .kl {

        color: #d8d8d8

    }



    @media only screen and (max-width: 768px) {

        #imh {

            display: none;

        }

    }

    </style>

</head>



<body>

    <div class="container" style="padding-top: 13%;">

        <div class="row">

            <div class="col-md-5" style="padding-right:10%;">

                <h2 style="text-align: center;">Login</h2>

                <form action="" method="post">

                    <!-- <div class="form-group col-xs-4">

                            <label for="name">Name</label>

                            <input type="text" class="form-control" id="name" placeholder="Name" name="firstname">

                        </div> -->

                    <div class="form-group col-xs-4">

                        <label for="email">Email Address</label>

                        <input type="email" class="form-control" id="email" placeholder="name@domain.com" name="email" />

                    </div>

                    <div class="form-group">

                        <label for="pwd">Password</label>

                        <input id="password-field" type="password" class="form-control pwd" placeholder="Enter your password" name="password" />

                        <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password kl"></span>

                    </div>

                    <br>

                    <button type="submit" class="btn btn-primary rounded" name="submit" value=" Submit " style="width: 100%;" />Login</button><br><br>
                    <p align="center"><a href="finalregi.php" ><b>Register?</b></a></p>
                </form>
            </div>

            <div class="col-md-7" style="padding-left: 10%;">

                <img src="login.png" class="img-fluid" id=imh>

            </div>

        </div>

    </div>

    <script type="text/javascript">

    $(".toggle-password").click(function() {



        $(this).toggleClass("fa-eye-slash fa-eye ");

        var input = $($(this).attr("toggle"));

        if (input.attr("type") == "password") {

            input.attr("type", "text");

        } else {

            input.attr("type", "password");

        }

    });

    </script>

</body>
</html>