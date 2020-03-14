<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">New Slider Upload</h4>
              </div>

              <form method="post" action="{{ route('save-slider') }}" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                <div class="form-group">

                  <label for="exampleInputEmail1">Slider Text</label>
                  <input type="text" class="form-control" name="slider_text" >

                  <div class="form-group">
                    <label>Slider Image</label>
                    <input type="file" name="slider_image" class="form-control" />
                  </div>

                  <div class="form-group">
                    <input type="radio" name="status" checked value="1" /> Published
                    <input type="radio" name="status" value="0" /> UnPublished
                  </div>

                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>

            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>