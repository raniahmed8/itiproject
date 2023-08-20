@extends('layouts.admin.master')
@section('title','ADD Insteuctor')
<div class="adminx-content">
    @section('bread-crumb')
            <!-- BreadCrumb -->
           <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active"  aria-current="page">edit Instructor data</li>
              </ol>
            </nav>
           @endsection
           @section('content')
            <div class="pb-3">
              <h1>Instructor form</h1>
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
                    <form action="{{ route('instructors.update',$data['id']) }}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('PUT')
                      <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">name</label>
                        <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Name" name="name" value="{{ $data['name'] }}">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Salary</label>
                        <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Salary" name="salary" value="{{ $data['salary'] }}">
                        @error('salary')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputPassword1">Address</label>
                        <input type="text" class="form-control"  placeholder="Adress" name="address" value="{{ $data['address'] }}">
                        @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputPassword1">Hour Rate</label>
                        <input type="number" class="form-control"  placeholder="Hour Rate" name="hourRate" value="{{ $data['hourRate'] }}">
                        @error('hourRate')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputPassword1">Department</label>
                        <select name="department_id">
                            <option value="none" >select department</option>
                            @foreach ( $deptData as $dept)
                               <option value="{{ $dept['id'] }}"
                               @if($data->department_id == $dept->id)
                                selected
                                @endif>
                                {{ $dept['name'] }}</option>
                            @endforeach
                        </select>
                        @error('department_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <small id="emailHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>

                      </div>

                      <button type="submit" class="btn btn-primary">Update</button>
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
