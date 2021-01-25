@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <span class="card-title">Blog toevoegen</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('blog.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="title">Titel</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="title">Inhoud</label>
                                <textarea name="body" id="title" class="form-control" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Opslaan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection