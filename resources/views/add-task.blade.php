<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
@if(Session::has('alert-message'))
        <script>
            $(document).ready(function(){
                alert("{{ Session::get('alert-message') }}");
            });
        </script>
    @endif

  <div class="container">
    <div class="row">
      <div class="col-sm-12" style="margin-top:50px; text-align:right">
        <a href="{{ url('/') }}" class="btn btn-danger">Logout</a>
      </div>
      <div class="col-md-12" style="margin-top:30px;">
<form method="post" action="{{ url('create-task') }}">
        @csrf
        <div class="form-group">
          <label for="title">title:</label>
          <input type="" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
          <label for="pwd">desc:</label>
          <textarea id="des" class="form-control" id="desc" name="desc" row="10"></textarea>
        </div>
        <div class="form-group">
          <label for="pwd">date:</label>
          <input type="date" id="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="form-group">
          <label for="pwd">agent:</label>
          <select id="agent" class="form-control" name="agent" required>
            <option value="">select</option>
            @foreach ($agents as $agent)
            <option value="{{ $agent->id }}">{{ $agent->name }}</option>
            @endforeach
          </select>
        </div>

        <div style="text-align:right">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
        </form>
      </div>

    </div>
  </div>

</body>

</html>