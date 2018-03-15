@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-md-4">
        <div class="col-md-8">
            <h1 class="page-header">Articles</h1>
        </div>
    </div>

    @if (session()->has('success'))
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($articles as $article)
            <div class="card mb-md-3">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h4>{{ $article->title }}</h4>
                        <small> <i class="fa fa-clock-o"></i> {{ $article->created_at }}</small>
                    </div>
                    <small><i class="fa fa-user-o"></i> {{ $article->owner->name }}</small>

                </div>

                <div class="card-body">
                    {{ $article->content }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="row justify-content-center mt-md-3">
        {{ $articles->links() }}
    </div>
</div>
@endsection
