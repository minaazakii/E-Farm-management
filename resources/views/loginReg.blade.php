<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link  rel="stylesheet" href="./assets/css/index1.css">
    <link  rel="stylesheet" href="./assets/css/contactus.css">




    <title>login</title>
</head>
<body >

    <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-xl-2 col-lg-2 d-none d-sm-block">

            </div>
            <div class="col-xl-8 col-lg-8 ">
                <div class="d-flex justify-content-center" style="width: 100%;">

                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="false">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">About Us</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Discover</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active " id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="true">Log in</button>
                    </li>
                  </ul>

                </div>
                </div>
            <div class="col-xl-2 col-lg-2  d-sm-block">

            </div>
            </div>
          </div>



          <div class="tab-content">
            <div class="tab-pane " id="home" role="tabpanel" aria-labelledby="home-tab">


  <!-- Content here -->

          <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="./assets/photos/macc.png" class="d-block" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                  <h5>Introduscing Napta</h5>
                  <p>Healthy , traceable,prodactive
                    Digitilization provide real time  information on soil health remotely </p>
                    <a href="#" class="btn btn-warning btnyellow" role="button" data-bs-toggle="button">Read more >></a>

                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="./assets/photos/maccc.png" class="d-block " alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Introduscing Napta</h5>
                  <p>Moves Your Farm to smart agriticutural technology</p><br><br><br>
                  <a href="#" class="btn btn-warning btnyellow" role="button" data-bs-toggle="button">Read more >></a>

                </div>
              </div>
              <div class="carousel-item">
                <img src="./assets/photos/iStock-935726026-696x465 1.png" class="d-block " alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Introduscing Napta</h5>
                  <p>Transforming agricultural
                    information based production is needed for healther and low priced food.</p>
                    <a href="#" class="btn btn-warning btnyellow" role="button" data-bs-toggle="button">Read more >></a>

                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="tab-pane " id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="container">
<div class="row">
  <div class="col-4 "></div>
  <div class="col-lg-4 col-sm-12 col-xs-12 col-md-12" style="text-align: center;"><h1 class="textshadow">
    About Us ..
  </h1></div>
  <div class="col-4"></div>

</div>
<div class="row">
  <div class="col-lg-4 col-sm-6 col-xs-6 col-md-6">
    <div id="div1">
      <div id="div2"></div>
      <div class="div3"></div>
    </div>
  </div>

  <div class="col-lg-7 col-sm-6 col-xs-6 col-md-6 ">
    <p class="after">Agriculture is the only thing that has changed since the time of the Pharaohs ,And with all the development that we have achieved, the cultivation process is still tiring and takes time and a great profit other than the risks that the farmer is exposed to from pests and diseases It can infect his crop

    </p>
  </div>
  <div class="col-lg-1 toptobt"><p>Our Vision</p></div>

</div>
<div class="row spacetop">
  <div class="col-1 toptobt"><p>Our goal</p></div>

  <div class="col-lg-7 col-sm-6 col-xs-6 col-md-6">
    <p class="before">
      We try to provide the best conditions for the cultivation process ,We collect data from the ground to make the farming process an orderly process ,We know the farmer everything that happens on his land We help him get rid of agricultural pests From each of these
    </p>
  </div>

  <div class="col-lg-4 col-sm-6 col-xs-6 col-md-6 ">
    <div id="div11">
      <div id="div22"></div>
      <div class="div33"></div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-4 col-sm-6 col-xs-6 col-md-6 ">
    <div id="div1">
      <div id="div222"></div>
      <div class="div3"></div>
    </div>
  </div>

  <div class="col-lg-7 col-sm-6 col-xs-6 col-md-6">
    <p class="after">The size of the agricultural market reached 669.8 billion pounds in 2021 in Egypt, compared to 278.5 in 2015, with an estimated growth of 140%.
      In Nabta, we seek to obtain 3% of the current market in Egypt

<br><br>
    </p>
  </div>
  <div class="col-1 toptobt"><p>Our Mission</p></div>

