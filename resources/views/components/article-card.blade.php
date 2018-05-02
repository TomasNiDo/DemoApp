<div class="card mb-md-3">
    <div class="card-header">
        <div>
            <h4><a href="{{ $link }}">{{ $title }}</a></h4>
        </div>
        <small class="d-flex justify-content-between">
            <span><i class="fa fa-user-o"></i> {{ $author }}</span>
            <span><i class="fa fa-clock-o"></i> {{ $published_time }}</span>
        </small>
    </div>
    <div class="card-body">
        {{ $content }}
    </div>
</div>
