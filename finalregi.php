   <?php
 
include 'config.php';

if (isset($_POST['submit']))
{
    $name=$_POST['name'];

    // $fname = $_POST['fname'];
    // $lname = $_POST['lname'];
     $email = $_POST['email'];
     $num = $_POST['mobile_number'];
     $pass = $_POST['password'];
     //$date1 = $_POST['date1'];
     $add = $_POST['address'];
     // $gst = $_POST['gst'];
    $sql = "INSERT INTO regi (name,email,mobile_number,address,password,gst)
   VALUES ('$name','$email','$add','$pass','$gst')";

    if (mysqli_query($conn, $sql))
    {
        echo "";
    }
    else
    {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>regi</title>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Settings</title>
    <!--   Favicon -->
    <link rel="shortcut icon" href="./Images/Cow_icon.ico" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro --><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
</head>
<body>
<form action="" class="form-group" method="post">
                                            <div class="col-md-6 ">
                                                <label for="name">Name</label>
                                                <input type="text"  name="name" placeholder="Enter your name" class="form-control">
                                            </div>
                                           <!--  <div class="col-md-6">
                                                <label for="lname"> Last Name</label>
                                                <input type="text"  name="lname" placeholder="Enter your surname" class="form-control">
                                            </div> -->
                                            <div class="col-md-6">
                                                <br>
                                                <label for="email"> Email Address </label>
                                                <input type="email"  name="email" placeholder="Enter your email address" class="form-control">
                                                <small id="emailHelpBlock" class="form-text text-muted">
                                                    This will be shown to others publicly. So input this carefully.
                                                </small>
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                                <label for="phone"> Phone</label>
                                                <input type="number"  name="mobile_number" placeholder="Enter your contact no." class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <br>
                                                <label for="phone">password</label>
                                                <input type="password"  name="password" placeholder="Enter" class="form-control">
                                            </div>
                                           <!-- <div class="col-md-6">
                                                <br>
                                                <label for="bday"> Birthday</label>
                                                <input type="date"  name="date1" placeholder="dd/mm/yyyy" class="form-control">
                                            </div>-->
                                            <div class="col-md-6">
                                                <br>
                                                <label for="phone">Address</label>
                                                <input type="text"  name="address" placeholder="Enter" class="form-control">
                                            </div>
                                            <div class="field-row"> 
        <label class="form-label">Select :</label>
            <label class="form-label"> 
                <input type="radio" name="radio" 
                       value="S"> shop</label> 
            <label class="form-label">  
                <input type="radio" name="radio" 
                       value="Vendor">vendor</label> 
         
        </div> 
        <div class="S selectt"> 
       <label class="form-label"> GSTIN NO.</label> <input type="text" name="gst"  class="field text-field hs-field">
         </div>  
  
        <script type="text/javascript"> 
            $(document).ready(function() { 
                $('input[type="radio"]').click(function() { 
                    var inputValue = $(this).attr("value"); 
                    var targetBox = $("." + inputValue); 
                    $(".selectt").not(targetBox).hide(); 
                    $(targetBox).show(); 
                }); 
            }); 
        </script> 
<?php
 
include 'config.php';

if (isset($_POST['submit']))
{
 $radio = $_POST["radio"];
 $query = "INSERT INTO regi (radio) VALUES ('".$radio."')";
 

    if (mysqli_query($conn, $query))
    {
        echo "";
    }
    else
    {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
                                            <br>
                                            <div class="col-md-12 buttondiv">
                                                <input type="submit" value="submit" name="submit" class="btn btn-primary res">
                                                <button type="reset" class="btn btn-primary res">
                                                    Reset
                                                </button>
                                            </div>
                                        </form>
</body>
</html>