</div>


        </div></div>
        <div class="tab-pane loginsetting" id="messages" role="tabpanel" aria-labelledby="messages-tab">

          <div class="container">
            <div class="row">
              <div class="col-4  "></div>
              <div class="col-lg-4 col-sm-12 col-xs-12 col-md-12 " style="text-align: center;"><h1 class="textshadow">
             Our Service
              </h1></div>
              <div class="col-4"></div>

            </div>
        <div class="row row-cols-lg-3 row-cols-sm-1 ">
          <div class="col mb-3">
            <div class="card" style="width: 18rem;">
            <div class="card-body">
              <p class="card-text ">Follow up the agricultural land and determine the most appropriate time for planting</p>
              <p class="card-text text-end">
                <img src="./assets/photos/soil 1.svg">
              </p>
            </div>
          </div></div>
          <div class="col mb-3">
                    <div class="card" style="width: 18rem;">
            <div class="card-body">
              <p class="card-text ">We measure the PH, humidity and temperature in the soil and display them using the dashboard</p>
              <p class="card-text text-end">
                <img src="./assets/photos/analysis 1 (111).svg" >

              </p>
            </div>
          </div></div>
          <div class="col mb-3">
            <div class="card" style="width: 18rem;">
       <div class="card-body">
         <p class="card-text ">We rely on 3 types of technology to collect data from the ground
          Satellite
          IoT
          Apis</p>
         <p class="card-text text-end">
           <img src="./assets/photos/plant 1.svg">
         </p>
       </div>
     </div></div>
          <div class="col mb-3">
                     <div class="card" style="width: 18rem;">
            <div class="card-body">
              <p class="card-text ">Imaging the implant in order to monitor any diseases and suggest the most appropriate treatment </p>
              <p class="card-text text-end">
                <img src="./assets/photos/space-satellite 1.svg">
              </p>
            </div>
          </div></div>

          <div class="col mb-3">
                  <div class="card" style="width: 18rem;">
            <div class="card-body">
              <p class="card-text ">Weather forecasting and news of the appropriate weather and suitable for cultivation</p>
              <p class="card-text text-end">
                <img src="./assets/photos/weather-forecast(1) 1.svg">
              </p>
            </div>
          </div></div>
          <div class="col mb-3">
                   <div class="card" style="width: 18rem;">
            <div class="card-body">
              <p class="card-text ">Monitoring the Earth by satellite and determining its components and the most appropriate cultivation methods for it</p>
              <p class="card-text text-end">
                <img src="./assets/photos/geology 1.svg">
              </p>
            </div>
          </div></div>

        </div>
        <div class="row">
          <div class="col-4 "></div>
          <div class="col-4 " style="text-align: center;">
                   <a href="#" class="btn btn-warning btnyellow" role="button" data-bs-toggle="button"><b>More Details</b>    </a>
          </div>
          <div class="col-4"></div>

        </div>
      </div></div>
       <!--add contact us-->









       <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
       <div class="container-fluid p-0 pt-2" id="contactus">
            <h1>
                Contact Us ..
            </h1>
            <form action="">
                <div class="row m-0  justify-content-center p-0" >
                    <div class="col-12 col-xl-6 col-lg-6 col-md-6  ps-5">
                        <input type="text" placeholder="Enter  your name">
                        <input type="email" placeholder="E-mail">
                        <input type="text" placeholder="phone number">
                        <textarea name="" id=""  placeholder="Sent a message.."></textarea>
                        <input type="submit" value="Send">
                    </div>
                    <div class="col-12 col-xl-6 col-lg-6 col-md-6   p-0">
                        <img src="./assets/photos/contactimg.svg" alt="">
                    </div>

                </div>
            </form>
            <div id="footer">
                <a href="" target="_blank">
                    <img src="./assets/photos/bi_facebook.png" alt="">
                </a>
                <a href="" target="_blank">
                    <img src="./assets/photos/mdi_gmail.png" alt="">
                </a>
                <a href="" target="_blank">
                    <img src="./assets/photos/bxl_instagram-alt.png" alt="">
                </a>
                <a href="" target="_blank">
                    <img src="./assets/photos/akar-icons_linkedin-v1-fill.png" alt="">
                </a>
                <ul>
                    <li>
                        <a href="">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Discover
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Contact Us
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Log In
                        </a>
                    </li>
                </ul>







            </div>
        </div>
        </div>

        <div class="tab-pane active loginsetting" id="settings" role="tabpanel" aria-labelledby="settings-tab" >
            <div class="container big">
      <div class="row">
            <div class="col-xl-1 col-lg-1 d-none d-sm-block">

            </div>

            <div class="col-xl-5 col-lg-12  d-none d-sm-block position-relative" >

            <img class="position-absolute top-50 start-0 translate-middle-y" src="./assets/photos/left img index1.svg" width="100%">
            </div>

            <div class="col-xl-5 col-lg-12 col-sm-12">

              <!-- singin -->
              <div id="mydiv1" class=" container oneform " >

                <div class="d-flex justify-content-center  ">
                  <h3>Welcome!</h3>
              </div>

              @error('error')
                  <div id="message" class="alert-danger border-1 rounded p-2 text-center">{{ $message }}</div>
              @enderror

              <div class="container-fluid d-flex justify-content-start ">
              <form id="myform1" action="{{ route('login') }}" method="POST" >
                @csrf

                  @if(session('error'))
                  <div id="message" class="alert-danger rounded text-center"> {{ session('error') }} </div>
                  @endif

                <div class="mb-3">
                  <input type="email" name="email" class="form-control"  value="{{old('email')}}"    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User Name or E-mail"  >

                 @error('email')
                 <div class=" text-danger form-group">{{ $message }}</div>
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
                  <div class=" text-danger form-group">{{ $message }}</div>
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
              <div class="d-flex justify-content-center"><img src="./assets/photos/or index1.svg" width="50%"></div>
              <div class="d-flex justify-content-center">


                <a href="#" ><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                </svg></a>&ensp;&ensp;&ensp;
                <a href="javascript:void(0)" id="googleLogin"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16" style="color: #DF4B38;">
                    <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                  </svg></a>
              </div>

              </div>













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
                <div class="d-flex justify-content-center"><img src="./assets/photos/or index1.svg" width="50%"></div>
                <div class="d-flex justify-content-center">


                  <a href="#" ><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                  </svg></a>&ensp;&ensp;&ensp;
                  <a href="javascript:void(0)" id="googleLogin"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16" style="color: #DF4B38;">
                    <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                  </svg></a>
                </div>

                </div>


            </div>







