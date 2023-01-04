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
                            <h1 class="m-0">Starter Page</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Jadwal</li>
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
                        <h3>Tambah Data Jadwal</h3>

                    </div>
                    <div class="card-body">
                        <form action="{{ url("/Jadwal/{$Jadwal->id}") }}" method="post">
                            @method('PATCH')
                                {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" id="id" name="id" class="form-control" placeholder="id" value="{{$Jadwal->id}}">
                            </div>
                            <div class="form-group">
                                <input type="text" id="kelas_id" name="kelas_id" class="form-control" placeholder="kelas_id" value="{{$Jadwal->kelas_id}}">
                            </div>
                            <div class="form-group">
                                <input type="text" id="mapel_id" name="mapel_id" class="form-control" placeholder="mapel_id" value="{{$Jadwal->mapel_id}}">
                            </div>
                            <div class="form-group">
                                <input type="text" id="guru_id" name="guru_id" class="form-control" placeholder="guru_id" value="{{$Jadwal->guru_id}}">
                            </div>
                            <div class="form-group">
                                <input type="text" id="hari" name="hari" class="form-control" placeholder="hari" value="{{$Jadwal->hari}}">
                            </div>
                            <div class="form-group">
                                <input type="textarea" id="jam_pelajaran" name="jam_pelajaran" class="form-control" placeholder="jam_pelajaran" value="{{$Jadwal->jam_pelajaran}}">
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Simpan Data</button>
                            </div>
                            
                       </form>
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


</html>