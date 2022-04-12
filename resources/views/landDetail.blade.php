<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maps</title>
    <link  rel="stylesheet" href="{{ asset('./assets/css/Analyze.css') }}">
    <link  rel="stylesheet" href="{{ asset('./assets/css/map.css') }}">

    <link rel="stylesheet" href="{{ asset('./assets/css/bootstrap.css') }}">
    <link  rel="stylesheet" href="{{ asset('./assets/css/menu.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sakkal|Majalla">

<style>
    #map{
        width: 100%;

    }
</style>


</head>



<body>

  <div class="container-fluid p-0 m-0 ">

    <div class="row p-0 m-0">
      @include('layouts.sideMenu')

      <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12 p-0 m-0  - thebody" id="content">
        <div class="row p-1 m-0 justify-content-around" id="stickyheader"  >
          <div class="col-9 " >
              <div class="input-group ">
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



                 <div class="row p-2 ms-0 justify-content-around flex ">

<div  class="col-6 ">


  <div id="map" class="height"></div>
</div>

                  <div  class="col-3">
<div class="height scroll">
<h5>layer</h5>
<h4>NDVI</h4>
<div >



<div class="row">

  <div class="col-3"><span>{{date('Y/m/d', $lastDay->dt ) }}</span></div>
  <div class="col-6"></div>
  <div class="col-3"></div>
</div>

<div class="row">

  <div class="col-3">max</div>
  <div class="col-6"></div>
  <div class="col-3">{{number_format($lastDay->data->max,2)}}</div>
</div>
<div class="row">

  <div class="col-3">mean</div>
  <div class="col-6"></div>
  <div class="col-3">{{number_format($lastDay->data->mean,2)}}</div>
</div>
<div class="row">

  <div class="col-3">median</div>
  <div class="col-6"></div>
  <div class="col-3">{{number_format($lastDay->data->median,2)}}</div>
</div>
<div class="row">

  <div class="col-3">num</div>
  <div class="col-6"></div>
  <div class="col-3">{{number_format($lastDay->data->num,2)}}</div>
</div>

<div class="row">

  <div class="col-3">min</div>
  <div class="col-6"></div>
  <div class="col-3">{{number_format($lastDay->data->min,2)}}</div>
</div>

<div class="row">

  <div class="col-3">p25</div>
  <div class="col-6"></div>
  <div class="col-3">{{number_format($lastDay->data->p25,2)}}</div>
</div>


<div class="row">

  <div class="col-3">p75</div>
  <div class="col-6"></div>
  <div class="col-3">{{number_format($lastDay->data->p75,2)}}</div>
</div>

<div class="row">

  <div class="col-3">std</div>
  <div class="col-6"></div>
  <div class="col-3">{{number_format($lastDay->data->std,2)}}</div>
</div>
</div>
                 </div>
                </div>

                <div  class="col-3">
                  <div class="height">
                    <div class="row g-0 color">
                      <div class="col-4 col-md-4">
                                      <h5>All</h5>
                       </div>
                      <div class="col-8 col-md-8">
                        <div class="btn-group me-2" role="group" aria-label="First group">
                          <button type="button" class="btn btn-outline-secondary">1</button>
                          <button type="button" class="btn btn-outline-secondary">2</button>
                          <button type="button" class="btn btn-outline-secondary">3</button>

                        </div>
                      </div>
                    </div>
                    <div class="row g-0">
                      <div class="col-4 col-md-4"> <h5>Current Soil Data</h5></div>
                      <div class="col-8 col-md-8"></div>
                    </div>


<div>

                                        <div class="row">

                      <div class="col-9">Temp 10cm depth</div>
                      <div class="col-3">{{round($soilResponse['t10'] - 273.15)}}&deg;C</div>
                    </div>
                    <div class="row">

                      <div class="col-3">moisture</div>
                      <div class="col-6"></div>
                      <div class="col-3">{{$soilResponse['moisture']}}</div>
                    </div>
                    <div class="row">

                      <div class="col-3">Surface temp</div>
                      <div class="col-6"></div>
                      <div class="col-3">{{round($soilResponse['t0']- 273.15)}}&deg;C</div>
                    </div>
                    <div class="row">

                      <div class="col-3"></div>
                      <div class="col-6"></div>
                      <div class="col-3"></div>
                    </div>
                    </div>
                                     </div>



                </div>
                 </div>




</div>

                </div>

    </div>
    </div></div>



                <script src="{{ asset('./assets/js/map.js') }}"></script>
                <script src="{{ asset('./assets/js/main.js') }}"></script>
                <script src="{{ asset('./assets/js/bootstrap.js') }}"></script>

                <script src="{{ asset('./assets/js/map.js') }}"></script>
                <script src="{{ asset('./assets/js/main.js') }}"></script>
                <script src="{{ asset('./assets/js/bootstrap.js') }}"></script>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                <script>
                    function initMap() {
                    const map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 4,
                        center: {!! $firstPoint !!},
                        mapTypeId: "satellite",
                    });
                    console.log({!! $coordinates  !!})
                    var points = {!! $coordinates !!}
                    const path = new google.maps.Polyline({
                        path: points,
                        geodesic: true,
                        strokeColor: "#FF0000",
                        strokeOpacity: 1.0,
                        strokeWeight: 2,
                    });
                    var fitToMarkers = function(markers) {
                        var bounds = new google.maps.LatLngBounds();
                        var length = markers.length;
                        for (var i = 0; i < length; i++) {
                            bounds.extend(new google.maps.LatLng(markers[i].lat, markers[i].lng));
                            map.fitBounds(bounds);
                        }
                    };
                        fitToMarkers(points);
                        path.setMap(map);
                    }
            </script>

            <script
            async
            defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-Rqqqr-axeKVhPSfnvBKZZd2gwk4BeBY&callback=initMap"
            ></script>
                </body>
