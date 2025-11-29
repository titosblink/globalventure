

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

            <form action="/updaterecord" method="post">
            @csrf
                <div class="mb-3">
                    <label for="nameLabel" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="inputname" name="name" value="{{$email = Auth::user()->name}}" aria-describedby="nameHelp" required>
                </div>
                <div class="mb-3">
                    <label for="emailLabel" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" value="{{$email = Auth::user()->email}}" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="walletIDLabel" class="form-label">Wallet ID (Optional)</label>
                    <input type="text" class="form-control" id="inputwalletID" value="" name="walletID" aria-describedby="walletIDHelp">
                </div>
                <button style="margin-top:10px" type="submit" name="submit" class="btn btn-primary">Update user's data</button>
            </form>
            @if ($message = Session::get('uploadsuccess'))
                    <font style="color:green">{{ $message }}</font>
            @endif

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