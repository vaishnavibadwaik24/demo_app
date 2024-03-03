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
    <h1 class="pb-4 text-center">Category</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Actions</th>

          </tr>
        </thead>
        <tbody>
          @foreach($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>
                      <a href="{{ url('category/edit',$category->id) }}" class="btn btn-primary">Edit<a>
                      {{-- <a href="{{ url('category.delete',$category->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</a> --}}
                      <a href="{{ url('category/delete',$category->id) }}" class="btn btn-danger">Delete</a>  
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>   
  </div>  
</body>
</html>