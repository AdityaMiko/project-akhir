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
                                <li class="breadcrumb-item active">Data Guru</li>
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
                        <h3>Tambah Data Guru</h3>

                    </div>
                    <div class="card-body">
                       <form action="{{route('simpan-guru')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" id="id" name="id" class="form-control" placeholder="id">
                            </div>
                            <div class="form-group">
                                <input type="text" id="user_id" name="user_id" class="form-control" placeholder="user_id">
                            </div>
                            <div class="form-group">
                                <input type="text" id="nip" name="nip" class="form-control" placeholder="nip">
                            </div>
                            <div class="form-group">
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="nama">
                            </div>
                            <div class="form-group">
                                <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" placeholder="tempat_lahir">
                            </div>
                            <div class="form-group">
                                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="tgl_lahir">
                            </div>
                            <div class="form-group" >
                                <input type="text" id="gender" name="gender" class="form-control" placeholder="gender">
                            </div>
                            <div class="form-group">
                                <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="phone_number">
                            </div>
                            <div class="form-group">
                                <input type="text" id="email" name="email" class="form-control" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="textarea" id="alamat" name="alamat" class="form-control" placeholder="alamat">
                            </div>
                            <div class="form-group">
                                <input type="text" id="pendidikan" name="pendidikan" class="form-control" placeholder="pendidikan">
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