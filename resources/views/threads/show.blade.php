@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $thread->title }}</div>

                <div class="card-body">
                    {{ $thread->body }}
                </div>
            </div>
        </div>
    </div>

    

    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($thread->replies as $item)
                <div class="card">
                    <div class="card-header">
                        <a href="#">{{ $item->owner->name }}</a>
                        said {{ $item->created_at->diffForHumans() }}...
                    </div>

                    <div class="card-body">
                        {{ $item->body }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
