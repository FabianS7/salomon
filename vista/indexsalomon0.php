
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>salomon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-light bg-dark">
      <div class="container">


        <button class="navbar-toggler" data-toggle="collapse" data-target="#first" type="button" >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse"id="first">

          <a class="navbar-brand text-primary"href="#">
            Home
          </a>
          <ul class="navbar-nav">

            <li class="nav-item"> <a class="nav-link text-primary" href="#">Status</a> </li>
            <li class="nav-item"> <a class="nav-link text-primary" href="#">Problem</a> </li>
            <li class="nav-item"> <a class="nav-link text-primary" href="#">Contest</a> </li>
            <li class="nav-item"> <a class="nav-link text-primary" href="#">Ranklist</a> </li>
            <li class="nav-item"> <a class="nav-link text-primary" href="#">Faq</a> </li>


          </ul>




        </div>


        <button type="button" class="btn btn-outline-primary mx-1" data-toggle="modal"data-target="#loginModal" id="buttonlogin "name="buttonlogin">login</button>
        <button type="button" class="btn btn-outline-primary" data-toggle="modal"data-target="#registerModal"name="button">Register</button>



        <!--PARA LOGIN-->



          <div class="modal fade" role="dialog" id="loginModal">
              <div class="modal-dialog">
                <div class="modal-content">

                  <div class="modal-header">
                    <h3 class="modal-title">Login</h3>
                    <button type="button" class="close" data-dismiss="modal" name="bu">&times;</button>
                  </div>

                  <div class="modal-body">

                    <div class="from-group">
                      <input type="text" name="username" id="username" class="form-control" value="" placeholder="Username or Email">
                    </div>
                    <br>
                    <div class="from-group">
                      <input type="password" name="password" id="password" class="form-control" value="" placeholder="Password">
                    </div>

                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-warning" name="forpassword">Forget Password</button>
                    <button type="button" class="mx-5 btn btn-danger" data-dismiss="modal" name="cancel">Cancel</button>
                    <button type="submit" class="btn btn-success" id="login_button" name="login_button">Sign in</button>
                  </div>

                </div>
              </div>

          </div>




        <!-- para registro -->
        <div class="modal fade" role="dialog" id="registerModal">

            <div class="modal-dialog">
              <div class="modal-content">

                <div class="modal-header">
                  <h3 class="modal-title">Register</h3>
                  <button type="button" class="close" data-dismiss="modal" name="bu">&times;</button>
                </div>

                <div class="modal-body">

                  <div class="from-group">

                    <input type="text" name="username_register" id="username_register" class="form-control" value="" placeholder="Username">

                  </div>
                  <br>
                  <div class="from-group">
                    <input type="password" name="password_register" id="password_register"class="form-control" value="" placeholder="Password">
                  </div>
                  <br>
                  <div class="from-group">
                    <input type="password" name="repassword_register" id="repassword_register"class="form-control" value="" placeholder="Repeat Password">
                  </div>
                  <br>
                  <div class="from-group">
                    <input type="text" name="nick_name" id="nick_name" class="form-control" value="" placeholder="Nick Name">
                  </div>
                  <br>
                  <div class="from-group">
                    <input type="email" name="email" id="email"class="form-control" value="" placeholder="Email">
                  </div>
                  <br>
                  <div class="from-group">
                    <!-- lista desplegable
                    <button class="from-control dropdown-toggle btn btn-outline-primary" type="button" id="dropdownMenuBoton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Country</button>
    								<div class="dropdown-menu" aria-labelledby="dropdownMenuBoton">
    									<a class="dropdown-item" href="#">grover</a>
    									<a class="dropdown-item" href="#">grover</a>
    									<a class="dropdown-item" href="#">grover</a>
    								</div>
                  -->

                  <input type="text" name="country" id="country" value="" placeholder="Country">

                  </div>
                  <br>
                  <div class="from-group">
                    <input type="text" name="university" id="university" class="form-control" value="" placeholder="University">
                  </div>
                  <br>
                  <div class="bg-primary from-group d-inline-block">
                    <input type="text" name="captcha" id="captcha"class="form-control" value="" placeholder="Captcha">

                  </div>
                  <!-- para captcha -->
                  <div class="from-group d-inline-block bg-primary float-right mr-5">
                    asdf
                  </div>
                </div>

                <div class="modal-footer">

                  <button type="button" class="mx-5 btn btn-danger" data-dismiss="modal" name="cancel">Cancel</button>
                  <button type="submit" class="btn btn-success" id="register_button" name="register_button">Register</button>
                </div>

              </div>

              </div>
            </div>

        </div>




      </div>
    </nav>








    <h1 class="text-center mt-5">JUEZ SALOMON</h1>











    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  </body>
</html>







<script>
//jquery
$(document).ready(function(){
     $('#login_button').click(function(){
          var username = $('#username').val();
          var password = $('#password').val();
          if(username != '' && password != ''){

               $.ajax({

                    url:"../indexs.php",
                    method:"POST",
                    data: {username:username, password:password},
                    success:function(data)
                    {
                         //alert(data);
                         if(data == 'No')
                         {
                              alert("Wrong Data");
                         }
                         else
                         {
                              //$('#loginModal').hide();
                              //location.reload();

                              //alert(data);
                              location.href="../indexs.php";

                         }
                    }
               });
          }
          else
          {
               alert("Both Fields are required");
          }
     });


     //register
     $('#register_button').click(function(){
          var username_register = $('#username_register').val();
          var password_register = $('#password_register').val();
          var nick_name = $('#nick_name').val();
          var email = $('#email').val();
          var country = $('#country').val();
          var university = $('#university').val();
          var captcha = $('#captcha').val();

          if(username_register != '' && password_register != '' && nick_name !='' && email != '' && country != '' && university != '' && captcha != ''){
              //alert("entro");

               $.ajax({

                    url:"../userindex.php",
                    method:"POST",
                    data: {username_register:username_register, password_register:password_register, nick_name:nick_name, email:email, country:country, university:university,captcha:captcha},

                    success:function(data)
                    {
                         //alert(data);
                         if(data == 'No')
                         {
                              alert("user exist");
                         }
                         else
                         {
                              //$('#loginModal').hide();
                              //location.reload();

                              //alert(data);
                              location.href="../indexs.php";

                         }
                    }
               });

          }
          else
          {
               alert("Both Fields are required");
          }
     });


     //logout
});
//register

</script>

<?php

/*
$('#logout').click(function(){
     var action = "logout";
     $.ajax({
          url:"action.php",
          method:"POST",
          data:{action:action},
          success:function()
          {
               location.reload();
          }
     });
});


*/
?>









<?php
/*session_start();
$connect = mysqli_connect("localhost", "root", "", "testing");
if(isset($_POST["username"]))
{
     $query = "
     SELECT * FROM admin_login
     WHERE admin_name = '".$_POST["username"]."'
     AND admin_password = '".$_POST["password"]."'
     ";
     $result = mysqli_query($connect, $query);
     if(mysqli_num_rows($result) > 0)
     {
          $_SESSION['username'] = $_POST['username'];
          echo 'Yes';
     }
     else
     {
          echo 'No';
     }
}

if(isset($_POST["action"]))
{
     unset($_SESSION["username"]);
}  */
?>
