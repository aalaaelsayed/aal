<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="{{ route('users') }}">Users List</a></li>
										<li><a href="{{ route('createuser') }}">Add User</a></li>
										
									</ul>
								</li>
						
								<li><a><i class="fa fa-desktop"></i> posts <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="{{ route('createpost') }}">Add Post</a></li>
										<li><a href="{{ route('posts') }}">Posts List</a></li>
										<li><a href="{{ route('trashedPost') }}"> trashedPosts</a></li>

										
									</ul>
								</li>
          
			
							</ul>
						</div>

					</div>
					<!-- /sidebar menu -->