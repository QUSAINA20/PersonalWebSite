@props(['activePage'])

<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
    id="sidenav-main">

    <hr class="horizontal light mt-0 mb-2">
    <div id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Pages</h6>
            </li>

            <li class="nav-item">

                <a class="nav-link text-white {{ $activePage == 'portfolio' ? 'active bg-gradient-primary' : '' }}"
                    href="{{ route('portfolio.index') }}">


                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">work</i>
                    </div>
                    <span class="nav-link-text ms-1">Portfolio</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'achievement' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('achievement.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">emoji_events</i>
                    </div>
                    <span class="nav-link-text ms-1">achievement</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'experience' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('experience.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">content_copy</i>
                    </div>
                    <span class="nav-link-text ms-1">Experiences</span>
                </a>
            </li>



            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'client' ? ' active bg-gradient-primary' : '' }}  "
                    href="{{ route('clients.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">work</i>
                    </div>
                    <span class="nav-link-text ms-1">Clients</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'biography' ? 'active bg-gradient-primary' : '' }}"
                    href="{{ route('biography.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">book</i>
                    </div>
                    <span class="nav-link-text ms-1">Biography</span>
                </a>
            </li>
            <li class="nav-item">

                <a class="nav-link text-white {{ $activePage == 'specialization' ? 'active bg-gradient-primary' : '' }}"
                    href="{{ route('specialization.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">list</i>
                    </div>
                    <span class="nav-link-text ms-1">Specialization</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'message' ? 'active bg-gradient-primary' : '' }}"
                    href="{{ route('message.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">message</i>
                    </div>
                    <span class="nav-link-text ms-1">Message</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'video' ? 'active bg-gradient-primary' : '' }}"
                    href="{{ route('video.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">subscriptions</i>
                    </div>
                    <span class="nav-link-text ms-1">Video</span>
                </a>
            </li>
        </ul>
    </div>

</aside>
