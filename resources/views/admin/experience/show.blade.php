<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="experience"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <div class="container-fluid px-2 px-md-4">
            <!-- Navbar -->
            <x-navbars.navs.auth titlePage="View Experience"></x-navbars.navs.auth>
            <!-- End Navbar -->

            <div class="row justify-content-center mt-4">
                <div class="col-lg-6">



                    <div class="card">
                        <div class="card-body px-4 pt-2">
                            <p><strong>Title:</strong> {{ $experience->title }}</p>
                            <p><strong>Date:</strong> {{ $experience->date }}</p>
                            <p><strong>Description:</strong> {{ $experience->content }}</p>
                            <a href="{{ route('experience.index') }}" class="btn btn-info" style="margin-left: 150px">Back</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <x-footers.auth></x-footers.auth>
    </div>
    <x-plugins></x-plugins>
</x-layout>
