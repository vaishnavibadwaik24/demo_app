<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Category</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{url('category/store')}}" method="POST" class="bg-white">
    @csrf
    <div class="container px-5 py-24 mx-auto mt-5 pb-5">
      <div class="text-danger text-center pb-4">
        <h2>Add  Category</h2>
      </div>
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">
                <div class="mb-4">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter Category" required>
                </div>
                <div class="col-12 mb-3 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ url('category') }}" class="btn btn-primary">Back</a>
                  </div>
                
            </div>
        </div>
    </div>
</form>
</body>
</html>
