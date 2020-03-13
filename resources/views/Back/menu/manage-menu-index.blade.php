@extends('Back.layout.master')
@section('body-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Menu List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

<section class="content">
      <div class="row">
        <div class="col-md-10">

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Menu List</h3>
              <h3 class="text-success text-center">{{ Session::get('message') }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Menu Type</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @php( $i = 1)
                  @foreach($menus as $menu)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{ $menu->menu_name }}</td>
                  <td>{{ $menu->menu_description }}</td>
                  <td> {{ $menu->menu_type == 1 ? 'Main Menu' : 'Sub Menu' }}</td>
                  <td>@if( $menu->status == 1 )
                <a href="{{ route('unpublished-menu', ['id' => $menu->id]) }}" class="btn btn-primary">Published</a>
                @else
                <a href="{{ route('published-menu', ['id' => $menu->id]) }}" class="btn btn-warning">Unpublished</a>
                @endif
                <a href="{{ route('edit-menu-index', ['id' => $menu->id]) }}" class="btn btn-success">Edit</a>
                <a href="{{ route('delete-menu', ['id' => $menu->id]) }}" class="btn btn-danger">Delete</a></td>
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



@endsection