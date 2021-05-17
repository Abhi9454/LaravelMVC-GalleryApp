<div class="modal fade" id="imgModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Image</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <img src="" id="imagepreview" style="width: 450px; height: 400px;">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        <form>
        </div>
    </div>
</div>
<script>
$("#imgButton").click(function(){
    var imagePath = $(this).data('id');
    console.log(imagePath);
    $('.modal-body #imagepreview').attr('src',imagePath);
    $("#imgModal").modal("show");
});
$('#imgModal').on('hidden.bs.modal', function () {
    $('#imagepreview').attr('src',"");
});
</script>