{{-- @php
  var_dump($data);
  die();
@endphp --}}




@extends('layouts.admin.master')
@section('title','All Departments')
<div class="adminx-content">
    @section('bread-crumb')
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active  aria-current="page">All Departments</li>
              </ol>
            </nav>
           @endsection
           @section('content')
           @if(Session::has('msg'))
            <div class="alert alert-success">{{ Session::get('msg') }}</div>
            @endif
            <div class="pb-3">
              <h1>Departments Table</h1>
            </div>
            <div class="row">
              <div class="col">
                <div class="card mb-grid">
                  <div class="table-responsive-md">
                    <table class="table table-actions table-striped table-hover mb-0" data-table>
                      <thead>
                        <tr>
                          <th scope="col">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-all">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <th scope="col">ID</th>
                          <th scope="col">Name</th>
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                       <tbody>

                        @forelse ($data as $value)
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                            <td>{{ $value['id'] }}</td>
                            <td>{{ $value['name'] }}</td>
                          <td>
                            <form action="{{ route('departments.restore',$value['id']) }}" method="post" style="display: inline-block">
                                @csrf
                                <input type="submit" value="restore" class="btn btn-sm btn-success">
                            </form>
                            <form action="{{ route('departments.deleteArchive',$value['id']) }}" method="post" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="delete" class="btn btn-sm btn-danger">
                            </form>

                          </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="4">No Data</td>
                            </tr>
                        @endforelse
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
