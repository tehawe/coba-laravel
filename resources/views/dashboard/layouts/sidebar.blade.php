<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">THW Project</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('/dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard"><i class="bi-layout-text-sidebar-reverse"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('/dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts"><i class="bi-file-earmark-post" /></i> My Posts</a>
                </li>
            </ul>
            @can('admin')
                <hr class="my-3">
                <h5 class="sidebar-heading d-flex justify-content-between align-items-center text-muted px-3">Administrator</h5>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories"><i class="bi-tags" /></i>Post Categories</a>
                    </li>
                </ul>
            @endcan
        </div>
    </div>
</div>
