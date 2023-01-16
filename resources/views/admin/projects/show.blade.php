@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">{{ $project->title }}</h1>
        <div class="d-flex justify-content-between mt-3">
            <h5>{{ $project->created_at }}</h5>
            <p>{{ $project->slug }}</p>
        </div>

        <div class="text-center">
            @if ($project->cover_image)
                <img src="{{ asset('storage/' . $project->cover_image) }}" alt="{{ 'Cover image di ' . $project->title }}">
            @else
                <div class="w-50 bg-secondary py-4 text-center d-inline-block">
                    No image yet
                </div>
            @endif
        </div>


        <p class="mt-3">{{ $project->content }}</p>
    </div>
@endsection
