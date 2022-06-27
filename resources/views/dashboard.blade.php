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

  <div class="container-fluid p-0 m-0">

    <div class="row p-0 m-0">
      @include('layouts.sideMenu')


              <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12 p-0 m-0  - thebody" id="content">
                @include('layouts.header')
                
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
                            <div class="card text-dark  mb-3 photocard " style="min-height: 300px; height: 95%;">
                              <div class="card-header bg-transparent">Temperature <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-thermometer-sun" viewBox="0 0 16 16">
                                <path d="M5 12.5a1.5 1.5 0 1 1-2-1.415V2.5a.5.5 0 0 1 1 0v8.585A1.5 1.5 0 0 1 5 12.5z"/>
                                <path d="M1 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0V2.5zM3.5 1A1.5 1.5 0 0 0 2 2.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0L5 10.486V2.5A1.5 1.5 0 0 0 3.5 1zm5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 0 1 .5-.5zm4.243 1.757a.5.5 0 0 1 0 .707l-.707.708a.5.5 0 1 1-.708-.708l.708-.707a.5.5 0 0 1 .707 0zM8 5.5a.5.5 0 0 1 .5-.5 3 3 0 1 1 0 6 .5.5 0 0 1 0-1 2 2 0 0 0 0-4 .5.5 0 0 1-.5-.5zM12.5 8a.5.5 0 0 1 .5-.5h1a.5.5 0 1 1 0 1h-1a.5.5 0 0 1-.5-.5zm-1.172 2.828a.5.5 0 0 1 .708 0l.707.708a.5.5 0 0 1-.707.707l-.708-.707a.5.5 0 0 1 0-.708zM8.5 12a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 0 1 .5-.5z"/>
                              </svg></div>
                              <div class="card-body">

                                <canvas id="myChart" style="width:100%;max-width:600px; height: 100%;"></canvas>
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
                                      <div style="position: absolute; top: 45%; left: 43%; font-size: 0.9em; font-weight: 600; color: #184d47; ">
                                        {{ (int)json_decode($humidity) }}%
                                    </div>
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
                                <div class="card-header bg-transparent">Soil Moisture  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eyedropper" viewBox="0 0 16 16">
                                  <path d="M13.354.646a1.207 1.207 0 0 0-1.708 0L8.5 3.793l-.646-.647a.5.5 0 1 0-.708.708L8.293 5l-7.147 7.146A.5.5 0 0 0 1 12.5v1.793l-.854.853a.5.5 0 1 0 .708.707L1.707 15H3.5a.5.5 0 0 0 .354-.146L11 7.707l1.146 1.147a.5.5 0 0 0 .708-.708l-.647-.646 3.147-3.146a1.207 1.207 0 0 0 0-1.708l-2-2zM2 12.707l7-7L10.293 7l-7 7H2v-1.293z"/>
                                </svg></div>
                                <div class="card-body " style="margin-top: 0px;" >
                                  <div class="row g-0">
                                    <div class="col-md-7 position-relative ">
                                      <div style="position: absolute; top: 45%; left: 43%; font-size: 0.9em; font-weight: 600; color: #184d47; ">
                                        {{ json_decode($soil) }}%
                                    </div>
                                      <canvas id="secondchart" style="width:100%;max-width:600px"></canvas>

                                      </div>
                                    <div class="col-md-5">


                                        <p class="card-text"><br>Soil Moisture is a measure of how acidic/basic water is</p>

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
                        <div class="row justify-content-start  p-0 mt-2" id="weather">
                            <div class="col-3  p-0 ">
                                <p class=" ">
                                    {{ $currentTemp }}<sup> &deg; <sup>c</sup> </sup>
                                    <br>
                                    <span>
                                        {{ $weatherDisc }}
                                    </span>
                                </p>
                            </div>

                            <div class="col-4 p-0  ">
                                <img src="{{ $img }}"  alt="" id="weatherimg">
                            </div>
                            <div class="col-5  p-0">
                                <div id="miniweather" class="row p-0 m-0 mb-1 justify-content-around">
                                  <div class="col-5 m-0 ">
                                    {{ $day1Disc }}
                                  </div>
                                  <div class="col-3 m-0 ">
                                    <p >
                                        {{ $day1Temp }}<sup> &deg;c</sup>
                                    </p>
                                  </div>
                                  <div class="col-4 m-0 ">
                                    <img src="{{ $day1Img }}" alt="">
                                  </div>

                                </div>
                                <div id="miniweather" class="row p-0 m-0 mb-1 justify-content-around">
                                  <div class="col-5 m-0 ">
                                    {{ $day2Disc }}
                                  </div>
                                  <div class="col-3 m-0 ">
                                    <p >
                                        {{ $day2Temp }}<sup> &deg;c</sup>
                                    </p>
                                  </div>
                                  <div class="col-4 m-0">
                                    <img src=" {{ $day2Img }}" alt="">
                                  </div>
                                </div>
                                <div id="miniweather" class="row p-0 m-0 mb-1 justify-content-around">
                                  <div class="col-5 m-0 ">
                                    {{ $day3Disc }}
                                  </div>
                                  <div class="col-3 m-0 ">
                                    <p >
                                        {{ $day3Temp }}<sup> &deg;c</sup>
                                    </p>
                                  </div>
                                  <div class="col-4 m-0">
                                    <img src="{{ $day3Img }}" alt="">
                                  </div>
                                </div>



                            </div>


                        </div>
                        <div class="mt-2" id="yield">
                            <div class="row">
                                <div class="col-9 text-start ">
                                    Potato yield progress
                                </div>
                                <div class="col-3 text-end  yieldprog" id="yieldprog" >
                                    70%
                                </div>
                                <div id="fullbar">
                                    <div id="progresbar" class="progresbar">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-9">
                                    Tomato yield progress
                                </div>
                                <div class="col-3 text-end yieldprog">
                                    60%
                                </div>
                                <div id="fullbar">
                                    <div id="progresbar" class="progresbar">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-9">
                                    Corn yield progress
                                </div>
                                <div class="col-3 text-end yieldprog">
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
      // Charts Data

      var xValues = {!! $xValues !!}
      var yValues = {!! $yValues !!}
      var humidity = {!! $humidity !!}
      var humidityRemain = {!! $humidityRemain !!}
      var soil = {!! $soil !!}
      var soilRemain = {!! $soilRemain !!}

    </script>



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="./assets/js/main.js"></script>

    <script src="./assets/js/dashboard.js"></script>

    <script src="./assets/js/bootstrap.js"></script>


</body>
</html>
