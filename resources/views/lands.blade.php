<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satellite</title>
    <link rel="stylesheet" href="{{ asset('./assets/css/bootstrap.css') }}">
    <link  rel="stylesheet" href="{{ asset('./assets/css/menu.css') }}">
    <link  rel="stylesheet" href="{{ asset('./assets/css/lands.css') }}">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sakkal Majalla">


</head>
<body >

  <div class="container-fluid p-0 m-0">

    <div class="row p-0 m-0">
      @include('layouts.sideMenu')

      <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12 p-0 m-0  - thebody" id="content">

         @include('layouts.header')

          <div id="sateLands">
            <div class="row row-cols-xl-3 row-cols-lg-2 row-cols-md-2 row-cols-1 m-0 p-1 justify-content-start gx-5 gy-3" >
            @if(!empty($lands))
            @foreach($lands as $id =>$land)
            <div class="col p-0 ">
              <div class="card p-0 ">
                  <div class="card-header p-0">
                      <img id="mapImg" style="height: 150px"
                      src="" alt="">
                      <input id="coordinations" type="hidden"  value="{{ json_encode($land['coordinations'],JSON_NUMERIC_CHECK)  }}">
                  </div>
                  <div class="card-body p-0">
                    <p>
                        <a href="{{ route('satellite.landDetail',$id) }}">{{ $land['name'] }}</a>
                         <br>
                         Crop : {{ $land['cropType'] }}
                         <br>
                         harvested Time <span>{{ $land['harvestTime'] }}</span>
                         <br>
                         kafr elsheikh
                         <br>
                         Land area <span>175.09 m<sup>2</sup> </span>

                     </p>
                      <button > <img src="./assets/photos/deleteicon.svg" alt=""> </button>
                  </div>
              </div>
          </div>
          @endforeach
          @endif



            </div>
          </div>











          </div>
      </div>

    </div>

    <script>
      let finalLink = "https://maps.googleapis.com/maps/api/staticmap?&maptype=satellite&key=AIzaSyDILEAC4MSybDoPSa22jrz4hTDHPpS5G4I&size=400x400&path=color:red" ;
      let coordinates = document.querySelectorAll("#coordinations")
      var mapImgs = document.querySelectorAll("#mapImg");
      let JsonCords  = [];
      let center = "" ;
      for(let i = 0 ; i<coordinates.length;i++)
      {
          JsonCords[i] = JSON.parse(coordinates[i].value)
      }
      // console.log(coordinates,JsonCords);
      for(let i = 0 ; i<mapImgs.length ; i++)
      {
          for(let j = 0 ; j<JsonCords[i].length; j++)
          {
              finalLink += "|"+JsonCords[i][j]['lat']+","+JsonCords[i][j]['lng']
          }
          mapImgs[i].setAttribute("src",finalLink)  ;
          finalLink = "https://maps.googleapis.com/maps/api/staticmap?&maptype=satellite&key=AIzaSyDILEAC4MSybDoPSa22jrz4hTDHPpS5G4I&size=400x400&path=color:red" ;
      }
  </script>





<script src="{{ asset('./assets/js/main.js') }}"></script>
<script src="{{ asset('./assets/js/lands.js') }}"></script>


<script src="{{ asset('./assets/js/bootstrap.js') }}"></script>
</body>
</html>
