<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">New PageBody Setup</h4>
              </div>

              <form method="post" action="" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                <div class="form-group">

                  <label for="exampleInputEmail1">Menu Name</label>
                  @foreach($menus as $menu)
                  <select>
                    <option>{{ $menu->menu_name }}</option>
                  </select>
                  @endforeach

                  <div class="form-group">
                    <label>Head Line</label>
                    <input type="text" name="headline" class="form-control" />
                  </div>

                  <div class="form-group">
                    <label>Related Image</label>
                    <input type="text" name="detail_description" class="form-control" />
                  </div>

                  <div class="form-group">
                    <label>Status</label>
                    <input type="text" name="detail_description" class="form-control" />
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