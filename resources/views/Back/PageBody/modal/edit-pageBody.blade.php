<div class="modal fade" id="modal-editpage{{ $pagebody->id }}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit PageBody</h4>
              </div>

              <form method="post" action="{{ route('update-pagebody') }}" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                <div class="form-group">

                  <label>Menu Name</label>
                  
                  <select name="menu_id" class="form-control" required>
                    @foreach($menus as $menu)
                    <option value="{{ $menu->id }}">{{ $menu->menu_name }}</option>
                    @endforeach
                  </select> <br>

                  <div class="form-group">
                    <label>Head Line</label>
                    <input type="text" name="headline" class="form-control" value="{{ $pagebody->headline }}" />
                  </div>

                  <div class="form-group">
                    <label>Detail Description</label>
                    <textarea name="detail_description" class="form-control"> {{ $pagebody->detail_description }}"</textarea>
                  </div>

                  <div class="form-group">
                    <label>Related Image</label>
                    <input type="file" name="related_image" class="form-control" />
                    <img src="{{ asset($pagebody->related_image) }}" height="80px" width="100px" />
                  </div>

                  <div class="form-group">
                    <input type="radio" name="status" {{ $pagebody->status == 1 ? 'checked' : '' }} checked value="1" /> Published
                    <input type="radio" name="status" {{ $pagebody->status == 0 ? 'checked' : '' }} value="0" /> UnPublished
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