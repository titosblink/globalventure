@include('user.header')

<section class="wrapper">

            <div class="container">

                <div class="form-container">

                    <div>

                        <!-- Section Title Starts -->

                        <div class="row text-center">

                            <h2 class="title-head hidden-xs">Fund <span>Your Account</span></h2>

                            <p class="info-form">Fund your account and start earning today</p>

                        </div>

                        <!-- Section Title Ends -->
                        <!-- Form Starts -->
                        <form action="/fundaccount" method="post" enctype="multipart/form-data" style="padding-bottom:50px;">
                        @csrf
                            <!-- Input Field Starts -->
                            <input type="hidden" name="substype" value="{{$id}}">
                           <div class="form-group">
                                <label for="PLAN">Investment Plan</label>
                                @if($id==10)
                                    <input style="text-transform: uppercase; background-color:transparent" readonly class="form-control" type="text" name="plan" id="PLAN" value="Starter">
                                @elseif($id==25)
                                    <input style="text-transform: uppercase; background-color:transparent" readonly class="form-control" type="text" name="plan" id="PLAN" value="Saver">
                                @elseif($id==35)
                                    <input style="text-transform: uppercase; background-color:transparent" readonly class="form-control" type="text" name="plan" id="PLAN" value="Highearner">
                                @elseif($id==40)
                                    <input style="text-transform: uppercase; background-color:transparent" readonly class="form-control" type="text" name="plan" id="PLAN" value="Leverage">
                                @elseif($id==60)
                                    <input style="text-transform: uppercase; background-color:transparent" readonly class="form-control" type="text" name="plan" id="PLAN" value="Partnership">
                                @else
                                    <input style="text-transform: uppercase; background-color:transparent" readonly class="form-control" type="text" name="plan" id="PLAN" value="Capitalist">
                                @endif
                                
                            </div>
                            <!-- Input Field Ends -->
                            <!-- Input Field Starts -->
                            <div class="form-group">
                                <label for="amount">Enter Amount($)</label>
                                
                                <input class="form-control" name="amount" id="amount" placeholder="ENTER AMOUNT IN USD" type="number" required>

                                @if($id==10)
                                    <small class="form-label">Limits: $100-$499</small>
                                @elseif($id==25)
                                    <small class="form-label">Limits: $500-$4,999</small>
                                @elseif($id==35)
                                    <small class="form-label">Limits: $5,000-$9,999</small>
                                @elseif($id==40)
                                    <small class="form-label">Limits: $10,000-$14,999</small>
                                @elseif($id==60)
                                    <small class="form-label">Limits: $15,000-$25,999</small>
                                @else
                                    <small class="form-label">Limits: $26,000-$100,000</small>
                                @endif

                            </div>

                           <div class="form-group">

                           
                            @if ($message = Session::get('uploaderror'))
                                <label for="pmethod" style="color:red">{{ $message }}</label><br>
                            @endif
                            <label for="pmethod">Select Payment</label>
                            <select class="form-select form-control" name="pmethod" id="pmethod" aria-label="Default select example">

                                    <option selected>Select Payment Method</option>
                                                                        <option value="BTC">BTC</option>
                                                                        <option value="ETH">ETH</option>
                                                                        <option value="USDT">USDT</option>
                                                                        <option value="TRON">TRON</option>
                                                                        <option value="BCH">BCH</option>
                                                                        <option value="BSC TETHER USDT">BSC TETHER USDT</option>
                                                                        
                                </select>

                           </div>                     

                            <!-- Input Field Ends -->

                            <!-- Submit Form Button Starts -->

                            <div class="form-group">

                                <button class="btn btn-primary" type="submit" name="submit">FUND YOUR ACCOUNT</button>

                            </div>

                            <!-- Submit Form Button Ends -->

                        </form>

                        <!-- Form Ends -->

                    </div>

                </div>

                <!-- Copyright Text Starts -->

            
            </div>

        </section>

@include('user.footer')