<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
            target="_blank">
            {{-- <img src="/assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo"> --}}
            <span class="ms-1 font-weight-bold text-white">GUNUNGTIGA</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard') ? 'active  bg-gradient-primary' : '' }}"
                    href="/dashboard">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard/posts*') ? 'active  bg-gradient-primary' : '' }}"
                    href="/dashboard/posts">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">description</i>
                    </div>
                    <span class="nav-link-text ms-1">Postingan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard/categories*') ? 'active  bg-gradient-primary' : '' }}"
                    href="/dashboard/categories">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">folder_open</i>
                    </div>
                    <span class="nav-link-text ms-1">Kategori</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Kelola Anggota
                </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard/village-governments*') ? 'active  bg-gradient-primary' : '' }}"
                    href="/dashboard/village-governments">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">account_balance</i>
                    </div>
                    <span class="nav-link-text ms-1">Pemerintahan Desa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard/bpds*') ? 'active  bg-gradient-primary' : '' }}"
                    href="/dashboard/bpds">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">people</i>
                    </div>
                    <span class="nav-link-text ms-1">BPD</span>
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard/lpmds*') ? 'active  bg-gradient-primary' : '' }}"
                    href="/dashboard/lpmds">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">group_work</i>
                    </div>
                    <span class="nav-link-text ms-1">LPMD</span>
                </a>
            </li>
            <li class="nav-item">

                <a class="nav-link text-white {{ Request::is('dashboard/pkks*') ? 'active  bg-gradient-primary' : '' }}"
                    href="/dashboard/pkks">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">group</i>
                    </div>
                    <span class="nav-link-text ms-1">PKK</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard/karang-tarunas*') ? 'active  bg-gradient-primary' : '' }}"
                    href="/dashboard/karang-tarunas">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">sports_soccer</i>
                    </div>
                    <span class="nav-link-text ms-1">Karang Taruna</span>
                </a>

            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages
                </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard/users*') ? 'active  bg-gradient-primary' : '' }}"
                    href="/dashboard/users">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">key</i>
                    </div>
                    <span class="nav-link-text ms-1">Kelola Admin</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard/profile*') ? 'active  bg-gradient-primary' : '' }}"
                    href="/dashboard/profile">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="/logout">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">logout</i>
                    </div>
                    <span class="nav-link-text ms-1">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    {{-- <div class="sidenav-footer position-absolute w-100 bottom-0 ">

    </div> --}}
</aside>
