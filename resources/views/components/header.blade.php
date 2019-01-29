<div class="header">
  <div class="left">
    <p>Blank Page</p>
    <div class="breadcrumb">
      <span>Main</span><span>Blank Page</span>
    </div>
  </div>

  <ul class="right">
    <li class="header-item-searchbox">
      <form><input type="text" name="keyword" /></form><i class="la la-search"></i>
    </li>
    <li class="header-item dropdown"><a class="trigger-dropdown"><i class="la la-share-alt-square"></i></a>
      <div class="dropdown-box dropdown-box--centered with-header">
        <div class="dropdown-header">
          <h3>Quick Action</h3><span class="helper-text">Shortcut</span>
        </div>
        <div class="dropdown-body">
          <div class="row">
            <div class="col-6 p-0"><a><i class="la la-folder-o"></i><span>Generate report</span></a></div>
            <div class="col-6 p-0"><a><i class="la la-send"></i><span>Send mail</span></a></div>
          </div>
          <div class="row">
            <div class="col-6 p-0"><a> <i class="la la-tasks"></i><span>Create new task</span></a></div>
            <div class="col-6 p-0"><a><i class="la la-calendar"></i><span>Add new event</span></a></div>
          </div>
        </div>
      </div>
    </li>
    <li class="header-item dropdown"><a class="trigger-dropdown"><i class="la la-bell"></i><span><sup>1</sup></span></a>
      <div class="dropdown-box with-header">
        <div class="dropdown-header">
          <h3>1 new</h3><span class="helper-text">User notification</span>
        </div>
        <ul class="dropdown-body">
          <li><a><i class="la la-warning"></i><span>Suspicious activity on 17 May 09:38</span></a></li>
        </ul>
      </div>
    </li>
    <li class="header-user dropdown ml-4 mr-3"><a class="user-photo trigger-dropdown"><img class="user-img" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/intermediary/f/101e1fb9-0b2e-4f2d-acfb-a777dc48f629/d4sn4w7-2a5d1fdf-2af2-408a-9300-08f28cd12951.png" /></a>
      <div class="dropdown-box with-header">
        <div class="dropdown-header"><img class="user-img user-img--lg" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/intermediary/f/101e1fb9-0b2e-4f2d-acfb-a777dc48f629/d4sn4w7-2a5d1fdf-2af2-408a-9300-08f28cd12951.png"
          />
          <div class="user-info">
            <h3>{{ Auth::user()->name }}</h3>
            <span class="helper-text">{{ Auth::user()->email }}</span>
          </div>
        </div>
        <ul class="dropdown-body">
          <li><a href="https://github.com/aljazari-studio" target="_blank"><i class="la la-user"></i><span>My profile</span></a></li>
          <li><a><i class="la la-envelope"></i><span>Messages</span></a></li>
          <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><i class="la la-power-off"></i>
            <span>Log out</span></a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
        </ul>
      </div>
    </li>
  </ul>

  <div class="right--mobile"><a class="header-item--mobile sidebar-control"><i class="la la-navicon"></i></a><a class="header-item--mobile"><i class="la la-comments"></i></a>
    <a class="header-item--mobile"><i class="la la-ellipsis-v"></i></a>
  </div>
</div>