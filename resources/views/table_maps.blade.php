<!DOCTYPE html>
<html>
    <head>
        <style>
            /*
    DEMO STYLE
    */

    @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
    body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
    }

    p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
    }

    a,
    a:hover,
    a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
    }

    .navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
    }

    .navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
    }

    .line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
    }

    /* ---------------------------------------------------
    SIDEBAR STYLE
    ----------------------------------------------------- */

    .wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
    }

    #sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #7386D5;
    color: #fff;
    transition: all 0.3s;
    }

    #sidebar.active {
    margin-left: -250px;
    }

    #sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
    }

    #sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
    }

    #sidebar ul p {
    color: #fff;
    padding: 10px;
    }

    #sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
    }

    #sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
    }

    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
    }

    a[data-toggle="collapse"] {
    position: relative;
    }

    .dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
    }

    ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
    }

    ul.CTAs {
    padding: 20px;
    }

    ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
    }

    a.download {
    background: #fff;
    color: #7386D5;
    }

    a.article,
    a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
    }

    /* ---------------------------------------------------
    CONTENT STYLE
    ----------------------------------------------------- */

    #content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
    }

    /* ---------------------------------------------------
    MEDIAQUERIES
    ----------------------------------------------------- */

    @media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
    }
        </style>


        <style type="text/css">
            body {
                color: #566787;
                background: #f5f5f5;
                font-family: 'Varela Round', sans-serif;
                font-size: 13px;
            }

            .table-wrapper {
                background: #fff;
                padding: 20px 25px;
                margin: 30px 0;
                border-radius: 3px;
                box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            }

            .table-title {
                padding-bottom: 15px;
                background: #435d7d;
                color: #fff;
                padding: 16px 30px;
                margin: -20px -25px 10px;
                border-radius: 3px 3px 0 0;
            }

            .table-title h2 {
                margin: 5px 0 0;
                font-size: 24px;
            }

            .table-title .btn-group {
                float: right;
            }

            .table-title .btn {
                color: #fff;
                float: right;
                font-size: 13px;
                border: none;
                min-width: 50px;
                border-radius: 2px;
                border: none;
                outline: none !important;
                margin-left: 10px;
            }

            .table-title .btn i {
                float: left;
                font-size: 21px;
                margin-right: 5px;
            }

            .table-title .btn span {
                float: left;
                margin-top: 2px;
            }

            table.table tr th,
            table.table tr td {
                border-color: #e9e9e9;
                padding: 12px 15px;
                vertical-align: middle;
            }

            table.table tr th:first-child {
                width: 60px;
            }

            table.table tr th:last-child {
                width: 100px;
            }

            table.table-striped tbody tr:nth-of-type(odd) {
                background-color: #fcfcfc;
            }

            table.table-striped.table-hover tbody tr:hover {
                background: #f5f5f5;
            }

            table.table th i {
                font-size: 13px;
                margin: 0 5px;
                cursor: pointer;
            }

            table.table td:last-child i {
                opacity: 0.9;
                font-size: 22px;
                margin: 0 5px;
            }

            table.table td a {
                font-weight: bold;
                color: #566787;
                display: inline-block;
                text-decoration: none;
                outline: none !important;
            }

            table.table td a:hover {
                color: #2196F3;
            }

            table.table td a.edit {
                color: #FFC107;
            }

            table.table td a.delete {
                color: #F44336;
            }

            table.table td i {
                font-size: 19px;
            }

            table.table .avatar {
                border-radius: 50%;
                vertical-align: middle;
                margin-right: 10px;
            }

            .pagination {
                float: right;
                margin: 0 0 5px;
            }

            .pagination li a {
                border: none;
                font-size: 13px;
                min-width: 30px;
                min-height: 30px;
                color: #999;
                margin: 0 2px;
                line-height: 30px;
                border-radius: 2px !important;
                text-align: center;
                padding: 0 6px;
            }

            .pagination li a:hover {
                color: #666;
            }

            .pagination li.active a,
            .pagination li.active a.page-link {
                background: #03A9F4;
            }

            .pagination li.active a:hover {
                background: #0397d6;
            }

            .pagination li.disabled i {
                color: #ccc;
            }

            .pagination li i {
                font-size: 16px;
                padding-top: 6px
            }

            .hint-text {
                float: left;
                margin-top: 10px;
                font-size: 13px;
            }
            /* Custom checkbox */

            .custom-checkbox {
                position: relative;
            }

            .custom-checkbox input[type="checkbox"] {
                opacity: 0;
                position: absolute;
                margin: 5px 0 0 3px;
                z-index: 9;
            }

            .custom-checkbox label:before {
                width: 18px;
                height: 18px;
            }

            .custom-checkbox label:before {
                content: '';
                margin-right: 10px;
                display: inline-block;
                vertical-align: text-top;
                background: white;
                border: 1px solid #bbb;
                border-radius: 2px;
                box-sizing: border-box;
                z-index: 2;
            }

            .custom-checkbox input[type="checkbox"]:checked + label:after {
                content: '';
                position: absolute;
                left: 6px;
                top: 3px;
                width: 6px;
                height: 11px;
                border: solid #000;
                border-width: 0 3px 3px 0;
                transform: inherit;
                z-index: 3;
                transform: rotateZ(45deg);
            }

            .custom-checkbox input[type="checkbox"]:checked + label:before {
                border-color: #03A9F4;
                background: #03A9F4;
            }

            .custom-checkbox input[type="checkbox"]:checked + label:after {
                border-color: #fff;
            }

            .custom-checkbox input[type="checkbox"]:disabled + label:before {
                color: #b8b8b8;
                cursor: auto;
                box-shadow: none;
                background: #ddd;
            }
            /* Modal styles */

            .modal .modal-dialog {
                max-width: 400px;
            }

            .modal .modal-header,
            .modal .modal-body,
            .modal .modal-footer {
                padding: 20px 30px;
            }

            .modal .modal-content {
                border-radius: 3px;
            }

            .modal .modal-footer {
                background: #ecf0f1;
                border-radius: 0 0 3px 3px;
            }

            .modal .modal-title {
                display: inline-block;
            }

            .modal .form-control {
                border-radius: 2px;
                box-shadow: none;
                border-color: #dddddd;
            }

            .modal textarea.form-control {
                resize: vertical;
            }

            .modal .btn {
                border-radius: 2px;
                min-width: 100px;
            }

            .modal form label {
                font-weight: normal;
            }
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>TUGAS PBD</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style.css">
        <style>
            /*
    DEMO STYLE
*/

