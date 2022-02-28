@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create new post') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('posts.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input id="title" name="title" type="text" class="form-control">
                            </div>

                            <label for="content" class="form-label">Content</label>
                            <div class="mb-3">
                                <textarea name="content" id="content" cols="30" rows="10"></textarea>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="{{ route('posts') }}" class="btn btn-secondary">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
