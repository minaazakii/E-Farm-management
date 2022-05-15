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

     @include('layouts.sideMenu')
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


                      <div class="row p-1 m-0 justify-content-around" id="stickyheader" >
                        <div class="col-9">
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
                          <div class="container-fluid ps-5" id="cont">
                            <div class="row  new" >
                              <div class="col-2 col-sm-2 day  whitediv  " >
                                <p>{{ Carbon\Carbon::parse($task['startDate'])->format('l') }}</p>
                                <p class="currentdayofdetails"> <img src="{{ asset('./assets/photos/plant.svg') }}">{{ Carbon\Carbon::parse($task['startDate'])->format('d') }}</p>
                             </div>


                            </div>
                            <div class="row new">
                              <div class="col-6 day whitediv" >

                                <p>{{ $task['startDate'] }} - {{ $task['endDate'] }} </p>
                              </div>
                              <div class="col-6 day whitediv" ></div>
                              <div class="row ">
                                <div class="col-6 day second whitediv"  >
                                  <p>  Total Duration:
                                      @if($duration->y != 0) {{ $duration->y }} Year , @endif
                                      @if($duration->m != 0) {{ $duration->m }} Month , @endif
                                      @if($duration->d != 0) {{ $duration->d }} Day @endif
                                </p>

                                <p>  Time Left:
                                    @if($daysLeft->y != 0) {{ $daysLeft->y }} Year , @endif
                                    @if($daysLeft->m != 0) {{ $daysLeft->m }} Month , @endif
                                    @if($daysLeft->d != 0) {{ $daysLeft->d }} Day @endif
                              </p>
                                </div>

                              <div class="col-6 whitediv"  style="padding-top: 20px;">

                              </div>




                            <div class="row" onclick="showprogress();" id="hidenold"  >
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
                                    @if($percentage <0)
                                    <div class="progress-bar ment" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>

                                    @endif
                                    @if($percentage <= 15)
                                   <div class="progress-bar ment" role="progressbar" style="width: {{ $percentage }}%" title="{{ $percentage }}%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    @endif

                                    @if($percentage >15 && $percentage <=60 )
                                    <div class="progress-bar ment1" role="progressbar" style="width: {{ $percentage }}%" title="{{ $percentage }}%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    @endif

                                    @if($percentage >60)
                                    <div class="progress-bar ment2" role="progressbar" style="width: {{ $percentage }}%" title="{{ $percentage }}%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    @endif
                                </div>
                              </div>


                            </div>



                          </div>

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

            <div class="row ">
              <div class="col-xl-4 col-sm-4 textdiv">Type of crop </div>
              <div class="col-xl-8 col-sm-8 textdiv">
                <form>
                <select id="crops" name="crops">
                  <option value="To"></option>
                <option value="To">Tomato</option>
                <option value="Po">Potato</option>
                <option value="Car">Carrot</option>
                </select>
              </form></div>
            </div>
        </div>
          <div class="modal-body">

            <h4 class="mt-2 ">Start Time</h4>

            <div class="container mt-4">

      <div class="row ">

        <div class="col-xl-2 col-sm-10  textdiv"> Date:</div>
        <div class="col-xl-10 col-sm-10 textdivlineday ">

          <input type="date" id="birthday" name="birthday">

     </div>



      </div>



    </div>

    <h4 class="mt-5 ">End Time</h4>

    <div class="container mt-4">
    <div class="row ">

      <div class="col-xl-2 col-sm-10  textdiv"> Date:</div>
      <div class="col-xl-10 col-sm-10 textdivlineday ">

        <input type="date" id="birthday" name="birthday">

    </div>



    </div>
    </div>

              <div class="container form m-3">

                <div class="row">
                  <div class="col-xl-12 col-sm-12">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                  </svg>  <input id="addationnotes" type="text" name="subject" placeholder="add your Notes.." ></div>

                </div>
            </div>

          <div class="modal-footer">
            <div class="container-fluid">

              <div class="row">
                <div class="col-xl-2 col-sm-2"></div>
    <div class="col-xl-8 col-sm-2" > <button type="button" class="btn btn-success btn-lg">ADD</button>

                </div>
                <div class="col-xl-2 col-sm-2"></div>
              </div>
          </div>
          </div>
        </div>
      </div>
    </div>


      <script src="{{ asset('./assets/js/tasks.js') }}"></script>

      <script src="{{ asset('./assets/js/bootstrap.js') }}"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

      {{-- <script>
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
    </script> --}}

</body>
</html>
