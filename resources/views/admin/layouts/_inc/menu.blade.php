<div class="leftside-menu">

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light text-black fw-bold">
                    <span class="logo-lg">
                        {{-- <img src="{{ asset('/') }}admin/assets/images/logo.png" alt="" height="16"> --}}
                        <h2 ><i class="text-white">Linkon's</i><span class="text-primary">Yard</span></h2>
                    </span>
        <span class="logo-sm">
                    <h2 ><i class="text-white">L</i><span class="text-primary">Y</span></h2>
                    </span>
                    

    </a>

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        {{-- <img src="{{ asset('/') }}admin/assets/images/logo-dark.png" alt="" height="16"> --}}
                    </span>
        <span class="logo-sm">
                        {{-- <img src="{{ asset('/') }}admin/assets/images/logo_sm_dark.png" alt="" height="16"> --}}
                    </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-item">
                <a href="{{ route('dashboard') }}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboards </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> Slider Module </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('sliders.index') }}">Manage Slider</a>
                        </li>
                        <li>
                            <a href="apps-ecommerce-products-details.html">Products Details</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                    <i class="uil-user"></i>
                    <span> About Module </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('abouts.index') }}">Manage About</a>
                        </li>
                        <li>
                            <a href="{{ route('about-images.index') }}">Manage Image</a>
                        </li>
                        <li>
                            <a href="apps-email-read.html">Manage Skills</a>
                        </li>
                        <li>
                            <a href="apps-email-read.html">Manage Education</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Projects Module </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProjects">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('project-categories.index') }}">Project Category</a>
                        </li>
                        <li>
                            <a href="{{ route('projects.index') }}">Manage Project</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Footer Module </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTasks">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('footers.index') }}">Manage Footer</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarContact" aria-expanded="false" aria-controls="sidebarContact" class="side-nav-link">
                    <i class="uil-message"></i>
                    <span> Contact Module </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarContact">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('manage.message') }}">Manage Messages</a>
                        </li>
                    </ul>
                </div>
            </li>




        </ul>

        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
