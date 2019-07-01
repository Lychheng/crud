
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="styleregister.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="jquery-3.2.1.min.js"></script>
</head>
<body>
<div class="container-fluid register" >
     <div class="row">
         <div class="col-md-3 register-left" data-aos="fade-down" data-aos-duration="1600">
              <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
              <h3>Welcome.</h3>
              <a href="homepage.php"><input type="submit" name="" value="Login" class="login"/><br/></a>
         </div>
         <div class="col-md-9 register-right" data-aos="fade-left" data-aos-duration="1600">
              <div class="tab-content" id="myTabContent">
                   <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Register</h3>
                        <form action="signup.php" method="POST" enctype="multipart/form-data">
                             <div class="row register-form">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <input type="text" class="form-control"  placeholder="Username *" value="" name="user" id="user"/>
                                          <p style="color:red;"> <?php echo $_SESSION['error'];$_SESSION['error']=" "; ?></p>
                                      </div>
                                      <div class="form-group">
                                            <input type="password" class="form-control" placeholder="password *" value="" name="pass" id ="pass"/>
                                      </div>
                                      <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" name="fname" id="fname"/>
                                      </div>
									  <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" name="lname" id="lname"/>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                        <div class="form-group form-control">
                                            <label class="control-label margin" for="lastname" style="margin-right: 15px" id="gender">
                                            Gender: 
                                            </label>
                                            <label class="radio-inline margin">
                                                <input type="radio" name="gender" value="Male" style="margin-right: 5px">Male
                                            </label>
                                            <label class="radio-inline margin">
                                                <input type="radio" name="gender" value="Female" style="margin-right: 5px">Female
                                            </label>
                                            <label class="radio-inline margin">
                                                <input type="radio" name="gender" value="Other" style="margin-right: 5px">Other
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" value="" name="email" id="email"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="9" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Phone Number *" value="" id
                                            />
                                        </div>
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="image"/>
                                            <p style="color:darkgray">Please choose a JPEG or PNG file</p>
                                            <p style="color:red;"><?php echo $_SESSION['errorimg']; $_SESSION['errorimg']=" "; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btnRegister" id="register"  value="Register" name="submit"/>
                                        </div>
                                  </div>
                              </div>
                              </form>
                            </div>
                        </div>
                      
                     </div>
                  </div>
               </div>
           </div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
<script> 
   AOS.init();
	$(document).ready(function(){
	  $("#myInput").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#myDIV *").filter(function() {
		  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	  });
	});
</script>
</html>
