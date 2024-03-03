<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <div class="row mt-4">
      <div class="col-md-6">
        <a href="{{url('blog/create')}}" class="btn btn-outline-info">Add Blog</a>
      </div>
      <div class="col-md-4">
        <h1 class="pb-4 text-danger">Blog</h1>
    </div>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            <th scope="col">Photo</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $blog)
                <tr>
                    <th scope="row">{{ $blog->id }}</th>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->description }}</td>
                    <td>{{ $blog->category->name }}</td>
                    <td>
                      <img src="{{ asset('images/'.$blog->photo) }}" alt="Profile" style="max-width: 60px; max-height: 60px;">
                    </td>
                    <td>{{ $blog->email}}</td>
                    <td>
                      <a href="{{url('blog/edit',$blog->id)}}" class="btn btn-primary">Edit</a>
                      <a href="{{url('blog/delete',$blog->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>   
  </div>  
</body>
</html>