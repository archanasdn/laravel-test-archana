<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .loginDiv {
      max-width: 400px;
      margin: 0 auto;
      margin-top: 7%;
      background: #ededed;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px #afafaf;
    }

    input {
      margin-bottom: 20px;
    }

    h2 {
      padding: 0px;
      margin: 0px;
      margin-bottom: 10px;
    }
    .loginBtnDiv{
      text-align: right;
    }
  </style>
</head>

<body>


  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <div class="loginDiv">
          <h2>Login</h2>
          <form method="post" action="{{ url('login') }}">
            @csrf
            <input type="email" id="email" class="form-control" name="email" placeholder="email" required>
            <input type="password" id="password" class="form-control" name="password" placeholder="password" required>
            <div class="loginBtnDiv">
              <input type="submit" class="btn btn-primary" value="Log In">
            </div>
          </form>

        </div>

      </div>

    </div>
  </div>

</body>

</html>