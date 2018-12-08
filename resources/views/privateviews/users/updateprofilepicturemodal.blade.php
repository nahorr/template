

<!-- Modal -->
  <div class="modal fade" role="dialog" id="updateProfilePictureModal-{{Auth::user()->id}}">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title pull-left">Update Profile Picture</h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">

          <form enctype="multipart/form-data" action="{{ url('/privateviews/users/updateprofilepicture') }}" method="POST">

            @csrf()

            <div class="form-group">
              <label for="avatar" class="pull-left">Update Profile Image</label>
              <input type="file" name="avatar" class="form-control-file" id="avatar" aria-describedby="fileHelp">
              <small id="fileHelp" class="form-text text-muted pull-left">You can change your profile picture here.</small>
            </div>
            
            <div class="form-group">
              <input type="submit" class="btn btn-primary pull-right">
            </div>
            
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
