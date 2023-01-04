<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Template.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Kelas</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Kelas</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <div class="card-tools">
                            <a href="{{route('create-kelas')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                        </div>

                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>id</th>
                                <th>kode_kelas</th>
                                <th>nama_kelas</th>
                                <th>Aksi</th>
    
                            </tr>
                            @foreach ($dtKelas as $item )
                            <tr>
                                <td>{{ $item->id}}</td>
                                <td>{{ $item->kode_kelas}}</td>
                                <td>{{ $item->nama_kelas}}</td>
                                <td>
                                    <a href="{{ url("Kelas/{$item->id}/edit") }}"><i class="fas fa-edit"></i></a>
                                    <a href="{{ url("Kelas/{$item->id}") }}"><i class="fas fa-trash-alt" style="color:red"></i></a>
                                    @method('DELETE')
                                    @csrf
                                </td>
                               
                            </tr>
                            @endforeach
                            
                        </table>

                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Main Footer -->
        <footer class="main-footer">
            @include('Template.footer')
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('Template.script')

    @include('sweetalert::alert')

</html>