@include('user.header')
<section id="dashbboard">

            <div class="container">

                <div class="row">



                    <div class="card mycard col-6 col-md-6 col-lg-6" style="background-color: #fff; color:#333333; padding:15px; margin:10px;border-radius:5px;">
                        <div class="card-header h2">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i> Client Details
                        </div>
                        <div class="card-body">
                            <h3><i class="fa fa-address-book-o" aria-hidden="true"></i>Name of Client:  {{$UserdetialsdataName}}</h3>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> Email : {{$UserdetialsdataEmail}}</p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> Username : {{$UserdetialsdataUsername}}</p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> Wallet ID: {{$UserdetialsdataWalletid}}</p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> Account Balance : ${{$mainbalEmail}}</p>
                        </div>
                    </div>
                    <div class="card mycard col-6 col-md-6 col-lg-6" style="background-color: #fff; color:#333333; padding:15px; margin:10px;border-radius:5px;">
                        <div class="card-header h2">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i> Credit or Debit User
                        </div>
                        <div class="card-body">
                        @if ($message = Session::get('uploadsuccess'))
                            <font style="color:green"><b>{{ $message }}</b></font>
                        @endif
                        @if ($message = Session::get('uploaderror'))
                            <font style="color:red"><b>{{ $message }}</b></font>
                        @endif
                            <p>
                                <form action="/funduser" method="post" >
                @csrf
                    <input name="amt"  type="text">

                    <input name="id" type="hidden" value="{{$UserdetialsdataId}}"><br><br>
                    
                    <input type="submit"  name="fundval" value="Add fund"/>

                    <input type="submit"  name="fundval" value="Remove fund"/>
                  
                </form></p>
                        </div>
                    </div>
                    <div class="card mycard col-6 col-md-6 col-lg-6" style="background-color: #fff; color:#333333; padding:15px; margin:10px;border-radius:5px;">
                        <div class="card-header h2">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i> Transaction Histroy 
                            
                        </div>
                        
                        <div class="card-body">
                        <b> Current Balance : ${{$mainbalEmail}}</b><br>
                        <b> Total Credit : ${{$credEmail}}</b><br>
                        <b> Total Debit : ${{$debtEmail}}</b><br>
                        <hr>
                        
                            @foreach($TransactionHistory as $TransactionHistory)
                                @if(($TransactionHistory->transactiontype)=="Credit")
                                    <p style="color:green"> Amount : {{$TransactionHistory->amount}} - Transaction Type: {{$TransactionHistory->transactiontype}} - Date: {{$TransactionHistory->dated}}</p>
                                @else
                                    <p style="color:red"> Amount : {{$TransactionHistory->amount}} - Transaction Type: {{$TransactionHistory->transactiontype}} - Date: {{$TransactionHistory->dated}}</p>
                                @endif
                            @endforeach
                        </div>
                    </div>

            </div>

        </section>

        
@include('user.footer')