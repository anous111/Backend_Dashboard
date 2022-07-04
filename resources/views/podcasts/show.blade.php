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
                <h2> Show Podcast</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('podcast.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $podcast->title }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $podcast->description }}
            </div>
        </div>

    </div>
</div>
@endsection

@section('script')

@endsection