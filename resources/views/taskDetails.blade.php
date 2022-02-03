<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days</title>
    <link rel="stylesheet" href="{{ asset('./assets/css/bootstrap.css') }}">
    <link  rel="stylesheet" href="{{ asset('./assets/css/task.css') }}">
    <link  rel="stylesheet" href="{{ asset('./assets/css/menu.css') }}">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sakkal Majalla|Akhbar MT">


</head>

<body onload="loaddate()">

    <div class="container-fluid">

      <div class="row">

        <div class="col-2">

          <div class="sidenav">

              <div class="card  " style="background-color: #184D47; border-color:#184D47;  " >
                <div class="row g-0">
                  <div class="col-4">
                    <img src="{{ asset('./assets/photos/amira.jpg') }}" class="img-fluid  mypic" >


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

                      <a href="{{ route('dashboard.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                      </svg>Dashboard</a>
                      <a href="{{ route('task.index') }}" class="list-group-item list-group-item-action" style="color:   #184D47;" >  <svg style="color:#184D47" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-1x2-fill" viewBox="0 0 16 16">
                        <path d="M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-5z"/>
                      </svg> Tasks</a>
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
                  <img src="{{ asset('./assets/photos/menu.png') }}" alt="">
                </div>
                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12  containerd - thebody">



          <div class="bottomright" onclick="replacing();" data-bs-toggle="modal"data-bs-target="#exampleModal">
                    <svg id="green" xmlns="http://www.w3.org/2000/svg" width="66" height="66" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                      <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                    </svg>
                    <svg id="whitesquere"  xmlns="http://www.w3.org/2000/svg"  width="66" height="66" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                      <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>

                  </div>


                    <div class="row    ">
                      <div class="col-10">
                        <div class="input-group mt-3">
                          <input class="form-control " type="search" placeholder="Search" aria-label="Search" >
                          <span class="input-group-text" id="basic-addon2" style="background-color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                          </svg></span>
                        </div></div>
                        <div class="col-2 mt-4  " >
                          <button class="aroundmg px-2" id="btn" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                          </svg></button>
                          <button class="aroundmg px-2" id="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                          </svg></button></div>

                      </div>
                      <div class="container-fluid" id="cont">
                        <div class="row  new" >
                          <div class="col-2 col-sm-2 day  whitediv  " >
                            <p>Start: {{ $day }}</p>
                            <p class="currentdayofdetails"> <img src="{{ asset('./assets/photos/plant.svg') }}"> {{ substr ($task['startDate'], -2) }}</p>
                         </div>


                        </div>
                        <div class="row new">
                          <div class="col-6 day whitediv" >

                            <p>From: {{ $task['startDate'] }}  &nbsp;&nbsp;&nbsp;  To:{{ $task['endDate'] }} </p>
                          </div>
                          <div class="col-6 day whitediv" ></div>
                          <div class="row ">
                            <div class="col-6 day second whitediv">

                              <p>
                                Duration:
                                @if($interval->y !=0)
                                    {{ $interval->y }}Years &nbsp;
                                @elseif($interval->m !=0)
                                    {{ $interval->m }}month &nbsp;
                                @elseif($interval->d !=0)
                                    {{ $interval->d }} days &nbsp;
                                @else
                                Task Expired
                                @endif
                            </p>
                            </div>

                          <div class="col-6 whitediv"  style="padding-top: 20px;">

                          </div>




                        <div class="row" onclick="showprogress(0);" id="hidenold"  >
                          <div class="col-1 day CHECKLIST  whitediv"  >
                            <svg  xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-ui-checks-grid" viewBox="0 0 16 16">
                              <path d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1zm9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-3zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-3zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2z"/>
                            </svg>
                          </div>

                        <div class="col-7 whitediv" id="font" style="padding-top:7px "  >

                            <p>{{ $task['notes'] }}</p>

                          </div>


                        </div>
                        <div class="row" id="detailswhite">


                        <div class="col-12 whitediv" id="font" style="padding-top:2px "  >

                            <p>{{ $task['notes'] }}</p>

                          </div>
                          <div class="col-12  whitediv"   >
                            <div class="progress">

                                @if($percentage >= 0 && $percentage <= 25 )
                                <div class="progress-bar ment" role="progressbar" style="width: {{ $percentage }}%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-html="true" title="{{ $percentage }}"></div>
                                @endif

                                @if($percentage >= 26 && $percentage <= 60)
                                <div class="progress-bar ment1" role="progressbar" style="width: {{ $percentage }}%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-html="true" title="{{ $percentage }}"></div>
                                @endif

                                @if($percentage >=61 && $percentage <= 100 )
                                <div class="progress-bar ment2" role="progressbar" style="width: {{ $percentage }}%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-html="true" title="{{ $percentage }}"></div>
                                @endif

                            </div>
                          </div>


                        </div>

                        @foreach($addedTasks as $key => $addedTask)
                        <div class="container-fluid" id="cont">
                            <div class="row  new" >
                              <div class="col-2 col-sm-2 day  whitediv  " >
                                <p>Start: {{ Carbon\Carbon::createFromFormat('Y-m-d', $addedTask['startDate'] )->format('l') }}</p>
                                <p class="currentdayofdetails"> <img src="{{ asset('./assets/photos/plant.svg') }}"> {{ substr ($addedTask['startDate'], -2) }}</p>
                             </div>


                            </div>
                            <div class="row new">
                              <div class="col-6 day whitediv" >

                                <p>From: {{ $addedTask['startDate'] }}  &nbsp;&nbsp;&nbsp;  To:{{ $addedTask['endDate'] }} </p>
                              </div>
                              <div class="col-6 day whitediv" ></div>
                              <div class="row ">
                                <div class="col-6 day second whitediv">
                                  <p>
                                    Duration:
                                    @if($addedInterval[$key]->y !=0)
                                        {{ $addedInterval[$key]->y }}Years &nbsp;
                                    @elseif($addedInterval[$key]->m !=0)
                                        {{ $addedInterval[$key]->m }}month &nbsp;
                                    @elseif($addedInterval[$key]->d !=0)
                                        {{ $addedInterval[$key]->d }} days &nbsp;
                                    @else
                                    Task Expired
                                    @endif
                                </p>
                                </div>

                              <div class="col-6 whitediv"  style="padding-top: 20px;">

                              </div>




                            <div class="row" onclick="showprogress({{ $key+1 }});" id="hidenold"  >
                              <div class="col-1 day CHECKLIST  whitediv"  >
                                <svg  xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-ui-checks-grid" viewBox="0 0 16 16">
                                  <path d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1zm9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-3zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-3zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2z"/>
                                </svg>
                              </div>

                            <div class="col-7 whitediv" id="font" style="padding-top:7px "  >

                                <p>{{ $addedTask['notes'] }}</p>

                              </div>


                            </div>
                            <div class="row" id="detailswhite">


                            <div class="col-12 whitediv" id="font" style="padding-top:2px "  >

                                <p>{{ $addedTask['notes'] }}</p>

                              </div>
                              <div class="col-12  whitediv"   >
                                <div class="progress">

                                    @if($addedPercentage[$key] >= 0 && $addedPercentage[$key] <= 25 )
                                    <div class="progress-bar ment" role="progressbar" style="width: {{ $addedPercentage[$key] }}%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-html="true" title="{{ $addedPercentage[$key] }}"></div>
                                    @endif

                                    @if($addedPercentage[$key] >= 26 && $addedPercentage[$key] <= 60)
                                    <div class="progress-bar ment1" role="progressbar" style="width: {{ $percentage[$key]}}%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-html="true" title="{{ $addedPercentage[$key] }}"></div>
                                    @endif

                                    @if($addedPercentage[$key] >=61 && $addedPercentage[$key] <= 100 )
                                    <div class="progress-bar ment2" role="progressbar" style="width: {{ $percentage[$key] }}%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-html="true" title="{{ $addedPercentage[$key] }}"></div>
                                    @endif

                                </div>
                              </div>


                            </div>





                      </div>
                      @endforeach
                      </div>



