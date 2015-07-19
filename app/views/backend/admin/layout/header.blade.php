<header id="header" class="navbar navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
					<div class="brand-wrap pull-left">
						<div class="brand-img">
							<a class="brand" href="{{URL::to('panel')}}">
								<img src="{{URL::to('Backend/assets/images/logo.png')}}" alt="" style="width: 117px; height: 21px;">
							</a>
						</div>
					</div>
                    
                    <div id="header-right" class="clearfix">
						<div id="nav-toggle" data-toggle="collapse" data-target="#navigation" class="collapsed">
							<i class="icon-caret-down"></i>
						</div>
						<div id="header-search">
							<span id="search-toggle" data-toggle="dropdown">
								<i class="icon-search"></i>
							</span>
							<form class="navbar-search">
								<input type="text" class="search-query" placeholder="Search">
							</form>
						</div>
						<div id="dropdown-lists">
                            <div class="item-wrap">
    							<a class="item" href="#" data-toggle="dropdown">
    								<span class="item-icon"><i class="icon-exclamation-sign"></i></span>
    								<span class="item-label">Notifications</span>
    								<span class="item-count">4</span>
    							</a>
                                
                               
                             
                            </div>
                            <div class="item-wrap">
    							<a class="item" href="#" data-toggle="dropdown">
    								<span class="item-icon"><i class="icon-envelope"></i></span>
    								<span class="item-label">Messages</span>
    								<span class="item-count">16</span>
    							</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item-wrap">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="Backend/assets/images/pp.jpg" alt=""></span>
                                                    <span class="details">
                                                        <strong>John Doe</strong><br> Hello, do you have time to go out tomorrow?
                                                        <span class="time">13 minutes ago</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="assets/images/pp.jpg" alt=""></span>
                                                    <span class="details">
                                                        <strong>Jane Roe</strong><br> Hey, the reports said that you were...
                                                        <span class="time">27 minutes ago</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="assets/images/pp.jpg" alt=""></span>
                                                    <span class="details">
                                                        <strong>Billy John</strong><br> Can I borrow your new camera for taking...
                                                        <span class="time">About an hour ago</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="mail.html">View all messages</a></li>
                                </ul>
                            </div>
						</div>
                        
                        <div id="header-functions" class="pull-right">
                        	<div id="user-info" class="clearfix">
                                <span class="info">
                                <span>Hoşgeldiniz</span>
                                    <span class="name">{{Auth::user()->nameusername}}</span>
                                </span>
                            	<div class="avatar">
                                	<a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                            <img src="@if(Auth::user()->profil!='') {{URL::to('Backend/avatar/'.Auth::user()->profil.'')}} @else {{URL::to('Backend/assets/images/pp.jpg')}} @endif" alt="Avatar">
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                    	<li><a href="profile.html"><i class="icol-user"></i> Profilim</a></li>
                                        <li class="divider"></li>
                                        <li><a href="{{URL::to('logout')}}"><i class="icol-key"></i> Çıkış Yap</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="logout-ribbon">
                            	<a href="{{URL::to('logout')}}"><i class="icon-off"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>