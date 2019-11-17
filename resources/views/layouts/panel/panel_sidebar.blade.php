<!-- Sidebar Start here -->
<!-- <div class="wrapper"> -->
    <div id="left">
        <div class="menu_scroll">
            <div class="media user-media">
                <div class="user-media-toggleHover">
                    <span class="fa fa-user"></span>
                </div>
                <div class="user-wrapper">
                    <a class="user-link" href="#">
                        <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
                            src="{{ asset('admin/img/admin.jpg') }}">
                        <p class="text-white user-info">{{ Auth::user()->name }}</p>
                    </a>
                    <div class="search_bar col-lg-12">
                        <div class="input-group">
                            <input type="search" class="form-control " placeholder="search">
                            <span class="input-group-btn">
                                <button class="btn" type="button"><span class="fa fa-search">
                                    </span></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #menu -->
            <ul id="menu">
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="fa fa-home"></i>
                        <span class="link-title menu_hide">&nbsp;Dashboard</span>
                    </a>
                </li>
                <li class="dropdown_menu">
                    <a href="javascript:void(0);">
                        <i class="fa fa-anchor"></i>
                        <span class="link-title menu_hide">&nbsp; User Management</span>
                        <span class="fa arrow menu_hide"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('admin/user') }}">
                                <i class="fa fa-angle-right"></i> &nbsp; Users
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/role') }}">
                                <i class="fa fa-angle-right"></i> &nbsp; User Roles
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/permission') }}">
                                <i class="fa fa-angle-right"></i>
                                <span class="link-title"> &nbsp; User Permissions</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /#menu -->
        </div>
    </div>
<!-- /.Sidebar ends here -->