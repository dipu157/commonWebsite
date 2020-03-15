@extends('Back.layout.master')
@section('body-content')

<style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    <button type="button" id="btn_config" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
      <i class="fa fa-plus"></i>New Configuration Setup
      </button>

      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

<section class="content">
      <div class="row">
        <div class="col-md-12">

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Previous Configuration</h3>
              <h3 class="text-success text-center">{{ Session::get('msg') }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl</th>
                  <th>Title</th>
                  <th>Nav Image</th>
                  <th>Logo Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @php( $i = 1)
                  @foreach($setings as $seting)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{ $seting->title }}</td>
                  <td><img src="{{ asset($seting->nav_image) }}" height="100px" width="100px" /> </td>
                  <td><img src="{{ asset($seting->logo_image) }}" height="80px" width="80px" />  </td>
                  <td><a href="{{ route('edit-configuration', ['id' => $seting->id]) }}" data-target="#modal-edit{{ $seting->id }}" data-toggle="modal" class="btn btn-success">Edit</a>
                  <a href="{{ route('delete-configuration', ['id' => $seting->id]) }}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
    </section>
  </div>

  @include('Back.configuration.modal.add-configuration')
  @include('Back.configuration.modal.edit-configuration')

  <script>
    $(document).ready(function() {
     #btn_config.prop('disabled', true);
     #btn_config.keyup(function() {
        if($setings == null) {
           #btn_config.prop('disabled', false);
        }
     });
 });
  </script>



@endsection