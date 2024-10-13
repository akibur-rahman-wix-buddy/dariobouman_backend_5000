<nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <!-- scrollbar removed-->
        <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home.*') ? 'active' : '' }}"
                        href="{{ route('home.index') }}">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 12C12 11.4477 12.4477 11 13 11H19C19.5523 11 20 11.4477 20 12V19C20 19.5523 19.5523 20 19 20H13C12.4477 20 12 19.5523 12 19V12Z"
                                        stroke="{{ request()->routeIs('home.*') ? '#3874ff' : '#525b75' }}"
                                        stroke-width="2" stroke-linecap="round"></path>
                                    <path
                                        d="M4 5C4 4.44772 4.44772 4 5 4H8C8.55228 4 9 4.44772 9 5V19C9 19.5523 8.55228 20 8 20H5C4.44772 20 4 19.5523 4 19V5Z"
                                        stroke="{{ request()->routeIs('home.*') ? '#3874ff' : '#525b75' }}"
                                        stroke-width="2" stroke-linecap="round"></path>
                                    <path
                                        d="M12 5C12 4.44772 12.4477 4 13 4H19C19.5523 4 20 4.44772 20 5V7C20 7.55228 19.5523 8 19 8H13C12.4477 8 12 7.55228 12 7V5Z"
                                        stroke="{{ request()->routeIs('home.*') ? '#3874ff' : '#525b75' }}"
                                        stroke-width="2" stroke-linecap="round"></path>
                                </svg>
                            </span>
                            <span class="nav-link-text">Home</span>
                            @if (request()->routeIs('home.*'))
                                <span class="fa-solid fa-circle text-info ms-1 new-page-indicator"
                                    style="font-size: 6px"></span>
                            @endif
                        </div>
                    </a>
                </li>
                {{-- Products --}}
                <li class="nav-item">
                    <!-- parent pages-->
                    <p class="navbar-vertical-label">Product Section</p>
                    <div class="nav-item-wrapper">
                        <a class="nav-link dropdown-indicator label-1 {{ request()->routeIs('products.*') ? 'active' : '' }}"
                            href="#nv-products" role="button" data-bs-toggle="collapse" aria-expanded="true"
                            aria-controls="nv-products">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon-wrapper">
                                    <span class="fas fa-caret-right dropdown-indicator-icon"> </span>
                                </div>
                                <span class="nav-link-icon">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M21.9844 10C21.9473 8.68893 21.8226 7.85305 21.4026 7.13974C20.8052 6.12523 19.7294 5.56066 17.5777 4.43152L15.5777 3.38197C13.8221 2.46066 12.9443 2 12 2C11.0557 2 10.1779 2.46066 8.42229 3.38197L6.42229 4.43152C4.27063 5.56066 3.19479 6.12523 2.5974 7.13974C2 8.15425 2 9.41667 2 11.9415V12.0585C2 14.5833 2 15.8458 2.5974 16.8603C3.19479 17.8748 4.27063 18.4393 6.42229 19.5685L8.42229 20.618C10.1779 21.5393 11.0557 22 12 22C12.9443 22 13.8221 21.5393 15.5777 20.618L17.5777 19.5685C19.7294 18.4393 20.8052 17.8748 21.4026 16.8603C21.8226 16.1469 21.9473 15.3111 21.9844 14"
                                                stroke="{{ request()->routeIs('products.*') ? '#3874ff' : '#525b75' }}"
                                                stroke-width="1.5" stroke-linecap="round"></path>
                                            <path
                                                d="M21 7.5L17 9.5M12 12L3 7.5M12 12V21.5M12 12C12 12 14.7426 10.6287 16.5 9.75C16.6953 9.65237 17 9.5 17 9.5M17 9.5V13M17 9.5L7.5 4.5"
                                                stroke="{{ request()->routeIs('products.*') ? '#3874ff' : '#525b75' }}"
                                                stroke-width="1.5" stroke-linecap="round"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class="nav-link-text">Products</span>
                                @if (request()->routeIs('products.*'))
                                    <span class="fa-solid fa-circle text-info ms-1 new-page-indicator"
                                        style="font-size: 6px"></span>
                                @endif
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent show" data-bs-parent="#navbarVerticalCollapse"
                                id="nv-products">
                                <li class="collapsed-nav-item-title d-none">Products</li>
                                {{-- Inventory --}}
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('products.inventories.*') ? 'active' : '' }}"
                                        href="{{ route('products.inventories.index') }}">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Inventory</span>
                                        </div>
                                    </a>
                                </li>
                                {{-- sales --}}
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('products.sales.*') ? 'active' : '' }}"
                                        href="{{ route('products.sales.index') }}">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Sales</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                {{-- example --}}
                {{-- <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label"></p>
                    <hr class="navbar-vertical-line" /><!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-e-commerce"
                            role="button" data-bs-toggle="collapse" aria-expanded="false"
                            aria-controls="nv-e-commerce">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon-wrapper"><span
                                        class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                    class="nav-link-icon"><span data-feather="shopping-cart"></span></span><span
                                    class="nav-link-text">E commerce</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-e-commerce">
                                <li class="collapsed-nav-item-title d-none">E commerce</li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-admin"
                                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-admin">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon-wrapper"><span
                                                    class="fas fa-caret-right dropdown-indicator-icon"></span></div>
                                            <span class="nav-link-text">Admin</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                    <div class="parent-wrapper">
                                        <ul class="nav collapse parent show" data-bs-parent="#e-commerce"
                                            id="nv-admin">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="apps/e-commerce/admin/add-product.html">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Add product</span></div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li> --}}
            </ul>
        </div>
    </div>
    <div class="navbar-vertical-footer">
        <button
            class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center">
            <svg fill="#525b75" height="16px" width="16px" version="1.1" id="Layer_1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 512.04 512.04" xml:space="preserve" stroke="#525b75">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <g>
                        <g>
                            <path
                                d="M508.933,248.353L402.267,141.687c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827 l88.427,88.427H36.4l88.427-88.427c4.053-4.267,3.947-10.987-0.213-15.04c-4.16-3.947-10.667-3.947-14.827,0L3.12,248.353 c-4.16,4.16-4.16,10.88,0,15.04L109.787,370.06c4.267,4.053,10.987,3.947,15.04-0.213c3.947-4.16,3.947-10.667,0-14.827 L36.4,266.593h439.147L387.12,355.02c-4.267,4.053-4.373,10.88-0.213,15.04c4.053,4.267,10.88,4.373,15.04,0.213 c0.107-0.107,0.213-0.213,0.213-0.213l106.667-106.667C513.093,259.34,513.093,252.513,508.933,248.353z">
                            </path>
                        </g>
                    </g>
                </g>
            </svg>
            <span class="navbar-vertical-footer-text ms-2">Collapsed View</span>
        </button>
    </div>
</nav>