@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #7386D5;
    color: #fff;
    transition: all 0.3s;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article,
a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}
        </style>
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Tugas PBD</h3>
                </div>

                <ul class="list-unstyled components">
                    <p>Welcome

                    @if (Auth::check())
                         {{ Auth::user()->name }}
                         <br />
                         Session Login AS

                         @if(Auth::user()->role != null)
                            @if (Auth::user()->role == 1 || Auth::user()->role == 3 )
                             {{ Auth::user()->status }}
                            @else
                            <?php
                            echo '<script language="javascript">alert("Anda Tidak Punya Akses Kesini")</script>';
                            echo '<meta http-equiv="refresh" content="0; URL=../home">';
                            ?>
                            @endif
                         @endif

                    @else
                    <?php
                    echo '<script language="javascript">alert("HARAP LOGIN DAHULU")</script>';
                     echo '<meta http-equiv="refresh" content="0; URL=../login">';
                    ?>
                    @endif




                    </p>
                    <li><a href="/home">Home</a></li>
                     
                    @if(Auth::check() != null || Auth::check() != ""  )
                            @if (Auth::user()->role == 1 || Auth::user()->role == 3 )
                            <li class="active">
                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Maps</a>
                                <ul class="collapse list-unstyled" id="homeSubmenu">
                                    <li><a href="/maps">See Maps</a></li>
                                    <li><a href="/showmaps">Table Maps</a></li>
                                </ul>
                            </li>
                         @endif
                    @endif

                    @if(Auth::check() != null || Auth::check() != ""  )
                         @if (Auth::user()->role == 1 || Auth::user()->role == 2 )
                         <li>

                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Account</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                                <li><a href="/table_user">Table Account</a></li>
                                <li><a href="/registeraccount">Register Account</a></li>
                            </ul>
                        </li>
                      @endif
                    @endif

                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form></a></li>
                </ul>


            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">


                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>

                        {{-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                            </ul>
                        </div> --}}

                </nav>

