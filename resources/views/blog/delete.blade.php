@extends('layouts.master')
@section('content')

<form action="{{url('blog/delete', $data->$id)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Delete</button>
</form>  
@endsection  
