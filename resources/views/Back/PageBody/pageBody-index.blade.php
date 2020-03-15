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
      <section class="content-header">
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
      <i class="fa fa-plus"></i>Page Body Setup
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
              <h3 class="box-title">Previous Page Setup</h3>
              <h3 class="text-success text-center">{{ Session::get('message') }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl</th>
                  <th>Menu Name</th>
                  <th>Headline</th>
                  <th>Detail Description</th>
                  <th>Related Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @php( $i = 1)
                  @foreach($pagebodies as $pagebody)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{ $pagebody->menu->menu_name }}</td>
                  <td>{{ $pagebody->headline }}</td>
                  <td>{{ $pagebody->detail_description }}</td>
                  <td><img src="{{ asset($pagebody->related_image) }}" height="80px" width="100px" /> </td>
                  <td>
                @if( $pagebody->status == 1 )
                <a href="{{ route('unpublished-pagebody', ['id' => $pagebody->id]) }}" class="btn btn-primary">Published</a>
                @else
                <a href="{{ route('published-pagebody', ['id' => $pagebody->id]) }}" class="btn btn-warning">Unpublished</a>
                @endif
                <a href="{{ route('edit-pagebody', ['id' => $pagebody->id]) }}" data-target="#modal-editpage{{ $pagebody->id }}" data-toggle="modal" class="btn btn-success">Edit</a>
                <a href="{{ route('delete-pagebody', ['id' => $pagebody->id]) }}" class="btn btn-danger">Delete</a></td>
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


  @include('Back.PageBody.modal.add-pageBody')
  @include('Back.PageBody.modal.edit-pageBody')


@endsection