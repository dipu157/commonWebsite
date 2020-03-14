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
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
      <i class="fa fa-plus"></i>New Slider Setup
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
              <h3 class="box-title">Previous Slider</h3>
              <h3 class="text-success text-center">{{ Session::get('msg') }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl</th>
                  <th>Slider Text</th>
                  <th>Slider Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @php( $i = 1)
                  @foreach($sliders as $slider)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{ $slider->slider_text }}</td>
                  <td><img src="{{ asset($slider->slider_image) }}" height="300px" width="500px" />  </td>
                  <td>@if( $slider->status == 1 )
                <a href="{{ route('unpublished-slider', ['id' => $slider->id]) }}" class="btn btn-primary">Published</a>
                @else
                <a href="{{ route('published-slider' , ['id' => $slider->id]) }}" class="btn btn-warning">Unpublished</a>
                @endif
                    <a href="{{ route('edit-slider', ['id' => $slider->id]) }}" data-target="#modal-editSlider{{ $slider->id }}" data-toggle="modal" class="btn btn-success">Edit</a>
                  <a href="{{ route('delete-slider', ['id' => $slider->id]) }}" class="btn btn-danger">Delete</a></td>
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

  @include('Back.slider.modal.add-slider')
  @include('Back.slider.modal.edit-slider')



@endsection