@extends('layout')
<div>
<body>
        <div class="container mt-5">
        <a style="margin-left: 45%; margin-bottom: 10px margin-top : 5px;" href="/pockets" class="btn btn-info" role="button">Home</a>
            <h3 style="text-align:center;">Pocket List</h3>
            <a style="margin-left: 45%; margin-bottom: 10px;" href="/pocket/new" class="btn btn-info" role="button">Add Pocket</a>
            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-success">
                        <th scope="col">Pocket ID</th>
                        <th scope="col">Pocket Name</th>
                        <th scope="col">Pocket User Title</th>
                        <th scope="col">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $pocket)
                       
                        <tr>
                            <th scope="row">{{ $pocket->id }}</th>
                            <th scope="row">{{ $pocket->title }}</th>
            
                            <td>{{ $pocket->user->name }}</td>
                            <td>
                                <a><a href="/create-new-content/{{$pocket->id}}" class="btn btn-success" role="button">Add Content</a></a>
                                
                            </td>
                        </tr>
                      
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</div>