@include('user.header')
<section id="dashbboard">

            <div class="container">

                <div class="row">



                    <div class="card mycard col-12 col-md-4 col-lg-5" style="background-color: #fff; color:#333333; padding:15px; margin:10px;border-radius:5px;">

                        <div class="card-header h2">

                            <i class="fa fa-user-circle-o" aria-hidden="true"></i> USER PROFILE

                        </div>

                        <div class="card-body">

                            <h3><i class="fa fa-address-book-o" aria-hidden="true"></i> {{ Auth::user()->name}} </h3>

                            <p><i class="fa fa-envelope" aria-hidden="true"></i> {{ Auth::user()->email}}</p>

                            <a style="margin-right: 10px;margin-bottom: 10px" href="/editprofile" class="btn btn-primary">EDIT PROFILE</a>

                            <a style="margin-bottom: 10px" href="/changepassword" class="btn btn-primary">CHANGE PASSWORD</a>



                        </div>

                    </div>

                    <div class="card mycard col-12 col-md-4 col-lg-5" style="background-color: #fff; color:#333333; padding:15px; margin:10px;border-radius:5px;">
                        <div class="card-body">
                            <b>Name of User: {{$GetUser->name}}</b><br>
                            Account Balance: {{$GetAccountBalance}}
                            <form method="post" action="/searchuser">
                                @csrf
                                <input type="text" name="uname" class="form-control" placeholder="Enter Customer Username">
                                <br>
                                <button type="submit" class="btn btn-primary">Search</button>
                            </form>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        
@include('user.footer')