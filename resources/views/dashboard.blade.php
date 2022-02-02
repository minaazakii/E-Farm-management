<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="{{ asset('./assets/css/bootstrap.css') }}">
    <link  rel="stylesheet" href="{{ asset('./assets/css/dashboard.css') }}">
    <link  rel="stylesheet" href="{{ asset('./assets/css/menu.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sakkal Majalla">


</head>
<body onload="loaddate()">

  <div class="container-fluid">

    <div class="row">
      <div class="col-2">

        <div class="sidenav">

            <div class="card  " style="background-color: #184D47; border-color:#184D47;  " >
              <div class="row g-0">
                <div class="col-4">
                  <img src="./assets/photos/amira.jpg" class="img-fluid  mypic" >


                </div>

                <div class="col-8 ">
                  <div class="card-body ">
                    <h6 class="card-title">Amira Zakaria</h6>
                    <h6 class="card-title">Alexanderia,Egypt</h6>
                  </div>

                </div>
                <div class="row"><a href="#" onclick="return myFunction();" id="pic" ><small>Edit your pic</small></a></div>
              </div>
            </div>
                    <a href="{{ route('dashboard.index') }}" class="list-group-item list-group-item-action" style="color:   #184D47;" >  <svg style="color:#184D47" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-1x2-fill" viewBox="0 0 16 16">
                      <path d="M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-5z"/>
                    </svg> Dashboard</a>
                    <a href="{{ route('task.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                    </svg>Tasks</a>
                    <a href="{{ route('sensor.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
                      <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.444 12.444 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049z"/>
                      <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.455 9.455 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091l.016-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
                    </svg>Sensors</a>
                    <a href="#contact"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-sun" viewBox="0 0 16 16">
                      <path d="M7 8a3.5 3.5 0 0 1 3.5 3.555.5.5 0 0 0 .624.492A1.503 1.503 0 0 1 13 13.5a1.5 1.5 0 0 1-1.5 1.5H3a2 2 0 1 1 .1-3.998.5.5 0 0 0 .51-.375A3.502 3.502 0 0 1 7 8zm4.473 3a4.5 4.5 0 0 0-8.72-.99A3 3 0 0 0 3 16h8.5a2.5 2.5 0 0 0 0-5h-.027z"/>
                      <path d="M10.5 1.5a.5.5 0 0 0-1 0v1a.5.5 0 0 0 1 0v-1zm3.743 1.964a.5.5 0 1 0-.707-.707l-.708.707a.5.5 0 0 0 .708.708l.707-.708zm-7.779-.707a.5.5 0 0 0-.707.707l.707.708a.5.5 0 1 0 .708-.708l-.708-.707zm1.734 3.374a2 2 0 1 1 3.296 2.198c.199.281.372.582.516.898a3 3 0 1 0-4.84-3.225c.352.011.696.055 1.028.129zm4.484 4.074c.6.215 1.125.59 1.522 1.072a.5.5 0 0 0 .039-.742l-.707-.707a.5.5 0 0 0-.854.377zM14.5 6.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                    </svg>Seasons</a>
                    <a href="#about"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
                    </svg>Analyz</a>
                    <a href="#services"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                      <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                    </svg>Machine Stores</a>
                    <a href="#clients"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-rss" viewBox="0 0 16 16">
                      <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                      <path d="M5.5 12a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-3-8.5a1 1 0 0 1 1-1c5.523 0 10 4.477 10 10a1 1 0 1 1-2 0 8 8 0 0 0-8-8 1 1 0 0 1-1-1zm0 4a1 1 0 0 1 1-1 6 6 0 0 1 6 6 1 1 0 1 1-2 0 4 4 0 0 0-4-4 1 1 0 0 1-1-1z"/>
                    </svg>Satellite</a>
                    <a href="#contact"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-flower1" viewBox="0 0 16 16">
                      <path d="M6.174 1.184a2 2 0 0 1 3.652 0A2 2 0 0 1 12.99 3.01a2 2 0 0 1 1.826 3.164 2 2 0 0 1 0 3.652 2 2 0 0 1-1.826 3.164 2 2 0 0 1-3.164 1.826 2 2 0 0 1-3.652 0A2 2 0 0 1 3.01 12.99a2 2 0 0 1-1.826-3.164 2 2 0 0 1 0-3.652A2 2 0 0 1 3.01 3.01a2 2 0 0 1 3.164-1.826zM8 1a1 1 0 0 0-.998 1.03l.01.091c.012.077.029.176.054.296.049.241.122.542.213.887.182.688.428 1.513.676 2.314L8 5.762l.045-.144c.248-.8.494-1.626.676-2.314.091-.345.164-.646.213-.887a4.997 4.997 0 0 0 .064-.386L9 2a1 1 0 0 0-1-1zM2 9l.03-.002.091-.01a4.99 4.99 0 0 0 .296-.054c.241-.049.542-.122.887-.213a60.59 60.59 0 0 0 2.314-.676L5.762 8l-.144-.045a60.59 60.59 0 0 0-2.314-.676 16.705 16.705 0 0 0-.887-.213 4.99 4.99 0 0 0-.386-.064L2 7a1 1 0 1 0 0 2zm7 5-.002-.03a5.005 5.005 0 0 0-.064-.386 16.398 16.398 0 0 0-.213-.888 60.582 60.582 0 0 0-.676-2.314L8 10.238l-.045.144c-.248.8-.494 1.626-.676 2.314-.091.345-.164.646-.213.887a4.996 4.996 0 0 0-.064.386L7 14a1 1 0 1 0 2 0zm-5.696-2.134.025-.017a5.001 5.001 0 0 0 .303-.248c.184-.164.408-.377.661-.629A60.614 60.614 0 0 0 5.96 9.23l.103-.111-.147.033a60.88 60.88 0 0 0-2.343.572c-.344.093-.64.18-.874.258a5.063 5.063 0 0 0-.367.138l-.027.014a1 1 0 1 0 1 1.732zM4.5 14.062a1 1 0 0 0 1.366-.366l.014-.027c.01-.02.021-.048.036-.084a5.09 5.09 0 0 0 .102-.283c.078-.233.165-.53.258-.874a60.6 60.6 0 0 0 .572-2.343l.033-.147-.11.102a60.848 60.848 0 0 0-1.743 1.667 17.07 17.07 0 0 0-.629.66 5.06 5.06 0 0 0-.248.304l-.017.025a1 1 0 0 0 .366 1.366zm9.196-8.196a1 1 0 0 0-1-1.732l-.025.017a4.951 4.951 0 0 0-.303.248 16.69 16.69 0 0 0-.661.629A60.72 60.72 0 0 0 10.04 6.77l-.102.111.147-.033a60.6 60.6 0 0 0 2.342-.572c.345-.093.642-.18.875-.258a4.993 4.993 0 0 0 .367-.138.53.53 0 0 0 .027-.014zM11.5 1.938a1 1 0 0 0-1.366.366l-.014.027c-.01.02-.021.048-.036.084a5.09 5.09 0 0 0-.102.283c-.078.233-.165.53-.258.875a60.62 60.62 0 0 0-.572 2.342l-.033.147.11-.102a60.848 60.848 0 0 0 1.743-1.667c.252-.253.465-.477.629-.66a5.001 5.001 0 0 0 .248-.304l.017-.025a1 1 0 0 0-.366-1.366zM14 9a1 1 0 0 0 0-2l-.03.002a4.996 4.996 0 0 0-.386.064c-.242.049-.543.122-.888.213-.688.182-1.513.428-2.314.676L10.238 8l.144.045c.8.248 1.626.494 2.314.676.345.091.646.164.887.213a4.996 4.996 0 0 0 .386.064L14 9zM1.938 4.5a1 1 0 0 0 .393 1.38l.084.035c.072.03.166.064.283.103.233.078.53.165.874.258a60.88 60.88 0 0 0 2.343.572l.147.033-.103-.111a60.584 60.584 0 0 0-1.666-1.742 16.705 16.705 0 0 0-.66-.629 4.996 4.996 0 0 0-.304-.248l-.025-.017a1 1 0 0 0-1.366.366zm2.196-1.196.017.025a4.996 4.996 0 0 0 .248.303c.164.184.377.408.629.661A60.597 60.597 0 0 0 6.77 5.96l.111.102-.033-.147a60.602 60.602 0 0 0-.572-2.342c-.093-.345-.18-.642-.258-.875a5.006 5.006 0 0 0-.138-.367l-.014-.027a1 1 0 1 0-1.732 1zm9.928 8.196a1 1 0 0 0-.366-1.366l-.027-.014a5 5 0 0 0-.367-.138c-.233-.078-.53-.165-.875-.258a60.619 60.619 0 0 0-2.342-.572l-.147-.033.102.111a60.73 60.73 0 0 0 1.667 1.742c.253.252.477.465.66.629a4.946 4.946 0 0 0 .304.248l.025.017a1 1 0 0 0 1.366-.366zm-3.928 2.196a1 1 0 0 0 1.732-1l-.017-.025a5.065 5.065 0 0 0-.248-.303 16.705 16.705 0 0 0-.629-.661A60.462 60.462 0 0 0 9.23 10.04l-.111-.102.033.147a60.6 60.6 0 0 0 .572 2.342c.093.345.18.642.258.875a4.985 4.985 0 0 0 .138.367.575.575 0 0 0 .014.027zM8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                    </svg>Fields</a>
                    <a href="#about"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                      <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                    </svg>Setting</a>
                    <a href="#services"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                      <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                    </svg>Log out</a>

                  </div>
              </div>
              <div id="toggleside" onclick="showmenu();">
                <img src="./assets/photos/menu.png" alt="">
              </div>
              <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12   - thebody">

                  <div class="row    ">
                    <div class="col-9">
                      <div class="input-group mt-3">
                        <input class="form-control " type="search" placeholder="Search" aria-label="Search" >
                        <span class="input-group-text" id="basic-addon2" style="background-color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg></span>
                      </div></div>
                      <div class="col-3 mt-4  " >
                        <button class="aroundmg px-2" id="btn" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                          <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                          <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg></button>
                        <button class="aroundmg px-2" id="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                          <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                        </svg></button></div>

                    </div>
                    <div class="row  mx-auto">
                      <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-xs-12  mx-auto " >
                        <div class="card mt-3 mb-3   photocard " style="width: 100%;">
                          <div class="row g-0 ">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm- col-xs-    ">
                              <img src="./assets/photos/dashboard.svg" class="img-fluid  " alt="...">
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm- col-xs-">
                              <div class="card-body">
                                <h5 class="card-title">   </h5>
                                <p class="card-text" style="font-size: 20px;"><b>The dashboard </b> shows you the factors on which the crop depends from moisture, temperature and acidity during the previous period in the form of graphs</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row mx-auto">
                          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                            <div class="card text-dark  mb-3 photocard " style="max-width: 18rem; height: 95%;">
                              <div class="card-header bg-transparent">Temperature <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-thermometer-sun" viewBox="0 0 16 16">
                                <path d="M5 12.5a1.5 1.5 0 1 1-2-1.415V2.5a.5.5 0 0 1 1 0v8.585A1.5 1.5 0 0 1 5 12.5z"/>
                                <path d="M1 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0V2.5zM3.5 1A1.5 1.5 0 0 0 2 2.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0L5 10.486V2.5A1.5 1.5 0 0 0 3.5 1zm5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 0 1 .5-.5zm4.243 1.757a.5.5 0 0 1 0 .707l-.707.708a.5.5 0 1 1-.708-.708l.708-.707a.5.5 0 0 1 .707 0zM8 5.5a.5.5 0 0 1 .5-.5 3 3 0 1 1 0 6 .5.5 0 0 1 0-1 2 2 0 0 0 0-4 .5.5 0 0 1-.5-.5zM12.5 8a.5.5 0 0 1 .5-.5h1a.5.5 0 1 1 0 1h-1a.5.5 0 0 1-.5-.5zm-1.172 2.828a.5.5 0 0 1 .708 0l.707.708a.5.5 0 0 1-.707.707l-.708-.707a.5.5 0 0 1 0-.708zM8.5 12a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 0 1 .5-.5z"/>
                              </svg></div>
                              <div class="card-body">

                                <canvas id="myChart" style="width:100%;max-width:600px;height: 100%;"></canvas>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                              <div class="col-12" style="width: 100%;"><div class="card text-dark mb-3 photocard " style="width: 100%; ">
                                <div class="card-header bg-transparent">Humidity <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moisture" viewBox="0 0 16 16">
                                  <path d="M13.5 0a.5.5 0 0 0 0 1H15v2.75h-.5a.5.5 0 0 0 0 1h.5V7.5h-1.5a.5.5 0 0 0 0 1H15v2.75h-.5a.5.5 0 0 0 0 1h.5V15h-1.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 .5-.5V.5a.5.5 0 0 0-.5-.5h-2zM7 1.5l.364-.343a.5.5 0 0 0-.728 0l-.002.002-.006.007-.022.023-.08.088a28.458 28.458 0 0 0-1.274 1.517c-.769.983-1.714 2.325-2.385 3.727C2.368 7.564 2 8.682 2 9.733 2 12.614 4.212 15 7 15s5-2.386 5-5.267c0-1.05-.368-2.169-.867-3.212-.671-1.402-1.616-2.744-2.385-3.727a28.458 28.458 0 0 0-1.354-1.605l-.022-.023-.006-.007-.002-.001L7 1.5zm0 0-.364-.343L7 1.5zm-.016.766L7 2.247l.016.019c.24.274.572.667.944 1.144.611.781 1.32 1.776 1.901 2.827H4.14c.58-1.051 1.29-2.046 1.9-2.827.373-.477.706-.87.945-1.144zM3 9.733c0-.755.244-1.612.638-2.496h6.724c.395.884.638 1.741.638 2.496C11 12.117 9.182 14 7 14s-4-1.883-4-4.267z"/>
                                </svg></div>
                                <div class="card-body" style="margin-top: 0px;"  >
                                  <div class="row g-0">
                                    <div class="col-md-7 position-relative" >
                                    <img src="./assets/photos/temp.jpg" class="myimg myimg position-absolute top-50 start-50 translate-middle" >
                                      <canvas id="Chart" style="width:100%;max-width:600px"></canvas>

                                      </div>
                                    <div class="col-md-5">


                                        <p class="card-text">Humidity is the concentration of water vapour present in the air</p>

                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                            </div>
                            <div class="row">

                              <div class="col-12" style="width: 100%;"><div class="card text-dark mb-3 photocard " style="width: 100%; ">
                                <div class="card-header bg-transparent">PH <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eyedropper" viewBox="0 0 16 16">
                                  <path d="M13.354.646a1.207 1.207 0 0 0-1.708 0L8.5 3.793l-.646-.647a.5.5 0 1 0-.708.708L8.293 5l-7.147 7.146A.5.5 0 0 0 1 12.5v1.793l-.854.853a.5.5 0 1 0 .708.707L1.707 15H3.5a.5.5 0 0 0 .354-.146L11 7.707l1.146 1.147a.5.5 0 0 0 .708-.708l-.647-.646 3.147-3.146a1.207 1.207 0 0 0 0-1.708l-2-2zM2 12.707l7-7L10.293 7l-7 7H2v-1.293z"/>
                                </svg></div>
                                <div class="card-body " style="margin-top: 0px;" >
                                  <div class="row g-0">
                                    <div class="col-md-7 position-relative ">
                                    <img src="./assets/photos/empty.jpg" class="myimg position-absolute top-50 start-50 translate-middle" >
                                      <canvas id="secondchart" style="width:100%;max-width:600px"></canvas>

                                      </div>
                                    <div class="col-md-5">


                                        <p class="card-text"><br>PH is a measure of how acidic/basic water is</p>

                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <!--add your div-->
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto ">
                      <div id="widgt-5">
                        <div class="row justify-content-center" id="monthchange">
                            <button class="col-1 " onclick="pervmonth();" >
                                &lt;
                            </button>
                            <p class="col-4  ">
                                <span id="mnth">
                                    November
                                </span>

                                <br>
                                <span id="year">2021</span>
                            </p>
                            <button class="col-1 " onclick="nextmonth();">
                                &gt;
                            </button>
                        </div>
                        <div id="calendar" >

                            <table>
                                <thead >
                                    <th >S</th>
                                    <th>M</th>
                                    <th>T</th>
                                    <th >W</th>
                                    <th>T</th>
                                    <th>F</th>
                                    <th>S</th>
                                </thead>
                                <tr id="firstrow">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                        <div class="row justify-content-start  p-0 mt-4" id="weather">
                            <div class="col-3  p-0 ">
                                <p class=" ">
                                    {{ $currentTemp }}<sup> &deg; <sup>c</sup> </sup>
                                    <br>
                                    <span>
                                        {{ $weatherDisc }}
                                    </span>
                                </p>
                            </div>

                            <div class="col-4 p-0 pt-2  ">
                                <img src="{{ $img }}"  alt="" id="weatherimg">
                            </div>
                            <div class="col-5  p-0">
                                <div id="miniweather">
                                    <div class="">
                                        {{ $day1Disc }}
                                    </div>
                                    <p class="">
                                       {{ $day1Temp }} <sup> &deg; &#67;</sup>

                                    </p>
                                    <div class=" ">
                                        <img src="{{ $day1Img }}" alt="">
                                    </div>
                                </div>
                                <div id="miniweather">
                                    <div class="">
                                        {{ $day2Disc }}
                                    </div>
                                    <p class="">
                                        {{ $day2Temp }}<sup> &deg; &#67;</sup>

                                    </p>
                                    <div class=" ">
                                        <img src="{{ $day2Img }}" alt="">
                                    </div>
                                </div>
                                <div id="miniweather">
                                    <div class="">
                                        {{ $day3Disc }}
                                    </div>
                                    <p class="">
                                        {{ $day3Temp }}<sup> &deg; &#67;</sup>

                                    </p>
                                    <div class=" ">
                                        <img src="{{ $day3Img }}" alt="">
                                    </div>
                                </div>

                            </div>


                        </div>
                        <div class="mt-4" id="yield">
                            <div class="row">
                                <div class="col-8">
                                    Potato yield progress
                                </div>
                                <div class="col-4 text-right yieldprog" id="yieldprog" >
                                    70%
                                </div>
                                <div id="fullbar">
                                    <div id="progresbar" class="progresbar">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    Tomato yield progress
                                </div>
                                <div class="col-4 text-right yieldprog">
                                    60%
                                </div>
                                <div id="fullbar">
                                    <div id="progresbar" class="progresbar">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    Corn yield progress
                                </div>
                                <div class="col-4 text-right yieldprog">
                                    30%
                                </div>
                                <div id="fullbar">
                                    <div id="progresbar" class="progresbar">

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    </div>

                  </div>


          </div>
      </div>

    </div>


    <script>
      function showmenu(){
        document.getElementById("sidenav").style.left = "10px";
      }
      function hidemenu(){
        document.getElementById("sidenav").style.left = "-800px";

      }


      var MonthName = ["January" , "February " ,"March" , "April " , "May" , "June" , "July" , "August" , "Septemper" , "October" , "November" , "December"];
      var cal = new Date();
      var year = cal.getFullYear();
      var month = cal.getMonth();
      var dayname = cal.getDate();

      function nextmonth(){
          var mnth = document.getElementById("mnth").innerHTML;
          for (var i =0 ; i< MonthName.length; i++){

              if (mnth == MonthName[i]){

                  if (i ==11){
                      year++;
                      showdate(0,year,MonthName[0]);

                      break;

                  }

                  if (i+1 == month){
                      showdate(i+1,year,MonthName[i+1],dayname);

                  }
                  else {
                      showdate(i+1,year,MonthName[i+1]);

                  }
                  break;
              }
          }
      }
      function pervmonth(){
          var mnth = document.getElementById("mnth").innerHTML;

          for (var i =0 ; i< MonthName.length; i++){
              if (mnth == MonthName[i]){
                  if (i ==0){
                      year--;
                      showdate(11,year,MonthName[11]);

                      break;

                  }

                  if (i-1 == month){
                      showdate(i-1,year,MonthName[i-1],dayname);

                  }
                  else {
                      showdate(i-1,year,MonthName[i-1]);

                  }
                  break;
              }
          }


      }

      function yieldprogress(){

          var pre = document.getElementsByClassName("yieldprog");
          var prog = document.getElementsByClassName("progresbar");
          for (var i =0 ; i< pre.length; i++){
              var p = pre[i].innerHTML.trim();
              prog[i].style.width = p;
              var con = p.split('%');
              if(parseInt(con) <=30){

                  prog[i].style.backgroundColor = "#D6EFC7";

              }
              else if(parseInt(con)  <=60){
                  prog[i].style.backgroundColor = "#96BB7C";
              }
              else if (parseInt(con) <= 80){
                  prog[i].style.backgroundColor = "#3FA94A";

              }
              else if (parseInt(con) == 100){
                  prog[i].style.backgroundColor = "#184D47";

              }
              else {
                  prog[i].style.backgroundColor = "#F62222";

              }

          }

      }

      function daysInMonth (month, year) {
          return new Date(year, month, 0).getDate();
      }
      function firstday (month, year){
          return new Date(year, month, 1).getDay();
      }
      function loaddate(){
          var cal = new Date();
          var day = cal.getDay();
          var dayname = cal.getDate();

          var year = cal.getFullYear();
          var month = cal.getMonth();
          day = (day == 0) ? "Sun" : (day == 1) ? "Mon" : (day == 2) ? "Tues" : (day == 3) ? "Wed" : (day == 4) ? "Thu" : (day == 5) ? "Fri" :  "Sat" ;

          showdate(month, year ,MonthName[month] ,dayname);
          yieldprogress();


      }
      function showdate(month, year ,MonthName,dayname){
          var daysnum = daysInMonth(month+1,year);
          var daysfirst = firstday(month,year);
          var lastmonth = daysInMonth(month,year);

          var allcell = 42 - daysnum;
          var upcell = allcell - daysfirst;
          for (var i = 0; i<42;i++){
              document.getElementsByTagName("td")[i].innerHTML = "";
              document.getElementsByTagName("td")[i].style.backgroundColor = "#ffffff";
              document.getElementsByTagName("td")[i].style.opacity = "65%";

          }

          console.log(month +" "+ year + " " +  MonthName);

          var row = document.getElementById("firstrow");
          var day1 = row.getElementsByTagName("td")[daysfirst];
          day1.innerHTML="1";
          day1.style.opacity = "100%"

          document.getElementById("mnth").innerHTML = MonthName;
          document.getElementById("year").innerHTML = year;



          for (var i = 1; i<daysnum;i++){
              document.getElementsByTagName("td")[daysfirst+i].innerHTML = i+1;
              document.getElementsByTagName("td")[daysfirst+i].style.opacity = "100%"
              if (daysfirst+i == dayname ){
                  document.getElementsByTagName("td")[daysfirst+i].style.backgroundColor = "#FAD586"
              }
          }
          for (var i = 1 ; i <= upcell;i++){
              document.getElementsByTagName("td")[daysfirst+daysnum+i -1].innerHTML = i;

          }
          for (var i=1 , j =0; i<=  allcell - upcell  ;i++,j++ ){
              row.getElementsByTagName("td")[daysfirst-i].innerHTML= lastmonth -j ;
          }


      }
  </script>



<script>
  // Charts Data

  var xValues = {!! $xValues !!}
  var yValues = {!! $yValues !!}
  var humidity = {!! $humidity !!}
  var humidityRemain = {!! $humidityRemain !!}
  var soil = {!! $soil !!}
  var soilRemain = {!! $soilRemain !!}
</script>



    <script src="./assets/js/dashboard.js"></script>

    <script src="./assets/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</body>
</html>
