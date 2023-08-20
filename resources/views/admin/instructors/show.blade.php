@extends('layouts.admin.master')
@section('title','All Insteuctors')
<div class="adminx-content">
    @section('bread-crumb')
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item "><a href="{{ route('instructors.index') }}">All Instructors </a></li>
                <li class="breadcrumb-item active"  aria-current="page"> {{ $instructor['name'] }}</li>
              </ol>
            </nav>
           @endsection
           @section('content')
            <div class="pb-3">
              <h1>Insrructor {{ $instructor['name'] }} </h1>
            </div>
            <div class="row">
              <div class="col">
                <div class="card mb-grid">
                  <div class="table-responsive-md">
                    <table class="table table-actions table-striped table-hover mb-0" data-table>

                     <tbody>
                        <tr>
                            <th scope="col">ID</th>
                            <td>{{ $instructor['id'] }}</td>
                        </tr>
                       <tr>
                        <th scope="col">Name</th>
                        <td>{{ $instructor['name'] }}</td>

                       </tr>
                       <tr>
                        <th scope="col">Department</th>
                        <td>{{ $dept['name'] }}</td>
                       </tr>
                       <tr>
                        <tr>
                            <th>Courses</th>
                            <td>
                                @foreach ($instructor->courses as $course)
                                    <li>{{ $course->name}}</li>
                                @endforeach
                            </td>
                        </tr>
                          <th scope="col">Salary</th>
                          <td>{{ $instructor['salary'] }}</td>

                       </tr>
                       <tr>
                        <th scope="col">Hour rate</th>
                        <td>{{ $instructor['hourRate'] }}</td>

                     </tr>
                       <tr>
                        <th scope="col">Adress</th>
                        <td>{{ $instructor['address'] }}</td>
                       </tr>

                        <tr>
                           <th scope="col">Actions</th>

                          <td>
                            <a href="{{ route('instructors.edit',$instructor['id']) }}" class="btn btn-sm btn-success">Edit</a>
                            {{-- <a href="{{ route('instructors.show',$instructor['id']) }}" class="btn btn-sm btn-danger">Delete</a> --}}
                            <form action="{{ route('instructors.destroy',$instructor['id']) }}" method="post" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="delete" class="btn btn-sm btn-danger">
                            </form>
                          </td>
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
