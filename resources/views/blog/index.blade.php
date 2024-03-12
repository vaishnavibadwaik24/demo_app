@extends('layouts.admin.app')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                      <div class="row mt-4">
                        <div class="col-7"> 
                          <h1 class="">Blogs</h1>
                        </div>
                        <div class="col-5 text-end"> 
                          <a href="{{ url('blog/create') }}" class="btn btn-info">Add Blog</a>
                          <a href="{{ url('blog/export') }}" class="btn btn-info">Export</a>
                        </div>
                      </div>

                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Blogs</li>
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
                                          <th scope="col">ID</th>
                                          <th scope="col">Title</th>
                                          <th scope="col">Description</th>
                                          <th scope="col">Category</th>
                                          <th scope="col">Photo</th>
                                          <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                
                                    <tbody>
                                      @php
                                      $serialNumber = 1;
                                      @endphp
                                      @foreach($data as $blog)
                                      <tr>
                                          <td>{{ $serialNumber++ }}</td>
                                          <td>{{ $blog->title }}</td>
                                          <td>{!! \Illuminate\Support\Str::limit($blog->description, 100, '...') !!}</td>
                                          <td>{{ $blog->category->name }}</td>
                                          @if($blog->photo == null)
                                          <td>
                                            <img src="https://placehold.co/600x400" alt="Profile" style="max-width: 60px; max-height: 60px;">
                                          </td>
                                          @else
                                          <td>
                                            <img src="{{ asset('images/'.$blog->photo) }}" alt="Profile" style="max-width: 60px; max-height: 60px;">
                                          </td>
                                          @endif
                                         
                                          <td>
                                            <a href="{{url('blog/edit',$blog->id)}}" class="btn btn-primary ">Edit</a>
                                            <a href="{{url('blog/delete',$blog->id)}}" class="btn btn-danger">Delete</a>
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

