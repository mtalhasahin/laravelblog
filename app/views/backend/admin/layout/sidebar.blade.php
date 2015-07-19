<aside id="sidebar">
                        	<nav id="navigation" class="collapse">
                            	<ul>
                                	<li @if(Request::segment(1)=='panel') class="active @endif">
                                    	<span title="Ayarlar">
                                    		<i class="icon-home"></i>
											<span class="nav-title">Ayarlar</span>
                                        </span>
                                    	<ul class="inner-nav">
                                        	<li @if(Request::segment(2)=='ayarlar') class="active" @endif><a href="{{URL::to('panel/ayarlar')}}"><i class="icol-dashboard"></i> Ayarlar</a></li>
                                        	
                                        </ul>
                                    </li>
                                	<li @if(Request::segment(1)=='kullanici') class="active @endif">
                                    	<span title="Kullanıcı">
                                    		<i class="icon-official"></i>
							<span class="nav-title">Kullanıcı</span>
                                        </span>
                                    	<ul class="inner-nav">
                                        	<li @if(Request::segment(1)=='kullaniciekle') class="active" @endif><a href="{{URL::to('kullanici/kullaniciekle')}}"><i class="icon-plus-sign"></i> Kullanıcı Ekle</a></li>
                                        	<li @if(Request::segment(1)=='kullanicilistele') class="active" @endif><a href="{{URL::to('kullanici/kullanicilistele')}}"><i class="icon-list"></i> Kullanıcı Listele</a></li>
                                        
                                        </ul>
                                    </li>
                                	<li @if(Request::segment(1)=='kategori') class="active" @endif>
                                    	<span title="Kategori">
                                        	<i class="icon-align-justify"></i>
											<span class="nav-title">Kategori</span>
                                        </span>
                                    	<ul class="inner-nav">
                                        	<li @if(Request::segment(2)=='kategoriekle') class="active" @endif><a href="{{URL::to('kategori/kategoriekle')}}"><i class="icon-plus-sign"></i> Kategori Ekle</a></li>
                                        	<li @if(Request::segment(2)=='kategorilistele') class="active" @endif><a href="{{URL::to('kategori/kategorilistele')}}"><i class="icon-list"></i> Kategori Listele</a></li>
                                        </ul>
                                    </li>
                                	<li>
                                    	<span title="Form">
                                        	<i class="icon-list"></i>
											<span class="nav-title">Form</span>
                                        </span>
                                    	<ul class="inner-nav">
                                        	<li><a href="form_layouts.html"><i class="icol-layout-select"></i> Form Layouts</a></li>
                                        	<li><a href="form_elements.html"><i class="icol-ui-text-field-password"></i> Form Elements</a></li>
											<li><a href="form_wizard.html"><i class="icol-wand"></i> Form Wizard</a></li>
                                        	<li><a href="form_validation.html"><i class="icol-accept"></i> Form Validation</a></li>
                                        	<li><a href="form_cloning.html"><i class="icol-asterisk-orange"></i> Form Cloning</a></li>
                                            <li><a href="wysiwyg.html"><i class="icol-pencil"></i> WYSIWYG</a></li>
                                        </ul>
                                    </li>
                                	<li>
                                    	<span title="Elements">
                                        	<i class="icon-cogs"></i>
											<span class="nav-title">Elements</span>
                                        </span>
                                    	<ul class="inner-nav">
                                        	<li><a href="ui_bootstrap.html"><i class="icol-ui-tab-content"></i> Bootstrap Elements</a></li>
											<li><a href="ui_components.html"><i class="icol-pipette"></i> Other Elements</a></li>
                                        	<li><a href="alerts.html"><i class="icol-error"></i> Alerts and Notifications</a></li>
											<li><a href="boxes.html"><i class="icol-cog"></i> Widget Boxes</a></li>
                                        	<li><a href="buttons.html"><i class="icol-joystick"></i> Buttons</a></li>
                                        	<li><a href="file_uploader.html"><i class="icol-computer"></i> File Uploader</a></li>
											<li><a href="file_manager.html"><i class="icol-databases"></i> File Manager</a>
                                        </ul>
                                    </li>
                                	<li>
                                    	<span title="Extra">
                                        	<i class="icon-gift"></i>
											<span class="nav-title">Extra</span>
                                        </span>
                                        <ul class="inner-nav">
                                            <li><a href="profile.html"><i class="icol-user"></i> Profile Page</a></li>
                                            <li><a href="mail.html"><i class="icol-email"></i> Mail Page</a></li>
                                            <li><a href="invoice.html"><i class="icol-blog"></i> Invoice Page</a></li>
                                            <li><a href="widgets.html"><i class="icol-ruby"></i> Custom Widgets</a></li>
                                            <li><a href="gallery.html"><i class="icol-images"></i> Image Gallery</a>
                                            <li><a href="contacts.html"><i class="icol-vcard"></i> Contact List</a></li>
                                            <li><a href="404.html"><i class="icol-error"></i> Error Page (404)</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </aside>
<div id="sidebar-separator"></div>