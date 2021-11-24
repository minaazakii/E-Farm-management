<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <link  rel="stylesheet" href="css/index1.css">



    <title>login</title>
</head>
<body style="background-image: url('photos/bgindex1.svg');">

    <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-xl-2 col-lg-2 d-none d-sm-block">

            </div>
            <div class="col-xl-8 col-lg-8 col-sm-12">
            <div class="d-flex justify-content-center" style="width: 100%;">

              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">About Us</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Discover</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Contact Us</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Log in</button>
                </li>
              </ul>

            </div>
            </div>
            <div class="col-xl-2 col-lg-2 d-none d-sm-block">

            </div>
            </div>
          </div>

    <!--

      <div class="tab-content">
        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">.amira</div>
        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">...</div>
        <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">login</div>
      </div>

      <script>
        var firstTabEl = document.querySelector('#myTab li:last-child button')
        var firstTab = new bootstrap.Tab(firstTabEl)

        firstTab.show()
      </script> -->

      

          <div class="container big">
            <div class="row">
              <div class="col-xl-1 col-lg-1 d-none d-sm-block">

              </div>

              <div class="col-xl-5 col-lg-12  d-none d-sm-block position-relative" >

              <img class="position-absolute top-50 start-0 translate-middle-y" src="photos/left img index1.svg" width="100%">
              </div>
              <div class="col-xl-5 col-lg-12 col-sm-12">

                <!-- singin -->
                <div id="mydiv1" class=" container oneform " >

                <div class="d-flex justify-content-center  ">
                    <h3>Welcome!</h3>

                </div>
                <div class="container-fluid d-flex justify-content-start ">
                <form id="myform1" method="POST"  action="{{ route('login') }}"  >
                  @csrf
              
                  <div class="mb-3">
                    <input type="email" name="email" class="form-control"  value="{{old('email')}}"    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User Name or E-mail"  >
                   
                   @error('email')
                   <div class="form-group">{{$message}}</div>
                   @enderror
                   
                    
  
                 
                  </div>
                  <div class="mb-3 input-group">
                    <input type="password" name="password" id="myinput"  value="{{old('password')}}"  class="form-control" placeholder="Password" aria-label="Recipient's username" aria-describedby="button-addon2" >
 
                    
                    

                    <button onclick="myFunction()"  class="btn btn-outline-secondary" type="button" id="button-addon2"> <i id="hide1" class="bi bi-eye-slash-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
                      <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                      <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z"/>
                    </svg></i>
                    <i id="hide2" class="bi bi-eye-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                      <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg></i>

                  

                  </button>
                  </div>

                  @error('password')
                    <div class="form-group ">{{ $message }}</div>
                   @enderror
            
                  <div id="emailHelp" class="form-text">
                    <a href="#" style="text-decoration: none;">
                    In case you forget password ? </a>
                  </div>
                    <!--button to sign in-->
                    <div class="d-flex justify-content-center">
                      <button type="submit" class="btn btn-light" >Submit</button>
                    </div>

                  <div class="grid " style="margin-top: 3.3em;">
                    <button onclick="insing()" id="cli1" class="btnn btn" type="button">Sign In</button>
                    <button onclick="upsing()"  class="btnn btn" type="button">Sign Up</button>
                  </div>

                </form>

                </div>
                <div class="d-flex justify-content-center"><img src="photos/or index1.svg" width="50%"></div>
                <div class="d-flex justify-content-center">


                  <a href="#" ><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                  </svg></a>&ensp;&ensp;&ensp;
                 <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16" style="color: #DF4B38;">
                    <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                  </svg></a>
                </div>

                </div>












<!--form to signup-->


                <div id="mydiv2" class="container twoform" >

                  <div class="d-flex justify-content-center  ">
                      <h3>Welcome!</h3>

                  </div>
                  <div class="container-fluid d-flex justify-content-start ">
                  <form id="myform2">
                    @csrf
                    <div class="mb-3">
                      <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Full name">
                        <div id="nameError" class="text-danger"></div>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="E-mail">
                        <div id="emailError" class="text-danger"></div>
                    </div>
                    <div class="mb-3 input-group">
                        <input type="password" name="password" id="myinputt" class="form-control " placeholder="  Enter Your Password" aria-label="Recipient's username" aria-describedby="button-addon2">

                      <button onclick="myFunctionn()"  class="btn btn-outline-secondary" type="button" id="button-addon2"> <i id="hide11" class="bi bi-eye-slash-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
                        <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z"/>
                      </svg></i>
                      <i id="hide22" class="bi bi-eye-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                      </svg></i>
                    </button>
                    </div>
                    <div id="passwordError" class="text-danger"></div>
                    <div class="mb-3 input-group">

                    <input type="password" name="password_confirmation" id="myinputtt" class="form-control" placeholder="  Repeat your Password" aria-label="Recipient's username" aria-describedby="button-addon2">
                      <button onclick="myFunctionnn()"  class="btn btn-outline-secondary" type="button" id="button-addon2">

                        <i id="hide111" class="bi bi-eye-slash-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
                        <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z"/>
                      </svg></i>
                      <i id="hide222" class="bi bi-eye-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                      </svg></i>
                    </button>

                    </div>
                    <!--button to sign up-->
                    <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-light">Submit</button>
                  </div>
                    <div class="grid ">
                      <button onclick="insing()"  class="btnn btn" type="button">Sign In</button>
                      <button  onclick="upsing()"  class="btnn btn" type="button" style="background-color: #FAD586;">Sign Up</button>
                    </div>

                  </form>

                  </div>
                  <div class="d-flex justify-content-center"><img src="photos/or index1.svg" width="50%"></div>
                  <div class="d-flex justify-content-center">


                    <a href="#" ><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg></a>&ensp;&ensp;&ensp;
                   <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16" style="color: #DF4B38;">
                      <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                    </svg></a>
                  </div>

                  </div>


                </div>

              </div>






              <div class="col-xl-1 col-lg-1 d-none d-sm-block">
              </div>
            </div>
        </div>
          </div>






<script src="js/index1js.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

{{-- Store User --}}
<script>
    $('#myform2').submit(function(e)
    {
        e.preventDefault();
        let name = $('#name').val();
        let password = $('#myinputt').val();
        let email =$('#email').val();
        let password_confirmation = $('#myinputtt').val();
        let _token =$('input[name=_token]').val();
        $.ajax({
            url:'{{ route('user.store') }}',
            type:'POST',
            data:{
                name:name,
                password:password,
                email:email,
                password_confirmation:password_confirmation,
                _token:_token,
            },
            success:function(response)
            {
                alert('User added successfully')
            },
            error:function(error)
            {
                alert('Wrong Data input');
                $('#nameError').text(error.responseJSON.errors.name);
                $('#emailError').text(error.responseJSON.errors.email);
                $('#passwordError').text(error.responseJSON.errors.password);
                console.log(error);
            }
        });
    });
</script>






</body>
</html>
