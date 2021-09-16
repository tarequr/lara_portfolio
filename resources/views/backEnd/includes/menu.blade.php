<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Portfolio</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      @php
        $route = Route::currentRouteName();
      @endphp
      <!-- Nav Item - Dashboard -->
      <li class="nav-item {{ $route == 'dashboard' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>


      <!-- Nav Item - Profile Collapse Menu -->
      <li class="nav-item">
        <a class="{{ $route == 'profiles.view' ||  $route == 'profiles.edit' ||  $route == 'profiles.password.view' ? '' : 'collapsed' }}
           nav-link" href="#" data-toggle="collapse" data-target="#profileInfo" aria-expanded="true" aria-controls="profileInfo">
          <i class="fas fa-user"></i>
          <span>Manage Profile</span>
        </a>
        <div id="profileInfo" class="collapse {{( $route == 'profiles.view' ||  $route == 'profiles.edit' ||  $route == 'profiles.password.view') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Profile Information:</h6>

            <a class="{{ $route == 'profiles.view' ||  $route == 'profiles.edit' ? 'active' : '' }} collapse-item" href=" {{ route('profiles.view')}} ">Your Profile</a>

            <a class="{{( $route == 'profiles.password.view')? 'active' : '' }} collapse-item" href=" {{ route('profiles.password.view')}} ">Change Password</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - About Collapse Menu -->
      <li class="nav-item">
        <a class="{{ $route == 'about.add' ||  $route == 'about.view' ||  $route == 'about.edit' ? '' : 'collapsed' }}
           nav-link" href="#" data-toggle="collapse" data-target="#aboutInfo" aria-expanded="true" aria-controls="aboutInfo">
          <i class="fa fa-diamond"></i>
          <span>About Info</span>
        </a>
        <div id="aboutInfo" class="collapse {{( $route == 'about.add' ||  $route == 'about.view' ||  $route == 'about.edit') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">About Information:</h6>

            <a class="{{ $route == 'about.add' ? 'active' : '' }} collapse-item" href=" {{ route('about.add')}} ">Add About</a>

            <a class="{{( $route == 'about.view' ||  $route == 'about.edit' )? 'active' : '' }} collapse-item" href=" {{ route('about.view')}} ">Manage About</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Education Collapse Menu -->
      <li class="nav-item">
        <a class="{{ $route == 'education.add' ||  $route == 'education.view' ||  $route == 'education.edit' ? '' : 'collapsed' }}
           nav-link" href="#" data-toggle="collapse" data-target="#educationInfo" aria-expanded="true" aria-controls="educationInfo">
          <i class="fa fa-diamond"></i>
          <span>Education Info</span>
        </a>
        <div id="educationInfo" class="collapse {{( $route == 'education.add' ||  $route == 'education.view' ||  $route == 'education.edit') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Education Information:</h6>

            <a class="{{ $route == 'education.add' ? 'active' : '' }} collapse-item" href=" {{ route('education.add')}} ">Add Education</a>

            <a class="{{( $route == 'education.view' ||  $route == 'education.edit' )? 'active' : '' }} collapse-item" href=" {{ route('education.view')}} ">Manage Education</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Skill Collapse Menu -->
      <li class="nav-item">
        <a class="{{ $route == 'skill.add' ||  $route == 'skill.view' ||  $route == 'skill.edit' ? '' : 'collapsed' }}
           nav-link" href="#" data-toggle="collapse" data-target="#skillInfo" aria-expanded="true" aria-controls="skillInfo">
          <i class="fa fa-diamond"></i>
          <span>Skill Info</span>
        </a>
        <div id="skillInfo" class="collapse {{( $route == 'skill.add' ||  $route == 'skill.view' ||  $route == 'skill.edit') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Skill Information:</h6>

            <a class="{{ $route == 'skill.add' ? 'active' : '' }} collapse-item" href=" {{ route('skill.add')}} ">Add Skill</a>

            <a class="{{( $route == 'skill.view' ||  $route == 'skill.edit' )? 'active' : '' }} collapse-item" href=" {{ route('skill.view')}} ">Manage Skill</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Experience Collapse Menu -->
      <li class="nav-item">
        <a class="{{ $route == 'experience.add' ||  $route == 'experience.view' ||  $route == 'experience.edit' ? '' : 'collapsed' }}
           nav-link" href="#" data-toggle="collapse" data-target="#experienceInfo" aria-expanded="true" aria-controls="experienceInfo">
          <i class="fa fa-diamond"></i>
          <span>Experience Info</span>
        </a>
        <div id="experienceInfo" class="collapse {{( $route == 'experience.add' ||  $route == 'experience.view' ||  $route == 'experience.edit') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Experience Information:</h6>

            <a class="{{ $route == 'experience.add' ? 'active' : '' }} collapse-item" href=" {{ route('experience.add')}} ">Add Experience</a>

            <a class="{{( $route == 'experience.view' ||  $route == 'experience.edit' )? 'active' : '' }} collapse-item" href=" {{ route('experience.view')}} ">Manage Experience</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Profile Collapse Menu -->
      <li class="nav-item">
        <a class="{{ $route == 'profile.add' ||  $route == 'profile.view' ||  $route == 'profile.edit' ? '' : 'collapsed' }}
           nav-link" href="#" data-toggle="collapse" data-target="#profileInform" aria-expanded="true" aria-controls="profileInform">
          <i class="fa fa-diamond"></i>
          <span>Profile Info</span>
        </a>
        <div id="profileInform" class="collapse {{( $route == 'profile.add' ||  $route == 'profile.view' ||  $route == 'profile.edit') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Profile Information:</h6>

            <a class="{{ $route == 'profile.add' ? 'active' : '' }} collapse-item" href=" {{ route('profile.add')}} ">Add Profile</a>

            <a class="{{( $route == 'profile.view' ||  $route == 'profile.edit' )? 'active' : '' }} collapse-item" href=" {{ route('profile.view')}} ">Manage Profile</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Portfolio Collapse Menu -->
      <li class="nav-item">
        <a class="{{ $route == 'portfolio.add' ||  $route == 'portfolio.view' ||  $route == 'portfolio.edit' ? '' : 'collapsed' }}
           nav-link" href="#" data-toggle="collapse" data-target="#portfolioInform" aria-expanded="true" aria-controls="portfolioInform">
          <i class="fa fa-diamond"></i>
          <span>Portfolio Info</span>
        </a>
        <div id="portfolioInform" class="collapse {{( $route == 'portfolio.add' ||  $route == 'portfolio.view' ||  $route == 'portfolio.edit') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Portfolio Information:</h6>

            <a class="{{ $route == 'portfolio.add' ? 'active' : '' }} collapse-item" href=" {{ route('portfolio.add')}} ">Add Portfolio</a>

            <a class="{{( $route == 'portfolio.view' ||  $route == 'portfolio.edit' )? 'active' : '' }} collapse-item" href=" {{ route('portfolio.view')}} ">Manage Portfolio</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Client Collapse Menu -->
      <li class="nav-item">
        <a class="{{ $route == 'client.add' ||  $route == 'client.view' ||  $route == 'client.edit' ? '' : 'collapsed' }}
           nav-link" href="#" data-toggle="collapse" data-target="#clientInform" aria-expanded="true" aria-controls="clientInform">
          <i class="fa fa-diamond"></i>
          <span>Client Info</span>
        </a>
        <div id="clientInform" class="collapse {{( $route == 'client.add' ||  $route == 'client.view' ||  $route == 'client.edit') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Client Information:</h6>

            <a class="{{ $route == 'client.add' ? 'active' : '' }} collapse-item" href=" {{ route('client.add')}} ">Add Client</a>

            <a class="{{( $route == 'client.view' ||  $route == 'client.edit' )? 'active' : '' }} collapse-item" href=" {{ route('client.view')}} ">Manage Client</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Contact Collapse Menu -->
      <li class="nav-item">
        <a class="{{ $route == 'contact.view' ? '' : 'collapsed' }}
           nav-link" href="#" data-toggle="collapse" data-target="#contactInform" aria-expanded="true" aria-controls="contactInform">
          <i class="fa fa-diamond"></i>
          <span>Contact Info</span>
        </a>
        <div id="contactInform" class="collapse {{( $route == 'contact.view') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Contact Information:</h6>

            <a class="{{( $route == 'contact.view')? 'active' : '' }} collapse-item" href=" {{ route('contact.view')}} ">View Message</a>

          </div>
        </div>
      </li>
      

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>