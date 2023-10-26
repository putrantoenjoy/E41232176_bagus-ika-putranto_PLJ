<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('dashboard.index')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-earmark"></i><span>Riwayat Hidup</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('pendidikan.index')}}">
              <i class="bi bi-circle"></i><span>Pendidikan</span>
            </a>
          </li>
          <li>
            <a href="{{route('pengalamankerja.index')}}">
              <i class="bi bi-circle"></i><span>Pengalaman Kerja</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
</aside>