{{-- ini konten --}}



 <!-- konten isi disini-->

 <div class="container">
    @if(Session::has('message'))
    <h1> {{ Session::get('message') }}</h1>
    @endif
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Tabel <b>Maps</b></h2>

                </div>
                <div class="col-sm-6">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"> <span>Tambah Maps</span></a>
                    <a href="#uploadModal" class="btn btn-warning" data-toggle="modal"> <span>Upload Maps</span></a>
                    <a href="/maps/export_excel" class="btn btn-info" target="_blank"><span>EXPORT EXCEL</span></a>

                    <!--	<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
    --></div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <!-- <span class="custom-checkbox">
        <th>
                <input type="checkbox" id="selectAll">
                <label for="selectAll"></label>
            </span>
        </th> -->
                    <th>ID</th>
                    <th>Nama Lokasi</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Keterangan</th>

                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $lokasis)
                <tr>
                <td>{{ $lokasis->id }}</td>
                <td>{{ $lokasis->nama_lokasi }}</td>
                <td>{{ $lokasis->latitude }}</td>
                <td>{{ $lokasis->longitude }}</td>
                <td>{{ $lokasis->keterangan }}</td>

                <td><button class="btn btn-info" onclick="window.location.href = 'edit/{{ $lokasis->id }}';" data-toggle="modal" value="Edit">Edit</button>
                    <button class="btn btn-danger" onclick="window.location.href = 'delete/{{ $lokasis->id }}';">Delete</button>
                </td>
                </tr>
                @endforeach
                            <!-- Modal Delete-->
                            <div id="deleteEmployeeModal" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <form>
                                            <div class="modal-header">
                                                <h4 class="modal-title">Hapus Pinjaman</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Yakin Ga Lur? Gabisa Di Undo Loh :v</p>
                                            </div>
                                            <div class="modal-footer">

                                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                <a href="#">
                                                    <input type="button" class="btn btn-danger" value="Delete">
                                                </a>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- modal delete -->

                            <!-- edit modal -->
                            <div id="editEmployeeModal" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form class="form" method="POST" action="/edit/<?php ?>">

                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit Maps</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="form-group">
                                                    <label>Nama Lokasi</label>
                                                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                                    <input type="text" name="nama_lokasi" value="<?php ?>" class="form-control" >
                                                </div>

                                                <div class="form-group">
                                                    <label>Latitude</label>
                                                    <input type="number" step="any" id="latitude" name="latitude" class="form-control" >
                                                </div>

                                                <div class="form-group">
                                                    <label>Longitude</label>
                                                    <input type="number" step="any" id="longitude" name="longitude" class="form-control" >
                                                </div>



                                                <div class="form-group">
                                                    <label>Keterangan</label>
                                                    <input type="text" id="keterangan" name="keterangan" class="form-control" >
                                                    <input type="hidden" name='type' value='info' required/></td>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                <input type="submit" class="btn btn-success" value="Update">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- edit modal -->
                    </tr>

                    <!-- <td>
            <span class="custom-checkbox">
                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                <label for="checkbox1"></label>
            </span>
        </td> -->

            </tbody>
        </table>
        <!--	<div class="clearfix">
<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
<ul class="pagination">
    <li class="page-item disabled"><a href="#">Previous</a></li>
    <li class="page-item"><a href="#" class="page-link">1</a></li>
    <li class="page-item"><a href="#" class="page-link">2</a></li>
    <li class="page-item active"><a href="#" class="page-link">3</a></li>
    <li class="page-item"><a href="#" class="page-link">4</a></li>
    <li class="page-item"><a href="#" class="page-link">5</a></li>
    <li class="page-item"><a href="#" class="page-link">Next</a></li>
</ul>
</div> -->
    </div>
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form" method="POST" action="/create">

                <div class="modal-header">
                    <h4 class="modal-title">Tambah Map</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                </div>

                <div class="modal-body">

                    <div class="form-group">
                        <label>Nama Lokasi</label>
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                        <input type="text" name="nama_lokasi" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Latitude</label>
                        <input type="number" step="any" id="latitude" name="latitude" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Longitude</label>
                        <input type="number" step="any" id="longitude" name="longitude" class="form-control" required>
                    </div>



                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" id="keterangan" name="keterangan" class="form-control" required>
                        <input type="hidden" name='type' value='info' required/></td>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Add">
                </div>
            </form>
        </div>
    </div>
</div>

<div id="uploadModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method='post' action='/maps/upload_maps' enctype='multipart/form-data' >
                {{ csrf_field() }}

                <div class="modal-header">
                    <h4 class="modal-title">Upload Maps</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                <div class="modal-body">

                    <div class="form-group">

                           <!-- Form -->
        <input type='file' name='file' >

                    </div>



                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type='submit' class="btn btn-success" name='submit' value='Import'>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- end konten-->
            </div>
        </div>





        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
