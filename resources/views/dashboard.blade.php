@extends('app')
@section('content')
<div class="container mt-5">
  <div class="row d-flex justify-content-center">
    <div class="col-md-4">
    <div class="card" style="width: 18rem;">
        <img height="200px" src="{{ Session::get('userImg')}}" class="card-img-top" alt="...">


              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>ID: </strong>{{ Session::get('userID')}}</li>
                <li class="list-group-item"><strong>Name: </strong>{{ Session::get('userName')}}</li>
                <li class="list-group-item"><strong>Nick Name: </strong>{{ Session::get('userNickName')}}</li>
                <li class="list-group-item"><strong>Email: </strong>{{ Session::get('userEmail')}}</li>
                <li class="list-group-item"><strong>Token: </strong>{{ Session::get('token')}}</li>
              </ul>

            <a href="/Logout" class="btn btn-primary">LogOut</a>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
