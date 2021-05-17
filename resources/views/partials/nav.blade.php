
<nav class="navbar navbar-dark bg-dark">
<div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">Welcome {{ Auth::user()->name }}</a>
    </div>
    <form class="form-inline navbar-right">
        <li><a href="{{ route('LOGOUT') }}" class="btn btn-primary">LogOut</a></li>
    </form>
</div>
</nav>