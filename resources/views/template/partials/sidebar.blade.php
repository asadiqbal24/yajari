<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">
              <img alt="image" src="{{asset('assets/img/logo.png')}}" class="header-logo" />
              <span class="logo-name">Grexsan</span>
            </a>
          </div>
          <ul class="sidebar-menu">
          	<li class="dropdown active" style="display: block;">
          		 <div class="sidebar-profile">
	                 <div class="siderbar-profile-pic">
	                     <img src="{{asset('assets/img/users/user-6.png')}}" class="profile-img-circle box-center" alt="User Image">
	                 </div>
	                 <div class="siderbar-profile-details">
	                     <div class="siderbar-profile-name"> {{Auth::user()->name}}</div>
	                    
	                 </div>
	                 <div class="sidebar-profile-buttons">
	                     <a class="tooltips waves-effect waves-block toggled" href="profile.html" data-toggle="tooltip" title="" data-original-title="Profile">
	                         <i class="fas fa-user sidebarQuickIcon"></i>
	                     </a>
	                     
	                     
	                     
	                 </div>
                 </div>
             </li>
            <li class="menu-header">Main</li>
            
            <li><a class="nav-link" href="{{route('admin-home')}}"><i class="fas fa-home"></i><span>Home</span></a></li>

            <li><a class="nav-link" href="{{route('category-list')}}"><i class="fas fa-home"></i><span>Categories</span></a></li>

            <li><a class="nav-link" href="{{route('sub-category-list')}}"><i class="fas fa-home"></i><span>Sub Categories</span></a></li>

            <li><a class="nav-link" href="{{route('user-list')}}"><i class="fas fa-home"></i><span>User</span></a></li>
            
            <li><a class="nav-link" href="{{route('publish-request-list')}}"><i class="fas fa-home"></i><span>Publish Request </span></a></li>

            <li><a class="nav-link" href="{{route('logout')}}"><i class="fas fa-home"></i><span>Logout </span></a></li>
            
          </ul>
        </aside>
      </div>