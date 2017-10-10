
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="index.html">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>

                       {{--  e-Book --}}
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">collections_bookmark</i>
                            <span>e-Book</span>
                        </a>
                        <ul class="ml-menu">
                         @foreach($kategori as $fa)
                            <li>
                                <a href="#" class="menu-toggle">
                                    <span>{{ $fa->faculty->jurusan }}</span>
                                </a>
                              <ul class="ml-menu">
                                    <li>
                                        <a href="{{ route ('ebook.edit',$fa->id) }}">
                                            <span>{{ $fa->kategory }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </li> 
                         @endforeach                            
                        </ul>
                    </li>
                   {{--  video --}}
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">video_library</i>
                            <span>Video</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Teknik Informatika</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span>Menu Item</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                             <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Teknik Industry</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span>Menu Item</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                             <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Teknik Sipil</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span>Menu Item</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        @role('author|admin')
                    
                        {{-- Tambah Data --}}
                    <li class="header">ADMINISTRASI</li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">computer</i>
                            <span>Pustaka Digital</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);">
                                <i class="material-icons">collections_bookmark</i>
                                    <span>Tambah e-Book</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                <i class="material-icons">video_library</i>
                                    <span>Tambah Video</span>
                                </a>
                            </li>
                        </ul>
                    </li>   
                     @endrole


                    
                    {{-- Hanya Admin --}}
                   @role('admin')
                     <li class="header">PENGATURAN</li>
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">person</i>
                            <span>Anggota</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ route ('profile.index') }}">
                                <i class="material-icons">group</i>
                                    <span>User</span>
                                </a>
                            </li>
                             <li>
                                <a href="javascript:void(0);">
                                <i class="material-icons">person</i>
                                    <span>Author</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                <i class="material-icons">vpn_key</i>
                                    <span>Admin</span>
                                </a>
                            </li>
                            
                        </ul>
                    </li> 
                       <li>
                        <a href="{{ route ('book.index') }}">
                            <i class="material-icons">archive</i>
                            <span>Koleksi</span>
                        </a>
                        <li>
                        <a href="{{ route ('faculty.index') }}">
                            <i class="material-icons">domain</i>
                            <span>Jurusan</span>
                        </a>
                         <li>
                        <a href="{{ route ('category.index') }}">
                            <i class="material-icons">list</i>
                            <span>Materi</span>
                        </a>
                    </li> 
                    </li>
                    </li> @endrole
                </ul>
            </div>
            <!-- #Menu -->
