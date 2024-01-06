  <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
             
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('app.dashboard') }}">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                            </a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sideAbout" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sideAbout">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Tentang Kami</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sideAbout">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('about.profil') }}" class="nav-link" data-key="t-analytics">
                                            Profil
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('about.letter') }}" class="nav-link" data-key="t-analytics">
                                            Sambutan Ketua 
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('about.vimission') }}" class="nav-link" data-key="t-analytics">
                                            Visi Misi 
                                        </a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="{{ route('team.index') }}" class="nav-link" data-key="t-analytics">
                                            Tim
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('about.contact') }}" class="nav-link" data-key="t-analytics">
                                            Kontak
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li> 

                         <li class="nav-item">
                            <a class="nav-link menu-link" href="#sideBerita" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sideBerita">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Berita</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sideBerita">
                                <ul class="nav nav-sm flex-column">
                                    @php($cat = App\Models\CategoryNews::all())
                                    @foreach ($cat as $val )
                                    <li class="nav-item">
                                        <a href="{{ route("news.index",$val->id) }}" class="nav-link" data-key="t-analytics">
                                            {{ $val->name }}
                                        </a>
                                    </li>

                                    @endforeach
                                    <li class="menu-title"><span data-key="t-menu">Kategori Berita </span></li>
                                    <li class="nav-item">
                                        <a href="{{ route("category_news.index") }}" class="nav-link" data-key="t-analytics">
                                            Tambah Kategori 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                         <li class="nav-item">
                            <a class="nav-link menu-link" href="#sideInformasi" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sideInformasi">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Informasi</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sideInformasi">
                                <ul class="nav nav-sm flex-column">
                                    @php($cat = App\Models\CategoryInfo::all())
                                    @foreach ($cat as $val )
                                    <li class="nav-item">
                                        <a href="{{ route("info.index",$val->id) }}" class="nav-link" data-key="t-analytics">
                                            {{ $val->name }}
                                        </a>
                                    </li>

                                    @endforeach
                                    <li class="menu-title"><span data-key="t-menu">Kategori</span></li>
                                    <li class="nav-item">
                                        <a href="{{ route("category_info.index") }}" class="nav-link" data-key="t-analytics">
                                            Tambah Kategori 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('service.index') }}">
                                <i class=" ri-account-pin-circle-fill"></i> <span data-key="t-dashboards">Layanan</span>
                            </a>
                        </li> 

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('project.index') }}">
                                <i class=" ri-account-pin-circle-fill"></i> <span data-key="t-dashboards">Project</span>
                            </a>
                        </li> 

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('partnert.index') }}">
                                <i class=" ri-account-pin-circle-fill"></i> <span data-key="t-dashboards">Mitra</span>
                            </a>
                        </li> 

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('slide.index') }}">
                                <i class=" ri-account-pin-circle-fill"></i> <span data-key="t-dashboards">Slideshow</span>
                            </a>
                        </li> 

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('faq.index') }}">
                                <i class=" ri-account-pin-circle-fill"></i> <span data-key="t-dashboards">FAQ</span>
                            </a>
                        </li> 



                       
                        
                        <li class="menu-title"><span data-key="t-menu">Pengaturan</span></li>
                       
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sideDataMaster" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sideDataMaster">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Pengaturan</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sideDataMaster">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" data-key="t-analytics">
                                            Edit Profil 
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" data-key="t-analytics">
                                            Ubah Password 
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('app.dashboard') }}">
                                <i class=" ri-account-pin-circle-fill"></i> <span data-key="t-dashboards">Keluar</span>
                            </a>
                        </li>



                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>