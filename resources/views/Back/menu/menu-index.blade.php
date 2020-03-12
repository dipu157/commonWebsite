@extends('Back.layout.master')
@section('body-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Menu Form
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
              <h3 class="box-title">Add Menu</h3>
              <h3 class="text-success text-center">{{ Session::get('msg') }}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="{{ route('add-menu') }}">
              @csrf
              <div class="box-body">
                <div class="form-group">

                  <label for="exampleInputEmail1">Menu Name</label>
                  <input type="text" class="form-control" id="add-menu" name="menu_name" placeholder="Enter menu Name">

                  <div class="form-group">
                    <label>Menu Description</label>
                    <textarea name="menu_description" class="form-control"> </textarea>
                  </div>

                  <div class="form-group">
                    <input type="radio" name="menu_type" checked value="1" /> Main Menu
                    <input type="radio" name="menu_type" value="0" /> Sub Menu
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
          <!-- /.box -->

        </div>
      </div>
    </section>

  </div>

    @endsection