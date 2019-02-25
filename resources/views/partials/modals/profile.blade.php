<!-- Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Profile Image Upload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="{{ URL::to('/profile') }}"  class="table mb-0" enctype="multipart/form-data">
          @csrf
          <div class="table-row  mb-0">
            <div class="form-group profile-upload table-cell  mb-0">
              <div id="imgPlaceholder" class="profile-placeholder"></div>
            </div>
            <div class="profile-upload table-cell bottom mb-0">
              <div class="modal-body">
                @include ('partials.errors')
                <div class="form-group mb-0">
                  <label for=image>Select image to upload:</label>
                  <input type="file" name="img" id="imgUpload" class="form-control-file" onchange="custom.readURL(this);" accept=".jpg, .jpeg, .png, .gif" >
                </div>
              </div>
              <div class="modal-footer">
                <div class="form-group mb-0">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" name="update" type="button" class="btn btn-primary">
                </div>
              </div>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>