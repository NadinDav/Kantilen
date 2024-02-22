@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2">{{ $image->title }}</h1>
                        <a href="{{route('admin.image.edit', $image->id)}}" class="text-success"><i class="fas fa-pencil-alt mt-2"></i></a>
                        <form action="{{route('admin.image.destroy', $image->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="fas fa-trash text-danger mt-2 mr-2" role="button"></i>
                            </button>
                        </form>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-6">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{$image->id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Название</td>
                                            <td>{{$image->title}}</td>
                                        </tr>
                                        <tr>
                                            <td>Фотографии</td>
                                            <td><img src="{{ asset('storage/' . $image->image)}}" alt="image" class="w-25">
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                    </div>
                            <!-- /.card -->
                    </div>
                </div>
                <!-- ./col -->

            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