<!--form to signup-->




              </div>

            </div>






            <div class="col-xl-1 col-lg-1 d-none d-sm-block">
            </div>
          </div></div>
      </div>







        </div>
          </div>









    <div id="mydiv2" class="container twoform" >

      <div class="d-flex justify-content-center  ">
          <h3>Welcome!</h3>

      </div>
      <div class="container-fluid d-flex justify-content-start ">
      <form  id="myform2">
        <div class="mb-3">
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="full name">

        </div>
        <div class="mb-3">
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">

        </div>
        <div class="mb-3 input-group">
          <input type="password" id="myinputt" class="form-control" placeholder="  enter yourPassword" aria-label="Recipient's username" aria-describedby="button-addon2">
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
        <div class="mb-3 input-group">
          <input type="password" id="myinputtt" class="form-control" placeholder="  repet yourPassword" aria-label="Recipient's username" aria-describedby="button-addon2">
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
      <div class="d-flex justify-content-center"><img src="./assets/photos/or index1.svg" width="50%"></div>
      <div class="d-flex justify-content-center">


        <a href="#" ><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
        </svg></a>&ensp;&ensp;&ensp;
        <a href="javascript:void(0)" id="googleLogin"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16" style="color: #DF4B38;">
            <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
          </svg></a>
      </div>

      </div>

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
                        location.reload();
                  },
                  error:function(error)
                  {
                      console.log(error);
                      alert(error.responseJSON.message );
                      $('#nameError').text(error.responseJSON.errors.name);
                      $('#emailError').text(error.responseJSON.errors.email);
                      $('#passwordError').text(error.responseJSON.errors.password);
                  }
              });
          });
      </script>


      <script type="module" >

          import { initializeApp } from 'https://www.gstatic.com/firebasejs/9.1.1/firebase-app.js';
          import {getAuth, signInWithPopup, GoogleAuthProvider } from 'https://www.gstatic.com/firebasejs/9.1.1/firebase-auth.js';
          var URL = $('meta[name="csrf-token"]').attr('content');

          const firebaseConfig = {
          apiKey: "AIzaSyBk8rh15vWVPXugqcJG-MEU8RnGLWmsGEE",
          authDomain: "graduation-project-315c4.firebaseapp.com",
          databaseURL: "https://graduation-project-315c4-default-rtdb.firebaseio.com",
          projectId: "graduation-project-315c4",
          storageBucket: "graduation-project-315c4.appspot.com",
          messagingSenderId: "693687879202",
          appId: "1:693687879202:web:1d9a2ff5a5cbd787632c7b",
          measurementId: "G-XNGD4T4H4D"
          };

          const app = initializeApp(firebaseConfig);

          const provider = new GoogleAuthProvider();

          $('#googleLogin').click(function()
          {
              const auth = getAuth();
              signInWithPopup(auth, provider)
              .then((result) => {
                  // This gives you a Google Access Token. You can use it to access the Google API.
                  const credential = GoogleAuthProvider.credentialFromResult(result);
                  const token = credential.accessToken;
                  // The signed-in user info.
                  const user = result.user;
                  // ...
                  console.log(user.uid,user.email,user.displayName);
                  $.ajaxSetup({
                      headers:{
                          'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                      }
                  });

                  $.ajax({
                      url: "{{ route('google.login') }}/",
                      type:"POST",
                      dataType:"json",
                      data:{
                          id:user.uid,
                          name:user.displayName,
                          email:user.email
                      },
                      success:function(data){
                          alert('Login Successfully')
                          window.location.replace("{{ route('dashboard.index') }}")
                      },
                      error:function(error){
                          console.log(error)
                          alert('Error occured')
                      }
                  })

              }).catch((error) => {
                  // Handle Errors here.
                  const errorCode = error.code;
                  const errorMessage = error.message;
                  // The email of the user's account used.
                  const email = error.email;
                  // The AuthCredential type that was used.
                  const credential = GoogleAuthProvider.credentialFromError(error);
                  // ...
                  console.log(error);
              });

          })


      </script>

      <script>
          setTimeout(() => {
              $("#message").fadeOut('slow').empty();
          }, 3000);
      </script>


<script src="assets/js/index1js.js"></script>
<script src="assets/js/bootstrap.js"></script>

      </body>
      </html>
