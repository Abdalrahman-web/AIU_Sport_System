<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('home') }}" class="brand-link">
        <img src="../img/sport.png"
             alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3">
        <span style="color:#fff" class="brand-text font-weight-light">AIU Sport System</span>
    </a>

    <div class="sidebar">

    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="../img/aiu.png"  class="brand-image img-circle elevation-3">
        <!--<img src="" class="img-circle elevation-2" alt="User Image">-->
        </div>
        <div class="info">
          <a href="https://www.aiu.edu.sy/" class="d-block">Arab international university</a>
        </div>
      </div>
      
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
            
        </nav>
    </div>

</aside>
