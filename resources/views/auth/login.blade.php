<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>
  <div class="row center-align">
    <div class="col s12 m8 l4 offset-m2 offset-l4">
      <div class="card">
        <div class="card-action teal lighten-1 white-text">
          <h3>Login App</h3>
        </div>
        <form class="card-content" action="/login" method="POST">
        @csrf
          <div class="form-field">
            <label for="username" id="username">Username</label>
            <input type="text" name="username">
          </div><br>
          <div class="form-field">
            <label for="password">Password</label>
            <input type="password" name="password">
          </div><br>
          <div class="form-field">
            <button type="submit" class="btn-large waves-effect waves-dark" style="width:100%;">Login</button>
          </div><br>
          <div class="form-field">
            <a href='register' class="btn-large waves-effect waves-dark" style="width:100%;">
              Register
            </a>
          </div><br>
        </form>

      </div>
    </div>
  </div>
</body>

</html>
