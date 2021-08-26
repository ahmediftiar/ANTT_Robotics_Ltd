<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login and Registration Form in HTML | CodingNepal</title>
      <link rel="stylesheet" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <link href="{{ asset('/assets/css/register.css') }}" rel="stylesheet" />
    </head>
   <body>
    <div class="logo">
    <a class="" href="{{ route('home') }}">
      <img src="https://edublock.co/anttaset/ANTTRobotics_logo_full%20white-04.png" class="">
    </a>
    </div>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Login
            </div>
            <div class="title signup">
               Signup
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="#" class="login">
                  <div class="field">
                     <input type="text" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" required>
                  </div>
                  <div class="pass-link">
                     <a href="#">Forgot password?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login">
                  </div>
                  <div class="other-login-signup my-3">
                    <div class="or-login-signup text-center">
                      <strong>Or Sign in With</strong>
                    </div>
                  </div>
                  <ul class="list-inline social-login-signup text-center">
                    <li class="list-inline-item my-1">
                      <a href="#" class="btn btn-facebook"><i class="fab fa-facebook-f pr-1"></i> Facebook</a>
                    </li>
                    <li class="list-inline-item my-1">
                      <a href="#" class="btn btn-google"><i class="fab fa-google pr-1"></i> Google</a>
                    </li>
                  </ul>
                  
                  <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div>
               </form>
               <form action="#" class="signup">
               <div class="field">
                     <input type="text" placeholder="Name" required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Signup">
                  </div>
                  <div class="other-login-signup my-3">
                    <div class="or-login-signup text-center">
                      <strong>Or Sign up With</strong>
                    </div>
                  </div>
                  <ul class="list-inline social-login-signup text-center">
                    <li class="list-inline-item my-1">
                      <a href="#" class="btn btn-facebook"><i class="fab fa-facebook-f pr-1"></i> Facebook</a>
                    </li>
                    <li class="list-inline-item my-1">
                      <a href="#" class="btn btn-google"><i class="fab fa-google pr-1"></i> Google</a>
                    </li>
                  </ul>
               </form>
               
            </div>
         </div>
      </div>
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
   </body>
</html>