<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        <div class="sidebar-brand-text mx-3"><img _ngcontent-kvl-c217="" src=".\images\LOGO\white.png" class="img-fluid" style="max-width: 25rem;"></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Manage Category</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="addcategory.php">Add Category</a>
                <a class="collapse-item" href="listcategory.php">List Category</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ev"
            aria-expanded="true" aria-controls="ev">
            <i class="bi bi-plus"></i>
            <span>Manage Event</span>
        </a>
        <div id="ev" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="addevent.php">Add Event</a>
                <a class="collapse-item" href="listevents.php">List Event</a>

            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#vol"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="bi bi-person-gear"></i>
            <span>Manage volunteers</span>
        </a>
        <div id="vol" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="manage_volunteer_rq.php">Volunteer request</a>
                <a class="collapse-item" href="list_volunteer.php">All volunteers</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tm"
            aria-expanded="true" aria-controls="tm">
            <i class="bi bi-plus"></i>
            <span>Testimonials</span>
        </a>
        <div id="tm" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="add_testimonials.php">Add Testimonials</a>
                <a class="collapse-item" href="list_testimonials.php">All Testimonials</a>

            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="queries.php">
            <i class="bi bi-file-text-fill"></i>
            <span>Queries</span></a>
    </li>
    <!-- Nav Item - Utilities Collapse Menu -->


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>