  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light" style="color:#009d40 !important">Green Tree Nursery</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="" class="d-block">{{ucwords(Auth::User()->name)}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
         
          </li>
         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Seedling Categories
                <i class="fas fa-angle-left right"></i>
                <span class="right badge badge-info"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a  href="{{route('categories.create')}}" class="nav-link " >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create  Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('categories.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category List</p>
                </a>
              </li>
           
           
            </ul>
          </li>
      
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Tree Seedlings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('valuechains.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Tree Seedling</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('valuechains.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tree Seedling List</p>
                </a>
              </li>
            
           
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
              Seedlings Variations
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('variations.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Variation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('variations.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Varations List</p>
                </a>
              </li>
            
           
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Dissemination materials
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('materials.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Material</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('materials.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List of Materials</p>
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
