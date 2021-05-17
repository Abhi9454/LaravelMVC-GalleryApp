<div class="modal fade" id="imageUploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ route('images.store') }}" enctype='multipart/form-data'> 
            {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputName">Enter Name<sup><i class="fa fa-asterisk text-danger"
                                                    style="font-size: 0.5rem"></i></sup></label>
                        <input class="form-control" name="name" ng-model="name" type="text" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Upload Image<sup><i class="fa fa-asterisk text-danger"
                                                    style="font-size: 0.5rem"></i></sup></label>
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input"  id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Image</label>
                        </div>
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
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
$("#imageUploadButton").click(function(){
    $("#imageUploadModal").modal("show");
});
</script>