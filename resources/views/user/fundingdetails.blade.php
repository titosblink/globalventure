@include('user.header')

<section class="wrapper">

            <div class="container">

                <div class="form-container">

                <div class="container">

<div>

    <ul class="breadcrumb" style="background-color: inherit; color:inherit; text-align:center">

        <li><a href="index.php"> home</a></li>

        <li>deposit</li>

    </ul>

</div>

<div style="background-color: #999; color:#777; border-left:8px solid #2f4f4f; padding: 8px">

    <h2>Congratulations {{$uid}}</h2>

    <p style="color:#111">You are almost done with your Account Funding! Complete your account funding by making a deposit of ${{$amount}} worth of {{$fundtype}} into the below Global Venture {{$fundtype}} Wallet ID.</p>

    <div>

        <p style="color:#111">GLOBAL VENTURES PARTNERS-FUNDING WALLETID.</p>

        <p style="color:#111; overflow-x:auto"><b>{{$fundaadress}}</b></p>

    </div>
</div>
<hr> 
<div style="background-color: #999; color:#777; border-left:8px solid #2f4f4f; padding: 8px">
<p style="color:#111"><b>Upload Receipt of Payment.</b></p>
    <form method="post" action="/uploadreceipt" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{$amount}}" name="amount">
        <input type="file" name="filereceipt" class="form-control">
        <br>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>

<!-- Copyright Text Starts -->


</div>


                </div>

                
            </div>

        </section>

@include('user.footer')