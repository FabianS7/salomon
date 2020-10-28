
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
          <ul class="navbar-nav mr-auto">

            <li class="nav-item"> <a class="nav-link text-primary" href="#">Status</a> </li>
            <li class="nav-item"> <a class="nav-link text-primary" href="#">Problem</a> </li>
            <li class="nav-item"> <a class="nav-link text-primary" href="#">Contest</a> </li>
            <li class="nav-item"> <a class="nav-link text-primary" href="#">Ranklist</a> </li>
            <li class="nav-item"> <a class="nav-link text-primary" href="#">Faq</a> </li>

          </ul>




        </div>

        <ul class="navbar-nav d-inline-block">
            <li class="nav-item d-inline-block dropdown">
                <a type="button" class="btn btn-outline-primary dropdown-toggle mx-1" data-toggle="dropdown" name="button_user"><?php echo $user->getUsername(); ?></a>

                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Profile</a>
                    <a href="" class="dropdown-item" data-toggle="modal" data-target="#updateModal">Update</a>
                    <a href="#" class="dropdown-item">Message</a>
                </div>
            </li>
            <li class="nav-item d-inline-block"> <a class="btn btn-outline-primary" href="../includes/logout.php">Logout</a> </li>
        </ul>



        <!-- para update -->
        <div class="modal fade" role="dialog" id="updateModal">
            <?php  $obj=$user->getUser($user->getUsername());?>
            <div class="modal-dialog">
              <div class="modal-content">

                <div class="modal-header">
                  <h3 class="modal-title">Update</h3>

                  <button type="button" class="close" data-dismiss="modal" name="bu">&times;</button>
                </div>

                <div class="modal-body">

                  <div class="from-group">
                    <label for="">Username:</label>
                    <input value="<?php echo $obj->username; ?>" type="text" name="username_update" id="username_update" class="form-control" value="" placeholder="Username" readonly="readonly">

                  </div>
                  <br>
                  <div class="from-group">
                    <label for="password_update">Original Password:</label>
                    <input type="password" name="password_update" id="password_update"class="form-control" value="" placeholder="Password">
                  </div>
                  <br>
                  <div class="from-group">
                    <input type="password" name="newpassword_update" id="newpassword_update"class="form-control" value="" placeholder="New Password">
                  </div>
                  <br>
                  <div class="from-group">
                    <input type="password" name="re_newpassword_update" id="re_newpassword_update"class="form-control" value="" placeholder="Repeat New Password">
                  </div>
                  <br>
                  <div class="from-group">
                    <label for="nick_name">Nickname:</label>
                    <input value="<?php echo $obj->nick_name; ?>"type="text" name="nick_name" id="nick_name" class="form-control" value="" placeholder="Nick Name">
                  </div>
                  <br>
                  <div class="from-group">
                      <label for="email">Email:</label>
                    <input value="<?php echo $obj->email; ?>"type="email" name="email" id="email"class="form-control" value="" placeholder="Email">
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
                  <label for="country">Country:</label>
                  <input value="<?php echo $obj->country; ?>" type="text" name="country" id="country" value="" placeholder="Country">

                  </div>
                  <br>
                  <div class="from-group">
                      <label for="university">University:</label>
                    <input value="<?php echo $obj->university; ?>" type="text" name="university" id="university" class="form-control" value="" placeholder="University">
                  </div>
                  <br>
                  <div class="from-group d-inline-block">
                      <label for="captcha">Captcha:</label>
                    <input type="text" name="captcha" id="captcha"class="form-control" value="" placeholder="Captcha">

                  </div>
                  <!-- para captcha -->
                  <div class="from-group d-inline-block bg-primary float-right mr-5">
                    asdf
                  </div>
                </div>

                <div class="modal-footer">

                  <button type="button" class="mx-5 btn btn-danger" data-dismiss="modal" name="cancel">Cancel</button>
                  <button type="submit" class="btn btn-success" id="update_button" name="update_button">Update</button>
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


     //register
     $('#update_button').click(function(){
          var username_update = $('#username_update').val();
          var password_update = $('#password_update').val();
          var newpassword_update = $('#newpassword_update').val();
          var nick_name = $('#nick_name').val();
          var email = $('#email').val();
          var country = $('#country').val();
          var university = $('#university').val();
          var captcha = $('#captcha').val();
          //newpassword_update
          if(username_update != '' && password_update != '' && newpassword_update != '' && nick_name !='' && email != '' && country != '' && university != '' && captcha != ''){
              //alert("entro");
              $.ajax({

                   url:"../userindex.php",
                   method:"POST",
                   data: {username_update:username_update, password_update:password_update, newpassword_update:newpassword_update,nick_name:nick_name,email:email,country:country,university:university,captcha:captcha},

                   success:function(data)
                   {
                        //alert(data);
                        if(data == 'Nopass')
                        {
                             alert("password incorret");
                        }
                        else
                        {
                            if (data == 'Yes') {

                                location.href="../indexs.php";
                            }else{
                                alert("error al update");
                            }
                             //$('#loginModal').hide();
                             //location.reload();

                             //alert(data);


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
