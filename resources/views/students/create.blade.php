@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col">
    <h1 class="display2">
      Create a Student Profile
    </h1>
  </div>
</div>
<div class="row">
  <div class="col">
    <form action="{{ route('students.store') }}" method="POST">
      @if ($errors -> any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors -> all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      {{ csrf_field() }}
      <div class="form-group">
        <label for="fname">First Name</label>
        <input type="text" class="form-control" name="fname" id="fname" aria-describedby="fname" placeholder="First Name">
      </div>
      <div class="form-group">
        <label for="lname">Password</label>
        <input type="text" class="form-control" name="lname" id="lname" aria-describedby="fname" placeholder="Last Name">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="course">Select Course:</label>
        <select name="course" id="course">
          @foreach ($courses as $course)
          <option value="{{ $course -> id }}">{{ $course -> courseName }}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection