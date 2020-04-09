<!DOCTYPE html>
<html>
    <head>
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

                            @if (Auth::user()->role == 1 || Auth::user()->role == 2 )
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

  <!-- konten isi disini-->

  <div class="modal-dialog" style="margin-left:270px;margin-top:20px">
    <div class="modal-content">

        <form class="form" method="POST" action="/editAccount/<?php echo $users[0]->id; ?>">

            <div class="modal-header">
                <h4 class="modal-title">Update Account</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label>Name</label>
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <input type="text"  value='<?php echo$users[0]->name; ?>' name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>email</label>
                    <input type="email"  value='<?php echo$users[0]->email; ?>'  id="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>role</label>
                    <select id="role" name="role" class="form-control" required>
                        <?php
                        $roles = $users[0]->role;
                        ?>
                      <?php  if($roles == 1 ){ ?>
                        <option value='<?php echo$users[0]->role; ?>'><?php echo$users[0]->status; ?></option>
                        <option value="2">operator</option>
                        <option value="3">user biasa</option>

                    <?php
                    }if($roles == 2 ){ ?>
                        <option value='<?php echo$users[0]->role; ?>'><?php echo$users[0]->status; ?></option>
                        <option value="1">admin</option>
                        <option value="3">user biasa</option>
                    <?php }if($roles == 3){ ?>
                        <option value='<?php echo$users[0]->role; ?>'><?php echo$users[0]->status; ?></option>
                        <option value="1">admin</option>
                        <option value="2">Operator</option>
                    <?php } ?>

                      </select>
                </div>



                <div class="form-group">
                    {{-- <label>password</label> --}}
                    <input type="hidden" value='<?php echo$users[0]->password; ?>' id="keterangan" name="password" class="form-control" required>
                </div>

{{--
                <div class="form-group">
                    <label>Status</label>
                    <input type="text"  id="status" name="status" class="form-control" required>
                </div> --}}
            </div>
            <div class="modal-footer">
                <span><a class="btn btn-danger" href="/table_user">Cancel</a></span>

                <input type="submit" class="btn btn-success" value="Update Account">
            </div>
        </form>
</div>
</div>
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
