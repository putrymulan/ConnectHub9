<div class="sidebar">
  <div class="logo-details">
    <i class="bx bx-category"></i>
    <span class="logo_name">ConnectHub</span>
  </div>
  <ul class="nav-links">
    <li>
      <a href="#">
        <i class="bx bx-grid-alt"></i>
        <span class="links_name">Dashboard</span>
      </a>
    </li>
    <li>
      <a href="kategori" class="{{ request()->Is('kategori*') ? 'active' : '' }}">
        <i class="bx bx-box"></i>
        <span class="links_name">Kategori</span>
      </a>
    </li>
    <li>
      <a href="/transaction" class="{{ request()->Is('transaction*') ? 'active' : '' }}">
        <i class="bx bx-list-ul"></i>
        <span class="links_name">Informasi</span>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="bx bx-log-out"></i>
        <span class="links_name">Keluar</span>
      </a>
    </li>
  </ul>
</div>
