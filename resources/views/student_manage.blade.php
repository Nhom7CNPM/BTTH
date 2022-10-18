@extends('layout.app')

@section('title','Home Page')

@section('main-content')
<div class="container">
  <h1 class="text-center">List of Product</h1>
   @if (count($student) <= 0)
    no record
    @else
    <table class="table mt-3  text-left">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col" class="pr-5">full Name</th>
          <th scope="col">Birthday</th>
          <th scope="col">Address</th>
        </tr>
      </thead>
      <tbody>
        @forelse($student as $student)
        <tr>
          <td>{!! $student->id !!}</td>
          <td class="pr-5 text-right">{!! $student->fullname !!}</td>
          <td>{!! $student->birthday !!}</td>
          <td>{!! $student->address!!}</td>
          <td><a href="products/{!! $student->id !!}/edit"
            class="btn btn-outline-primary">Edit</a>
            <button type="button" class="btn btn-outline-danger ml-1"
              onClick='showModel({!! $student->id !!})'>Delete</button></td>
        </tr>
        @empty
        <tr>
          <td colspan="3">No student found</td>
        </tr>
        @endforelse
      </tbody>
    </table>
    @endif
    <div class="row">
      <button></button>
    </div>
</div>
   

@endsection