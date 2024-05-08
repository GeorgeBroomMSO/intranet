<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('assets/brand/coreui.svg#full') }}"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('assets/brand/coreui.svg#signet') }}"></use>
        </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-item"><a class="nav-link" href="{{ route('backend.dashboard') }}">

                <x-coreui-icon class="nav-icon" icon="cil-speedometer" />
                Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>

        <li class="nav-title">CRM</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">

                <x-coreui-icon class="nav-icon" icon="cil-building" />
                Companies </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ route('backend.company.list') }}">

                        <x-coreui-icon class="nav-icon" icon="cil-list" />

                        All Companies</a></li>
			
		<li class="nav-item"><a class="nav-link" href="{{ route('backend.company.add') }}">

                        <x-coreui-icon class="nav-icon" icon="cil-plus" />

                        Add new company</a></li>

            </ul>
        </li>
	
	<li class="nav-group"><a class="nav-link nav-group-toggle" href="#">

                <x-coreui-icon class="nav-icon" icon="cil-people" />
                Contacts </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ route('backend.contact.list') }}">

                        <x-coreui-icon class="nav-icon" icon="cil-list" />

                        All Contacts</a></li>
			
		<li class="nav-item"><a class="nav-link" href="{{ route('backend.contact.add') }}">

                        <x-coreui-icon class="nav-icon" icon="cil-plus" />

                        Add new contact</a></li>

            </ul>
        </li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">

                <x-coreui-icon class="nav-icon" icon="cil-money" />
                Deals </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="">

                        <x-coreui-icon class="nav-icon" icon="cil-list" />

                        All Deals</a></li>
			
		<li class="nav-item"><a class="nav-link" href="">

                        <x-coreui-icon class="nav-icon" icon="cil-plus" />

                        Add new deals</a></li>

            </ul>
        </li>

        <li class="nav-title">Project Management</li>
        <li class="nav-group">
          <a class="nav-link nav-group-toggle" href="#">
            <x-coreui-icon class="nav-icon" icon="cil-folder" />
            Projects
          </a>
          <ul class="nav-group-items">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('backend.project.list') }}">
                <x-coreui-icon class="nav-icon" icon="cil-list" />
                All projects
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('backend.project.add') }}">
                <x-coreui-icon class="nav-icon" icon="cil-plus" />
                Add new project
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-group">
          <a class="nav-link nav-group-toggle" href="#">
            <x-coreui-icon class="nav-icon" icon="cil-task" />
            Tasks
          </a>
          <ul class="nav-group-items">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('backend.task.list') }}">
                <x-coreui-icon class="nav-icon" icon="cil-list" />
                All tasks
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('backend.task.add') }}">
                <x-coreui-icon class="nav-icon" icon="cil-plus" />
                Add new task
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-title">Resourcing</li>
        <li class="nav-group">
          <a class="nav-link nav-group-toggle" href="#">
            <x-coreui-icon class="nav-icon" icon="cil-user" />
            Staff
          </a>
          <ul class="nav-group-items">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('backend.staff.list') }}">
                <x-coreui-icon class="nav-icon" icon="cil-list" />
                All staff
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('backend.staff.add') }}">
                <x-coreui-icon class="nav-icon" icon="cil-plus" />
                Add new staff
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">

                <x-coreui-icon class="nav-icon" icon="cil-folder" />
                Projects </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="">

                        <x-coreui-icon class="nav-icon" icon="cil-pen" />

                        Edit</a></li>

            </ul>
        </li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">

                <x-coreui-icon class="nav-icon" icon="cil-time" />
                Time Off </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{">

                        <x-coreui-icon class="nav-icon" icon="cil-pen" />

                        Edit</a></li>

            </ul>
        </li>

        

        <li class="nav-title">Time</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">

                <x-coreui-icon class="nav-icon" icon="cil-user" />
                My Time </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ route('backend.profile.edit') }}">

                        <x-coreui-icon class="nav-icon" icon="cil-pen" />

                        Edit</a></li>

            </ul>
        </li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">

                <x-coreui-icon class="nav-icon" icon="cil-user" />
                Book Time Off </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ route('backend.profile.edit') }}">

                        <x-coreui-icon class="nav-icon" icon="cil-pen" />

                        Edit</a></li>

            </ul>
        </li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">

                <x-coreui-icon class="nav-icon" icon="cil-user" />
                Company Time </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ route('backend.profile.edit') }}">

                        <x-coreui-icon class="nav-icon" icon="cil-pen" />

                        Edit</a></li>

            </ul>
        </li>

        <li class="nav-title">Financials</li>
        <li class="nav-group">
          <a class="nav-link nav-group-toggle" href="#">
            <x-coreui-icon class="nav-icon" icon="cil-money" />
            Budgets
          </a>
          <ul class="nav-group-items">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('backend.budget.list') }}">
                <x-coreui-icon class="nav-icon" icon="cil-list" />
                All budgets
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('backend.budget.add') }}">
                <x-coreui-icon class="nav-icon" icon="cil-plus" />
                Add new budget
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">

                <x-coreui-icon class="nav-icon" icon="cil-user" />
                Expenses </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ route('backend.profile.edit') }}">

                        <x-coreui-icon class="nav-icon" icon="cil-pen" />

                        Edit</a></li>

            </ul>
        </li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">

                <x-coreui-icon class="nav-icon" icon="cil-user" />
                Invoices </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ route('backend.profile.edit') }}">

                        <x-coreui-icon class="nav-icon" icon="cil-pen" />

                        Edit</a></li>

            </ul>
        </li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">

                <x-coreui-icon class="nav-icon" icon="cil-user" />
                Payments </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ route('backend.profile.edit') }}">

                        <x-coreui-icon class="nav-icon" icon="cil-pen" />

                        Edit</a></li>

            </ul>
        </li>

        <li class="nav-title">Profile Management</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">

                <x-coreui-icon class="nav-icon" icon="cil-user" />
                Profile </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ route('backend.profile.edit') }}">

                        <x-coreui-icon class="nav-icon" icon="cil-pen" />

                        Edit</a></li>

            </ul>
        </li>


    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
