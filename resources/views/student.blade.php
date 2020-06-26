<!doctype html>
<html lang="en">
  <head>
    <title>Student management system</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Link CSS!-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      @include('navbar')

    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Student Management System</h1>
        </div>
    </div>

          @if ($layout=='index')
              <div class="container-fluid mt-4">
                  <div class="row">
                  <section class="col">
                      @include("studentlist")
                  </section>
                  <section class="col">
                      
                  </section>
                </div>
              </div>
          @elseif($layout=='create')
            <div class="container-fluid mt-4">
                  <div class="row">
                  <section class="col">
                      @include("studentlist")
                  </section>
                  <section class="col">
                    <div class="card mb-3">
                        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR3YfZwHTvgGzZo1KtXrnBhazIFypLHWVR6QA&usqp=CAU" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title" style="text-align: center;">Enter information of the new student</h5>
                          </div>
                          <form action="{{ url('/store') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">CNE</label>
                                <input type="text" name="cne" class="form-control" placeholder="Enter cne">
                            </div>
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" name="firstName" class="form-control" placeholder="Enter the first name">
                            </div>
                            <div class="form-group">
                                <label for="">Second Name</label>
                                <input type="text" name="secondName" class="form-control" placeholder="Enter second name">
                            </div>
                            <div class="form-group">
                                <label for="">Age</label>
                                <input type="text" name="age" class="form-control" placeholder="Enter age">
                            </div>
                            <div class="form-group">
                                <label for="">Sepeciality</label>
                                <input type="text" name="speciality" class="form-control" placeholder="Enter Sepeciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                      </div>
                   
                  </section>
                </div>
            </div>
          @elseif($layout=='show')
          <div class="container-fluid mt-4">
            <div class="row">
            <section class="col">
                @include("studentlist")
            </section>
            <section class="col">
                
            </section>
          </div>
        </div>
          @elseif($layout=='edit')
          <div class="container-fluid">
            <div class="row">
            <section class="col-md-7">
                @include("studentlist")
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR3YfZwHTvgGzZo1KtXrnBhazIFypLHWVR6QA&usqp=CAU" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title" style="text-align: center;">Update information of the student</h5>
                      </div>
                      <form action="{{ url('/update',[$student->id]) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">CNE</label>
                            <input type="text" value="{{ $student->id }}" name="cne" class="form-control" placeholder="Enter cne">
                        </div>
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" value="{{ $student->firstName }}" name="firstName" class="form-control" placeholder="Enter the first name">
                        </div>
                        <div class="form-group">
                            <label for="">Second Name</label>
                            <input type="text" value="{{ $student->secondName }}" name="secondName" class="form-control" placeholder="Enter second name">
                        </div>
                        <div class="form-group">
                            <label for="">Age</label>
                            <input type="text" name="age" value="{{ $student->age }}" class="form-control" placeholder="Enter age">
                        </div>
                        <div class="form-group">
                            <label for="">Sepeciality</label>
                            <input type="text" value="{{ $student->speciality }}" name="speciality" class="form-control" placeholder="Enter Sepeciality">
                        </div>
                        <input type="submit" class="btn btn-info" value="Update">
                        <input type="reset" class="btn btn-warning" value="Reset">
                    </form>
                  </div>
                
            </section>
          </div>
        </div>
          @endif

        @include('footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>