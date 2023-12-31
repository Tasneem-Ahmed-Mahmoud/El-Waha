 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">اسم الموقع</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">احمد محمد</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="بحث" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               {{-- categories --}}
          <li class="nav-item menu-open">
            <a href="#" class="nav-link {{ Route::is('categories.create')||Route::is('categories.index')|| Route::is('categories.edit')?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                الاصناف
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('categories.create') }}" class="nav-link {{  Route::is('categories.create')?'active':''  }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة صنف</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('categories.index') }}" class="nav-link {{  Route::is('categories.index')?'active':''  }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>الاصناف</p>
                </a>
              </li>
            </ul>
          </li>
         
          
         
        
          
         
           
          {{-- products --}}
          <li class="nav-item menu-open">
            <a href="#" class="nav-link {{ Route::is('products.create')||Route::is('products.index')||Route::is('products.edit')?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                المنتجات
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('products.create') }}" class="nav-link {{ Route::is('products.create')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة منتج</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('products.index') }}" class="nav-link {{ Route::is('products.index')?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>المنتجات</p>
                </a>
              </li>
            </ul>
          </li>
         
          
         
         
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
