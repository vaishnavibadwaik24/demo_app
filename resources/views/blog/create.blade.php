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
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <form action="{{ url('blog/store') }}" method="POST" class="form-group bg-white" enctype="multipart/form-data">
    @csrf

    <div class="container px-5 mt-4 py-15 pb-4">
      <div class="col">
        <div class="text-danger text-center pb-4">
          <h2>Add Blog</h2>
        </div>
        <div class="col-md-12 mb-3">
          <label for="title" class="form-label bigger-label">Title:</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="{{ old('title') }}">
        </div>

          <label for="editor" class="form-label bigger-label">Description:</label>
        <div id="editorWrapper" class="col-md-12 mb-3">
          <textarea class="form-control" id="editor" name="description">{{ old('description') }}</textarea>
        </div>

        <div class="col-md-12 mb-3">
          <label for="category_id" class="form-label bigger-label">Category:</label>
          <select class="form-select" id="category_id" name="category_id">
            <option value="">Select Category</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-12 mb-3">
          <label for="photo" class="form-label bigger-label">Photo:</label>
          <input class="form-control" type="file" id="photo" name="photo" value="{{ old('photo') }}">
        </div>
        <div class="col-12 mb-3 text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
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
