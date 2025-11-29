@include('user.header') 
<section class="wrapper"> 
            <div class="container">
                <div class="form-container">
                    <div>
                        <!-- Section Title Starts -->
                        <div class="row text-center">
                            <h2 class="title-head hidden-xs">Make <span>Your Withdrawal</span></h2>
                            <p class="info-form">Withdraw your income today</p>
                        </div>
                        <!-- Section Title Ends -->

                        <!-- Form Starts -->
                        <form action="submitwithdrawal" method="post" style="padding-bottom:50px;">
                            @csrf
                            <!-- Input Field Starts -->
                            <div class="form-group">
                                <input class="form-control" type="text" name="walletid" id="wallet" value="" placeholder="DESTINATION WALLET-ID" required>
                                <input type="hidden" name="acctbal" id="wallet" value="{{$SearchAcctBal}}">
                            </div>
                            <!-- Input Field Ends -->
                            <!-- Input Field Starts -->
                            <div class="form-group">
                                <div style='color: red;'><p>Amount exceeds account balance</p></div>                                <input class="form-control" name="amount" id="amount" placeholder="ENTER AMOUNT IN USD" type="number" required>
                                <p class="form-label">Wallet Balance = ${{$SearchAcctBal}}</p>
                            </div>
                            <div>
                                <input type="radio" id="btc" name="pmethod" value="btc" checked>
                                <label for="huey">BTC</label>
                            </div>
                            <!-- Input Field Ends -->
                            <!-- Submit Form Button Starts -->
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" name="submit">COMPLETE WITHDRAWAL</button>
                            </div>
                            <!-- Submit Form Button Ends -->
                        </form>
                        <!-- Form Ends -->
                        @if ($message = Session::get('uploadsuccess'))
                            <font style="color:green">{{ $message }}</font>
                        @endif
                        @if ($message = Session::get('uploaderror'))
                            <font style="color:red">{{ $message }}</font>
                        @endif
                    </div>
                </div>
                <!-- Copyright Text Starts -->
                <p class="text-center copyright-text">Copyright © 2022 Global Venture Investment All Rights Reserved</p>
            </div>
        </section>
@include('user.footer')