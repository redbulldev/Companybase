 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="{{ route('admin.home') }}" class="brand-link">
         {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
         <span class="brand-text font-weight-light">TRANG QUẢN TRỊ</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 @if (!isset(Auth::user()->avatar->value))
                     <img src="{{ asset('admin/avatar.jpg') }}" class="img-circle elevation-2" alt="User Image">
                 @else
                     <img src="{{ asset(Auth::user()->avatar->value) }}" class="img-circle elevation-2"
                         alt="User Image">
                 @endif
             </div>
             <div class="info">
                 <a href="{{ route('user.profile') }}" class="d-block">{{ Auth::user()->name }}</a>
             </div>
         </div>

         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                     aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item menu-open">
                     <a href="#" class="nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                            Bảng điều khiển
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('admin.home') }}" class="nav-link">
                                 <i class="fa fa-home nav-icon text-red"></i>
                                 <p>Trang Chủ</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item user-panel"></li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fa fa-user text-white"></i>
                         <p>Tài khoản</p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('user.index') }}" class="nav-link">
                                 <i class="nav-icon fas fa-list-ol text-yellow"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item user-panel"></li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-tags text-white"></i>
                         <p>Thẻ</p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('tag.index') }}" class="nav-link">
                                 <i class="nav-icon fas fa-list-ol text-yellow"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('tag.create') }}" class="nav-link">
                                 <i class="nav-icon fas fa-plus text-info"></i>
                                 <p>Thêm mới</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item user-panel"></li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-book text-white"></i>
                         <p>Bài viết</p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('post.index') }}" class="nav-link">
                                 <i class="nav-icon fas fa-list-ol text-yellow"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('post.create') }}" class="nav-link">
                                 <i class="nav-icon fas fa-plus text-info"></i>
                                 <p>Thêm mới</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item user-panel"></li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon far fa-comment-dots text-white"></i>
                         <p>Liên hệ</p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('contact.index') }}" class="nav-link">
                                 <i class="nav-icon fas fa-list-ol text-yellow"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item user-panel"></li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-cubes text-white"></i>
                         <p>Dịch vụ</p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{route('service.index')}}" class="nav-link">
                                 <i class="nav-icon fas fa-list-ol text-yellow"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                         <li class="nav-item">
                            <a href="{{ route('service.create') }}" class="nav-link">
                                <i class="nav-icon fas fa-plus text-info"></i>
                                <p>Thêm mới</p>
                            </a>
                        </li>
                     </ul>
                 </li>


                 <li class="nav-item user-panel">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-tachometer-alt text-white"></i>
                         <p>Cài đặt chung<i class=""></i></p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.setting') }}" class="nav-link">
                         <i class="fas fa-cog nav-icon text-info"></i>
                         <p>Cài đặt</p>
                     </a>
                 </li>

             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
