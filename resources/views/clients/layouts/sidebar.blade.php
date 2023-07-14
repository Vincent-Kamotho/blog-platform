<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li>
                    <a href="#" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Posts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{route('myblog')}}"  key="t-vertical">Create Post</a>
                        </li>

                        <li>
                            <a href="{{route('edit_blog')}}"  key="t-horizontal">Edit Post</a>
                            
                        </li>
                    </ul>
                </li>

                
                <li>
                    <a href="#" class="has-arrow">
                        <i class="bx bx-calendar"></i>
                        <span key="t-dashboards">Bio</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{route('mybio')}}" key="t-tui-calendar">My Bio</a></li>
                        <li><a href="{{route('create_bio')}}" key="t-tui-calendar">Create Bio</a></li>
                        <li><a href="{{route('create_bio')}}" key="t-full-calendar">Edit Bio</a></li>
                        <li><a href="{{route('skills')}}" key="t-full-calendar">Skills</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-ecommerce">Portfolio</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('myportfolio')}}" key="t-product-detail">My Portfolio</a></li>
                    </ul>
                </li>
                
                <li>                    
                    <a href="#" class="has-arrow waves-effect">
                        <i class="bx bx-bitcoin"></i>
                        <span key="t-crypto">Services</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('myservices')}}" key="t-wallet">My Service</a></li>
                    </ul>
                </li>

                
                <li>
                    <a href="#" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span key="t-invoices">Resume</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('my_resume')}}" key="t-invoice-list">My Resume</a></li>
                    </ul>
                </li>

                
                <li>
                    <a href="#" class="has-arrow waves-effect">
                        <i class="bx bx-briefcase-alt-2"></i>
                        <span key="t-projects">Testimonials</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('testimonials')}}" key="t-p-grid">Testimonials</a></li>
                    </ul>
                </li>

                <!--
                <li>
                    <a href="#" class="has-arrow waves-effect">
                        <i class="bx bx-task"></i>
                        <span key="t-tasks">Tasks</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" key="t-task-list">Task List</a></li>
                        <li><a href="#" key="t-kanban-board">Kanban Board</a></li>
                        <li><a href="#" key="t-create-task">Create Task</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-contacts">Contacts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="contacts-grid.html" key="t-user-grid">Users Grid</a></li>
                        <li><a href="contacts-list.html" key="t-user-list">Users List</a></li>
                        <li><a href="contacts-profile.html" key="t-profile">Profile</a></li>
                    </ul>
                </li>
                -->
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>