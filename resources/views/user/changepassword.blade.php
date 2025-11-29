

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Ventures Partners | Update User</title>

    <link rel="shortcut icon" href="../images/favicon.png">

<!-- Template CSS Files -->
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" />
        <link rel="stylesheet" href="{{asset('css/select2.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/style7d3c.css?v=1697183429')}}" />
        <link rel="stylesheet" href="{{asset('css/skins/green.css')}}" />
        <link rel="stylesheet" href="{{asset('css/mystyle7d3c.css?v=1697183429')}}" />

<!-- Template JS Files -->
<script src="../js/modernizr.js"></script>

</head>

<body>
<section id="update" style="padding-top: 3rem">
        <div class="container">
            <a class="btn btn-secondary" href="/home" style="margin: 20px 0;">Return to Dashboard </a>
            <div style="color: red;"> </div>

            <form action="/changepwd" method="post">
            @csrf
                <div class="mb-3">
                    <label for="curpwdLabel" class="form-label">CURRENT PASSWORD</label>
                    <input type="password" class="form-control" id="curpwd" name="curpwd" aria-describedby="currentpasswordHelp" required>
                </div>
                <div class="mb-3">
                    <label for="newpwddLabel" class="form-label">NEW PASSWORD</label>
                    <input type="password" class="form-control" id="newpwd" name="newpwd" aria-describedby="newpasswordHelp" required>
                </div>
                <div class="mb-3">
                    <label for="newpwdrepeatLabel" class="form-label">CONFIRM NEW PASSWORD</label>
                    <input type="password" class="form-control" id="newpwdrepeat" name="newpwdrepeat" aria-describedby="newpasswordrepeatHelp">
                    <input type="checkbox" class="chkbox"> Show Password
                </div>
                <button style="margin-top:10px" type="submit" name="submit" class="btn btn-primary">CHANGE PASSWORD</button>
            </form>
            @if ($message = Session::get('uploadsuccess'))
                    <font style="color:green">{{ $message }}</font>
            @endif
            @if ($message = Session::get('uploaderror'))
                    <font style="color:red">{{ $message }}</font>
            @endif
            
            <p style="margin-top:10px" class="text-center copyright-text">Copyright © 2022 Global Ventures Partners All Rights Reserved</p>
        </div>
    </section>




    <script src="../js/jquery-2.2.4.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/select2.min.js"></script>
        <script src="../js/jquery.magnific-popup.min.js"></script>
        <script src="../js/custom.js"></script>
        <script src="../js/main.js"></script>
</body>

</html>