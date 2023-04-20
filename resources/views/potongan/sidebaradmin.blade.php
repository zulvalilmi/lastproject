<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Kelas Andro dan Tahfidz</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{ route('kelas.android') }}">
                <i class="bi bi-android2"></i><span>Kelas IT</span>
            </a>
        </li>

        <li>
            <a href="{{ route('tahfidz') }}">
                <i class="bi bi-android2"></i><span>Kelas Tahfidz</span>
            </a>
        </li>

        
    </ul>
</li><!-- End Components Nav -->

<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Data Setoran</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{ route('setoran') }}">
                <i class="bi bi-circle"></i><span>Setoran</span>
            </a>
        </li>
    </ul>
</li><!-- End Forms Nav -->

<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person-vcard-fill"></i><span>Ustadzah dan Santri</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{ ('santri') }}">
                <i class="bi bi-circle"></i><span>Data Santri</span>
            </a>
        </li>

        <li>
            <a href="{{ route('ustadzah') }}">
                <i class="bi bi-android2"></i><span>Data Ustadzah</span>
            </a>
        </li>
    </ul>

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-bar-chart"></i><span>Grafik Perkembangan santri</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('chart') }}">
                    <i class="bi bi-circle"></i><span>Grafik</span>
                </a>
            </li>
        </ul>
    </li><!-- End Charts Nav -->
</li><!-- End Tables Nav -->