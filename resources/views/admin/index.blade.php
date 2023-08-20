@extends("layouts.admin.master")
@section('title','ADMIN')
@section('bread-crumb')
 <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Dashboard</h1>
            </div>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center" >
          <div class="card-header-title">Students</div>

          <nav class="card-header-actions">
            <a class="card-header-action" data-toggle="collapse" href="#card1" aria-expanded="false" aria-controls="card1">
              <i data-feather="minus-circle"></i>
            </a>

            <div class="dropdown">
              <a class="card-header-action" href="#" role="button" id="card1Settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="settings"></i>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="card1Settings">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>

            <a href="#" class="card-header-action">
              <i data-feather="x-circle"></i>
            </a>
          </nav>
        </div>
        <div class="card-body collapse show" id="card1" >
          <h4 class="card-title">Get all information about students</h4>

          <a href="{{ route('students.index') }}" class="btn btn-primary">Go To Students</a>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <div class="card-header-title">Instructors</div>

          <nav class="card-header-actions">
            <a class="card-header-action" data-toggle="collapse" href="#card2" aria-expanded="false" aria-controls="card2">
              <i data-feather="minus-circle"></i>
            </a>

            <div class="dropdown">
              <a class="card-header-action" href="#" role="button" id="card2Settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="settings"></i>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="card2Settings">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>

            <a href="#" class="card-header-action">
              <i data-feather="x-circle"></i>
            </a>
          </nav>
        </div>
        <div class="card-body">
          <h4 class="card-title">Get all information about instructors</h4>


          <a href="{{ route('instructors.index') }}" class="btn btn-primary">Go To Instructors</a>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <div class="card-header-title">departments</div>

          <nav class="card-header-actions">
            <a class="card-header-action" data-toggle="collapse" href="#card3" aria-expanded="false" aria-controls="card3">
              <i data-feather="minus-circle"></i>
            </a>

            <div class="dropdown">
              <a class="card-header-action" href="#" role="button" id="card3Settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="settings"></i>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="card3Settings">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>

            <a href="#" class="card-header-action">
              <i data-feather="x-circle"></i>
            </a>
          </nav>
        </div>
        <div class="card-body collapse show" id="card3">
          <h4 class="card-title">Get all information about departments</h4>
         
          <a href="{{ route('departments.index') }}" class="btn btn-primary">Go To Departments</a>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <div class="card-header-title">Topics</div>

          <nav class="card-header-actions">
            <a class="card-header-action" data-toggle="collapse" href="#card4" aria-expanded="false" aria-controls="card4">
              <i data-feather="minus-circle"></i>
            </a>

            <div class="dropdown">
              <a class="card-header-action" href="#" role="button" id="card4Settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="settings"></i>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="card4Settings">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>

            <a href="#" class="card-header-action">
              <i data-feather="x-circle"></i>
            </a>
          </nav>
        </div>
        <div class="card-body collapse show" id="card4">
          <h4 class="card-title">Get all information about topics</h4>
          <a href="{{ route('topics.index') }}" class="btn btn-primary">Go To Topics</a>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <div class="card-header-title">Featured</div>

          <nav class="card-header-actions">
            <a class="card-header-action" data-toggle="collapse" href="#card5" aria-expanded="false" aria-controls="card5">
              <i data-feather="minus-circle"></i>
            </a>

            <div class="dropdown">
              <a class="card-header-action" href="#" role="button" id="card5Settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="settings"></i>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="card5Settings">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>

            <a href="#" class="card-header-action">
              <i data-feather="x-circle"></i>
            </a>
          </nav>
        </div>
        <div class="card-body collapse show" id="card5">
          <h4 class="card-title">Get all information about Courses</h4>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="{{ route('courses.index') }}" class="btn btn-primary">Go To Courses</a>
        </div>
      </div>
    </div>
  </div>
  @endsection
