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

                        <div class="card-header h2">

                            <i class="fa fa-balance-scale" aria-hidden="true"></i> INVESTMENT ACCOUNT

                        </div>

                        <div class="card-body">
                            <h5 class="card-title"><b>Investment status: </b></h5>
                          
                            <h5 class="card-title"><b>Total Wallet Balance: <i class="fa fa-usd" aria-hidden="true"></i>{{$SearchAcctBal}}</b></h5>

                            <!-- <h5 class="card-title"><b>Active Capital: <i class="fa fa-usd" aria-hidden="true"></i>{{$SearchAcctBalCbal}}</b></h5> -->
                            
                            <p class="card-text">Based on Investment capital, Weekly ROI, Reoccuring deposits, Referral Bonus, Promo gains and Withdrawal.</p>
                                                        <a href="#" class="btn btn-primary">GET ACCOUNT STATEMENT</a>

                        </div>

                    </div>



                    <div class="card mycard col-12 col-md-4 col-lg-5" style="background-color: #fff; color:#333333; padding:15px; margin:10px;border-radius:5px;">

                        <div class="card-header h2">

                            <i class="fa fa-download" aria-hidden="true"></i> DEPOSITS

                        </div>

                        <div class="card-body">

                            <h5 class="card-title"><b>Total Deposits: <i class="fa fa-usd" aria-hidden="true"></i>0.00</b></h5>

                            <p class="card-text">Last Deposit: <i class="fa fa-usd" aria-hidden="true"></i>{{$SearchLastWith2}}</p>

                            <a href="/pricing" class="btn btn-primary">Deposit Now</a>

                        </div>

                    </div>



                    <div class="card mycard col-12 col-md-4 col-lg-5" style="background-color: #fff; color:#333333; padding:15px; margin:10px;border-radius:5px;">

                        <div class="card-header h2">

                            <i class="fa fa-upload" aria-hidden="true"></i> WITHDRAWAL

                        </div>

                        <div class="card-body">

                            <h5 class="card-title"><b>Total Withdrawal: <i class="fa fa-usd" aria-hidden="true"></i>0.00</b></h5>

                            <p class="card-text">Last Withdrawal: <i class="fa fa-usd" aria-hidden="true"></i>{{$SearchLastWith}}</p>

                            <a href="/withdraw" class="btn btn-primary">Place Withdrawal</a>

                        </div>

                    </div>



                    <div class="card mycard col-12 col-md-4 col-lg-5" style="background-color: #fff; color:#333333; padding:15px; margin:10px;border-radius:5px;">

                        <div class="card-header h2">

                            <i class="fa fa-handshake-o" aria-hidden="true"></i> EARNINGS

                        </div>

                        <div class="card-body">

                            <h5 class="card-title"><b>Total Earnings: <i class="fa fa-usd" aria-hidden="true"></i>0.00</b></h5>

                            <p class="card-text">ROI: <i class="fa fa-usd" aria-hidden="true"></i>0.00</p>

                            <p class="card-text">Referral Bonus: <i class="fa fa-usd" aria-hidden="true"></i>0.00</p>

                            <p class="card-text">Promo Bonus: <i class="fa fa-usd" aria-hidden="true"></i>0.00</p>

                            <a href="#" class="btn btn-primary">View earnings log</a>

                        </div>

                    </div>



                    <div id="referral" class="card mycard col-12 col-md-4 col-lg-5" style="background-color: #fff; color:#333333; padding:15px; margin:10px;border-radius:5px;">

                        <div class="card-header h2">

                            <i class="fa fa-users" aria-hidden="true"></i> REFERRALS STATUS

                        </div>

                        <div class="card-body">

                            <h5 class="card-title"><b>Total Referral Bonus: <i class="fa fa-usd" aria-hidden="true"></i>{{$rebonus}}</b></h5>

                            @if($countRef)
                                <h5 class="card-title">Total Referrals: You haven {{$countRef}} referrer</h5>
                            
                            @else
                                <h5 class="card-title">Total Referrals: You haven't referred anyone</h5>
                            @endif
                            <!-- <p class="card-text">Affiliate link: https://www.stablegrowth.org/?refer={{ Auth::user()->username}}</p> -->

                            <!-- <p class="card-text">You last referral registered on: You haven't referred anyone</p> -->

                            <a href="/referer" class="btn btn-primary">See all referrals</a>

                        </div>

                    </div>



                    <div class="card mycard col-12 col-md-4 col-lg-5" style="background-color: #fff; color:#333333; padding:15px; margin:10px;border-radius:5px;">

                        <div class="card-header h2">

                            <i class="fa fa-gift" aria-hidden="true"></i> PROMO STATS

                        </div>

                        <div class="card-body">

                            <h5 class="card-title"><b>Total Referral Bonus: <i class="fa fa-usd" aria-hidden="true"></i>0.00</b></h5>

                            <p class="card-text">Active PROMO: You are not participating in any promo</p>

                            <p class="card-text">On-going PROMO: 3</p>

                            <a href="#" class="btn btn-primary">Contact us for details</a>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section id="earningslog">

            <div class="container">

                <div class="col col-md-8 bg-grey-chart">

                    <div class="chart-widget dark-chart chart-1">

                        <div>

                            <div class="btcwdgt-chart" data-bw-theme="dark"></div>

                        </div>

                    </div>

                </div>

                <div class="row" style="padding:10px; background-color: #f9f9f9;">

                    <div class="h2">
                        EARNINGS LOG
                    </div>

                    <div>

                        <ul>

                            <li>You haven't started earning any income</li>
                        </ul>

                    </div>

                </div>

            </div>

        </section>
@include('user.footer')