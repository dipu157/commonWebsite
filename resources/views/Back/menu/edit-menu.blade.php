@extends('Back.layout.master')
@section('body-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Menu Form
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Menu</a></li>
      </ol>
    </section>

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Menu</h3>
              <h3 class="text-success text-center">{{ Session::get('msg') }}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="{{ route('update-menu') }}">
              @csrf
              <div class="box-body">
                <div class="form-group">

                  <input type="hidden" name="id" value="{{ $menu->id }}">

                  <label for="exampleInputEmail1">Menu Name</label>
                  <input type="text" class="form-control" id="add-menu" name="menu_name" value="{{ $menu->menu_name }}">

                  <div class="form-group">
                    <label>Menu Description</label>
                    <textarea name="menu_description" class="form-control"> {{ $menu->menu_description }}</textarea>
                  </div>

                  <div class="form-group">
                    <input type="radio" name="menu_type" {{ $menu->menu_type == 1 ? 'checked' : '' }} checked value="1" /> Main Menu
                    <input type="radio" name="menu_type" {{ $menu->menu_type == 0 ? 'checked' : '' }} value="0" /> Sub Menu
                  </div>


                  <div class="form-group">
                    <input type="radio" name="status" {{ $menu->status == 1 ? 'checked' : '' }} checked checked value="1" /> Published
                    <input type="radio" name="status" {{ $menu->status == 0 ? 'checked' : '' }} value="0" /> UnPublished
                  </div>

                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
      </div>
    </section>

  </div>

    @endsection