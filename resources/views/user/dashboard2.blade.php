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


 


                    <div class="card mycard col-12 col-md-12 col-lg-12" style="background-color: #fff; color:#333333; padding:15px; margin:10px;border-radius:5px;">
                    <div class="card-header h2">
                        <i class="fa fa-user-fund-o" aria-hidden="true"></i> Fund User
                    </div>
                        <div class="card-body">
                        @if ($message = Session::get('uploadsuccess2'))
                            <font style="color:green"><b>{{ $message }}</b></font>
                         @endif
                         @if ($message = Session::get('uploaderror'))
                            <font style="color:red"><b>{{ $message }}</b></font>
                         @endif
                         <br>
                        
                        <table>
                            <tr>
                                <td class="col-12 col-md-3 col-lg-2"><b>Email</b></td>
                                <td class="col-12 col-md-3 col-lg-2"><b>Amount</b></td>
                                <td class="col-12 col-md-3 col-lg-2"><b>Receipt</b></td>
                                <td class="col-12 col-md-3 col-lg-4"><b>Click to Fund User</b></td>
                                <td class="col-12 col-md-3 col-lg-4"><b>Cancel</b></td>
                            </tr> 
                            @foreach ($SearchUserdetails as $SearchUserdetails)
                            <tr> 
                                <td class="col-12 col-md-3 col-lg-2">{{$SearchUserdetails->email}}</td>
                                <td class="col-12 col-md-3 col-lg-2">{{$SearchUserdetails->amount}}</td>
                                <td class="col-12 col-md-3 col-lg-2"><img width="200" src="uploadreciept/{{$SearchUserdetails->filetoupload}}"></td>
                                <!-- <td><a href="/funduserreceipt/{{$SearchUserdetails->id }}" onclick="return confirm('Are you sure you want to fund this user?')"><button>Fund User</button></a></td> -->
                                <td class="col-12 col-md-3 col-lg-2">
                                    <form action="/funduserreceipt" method="post" onsubmit="return confirm('Are you sure you want to fund this user?');">
                                        @csrf
                                        <input type="hidden" name="amount" value="{{$SearchUserdetails->amount}}">
                                        <input type="hidden" name="email" value="{{$SearchUserdetails->email}}">
                                        <input type="hidden" name="id" value="{{$SearchUserdetails->id}}">
                                        <button>Click to pay</button>
                                    </form>
                                </td> 
                                <td class="col-12 col-md-3 col-lg-2"><a href="/cancelreceipt/{{$SearchUserdetails->id }}" onclick="return confirm('Are you sure you want to cancel this payment?')"><button>Click to Cancel</button></a></td>
                            </tr>
                            @endforeach
                        </table>
                        </div>

                    </div>

                </div>

                <div class="row">



                    <div class="card mycard col-12 col-md-12 col-lg-12" style="background-color: #fff; color:#333333; padding:15px; margin:10px;border-radius:5px;">

                        <div class="card-header h2">

                            <i class="fa fa-user-fund-o" aria-hidden="true"></i> Withrawal Request

                        </div>
                        @if ($message = Session::get('uploadsuccess'))
                            <font style="color:green"><b>{{ $message }}</b></font>
                         @endif
                        <table>
                            <tr>
                                <td class="col-12 col-md-3 col-lg-2"><b>Name</b></td>
                                <td class="col-12 col-md-3 col-lg-2"><b>Username</b></td>
                                <td class="col-12 col-md-3 col-lg-2"><b>Wallet ID</b></td>
                                <td class="col-12 col-md-3 col-lg-2"><b>Amount Requested</b></td>
                                <td class="col-12 col-md-3 col-lg-4"><b>Click to confirm payment</b></td>
                            </tr>
                            @foreach ($SearchWithrawal as $SearchWithrawal)
                            <tr>
                                <td class="col-12 col-md-3 col-lg-2">{{$SearchWithrawal->name}}</td>
                                <td class="col-12 col-md-3 col-lg-2">{{$SearchWithrawal->username}}</td>
                                <td class="col-12 col-md-3 col-lg-2">{{$SearchWithrawal->walletidtobepaid}}</td>
                                <td class="col-12 col-md-3 col-lg-2">{{$SearchWithrawal->amount}}</td>
                                <td class="col-12 col-md-3 col-lg-4">
                                    <form action="/approvewith" method="post" onsubmit="return confirm('Do you really want to submit the form?');">
                                        @csrf
                                        <input type="hidden" name="amount" value="{{$SearchWithrawal->amount}}">
                                        <input type="hidden" name="email" value="{{$SearchWithrawal->email}}">
                                        <input type="hidden" name="id" value="{{$SearchWithrawal->id}}">
                                        <button>Click to pay</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>


                    </div>


 


                   

                </div>

            </div>

        </section>

        
@include('user.footer')