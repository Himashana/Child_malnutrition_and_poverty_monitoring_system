<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Child malnutrition and poverty monitoring system</title>

    <!-- Jquery CSS -->

    <link rel="stylesheet" href="../jqueryui/jquery-ui.min.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">

    <!-- Jquery js -->
    <script src="../jquery/jquery-3.6.4.min.js"></script>
    <script src="../jqueryui/jquery-ui.min.js"></script>

    <!-- Bootstrap js -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../css/styles.css?v=1">
</head>
<body>
    <center>
    <form action="login.php" id="form" method="POST" style="overflow-y:auto; height:90vh" onsubmit="event.preventDefault();">
        <div class="loginBox">
            <b><h2>Child malnutrition & poverty monitoring system</h2></b>
            <h3>MALNUTRITION TRACKER</H3><br>

            <h4>Sign in to your account</h4><br>
            
            <?php
                if(isset($_GET['error'])){
                    if($_GET['error'] == "Login_Error"){
                        echo '<div style="background-color:#FFA6A6; width:200px;">Username or password is incorrect.</div><br>';
                    }
                }
            ?>
            
            <table>
                <tr>
                    <td>Username:&nbsp;</td>
                    <td>
                        <input type="text" name="username" id="username" placeholder="Enter your username" class="form-control">
                        <p style="color:red; display:none;" id="usernameErrorMsg">Please enter the username</p>
                    </td>
                </tr><tr><td><br></td></tr>
                <tr>
                    <td>Password:&nbsp;</td>
                    <td>
                        <input type="text" name="password" id="password" placeholder="Enter your password" class="form-control">
                        <p style="color:red; display:none;" id="passwordErrorMsg">Please enter the password</p>
                    </td>
                </tr><tr><td><br></td></tr>
                <!-- <tr>
                    <td colspan="2"><a href="">Forget password?</a></td>
                </tr><tr><td><br></td></tr> -->
            </table>
            <input type="submit" value="SIGN IN" onclick="signinBtn_OnClick();" class="btn btn-primary"><br><br>
        </div>
    </form>
    </center>

    <script>
        function signinBtn_OnClick(){
            var isReadyToSubmit = true;

            if(document.getElementById("username").value == ""){
                document.getElementById("usernameErrorMsg").style.display = "block";
                isReadyToSubmit = false;
            }else{
                document.getElementById("usernameErrorMsg").style.display = "none";
            }

            if(document.getElementById("password").value == ""){
                document.getElementById("passwordErrorMsg").style.display = "block";
                isReadyToSubmit = false;
            }else{
                document.getElementById("passwordErrorMsg").style.display = "none";
            }
            
            if(isReadyToSubmit){
                document.getElementById("form").submit();
            }
        }
    </script>
</body>
</html>