</div>     </div></div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add your mission</h5>

        <button type="button" class="btn-close" onclick="clicked();" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>
        <div class="container ">
            <form id="form">
                @csrf
        <div class="row ">
            <div class="col-xl-4 col-sm-4 textdiv">Type of crop </div>
            <div class="col-xl-8 col-sm-8 textdiv">

            <select id="crops">
            <option value="Tomato">Tomato</option>
            <option value="Potato">Potato</option>
            <option value="Carrot">Carrot</option>
            </select>
            <div id="corpError" class="text-danger"></div>
            </div>
        </div>
    </div>
        <div class="modal-body">

        <h4 class="mt-2 ">Start Time</h4>

        <div class="container mt-4">

    <div class="row ">

    <div class="col-xl-2 col-sm-10  textdiv"> Date:</div>
    <div class="col-xl-10 col-sm-10 textdivlineday ">

        <input type="date" id="startDate" class="birthday" name="birthday">
        <div id="startDateError" class="text-danger"></div>

</div>



    </div>



</div>

<h4 class="mt-5 ">End Time</h4>

<div class="container mt-4">
<div class="row ">

    <div class="col-xl-2 col-sm-10  textdiv"> Date:</div>
    <div class="col-xl-10 col-sm-10 textdivlineday ">

    <input type="date" id="endDate" class="birthday" name="birthday">
    <div id="endDateError" class="text-danger"></div>

</div>



</div>
</div>

<div class="container form m-3">

<div class="row">
<div class="col-xl-12 col-sm-12">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
<path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
</svg>  <input id="addationnotes" type="text" name="subject" placeholder="add your Notes.." ></div>

        <input type="hidden" id="id" value="{{ $id }}">

</div>
</div>
        <div id="notesError" class="text-danger"></div>
<div class="modal-footer">
<div class="container-fluid">

<div class="row">
<div class="col-xl-2 col-sm-2"></div>
<div class="col-xl-8 col-sm-2" > <button type="submit" class="btn btn-success btn-lg">ADD</button>

</div>
<div class="col-xl-2 col-sm-2"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</form>


      <script src="{{ asset('./assets/js/tasks.js') }}"></script>

      <script src="{{ asset('./assets/js/bootstrap.js') }}"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

      <script>
        $("#form").submit(function(e)
        {
            e.preventDefault();
            let corp = $("#crops").val();
            let startDate = $("#startDate").val();
            let endDate = $("#endDate").val();
            let notes = $("#addationnotes").val();
            let id =    $("#id").val();
            let _token =$('input[name=_token]').val();
            console.log(corp)
            $.ajax({
                url:'{{ route('taskDetails.store',$id) }}',
                type:'POST',
                data:{
                    corp:corp,
                    startDate:startDate,
                    endDate:endDate,
                    notes:notes,
                    _token:_token
                },
                success:function(response)
                {
                    alert('Task Added')
                    location.reload();
                },
                error:function(error)
                {
                    console.log(error)
                    alert('Wrong Data input')
                    $('#corpError').text(error.responseJSON.errors.corp);
                    $('#startDateError').text(error.responseJSON.errors.startDate);
                    $('#endDateError').text(error.responseJSON.errors.endDate);
                    $('#notesError').text(error.responseJSON.errors.notes);
                }
            })
        });
    </script>

</body>
</html>
