    <!DOCTYPE html>
    <html>
    <head>
    <title>BridgeCor LLC Admin Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    .box{
        width:600px;
        margin:0 auto;
        border:1px solid #ccc;
    }
    </style>
    </head>
    <body>
    <br />
    <div class="container box">
    <h3 align="center">BridgeCor LLC Admin Login</h3><br />


    <form method="post" action="{{ route('login.submit') }}">
        @csrf

        <div class="form-group">
            <label for="email">Enter Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">Enter Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>

    </div>
    </body>
    </html>
