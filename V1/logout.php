<style>
            body {
                margin: 0 auto;
                padding: 0;
                font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
                font-size: 14px;
            }

            #calendar {
                max-width: 800px;
                margin: 0 auto;
                color: #000;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            span,
            p,
            label,
            div {
                font-family: 'Kanit', sans-serif;

            }

            .fc-content {
                color: white;
            }

            .fc-day-number {
                color: #000000
            }

            #accordionSidebar {
                background-color: #3E49BB;
            }

            #calendar {
                max-width: 700px;
                margin: 0 auto;
            }

            #home {

                background-color: white;
                max-width: 700px;
            }

            #menu1 {
                background-color: white;
                max-width: auto;
            }

            .dot {
                height: 25px;
                width: 25px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
            }
            .bg-gradient-dangerAAAA {
              background-color: #FFA07A;
              background-image: linear-gradient(180deg, #FFA07A 10%, #FFA07A 100%);
              background-size: cover;
            }
</style>
<ul  class="navbar-nav bg-gradient-dangerAAAA sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div  class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-store"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sweet <sub>Home</sub></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-home"></i>
          <span>หน้าหลัก</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li>
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>