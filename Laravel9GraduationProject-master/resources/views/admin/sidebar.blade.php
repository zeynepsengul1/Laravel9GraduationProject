<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">

    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="{{asset('assets')}}/admin/img/find_user.png" class="user-image img-responsive"/>
            </li>
            <li>
                <a  href="/admin"><i class="fa fa-film fa-2x"></i> Dashpad</a>
            </li>
            <li>
                <a  href="/admin/category"><i class="fa fa-dashboard fa-2x "></i> Categories</a>
            </li>
            <li>
                <a  href="/admin/project"><i class="fa fa-dashboard fa-2x "></i> Project</a>
            </li>

            <li>
                <a  href="/admin/comment"><i class="fa fa-copy fa-2x"></i> Comments</a>
            </li>
            <li>
                <a  href="{{route('admin.faq.index')}}"><i class="fa fa-question fa-2x"></i> FAQ</a>
            </li>
            <li>
                <a  href="{{route('admin.message.index')}}"><i class="fa fa-mail-reply fa-2x"></i> Messages</a>
            </li>
            <li>
                <a  href="/admin/user"><i class="fa fa-asterisk fa-2x"></i> Users</a>
            </li>
            <li>
                <a  href="/admin/social"><i class="fa fa-user fa-2x"></i> Social</a>
            </li>
            <li>
                <a  href="/admin/setting"><i class="fa fa-edit fa-2x"></i>Settings</a>
            </li>

            <li>
                <a href="/admin/tez"><i class="fa fa-sitemap fa-2x"></i>Tez<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/tez">New  Projects</a>
                    </li>
                    <li>
                        <a href="/admin/tez">Accepted Projects</a>
                    </li>
                    <li>
                        <a href="/admin/tez">Shipping Projects</a>
                    </li>
                    <li>
                        <a href="/admin/tez">Completed Projects</a>
                    </li>
                    <li>
                        <a href="/admin/tez">Donate requests<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="/admin/tez">Requests</a>
                            </li>
                            <li>
                                <a href="/admin/tez">Accepted Requests</a>
                            </li>
                            <li>
                                <a href="/admin/tez">Completed Requests</a>
                            </li>

                        </ul>

                    </li>
                </ul>
            </li>


        </ul>

    </div>

</nav>
