@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Forum threads</div>

                <div class="card-body">
                    @foreach ($threads as $item)
                        <article>
                            <h4>
                                <a href="{{ $item->path() }}">{{ $item->title }}</a>
                            </h4>
                            <div class="body">{{ $item->body }}</div>
                        </article>

                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
