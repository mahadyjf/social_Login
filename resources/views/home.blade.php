@extends('app')
@section('content')

  <div class="container mt-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h4>User Login</h4><hr />
            <div class="d-grid gap-2">
            <a href="/CallGithub" class="btn btn-primary  text-white mt-2" href=""><i class="fa fa-GitHub"></i> Sign In With GitHub</a>
            <a href="/CallGithub" class="btn bg-dark btn-block text-white mt-2" href=""><i class="fa fa-GitHub"></i> Sign Up With GitHub</a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
