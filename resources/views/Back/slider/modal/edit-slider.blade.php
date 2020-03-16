@if(isset($slider->id))

<div class="modal fade" id="modal-editSlider{{ $slider->id }}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Slider</h4>
              </div>

              <form method="post" action="{{ route('update-slider') }}" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                <div class="form-group">

                  <input type="hidden" name="id" value="{{ $slider->id }}">

                  <label for="exampleInputEmail1">Slider Text</label>
                  <input type="text" class="form-control" name="slider_text" value="{{ $slider->slider_text }}">

                  <div class="form-group">
                    <label>Slider Image</label>
                    <input type="file" name="slider_image" value="{{ $slider->slider_image }}" class="form-control" required />
                    <img src="{{ asset($slider->slider_image) }}" height="100px" width="100px" />
                  </div>

                  <div class="form-group">
                    <input type="radio" name="status" {{ $slider->status == 1 ? 'checked' : '' }} checked checked value="1" /> Published
                    <input type="radio" name="status" {{ $slider->status == 0 ? 'checked' : '' }} value="0" /> UnPublished
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

@endif