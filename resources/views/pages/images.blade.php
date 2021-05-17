<!DOCTYPE html>
@include('layouts.header')
<body>
@include('partials.nav')
<div class="container col-sm-12 mt-4">
<div class="col-md-12">
    <div class="card">
        <!-- /.card-header -->
        <div class="card-header">
            My Folders
            <div class="float-right">
            <a href="#newFolderModal" class="btn btn-info" id="imageUploadButton" data-toggle="modal">Upload</a>
            </div>
            </div>
        <div class="card-body">
            <table id="image_table" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Action</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @if($images->count())
                    @foreach($images as $image)
                        <tr>
                            <td>{{$image->name}}</td>
                            <td><img src="{{$image->path}}"  height="200" width="250"/></td>
                            <td> 
                            <button class="btn btn-success" id="imgButton" data-id="{{$image->path}}" data-toggle="modal" data-target="#imgModal">View</button>
                            <td> 
                            <form action="{{ route('images.destroy', $image->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
</div>
@include('modals.imageUpload')
@include('modals.imageView')
@include('layouts.footer')
</body>