

@extends('layouts.admin.app')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                      <div class="row mt-4">
                        <div class="col-7"> 
                          <h1 class="">Categories</h1>
                        </div>
                  
                        <div class="col-5 text-end"> 
                          <a href="{{ url('category/create') }}" class="btn btn-info">Add Category</a>
                          <a href="{{ url('category/export') }}" class="btn btn-info">Export</a>
                        </div>
                      </div>

                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Categories</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Actions</th>
                                  
                                        </tr>
                                    </thead>
                
                                    <tbody>
                                      @php
                                      $serialNumber = 1;
                                    @endphp
                                      @foreach($categories as $category)

                                        <tr>
                                          <td>{{ $serialNumber++ }}</td>
                                          <td>{{ $category->name }}</td>
                                            <td>
                                              <a href="{{ url('category/edit',$category->id) }}" class="btn btn-primary">Edit<a>
                                              <a href="{{ url('category/delete',$category->id) }}" class="btn btn-danger">Delete</a>  
                                            </td>
                                        </tr>
                                          @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>


@endsection
