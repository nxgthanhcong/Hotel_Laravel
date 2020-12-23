<div class="sidebar-menu">
        <header class="logo1">
            <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
        </header>
        <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
        <div class="menu">
            <ul id="menu">
                <!-- <li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li> -->

                <li id="menu-academico">
                    <a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Quản lý tài khoản</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                    <ul id="menu-academico-sub">
                        <li id="menu-academico-avaliacoes"><a href="{{route('user.index')}}">List tài khoản</a></li>
                        <!-- <li id="menu-academico-avaliacoes"><a href="typography.html">List tài khoản User</a></li> -->
                    </ul>
                    
                </li>
                <li id="menu-academico">
                    
                    <a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Quản lý dịch vụ</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                    <ul id="menu-academico-sub">
                        <li id="menu-academico-avaliacoes"><a href="{{route('dichvu.index')}}">List dịch vụ</a></li>
                    </ul>
                </li>
                <li id="menu-academico">
                    
                    <a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Quản lý khách hàng</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                    <ul id="menu-academico-sub">
                        <li id="menu-academico-avaliacoes"><a href="{{route('khachhang.index')}}">List khách hàng</a></li>
                    </ul>
                </li>
                <li id="menu-academico">
                    
                    <a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Quản lý phòng</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                    <ul id="menu-academico-sub">
                        <li id="menu-academico-avaliacoes"><a href="{{route('phong.index')}}">List phòng</a></li>
                        <li id="menu-academico-avaliacoes"><a href="{{route('loaiphong.index')}}">List loại phòng</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>