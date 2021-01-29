@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <span class="card-title">Alle blogs</span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Post</th>
                                        <th>Gebruiker</th>
                                        <th>Inhoud</th>
                                        <th>Edit<th>
                                        <th>Delete<th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($blogs as $blog)
                                        <tr>{{ $blog->id }}</tr>
                                        <tr>{{ $blog->title }}</tr>
                                        <tr>{{ $blog->user_id }}</tr>
                                        <tr>
                                        <tr><a href="/blog/{{$blog->id}}/update" class="btn btn-dark">Edit</a></tr>
                                            <form action="{{ route('blog.delete', $blog->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        <tr>
                                        <br>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span class="card-title">Jouw blogs</span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Post</th>
                                        <th>Gebruiker</th>
                                        <th>Inhoud</th>
                                        <th>Edit<th>
                                        <th>Delete<th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                <!-- Niet werkend gekregen, maar dit is hoever ik ben gekomen. -->
                                <?php
                                // $userid = Auth::user()->id;
                                    
                                //     @foreach($blogs as $blog) 
                                //         if ($userid == $blog()->user_id) {
                                //             <tr>{{ $blog->id }}</tr>
                                //             <tr>{{ $blog->title }}</tr>
                                //             <tr>{{ $blog->user_id }}</tr>
                                //             <tr>
                                //                 <form action="{{ route('blog.delete', $blog->id) }}" method="post">
                                //                     @csrf
                                //                     @method('DELETE')
                                //                     <button type="submit" class="btn btn-danger">Delete</button>
                                //                 </form>
                                //             <tr>
                                        
                                //         }
                                //         else {
                                //             echo "Geen blogs gevonden.";    
                                //         }
                                //     <br>
                                //     @endforeach
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection
