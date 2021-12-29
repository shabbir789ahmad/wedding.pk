@extends('Dashboard.admin_dashboard')
@section('content')

  <form action="{{url('admin/slider')}}" method="POST" enctype="multipart/form-data">
    @csrf
  	<label>Header</label>
  	<input type="text" name="heading1" placeholder="heading of websites">
    <input type="text" name="Heading2" placeholder="heading of websites">
  <label></label>
  	<input type="file" name="image" placeholder="slider image">
    <button class="btn"> 
      upload
    </button>
  </form>


@endsection