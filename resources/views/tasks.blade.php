<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <link rel="stylesheet" href="{{ asset('./assets/css/bootstrap.css') }}">
    <link  rel="stylesheet" href="{{ asset('./assets/css/task.css') }}">
    <link  rel="stylesheet" href="{{ asset('./assets/css/menu.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sakkal Majalla|Akhbar MT">


</head>

<body onload="loaddate()">

    <div class="container-fluid " >

      <div class="row">
       @include('layouts.sideMenu')

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
                        @include('layouts.header')


                      <div class="row over"  >



                        <div class="accordion" id="accordionExample">
                            @foreach ($months as $key=>$month )

                          <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne{{ $key }}">


                              <div class="row cont" >
                                <div class="col-2" >{{ $month }}</div>
                                <div class="col-1 button">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $key }}" aria-expanded="true" aria-controls="collapseOne{{ $key }}">
                                </button></div>
                                <div class="col-1 " style="padding-top: 32px; text-align: left;" id="down">

                                </div>
                                <div class= "col-3"> </div>

                                <div class="col-2 addation" style="padding-top: 26px;"><button type="button" class="btn btn-light" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                  <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                                  <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                                </svg>Tap to Add</button></div>

                                <div class="col-1 smaller">2022</div>
                                <div class="col-1 " style="padding-top: 30px; text-align: left;"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
                                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zm9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5zM8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
                                </svg></div>

                              </div>

                            </h2>
                            <div id="collapseOne{{ $key }}" class="accordion-collapse collapse hide" aria-labelledby="headingOne{{ $key }}" data-bs-parent="#accordionExample">
                              <div class="accordion-body">



    @if($empty == false)
    <div class="container-fluid" id="cont" >
      <div class="row" >

                    @foreach ($tasks as $date => $task )
                    @if(date('F', strtotime($task['startDate'])) == $month)
                        <div class="row  new  " >
                          <div class="col-1 day  whitediv  " >
                            <a class="create"  href="{{ route('taskDetails.index',$date) }}">
                            <p>{{substr($date,0,3)  }}</p>
                            <p class="currentday"> <img src="./assets/photos/plant.svg">{{ substr($date,5,3) }}</p></a>
                         </div>
                        <div class="col-10 yellowdiv flex-container " >
                            <div>
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                              <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                            </svg>  <input id="subject" type="text" name="subject" value="{{ $task['notes'] }}"   >
                          </div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>

                        </div>
                        @endif
                        @endforeach
                        </div>
                      </div></div>
        @endif

                      <div></div><div></div></div>
                              </div>
                              @endforeach
                            </div>
                          </div></div>





                    <div></div></div></div>
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
                                    <option value="Bell Pepper">Bell Pepper</option>
                                    <option value="Wheat">Wheat</option>
                                    <option value="Corn">Corn</option>
                                    </select>
                                    </div>
                                    <div class="text-danger" id="corpError"></div>
                                </div>
                            </div>
                                <div class="modal-body">

                                <h4 class="mt-2 ">Start Time</h4>

                                <div class="container mt-4">

                            <div class="row ">

                            <div class="col-xl-2 col-sm-10  textdiv"> Date:</div>
                            <div class="col-xl-10 col-sm-10 textdivlineday ">

                                <input type="date" id="startDate" class="birthday" >
                                <div id="startDateError" class="text-danger"></div>
                        </div>



                            </div>



                        </div>

                        <h4 class="mt-5 ">End Time</h4>

                        <div class="container mt-4">
                        <div class="row ">

                            <div class="col-xl-2 col-sm-10  textdiv"> Date:</div>
                            <div class="col-xl-10 col-sm-10 textdivlineday ">

                            <input type="date" id="endDate" class="birthday" >
                                <div id="endDateError" class="text-danger"></div>
                        </div>



                        </div>
                        </div>

            <div class="container form m-3">

              <div class="row">
                <div class="col-xl-12 col-sm-12">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                </svg>  <input id="addationnotes" type="text"  placeholder="add your Notes.." ></div>
                        <input type="hidden" id="email" value="{{ Cookie::get('email') }}">
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
            let email = $("#email").val();
            let _token =$('input[name=_token]').val();
            console.log(corp)
            $.ajax({
                url:'{{ route('task.store') }}',
                type:'POST',
                data:{
                    corp:corp,
                    startDate:startDate,
                    endDate:endDate,
                    notes:notes,
                    email:email,
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
