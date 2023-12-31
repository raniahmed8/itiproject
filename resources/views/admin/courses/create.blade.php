@extends('layouts.admin.master')
@section('title','ADD Courses')
<div class="adminx-content">
    @section('bread-crumb')
            <!-- BreadCrumb -->
           <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active  aria-current="page">ADD courses</li>
              </ol>
            </nav>
           @endsection
           @section('content')
            <div class="pb-3">
                @if (Session::has('msg'))
                <div class="alert alert-success"> {{ Session::get('msg') }}</div>
                @endif
              <h1>Courses form</h1>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="card mb-grid">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-header-title">Cources form</div>

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
                  <div class="card-body collapse show" id="card1">
                    <form action="{{ route('courses.store') }}" enctype="multipart/form-data" method="post">
                    @csrf

                      <div class="form-group">
                        <label class="form-label" for="name">course name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Course Name" name="name">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="dis">duration</label>
                        <input type="text" class="form-control" id="dis" aria-describedby="emailHelp" placeholder="Enter The describtion" name="duration">
                        @error('duration')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="du">Describtion</label>
                        <input type="text" class="form-control" id="du" aria-describedby="emailHelp" placeholder="Enter duration" name="discribtion">
                        @error('discribtion')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputPassword1">Topic</label>
                        <select name="top_id">
                            <option value="" >select topic</option>
                            @foreach ( $topData as $data)
                               <option value="{{ $data['id'] }}" >{{ $data['name'] }}</option>
                            @endforeach
                        </select>
                        @error('top_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <button type="submit" class="btn btn-primary">ADD</button>
                    </form>
                  </div>
                </div>
          @endsection


      <!-- // Main Content -->

        @section('js')
         <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
        <script>
        $(document).ready(function() {
            var table = $('[data-table]').DataTable({
            "columns": [
                null,
                null,
                null,
                null,
                null,
                { "orderable": false }
            ]
            });

            /* $('.form-control-search').keyup(function(){
            table.search($(this).val()).draw() ;
            }); */
        });
        </script>
        @endsection
