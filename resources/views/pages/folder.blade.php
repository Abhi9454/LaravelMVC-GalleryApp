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
              <a href="#newFolderModal" id="folderButton" class="btn btn-info" data-toggle="modal">New Folder</a>
            </div>
            </div>
            <div class="card-body">
                <table id="table" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Folder Name</th>
                        <th>Browse</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($folders->count())
                        @foreach($folders as $folder)
                            <tr>
                                <td>{{$folder->name}}</td>
                                <td> 
                                <form action="{{ route('folders.show', $folder->id)}}" method="get">
                                    <button class="btn btn-success" type="submit">View</button>
                                </form>
                                <td> 
                                <form action="{{ route('folders.destroy', $folder->id)}}" method="post">
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
    @include('modals.newFolder')
    @include('layouts.footer')

</body>