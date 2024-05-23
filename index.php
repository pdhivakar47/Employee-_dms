<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| Login & Registration |</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h2 class="Welcome">Welcome</h2>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Service</a>
            <a href="#">Contact</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>
    
    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
        <div class="form-Login">
            <h2>Login</h2>
            
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" id = "Email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" id ="Password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label>
                        <input type="checkbox">Remember me
                    </label>
                    <a href="#">Forget Password</a>
                </div>
                <button type="submit" class="button" onclick="func()" >Login</button>
                <div class="Login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                </div>
        
        </div>



        <div class="form-Register">
            <h2>Register</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label>
                        <input type="checkbox"> I agree to terms & conditions
                    </label>
                
                </div>
                <button type="submit" class="button">Register</button>
                <div class="Login-register">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>


   <script>
    function func(){
        let email = document.getElementById("Email").value;
        let password =document.getElementById("Password").value;
        if(email == 'admin@gmail.com' && password=="12345"){
            alert("Login Successfull");
            window.location.assign("index.php");
        }
        else{
            alert("Wrong credential");
        }
    }
   </script>
     

    </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

   
</body>

</html>