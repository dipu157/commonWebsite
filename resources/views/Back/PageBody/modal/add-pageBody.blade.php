<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">New PageBody Setup</h4>
              </div>

              <form method="post" action="{{ route('save-pagebody') }}" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                <div class="form-group">

                  <label for="exampleInputEmail1">Menu Name</label>
                  
                  <select name="menu_id" class="form-control" required>
                    @foreach($menus as $menu)
                    <option value="{{ $menu->id }}">{{ $menu->menu_name }}</option>
                    @endforeach
                  </select> <br>

                  <div class="form-group">
                    <label>Head Line</label>
                    <input type="text" name="headline" class="form-control" />
                  </div>

                  <div class="form-group">
                    <label>Detail Description</label>
                    <textarea name="detail_description" class="form-control"> </textarea>
                  </div>

                  <div class="form-group">
                    <label>Related Image</label>
                    <input type="file" name="related_image" class="form-control" />
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