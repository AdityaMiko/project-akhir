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
                                <li class="breadcrumb-item active">Data Mapel</li>
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
                        <h3>Tambah Data Mapel</h3>

                    </div>
                    <div class="card-body">
                       <form action="{{route('simpan-mapel')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" id="id" name="id" class="form-control" placeholder="id">
                            </div>
                            <div class="form-group">
                                <input type="text" id="kode_mapel" name="kode_mapel" class="form-control" placeholder="kode_mapel">
                            </div>
                            <div class="form-group">
                                <input type="text" id="nama_mapel" name="nama_mapel" class="form-control" placeholder="nama_mapel">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Simpan Mapel</button>
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