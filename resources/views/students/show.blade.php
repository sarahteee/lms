@extends('layouts.admin');
@section('content')
<div class="row">
  <div class="col">
    <h1 class="display-2">
      Student Profile
    </h1>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <div class="card p-3">
      <div class="card-title">
        <h2>{{ $student -> fname }} | {{ $student -> lname }}</h2>
        <p>
          {{ $student -> email }}
        </p>
        <a href="{{ route('students.edit', $student -> id ) }}" class="card-link">Edit</a>
        <a href="{{ route('students.trash', $student -> id )}}" class="card-link">Delete</a>
      </div>
    </div>
  </div>
</div>
@endsection