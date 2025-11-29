@include('user.header')
<section id="dashbboard">

            <div class="container">

                <div class="row">



                    <div class="card mycard col-12 col-md-12 col-lg-12" style="background-color: #fff; color:#333333; padding:15px; margin:10px;border-radius:5px;">

                        <div class="card-header h2">

                            <i class="fa fa-user-circle-o" aria-hidden="true"></i> LIST OF REGISTERED USERS

                        </div>
                        @if ($message = Session::get('uploadsuccess'))
                            <font style="color:green"><b>{{ $message }}</b></font>
                        @endif
                        @if ($message = Session::get('uploaderror'))
                            <font style="color:red"><b>{{ $message }}</b></font>
                        @endif
                        
                        <table id="jquery-datatable-example-no-configuration" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>View User</th>
            <th>Block User</th>
        </tr>
    </thead>
    <tbody>
        @foreach($viewallusers as $viewallusers)
        <tr>
            <td>{{$viewallusers->name}}</td>
            <td>{{$viewallusers->email}}</td>
            <td>{{$viewallusers->username}}</td>
            <td><a href="/viewuserdetials/{{$viewallusers->id}}">View User</a></td>
            <td><a href="/blockusers/{{$viewallusers->id}}" onclick="return confirm('Are you sure you want to block this user')">Block</a></td>
           
        </tr>
        @endforeach
    </tbody>
</table>

                        
                    </div>
                </div>

            </div>

        </section>

        
@include('user.footer')