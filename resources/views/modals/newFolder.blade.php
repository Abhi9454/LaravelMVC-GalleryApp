<div class="modal fade" id="newFolderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Folder</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ route('folders.store') }}"> 
            {{ csrf_field() }}
                <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Name</label>
                    <input class="form-control" name="name" ng-model="name" type="text" required>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            <form>
            </div>
        </div>
</div>
<script>
    $("#folderButton").click(function(){
        $("#newFolderModal").modal("show");
    });
</script>