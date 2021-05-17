<!DOCTYPE html>
@include('layout.header')
<body>
<div class="container-fluid bg-dark p-2">
    <h3 class="display-5 text-center text-white">Welcome to Image Gallery</h3>
</div>
<div class="container col-sm-5">
    <div class="card  card-login mx-auto mt-5">
        <div class="card-header">Login to continue</div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{route('LOGIN')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter email</label>
                    <input class="form-control " name="email" ng-model="email" type="email" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input class="form-control" name="password" ng-model="password" type="password" required>
                </div>
                <button type="submit" class="btn btn-danger btn-block text-light mt-4">Login</button>
            </form>
        </div>
    </div>
</div>
</div>

</body>