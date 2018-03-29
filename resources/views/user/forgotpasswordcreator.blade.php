<html>
<head>
  <title> Reset Password </title>
</head>

<body>

    <h4>Reset your password here</h4>
    <hr>
    <form method="POST" action="/newpass" id="registration">
      {{csrf_field() }}
            <div class="form-group">
                <label for="email">Email id</label>
                <input type="email" class="form-control" name="email" aria-describedby="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="token">Token</label>
                <input type="name" class="form-control" name="token" aria-describedby="token" placeholder="Enter the token" required>
            </div>
            <div class="form-group">
                <label for="Password1">New Password</label>
                <input type="password" class="form-control" name="password1" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="Passwordc">Re type New Password</label>
                <input type="password" class="form-control" name="password2" id="password2"  placeholder="Conform Password"  required>
            </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            <li>Errors</li>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>

</html>