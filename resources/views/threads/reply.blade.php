<div class="card">
    <div class="card-header">
        <a href="#">{{ $item->owner->name }}</a>
        said {{ $item->created_at->diffForHumans() }}...
    </div>

    <div class="card-body">
        {{ $item->body }}
    </div>
</div>