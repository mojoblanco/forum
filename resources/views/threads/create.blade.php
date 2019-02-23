@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a new thread</div>

                <div class="card-body">
                    <form action="/threads" method="POST">
                        @csrf

                        <div class="form-group">
                          <label for="">Title</label>
                          <input type="text" name="title" id="title" class="form-control">
                        </div>

                        <div class="form-group">
                          <label for="body">Body</label>
                          <textarea class="form-control" name="body" id="body" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Post thread</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
