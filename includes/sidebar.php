<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">ADMIN PANEL</div>
  </a>
  <hr class="sidebar-divider my-0" />
  <li class="nav-item active">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <hr class="sidebar-divider" />
  <div class="sidebar-heading">Quản lý Sản phẩm</div>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBrand" aria-expanded="true"
      aria-controls="collapseBrand">
      <i class="fas fa-tags"></i>
      <span>Thương hiệu - Brand</span>
    </a>
    <div id="collapseBrand" class="collapse" aria-labelledby="headingBrand" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="./listbrands.php">Danh sách thương hiệu</a>
        <a class="collapse-item" href="./themthuonghieu.php">Thêm mới</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCat" aria-expanded="true"
      aria-controls="collapseCat">
      <i class="fas fa-list"></i>
      <span>Danh mục sản phẩm</span>
    </a>
    <div id="collapseCat" class="collapse" aria-labelledby="headingCat" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="./listcats.php">Danh sách danh mục</a>
        <a class="collapse-item" href="./themdanhmuc.php">Thêm mới</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProd" aria-expanded="true"
      aria-controls="collapseProd">
      <i class="fab fa-product-hunt"></i>
      <span>Sản phẩm</span>
    </a>
    <div id="collapseProd" class="collapse" aria-labelledby="headingProd" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="./listsanpham.php">Danh sách sản phẩm</a>
        <a class="collapse-item" href="./themsanpham.php">Thêm mới</a>
      </div>
    </div>
  </li>
  <hr class="sidebar-divider" />
  <div class="sidebar-heading">Quản lý Bài viết</div>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNewsCat" aria-expanded="true"
      aria-controls="collapseNewsCat">
      <i class="fas fa-folder-open"></i>
      <span>Danh mục tin tức</span>
    </a>
    <div id="collapseNewsCat" class="collapse" aria-labelledby="headingNewsCat" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="./listnewscats.php">Danh sách danh mục</a>
        <a class="collapse-item" href="./themdanhmuctintuc.php">Thêm mới</a>
      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNews" aria-expanded="true"
      aria-controls="collapseNews">
      <i class="fas fa-newspaper"></i>
      <span>Tin tức</span>
    </a>
    <div id="collapseNews" class="collapse" aria-labelledby="headingNews" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="./listnews.php">Danh sách bài viết</a>
        <a class="collapse-item" href="./themtintuc.php">Thêm mới</a>
      </div>
    </div>
  </li>
  <hr class="sidebar-divider" />
  <div class="sidebar-heading">Quản lý Bán hàng</div>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrder" aria-expanded="true"
      aria-controls="collapseOrder">
      <i class="fas fa-wallet"></i>
      <span>Đơn hàng</span>
    </a>
    <div id="collapseOrder" class="collapse" aria-labelledby="headingOrder" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="./listorders.php">Danh sách đơn hàng</a>
      </div>
    </div>
  </li>
  <hr class="sidebar-divider d-none d-md-block" />
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>