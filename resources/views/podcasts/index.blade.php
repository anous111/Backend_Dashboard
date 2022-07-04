@extends('layouts.master')

@section('title')
  Podcast
@endsection

@section('css')
  
@endsection

@section('title1')
  Home
@endsection

@section('title2')
   Podcast
@endsection

@section('content')
<div class="container">
 <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Podcasts </h2>
            </div>
            <div class="pull-right mb-4">
                <a class="btn btn-success" href="{{ route('podcast.create') }}"> Create New Podcast</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach ($podcasts as $podcast)
        <tr>
            <td>{{ $podcast->title }}</td>
            <td>{{ $podcast->description }}</td>
            <td>
                <form action="{{ route('podcast.destroy',$podcast->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('podcast.show',$podcast->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('podcast.edit',$podcast->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>    
@endsection

@section('script')
  
@endsection