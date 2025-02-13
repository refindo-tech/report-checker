<li class="nav-title">Unggah Berkas</li>
{{-- @can('lihat-produk') --}}
<li class="{{ Request::is('report/*') ? 'active' : '' }}">
    <a href="{{ route('report.index') }}" title="report Admin" data-filter-tags="admin profil">
        <i class="fa fa-flag"></i>
        <span class="nav-link-text" data-i18n="nav.admin_profil">Laporan Akhir</span>
    </a>
</li>
{{-- @endcan --}}
@can('lihat-komponen')
    {{-- <li class="{{ Request::is('komponen/*') ? 'active' : '' }}">
    <a href="{{ route('komponen.index') }}" title="Komponen" data-filter-tags="admin profil">
        <i class="fa-solid fa-cart-shopping"></i>
        <span class="nav-link-text" data-i18n="nav.admin_profil">Komponen</span>
    </a>
</li> --}}
@endcan
@can('lihat-supplier')
    {{-- <li class="{{ Request::is('supplier/*') ? 'active' : '' }}">
    <a href="{{ route('supplier.index') }}" title="Profil Admin" data-filter-tags="admin profil">
        <i class="fa fa-cubes"></i>
        <span class="nav-link-text" data-i18n="nav.admin_profil">Supplier</span>
    </a>
</li> --}}
@endcan
<li class="nav-title">Capaian Pembelajaran Lulusan (CPL)</li>
@can('lihat-barang-masuk')
    <li class="{{ Request::is('mikroskil/*') ? 'active' : '' }}">
        <a href="{{ route('mikroskil.index') }}" title="cpl" data-filter-tags="admin profil">
            <i class="fa-solid fa-check-to-slot"></i>
            <span class="nav-link-text" data-i18n="nav.admin_profil">Rubrik CPL Mikroskill</span>
        </a>
    </li>
@endcan
<li class="nav-title">Master Data</li>
{{-- @can('lihat-barang-keluar') --}}
<li class="{{ Request::is('kampus/*') ? 'active' : '' }}">
    <a href="{{ route('kampus.index') }}" title="Profil Admin" data-filter-tags="admin profil">
        <i class="fa fa-building-columns"></i>
        <span class="nav-link-text" data-i18n="nav.admin_profil">Kampus</span>
    </a>
</li>
{{-- @can('lihat-barang-keluar') --}}
<li class="{{ Request::is('assessment/*') ? 'active' : '' }}">
    <a href="{{ route('assessment.index') }}" title="penilaian" data-filter-tags="admin profil">
        <i class="fa-solid fa-clipboard-check"></i>
        <span class="nav-link-text" data-i18n="nav.admin_profil">Penilaian</span>
    </a>
</li>
{{-- @endcan --}}
<li class="nav-title">Settings</li>
<li class="{{ Request::is('settings/*') ? 'active open' : '' }}">
    <a href="#" title="Settings" data-filter-tags="settings">
        <i class="fal fa-cogs"></i>
        <span class="nav-link-text" data-i18n="nav.settings">Settings</span>
    </a>
    <ul>
        <!-- Pengguna -->
        @can('lihat-user')
            <li class="{{ Request::is('settings/user*') ? 'active' : '' }}">
                <a href="{{ route('user.index') }}" title="Pengguna" data-filter-tags="pengguna user">
                    <i class="fal fa-users"></i>
                    <span class="nav-link-text" data-i18n="nav.pengguna">Pengguna</span>
                </a>
            </li>
        @endcan

        <!-- Profil -->
        <li class="{{ Request::is('settings/profile*') ? 'active' : '' }}">
            <a href="{{ route('profil_admin') }}" title="Profil Admin" data-filter-tags="admin profil">
                <i class="fal fa-user-circle"></i>
                <span class="nav-link-text" data-i18n="nav.profil_admin">Profil Pengguna</span>
            </a>
        </li>

        <!-- Role -->
        @can('lihat-role')
            <li class="{{ Request::is('settings/roles*') ? 'active' : '' }}">
                <a href="{{ route('roles.index') }}" title="Profil Admin" data-filter-tags="admin profil">
                    <i class="fa-solid fa-fingerprint"></i>
                    <span class="nav-link-text" data-i18n="nav.profil_admin">Peran Pengguna</span>
                </a>
            </li>
        @endcan

        <!-- Peran -->
        @can('lihat-permission')
            <li class="{{ Request::is('settings/permissions*') ? 'active' : '' }}">
                <a href="{{ route('permissions.index') }}" title="Profil Admin" data-filter-tags="admin profil">
                    <i class="fa-solid fa-key"></i>
                    <span class="nav-link-text" data-i18n="nav.profil_admin">Izin Pengguna</span>
                </a>
            </li>
        @endcan
    </ul>
</li>

<li class="{{ Request::is('tools/*') ? 'active open' : '' }}">
    <a href="#" title="Tools" data-filter-tags="tools">
        <i class="fal fa-wrench"></i>
        <span class="nav-link-text" data-i18n="nav.tools">Tools</span>
    </a>
    <ul>
        @if (Auth::user()->getRoleNames()->first() == 'Admin')
            <li class="{{ Request::is('tools/app_profiles*') ? 'active' : '' }}">
                <a href="/tools/app_profiles" title="App Profiles" data-filter-tags="tools app profiles">
                    <span class="nav-link-text" data-i18n="nav.tools_app_profiles">Profil Aplikasi</span>
                </a>
            </li>
            <li class="{{ Request::is('tools/app_fiturs*') ? 'active' : '' }}">
                <a href="/tools/app_fiturs" title="App Fiturs" data-filter-tags="tools app fiturs">
                    <span class="nav-link-text" data-i18n="nav.tools_app_fiturs">Fitur Aplikasi</span>
                </a>
            </li>
        @endif
        {{-- <li class="{{ Request::is('tools/impor_data_master*') ? 'active' : '' }}">
            <a href="{{ route('impor_data_master') }}" title="Impor Data Master"
                data-filter-tags="tools impor data master">
                <span class="nav-link-text" data-i18n="nav.tools_impor_data_master">Impor Data Master</span>
            </a>
        </li>
        <li class="{{ Request::is('tools/ekspor_data_master*') ? 'active' : '' }}">
            <a href="{{ route('ekspor_data_master') }}" title="Ekspor Data Master"
                data-filter-tags="tools ekspor data master">
                <span class="nav-link-text" data-i18n="nav.tools_ekspor_data_master">Ekspor Data Master</span>
            </a>
        </li>
        <li class="{{ Request::is('tools/backup_database*') ? 'active' : '' }}">
            <a href="{{ route('backup_database') }}" title="Backup Database" data-filter-tags="tools backup database">
                <span class="nav-link-text" data-i18n="nav.tools_backup_database">Backup Database</span>
            </a>
        </li>
        <li class="{{ Request::is('tools/data_login*') ? 'active' : '' }}">
            <a href="{{ route('data_login') }}" title="Data Login" data-filter-tags="tools data login">
                <span class="nav-link-text" data-i18n="nav.tools_data_login">Data Login</span>
            </a>
        </li> --}}
    </ul>
</li>
</li>
