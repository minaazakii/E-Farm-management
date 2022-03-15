<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensors</title>
    <link rel="stylesheet" href="{{ asset('./assets/css/bootstrap.css') }}">
    <link  rel="stylesheet" href="{{ asset('./assets/css/sensors.css') }}">
    <link  rel="stylesheet" href="{{ asset('./assets/css/menu.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sakkal Majalla">


</head>
<body >

  <div class="container-fluid p-0 m-0 ">

    <div class="row p-0 m-0">
      @include('layouts.sideMenu')

      <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12 p-0 m-0 border - thebody" id="content">
        <div class="row p-1 m-0 justify-content-around" id="stickyheader"  >
          <div class="col-9" >
              <div class="input-group">
                <input type="search" placeholder="Search" aria-label="Search" id="search">
                <span class="input-group-text" id="basic-addon2" onclick="togglesearch();"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#184D47" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
                </span>
              </div>
          </div>
          <div class="col-1  " >
            <button  id="btn" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
              <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                          <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
            </button>
          </div>
          <div class="col-1 ">
            <button id="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
              <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                  </svg>
          </button>
          </div>
          <div class="col-1  " id="toggleside">
            <button  onclick="showmenu();">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"  fill="#000" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
              </svg>
            </button>
          </div>
        </div>
        <div id="sensors" class="mt-1 ">
            <div class="row justify-content-around p-0 m-0">
                <div class="col-xl-6 col-lg-6 col-md-12  col-sm-12 p-0" id="sensor">
                    <h4>
                        Soil Moisture
                    </h4>
                    <div class="row justify-content-between  p-0 m-0">
                        <div class="col-6  p-0" id="weekdays">
                            <div class="row justify-content-between  p-0 m-0">
                                @if(array_key_exists(0,$weekSoilDate))
                                <div class="col-3">
                                    <div style="width: 13px; height: 8px; background-color: #184D47; margin-top: 40%;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    {{ $weekSoilDate[0] }}
                                </div>
                                <div class="col-2">
                                    {{ $weekSoilTemp[0] }}
                                </div>
                                @endif
                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                @if(array_key_exists(1,$weekSoilDate))
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #6c9255;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    {{ $weekSoilDate[1] }}
                                </div>
                                <div class="col-2">
                                    {{ $weekSoilTemp[1] }}
                                </div>
                                @endif
                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                @if(array_key_exists(2,$weekSoilDate))
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #96bb78;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    {{ $weekSoilDate[2] }}
                                </div>
                                <div class="col-2">
                                    {{ $weekSoilTemp[2] }}
                                </div>
                                @endif
                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                @if(array_key_exists(3,$weekSoilDate))
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #b3d893;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    {{ $weekSoilDate[3] }}
                                </div>
                                <div class="col-2">
                                    {{ $weekSoilTemp[3] }}
                                </div>
                                @endif
                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                @if(array_key_exists(4,$weekSoilDate))
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #c6debc;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    {{ $weekSoilDate[4] }}
                                </div>
                                <div class="col-2">
                                    {{ $weekSoilTemp[4] }}
                                </div>
                                @endif
                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                @if(array_key_exists(5,$weekSoilDate))
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #d6efc7;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    {{ $weekSoilDate[5] }}
                                </div>
                                <div class="col-2">
                                    {{ $weekSoilTemp[5] }}
                                </div>
                                @endif
                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                @if(array_key_exists(6,$weekSoilDate))
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #f9d684;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    {{ $weekSoilDate[6] }}
                                </div>
                                <div class="col-2">
                                    {{ $weekSoilTemp[6] }}
                                </div>
                                @endif
                            </div>

                        </div>
                        <div class="col-6 " id="value">
                            <div class="box ">
                                <div class="circular-progress">
                                  <div class="value-container">{{ end($weekSoilTemp) }}</div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12  col-sm-12 p-0" id="sensor">
                    <h4>
                        Soil Humidity
                    </h4>
                    <div class="row justify-content-between  p-0 m-0">
                        <div class="col-6  p-0" id="weekdays">
                            <div class="row justify-content-between  p-0 m-0">
                                @if(array_key_exists(0,$weekHumidityDate))
                                <div class="col-3">
                                    <div style="width: 13px; height: 8px; background-color: #184D47; margin-top: 40%;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    {{ $weekHumidityDate[0] }}
                                </div>
                                <div class="col-2">
                                    {{ $weekHumidityTemp[0] }}
                                </div>
                                @endif
                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                @if(array_key_exists(1,$weekHumidityDate))
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #6c9255;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    {{ $weekHumidityDate[1] }}
                                </div>
                                <div class="col-2">
                                    {{ $weekHumidityTemp[1] }}
                                </div>
                                @endif
                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                @if(array_key_exists(2,$weekHumidityDate))
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #96bb78;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    {{ $weekHumidityDate[2] }}
                                </div>
                                <div class="col-2">
                                    {{ $weekHumidityTemp[2] }}
                                </div>
                                @endif
                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                @if(array_key_exists(3,$weekHumidityDate))
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #b3d893;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    {{ $weekHumidityDate[3] }}
                                </div>
                                <div class="col-2">
                                    {{ $weekHumidityTemp[3] }}
                                </div>
                                @endif

                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                @if(array_key_exists(4,$weekHumidityDate))
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #c6debc;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    {{ $weekHumidityDate[4] }}
                                </div>
                                <div class="col-2">
                                    {{ $weekHumidityTemp[4] }}
                                </div>
                                @endif
                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                @if(array_key_exists(5,$weekHumidityDate))
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #d6efc7;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    {{ $weekHumidityDate[5] }}
                                </div>
                                <div class="col-2">
                                    {{ $weekHumidityTemp[5] }}
                                </div>
                                @endif
                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                @if(array_key_exists(6,$weekHumidityDate))
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #f9d684;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    {{ $weekHumidityDate[6] }}
                                </div>
                                <div class="col-2">
                                    {{ $weekHumidityTemp[6] }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-6 " id="value">
                            <div class="box ">
                                <div class="circular-progress">
                                  <div class="value-container">{{ end($weekHumidityTemp) }}</div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-around p-0 m-0">
                <div class="col-xl-6 col-lg-6 col-md-10  col-sm-12 p-0" id="sensor">
                    <h4>
                        Temperature
                    </h4>
                    <div class="row justify-content-between  p-0 m-0">
                        <div class="col-6  p-0" id="weekdays">
                            <div class="row justify-content-between  p-0 m-0">
                                @if(array_key_exists(0, $xValues))
                                <div class="col-3">
                                    <div style="width: 13px; height: 8px; background-color: #184D47; margin-top: 40%;">

                                    </div>
                                </div>

                                <div class="col-5">
                                    {{ $xValues[0] }}
                                </div>
                                <div class="col-2">
                                    {{ $yValues[0] }}%
                                </div>
                                @endif
                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                @if(array_key_exists(1, $xValues))
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #6c9255;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    {{ $xValues[1] }}
                                </div>
                                <div class="col-2">
                                    {{ $yValues[1] }}%
                                </div>
                                @endif
                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                @if(array_key_exists(2, $xValues))
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #96bb78;">

                                    </div>
                                </div>

                                <div class="col-5">
                                    {{ $xValues[2] }}
                                </div>
                                <div class="col-2">
                                    {{ $yValues[2] }}%
                                </div>
                                @endif
                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                @if(array_key_exists(3, $xValues))
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #b3d893;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    {{ $xValues[3] }}
                                </div>
                                <div class="col-2">
                                    {{ $yValues[3] }}%
                                </div>
                                @endif
                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                @if(array_key_exists(4, $xValues))
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #c6debc;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    {{ $xValues[4] }}
                                </div>
                                <div class="col-2">
                                    {{ $yValues[4] }}%
                                </div>
                                @endif
                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                @if(array_key_exists(5, $xValues))
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #d6efc7;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    {{ $xValues[5] }}
                                </div>
                                <div class="col-2">
                                    {{ $yValues[5] }}%
                                </div>
                                @endif
                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                @if(array_key_exists(6, $xValues))
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #f9d684;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    {{ $xValues[6] }}
                                </div>
                                <div class="col-2">
                                    {{ $yValues[6] }}%
                                </div>
                                @endif
                            </div>


                        </div>
                        <div class="col-6 " id="value">
                            <canvas id="myChart" style="width:100%;max-width:600px;height: 100%;"></canvas>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-10  col-sm-12 p-0" id="sensor">
                    <h4>
                        PH
                    </h4>
                    <div class="row justify-content-between  p-0 m-0">
                        <div class="col-6  p-0" id="weekdays" >
                            <div class="row justify-content-between  p-0 m-0">
                                <div class="col-3">
                                    <div style="width: 13px; height: 8px; background-color: #184D47; margin-top: 40%;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    Saturday
                                </div>
                                <div class="col-2">
                                    15%
                                </div>
                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #6c9255;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    Sunday
                                </div>
                                <div class="col-2">
                                    15%
                                </div>
                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #96bb78;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    Monday
                                </div>
                                <div class="col-2">
                                    15%
                                </div>
                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #b3d893;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    Tuesday
                                </div>
                                <div class="col-2">
                                    15%
                                </div>
                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #c6debc;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    Wednesday
                                </div>
                                <div class="col-2">
                                    15%
                                </div>
                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #d6efc7;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    Thursday
                                </div>
                                <div class="col-2">
                                    15%
                                </div>
                            </div>
                            <div class="row justify-content-between  p-0 m-0">
                                <div class="col-3 pt-2">
                                    <div style="width: 13px; height: 8px; background-color: #f9d684;">

                                    </div>
                                </div>
                                <div class="col-5">
                                    Friday
                                </div>
                                <div class="col-2">
                                    15%
                                </div>
                            </div>


                        </div>
                        <div class="col-6 " id="value">
                            <div class="box ">
                                <div class="circular-progress">
                                  <div class="value-container">100 %</div>
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
        var xValues = {!! json_encode($xValues) !!}
        var yValues = {!! json_encode($yValues)  !!}


    </script>
    <script src="{{ asset('./assets/js/sensors.js') }}"></script>

    <script src="{{ asset('./assets/js/bootstrap.js') }}"></script>
</body>
</html>
