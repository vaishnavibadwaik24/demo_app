<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/classic/ckeditor.js"></script>
</head>
<body>

<div class="d-flex justify-content-center align-items-center">
<form action="{{url('blog/update', $data->id)}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="container px-5 mt-4 py-15 pb-4">
    <div class="col">
      <div class="text-danger text-center pb-4">
        <h2>Edit Blog</h2>
      </div>
      <div class="col-md-12 mb-3">
        <label for="title" class="form-label bigger-label">Title:</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$data->title}}" required>
      </div>
      <label for="editor" class="form-label bigger-label">Description:</label>
        <div id="editorWrapper" class="col-md-12 mb-3">
          <textarea class="form-control" id="editor" name="description">{{$data->description}}</textarea>
        </div>
      <div class="col-md-12 mb-3">
        <label for="category_id" class="form-label bigger-label">Category:</label>
        <select class="form-select" id="category_id" name="category_id" required>
          <option value="">Select Category</option>
          @foreach($categories as $category)
          <option value="{{ $category->id }}" {{ old('category_id', $data->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="col-md-12 mb-3">
        <label for="photo" class="form-label bigger-label">Current Photo:</label>
        <img src="{{ asset('images/'.$data->photo) }}" alt="Profile" style="max-width: 100px; max-height: 100px;">
      </div>
      <div class="col-md-12 mb-3">
        <label for="photo" class="form-label bigger-label">New Photo:</label>
        <input class="form-control" type="file" id="photo" name="photo">
      </div>
      <div class="col-12 mb-3 text-center">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ url('blog') }}" class="btn btn-primary">Back</a>
      </div>
    </div>
    </div>
</form>
</div>
<script>
  ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
      console.error( error );
    } );
</script>

</body>
</html>