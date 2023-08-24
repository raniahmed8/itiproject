@extends('layouts.admin.master')
@section('title','Department')
<div class="adminx-content">
    @section('bread-crumb')
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item "><a href="{{ route('departments.index') }}">All Departments </a></li>
                <li class="breadcrumb-item active"  aria-current="page">Department number {{ $data->id }}</li>
              </ol>
            </nav>
           @endsection
           @section('content')
            <div class="pb-3">
              <h1>Department number {{ $data->id }} Table</h1>
            </div>
            <div class="row">
              <div class="col">
                <div class="card mb-grid">
                  <div class="table-responsive-md">
                    <table class="table table-actions table-striped table-hover mb-0" data-table>
                        <tbody>
                        <tr>
                          <th scope="col">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-all">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>

                          <th scope="col">ID</th>
                          <td>{{ $data->id }}</td>


                        </tr>



                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <th scope="col"> Name</th>
                          <td>{{ $data->name }}</td>

                        </tr>
                        <tr>
                            <th scope="row">
                              <label class="custom-control custom-checkbox m-0 p-0">
                                <input type="checkbox" class="custom-control-input table-select-row">
                                <span class="custom-control-indicator"></span>
                              </label>
                            </th>
                            <th scope="col"> Manager</th>
                            <td>{{ $mgr->name }}</td>

                          </tr>
                          <tr>
                            <th scope="row">
                              <label class="custom-control custom-checkbox m-0 p-0">
                                <input type="checkbox" class="custom-control-input table-select-row">
                                <span class="custom-control-indicator"></span>
                              </label>
                            </th>
                            <th scope="col"> Hiring Date</th>
                            <td>{{ $data->hiringDare }}</td>

                          </tr>


                        </tbody>
                    </table>
                  </div>
                </div>
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
