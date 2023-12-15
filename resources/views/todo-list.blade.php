<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>


  <div class="container">
    <div class="row">
      <div class="col-sm-12" style="margin-top:50px; text-align:right">
        <a href="{{ url('/') }}" class="btn btn-danger">Logout</a>
      </div>
      <div class="col-sm-12" style="margin-top:30px;">


        <div>

          @foreach($list as $data)
          <div>
            <span>Agent : {{$data['users']['name']}}</span>
            <ul class="list-group">
              <li class="list-group-item"> title :{{$data['title']}}</li>
              <li class="list-group-item"> date :{{$data['date']}}</li>
              <li class="list-group-item">desc : {{$data['desc']}}</li>
              <li class="list-group-item">status:{{$data['status']}}</li>
              <!-- <li class="list-group-item">And a fifth one</li> -->
            </ul>
          </div>
          @endforeach
        </div>
        <div style="text-align:right">
          <a class="btn btn-primary" href="{{ url('add-task') }}">ADD+</a>
        </div>
      </div>

    </div>
  </div>

</body>

</html>