<div class="row header">
    <div class="col-md-8 ml-auto">
        <p><a href="{{ asset('/home') }}"><i class="fas fa-home"></i> Home</a></p>
    </div>
    <div class="col-md-2 ml-auto">
        <div class="ddBtn">
            <button class="btn btn-primary dropdown-toggle profile-dd" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->username }} </button>

            <div class="dropdown-menu profile-dd-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{ asset('/user/'.auth()->user()->id) }}"><i class="fas fa-user"></i> &nbsp; Profile</a>
                <a class="dropdown-item" href="{{ route('logOut') }}"><i class="fas fa-sign-out-alt"></i> &nbsp; Log out</a>
            </div>
        </div>
    </div>
</div>