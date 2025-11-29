@include('user.header')
<section class="wrapper">

            <div class="container">

                <div class="form-container">

                <div class="container">

<div>

    <ul class="breadcrumb" style="background-color: inherit; color:inherit; text-align:center">

        <li><a href="#"> home</a></li>

        <li>referer</li>

    </ul>

</div>

<div style="background-color: #999; color:#777; border-left:8px solid #2f4f4f; padding: 8px">

    <h2>Your Referer and Earnings</h2>

    <p style="color:#111">your Referer Link: https://globalventurepartners.org/registerr/{{$uid}}</p>

    <div>
        @if($SearchRef)

            @foreach($SearchRef as $SearchRef)
            <p style="color:#111">{{$SearchRef->name}}({{$SearchRef->username}})</p>
            @endforeach


        @else
            <p style="color:#111">You have no referrals!! Invite your family and friends and earn more through referral bonus.</p>
        @endif  

    </div>

</div>

<!-- Copyright Text Starts -->


</div>


                </div>

                
            </div>

        </section>
@include('user.footer')