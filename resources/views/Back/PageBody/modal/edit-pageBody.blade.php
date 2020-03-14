<div class="modal fade" id="modal-edit">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit PageBody</h4>
              </div>

              <form method="post" action="" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                <div class="form-group">

                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" name="title" value="">

                  <div class="form-group">
                    <label>Logo Image</label>
                    <input type="file" name="logo_image" class="form-control" />
                    <img src="" height="100px" width="100px" />
                  </div>

                  <div class="form-group">
                    <label>Nav Image</label>
                    <input type="file" name="nav_image" class="form-control" />
                    <img src="" height="100px" width="100px" />
                  </div>

                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" id="btn-update">Update</button>
              </div>
            </form>

            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>