@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="#">{{ $thread->creator->name }} said:</a>
                    {{ $thread->title }}
                </div>

                <div class="card-body">
                    {{ $thread->body }}
                </div>
            </div>
        </div>
    </div>

    

    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($thread->replies as $item)
                @include('threads.reply')
            @endforeach
        </div>
    </div>

    @if(Auth::check())
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ $thread->path() . '/replies' }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" id="body" class="form-control" 
                        placeholder="Have something to say?"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Post</button>
                </form>
            </div>
        </div>
    @else
        <p class="text-center">
            <a href="{{ route('login') }}">Please sign in to participate</a>
        </p>
    @endif
</div>
@endsection
