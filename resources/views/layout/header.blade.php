  <!-- Header -->
  <header id="header" class="header">
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default">
            <a class="menuzord-brand pull-left flip" href="javascript:void(0)">
              <img src="/images/logo-wide.png" alt="">
            </a>
            @if(Auth::check() && Auth::user()->hasRole('Admin'))
            <ul class="menuzord-menu">
              <li class="#"><a href="/">Home</a>
              </li>
              <li class="#"><a href="#">Job Opportunities</a>
                <ul class="dropdown">
                  <li><a href="/add-job">Add a Job</a></li>
                  <li><a href="/edit-jobs">Edit a Job</a></li>
                  <li><a href="/job-opportunities">Careers and Job Opportunities</a></li>
                </ul>
              </li>
              <li class="#"><a href="#">Workshop</a>
                <ul class="dropdown">
                  <li><a href="/add-workshop">Add a Workshop</a></li>
                  <li><a href="/edit-workshops">Edit a Workshop</a></li>
                  <li><a href="/workshops">Workshops and Seminars</a></li>
                </ul>
              </li>
              <li class="#"><a href="/resume-builder">Resume Builder</a>
              </li>
              <li class="#"><a href="">Career Test</a>
              </li>
              <li class="#"><a href="#">Events</a>
                <ul class="dropdown">
                  <li><a href="/add-event">Add an Event</a></li>
                  <li><a href="/edit-events">Edit an Event</a></li>
                  <li><a href="/events">News and Events</a></li>
                </ul>
              </li>
              <li class="#"><a href="/about-us">About</a>
              </li>
              <li class="#"><a href="/logout">Logout</a>
              </li>
            </ul>
            @elseif(Auth::check() && Auth::user()->hasRole('Student'))
            <ul class="menuzord-menu">
              <li class="#"><a href="/">Home</a>
              </li>
              <li class="#"><a href="/job-opportunities">Job Opportunities</a>
              </li>
              <li class="#"><a href="/workshops">Workshop</a>
              </li>
              <li class="#"><a href="/resume-builder">Resume Builder</a>
              </li>
              <li class="#"><a href="">Career Test</a>
              </li>
              <li class="#"><a href="/events">Events</a>
              </li>
              <li class="#"><a href="/about-us">About</a>
              </li>
              <li class="#"><a href="/logout">Logout</a>
              </li>
            </ul>
            @else
            <ul class="menuzord-menu">
              <li class="#"><a href="/">Home</a>
              </li>
              <li class="#"><a href="/job-opportunities">Job Opportunities</a>
              </li>
              <li class="#"><a href="/workshops">Workshop</a>
              </li>
              <li class="#"><a href="/resume-builder">Resume Builder</a>
              </li>
              <li class="#"><a href="">Career Test</a>
              </li>
              <li class="#"><a href="/events">Events</a>
              </li>
              <li class="#"><a href="/about-us">About</a>
              </li>
              <li class="#"><a href="/login">Login</a>
              </li>
            </ul>
            @endif
          </nav>
        </div>
      </div>
    </div>
  </header>
