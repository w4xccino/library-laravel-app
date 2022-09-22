<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  <!-- Compiled and minified CSS -->
</head>

<body>
  <div class="row">
    <div class="col s12 m8 l4 offset-m2 offset-l4">
  <div class="mt-2">
    <a href="\login">
    <button class="btn waves-effect waves-light" type="button">Log In
    </button>
    </a>
  </div>
      <div class="card">
        <div class="card-action teal lighten-1 white-text">
          <h3>Register Page</h3>
        </div>
        <form class="card-content" method="POST" action="/register">
          @csrf
          <div class="form-field">
            <label for="username" id="username">Username</label>
            <input type="text" name="username">
          </div><br>
          <div class="form-field">
            <label for="name" id="name">Name</label>
            <input type="text" name="name">
          </div><br>
          <div class="form-field">
            <label for="email" id="email">Email</label>
            <input type="email" name="email">
          </div><br>
          <div class="form-field">
            <label for="telephone" id="telephone">Telephone</label>
            <input type="text" name="telephone">
          </div><br>
          <div class="form-field">
            <label for="password">Password</label>
            <input type="password" name="password">
          </
          <div class="form-field">
            <label for="password">Confirm Password</label>
            <input type="password" name="password_c">
          </div><br>
          <div class="">
            @foreach($roles as $role)
            <input id={{$role->id}} type="radio" name="role_id" value={{$role->id}}>
            <label for={{$role->id}}> {{$role->description}}</label>
            @endforeach
          </div><br>
          <button type="submit" class="btn-large waves-effect waves-dark" style="width:100%;">Register</button>
      </div><br>
      </form>
  </div>
</body>

</html>
