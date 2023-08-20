@extends('layouts.admin.master')
@section('title','ADD Insteuctor')
<div class="adminx-content">
    @section('bread-crumb')
            <!-- BreadCrumb -->
           <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active  aria-current="page">ADD instructors to course</li>
              </ol>
            </nav>
           @endsection
           @section('content')
            <div class="pb-3">
              <h1>Instructor course form</h1>
            </div>
            @if(Session::has('msg'))
            <div class="alert alert-success">{{ Session::get('msg') }}</div>
            @endif
            <div class="row">
              <div class="col-lg-6">
                <div class="card mb-grid">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-header-title">Instructor form</div>

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
                    <form action="{{ route('courseInstructor.store') }}" enctype="multipart/form-data" method="post">
                    @csrf

                      <div class="form-group">
                        <label class="form-label" for="exampleInputPassword1">Instructor</label>
                        <select name="instructor_id">
                            <option value="none" >select Instructor</option>
                            @foreach ( $instructorS as $instructor)
                               <option value="{{ $instructor['id'] }}" >{{ $instructor['name'] }}</option>
                            @endforeach
                        </select>
                        @error('instructor_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label class="form-label" for="exampleInputPassword1">Course</label>
                        <select name="course_id">
                            <option value="none" >select course</option>
                            @foreach ( $courses as $course)
                               <option value="{{ $course['id'] }}" >{{ $course['name'] }}</option>
                            @endforeach
                        </select>
                        @error('course_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Evaluation</label>
                        <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Name" name="evaluation">
                        @error('evaluation')
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
