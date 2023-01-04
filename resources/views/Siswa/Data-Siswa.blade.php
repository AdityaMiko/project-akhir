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
                            <h1 class="m-0">Data Siswa</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Siswa</li>
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
                            <a href="{{route('create-siswa')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                        </div>

                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>id</th>
                                <th>nis</th>
                                <th>nama</th>
                                <th>gender</th>
                                <th>tempat_lahir</th>
                                <th>tgl_lahir</th>
                                <th>email</th>
                                <th>nama_ortu</th>
                                <th>alamat</th>
                                <th>phone_number</th>
                                <th>kelas_id</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach ($dtSiswa as $item )
                            <tr>
                                <td>{{ $item->id}}</td>
                                <td>{{ $item->nis}}</td>
                                <td>{{ $item->nama}}</td>
                                <td>{{ $item->gender}}</td>
                                <td>{{ $item->tempat_lahir}}</td>
                                <td>{{date('d-m-Y',strtotime ($item->tgl_lahir))}}</td>
                                <td>{{ $item->email}}</td>
                                <td>{{ $item->nama_ortu}}</td>
                                <td>{{ $item->alamat}}</td>
                                <td>{{ $item->phone_number}}</td>
                                <td>{{ $item->kelas_id}}</td>
                                <td>
                                <a href="{{ url("Siswa/{$item->id}/edit") }}"><i class="fas fa-edit"></i></a>
                                <a href="{{ url("Siswa/{$item->id}") }}"><i class="fas fa-trash-alt" style="color:red"></i></a>
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