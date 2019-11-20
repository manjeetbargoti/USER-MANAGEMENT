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
                        <p class="text-white user-info">{{ Auth::user()->first_name }}</p>
                    </a>
                </div>
            </div>
            <!-- #menu -->
            <ul id="menu">
                <li class="{{ (request()->is('admin/dashboard')) ? 'active':'' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="fa fa-home"></i>
                        <span class="link-title menu_hide">&nbsp;Dashboard</span>
                    </a>
                </li>
                @hasanyrole('Super Admin')
                <li class="dropdown_menu {{ (request()->is('admin/user*')) ? 'active':'' }}">
                    <a href="{{ url('/admin/user') }}">
                        <i class="fa fa-users"></i>
                        <span class="link-title menu_hide">&nbsp; User Management</span>
                        <span class="fa arrow menu_hide"></span>
                    </a>
                    <ul>
                        <li class="{{ (request()->is('admin/user')) ? 'active':'' }}">
                            <a href="{{ url('admin/user') }}">
                                <i class="fa fa-angle-right"></i> &nbsp; Users
                            </a>
                        </li>
                        <li class="{{ (request()->is('admin/user/role')) ? 'active':'' }}">
                            <a href="{{ url('admin/user/role') }}">
                                <i class="fa fa-angle-right"></i> &nbsp; User Roles
                            </a>
                        </li>
                        <li class="{{ (request()->is('admin/user/permission')) ? 'active':'' }}">
                            <a href="{{ url('admin/user/permission') }}">
                                <i class="fa fa-angle-right"></i>
                                <span class="link-title"> &nbsp; User Permissions</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endrole
                <li class="dropdown_menu {{ (request()->is('admin/posts*')) ? 'active':'' }}">
                    <a href="{{ url('/admin/posts') }}">
                        <i class="fa fa-file-text-o"></i>
                        <span class="link-title menu_hide">&nbsp; Post Management</span>
                        <span class="fa arrow menu_hide"></span>
                    </a>
                    <ul>
                        <li class="{{ (request()->is('admin/posts')) ? 'active':'' }}">
                            <a href="{{ url('admin/posts') }}">
                                <i class="fa fa-angle-right"></i> &nbsp; Posts
                            </a>
                        </li>
                        <li class="{{ (request()->is('admin/posts/create')) ? 'active':'' }}">
                            <a href="{{ url('admin/posts/create') }}">
                                <i class="fa fa-angle-right"></i> &nbsp; Add New
                            </a>
                        </li>
                        <li class="{{ (request()->is('admin/posts/category')) ? 'active':'' }}">
                            <a href="{{ url('admin/posts/category') }}">
                                <i class="fa fa-angle-right"></i>
                                <span class="link-title"> &nbsp; Post Category</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /#menu -->
        </div>
    </div>
<!-- /.Sidebar ends here -->