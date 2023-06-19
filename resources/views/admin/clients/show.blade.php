<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="client"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <div class="container-fluid px-2 px-md-4">
            <!-- Navbar -->
            <x-navbars.navs.auth titlePage="View Clients"></x-navbars.navs.auth>
            <!-- End Navbar -->

            <div class="row justify-content-center mt-4">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <img src="{{ $client->getFirstMediaUrl('images') }}" alt="img-blur-shadow"
                                class="img-fluid shadow border-radius-lg">
                            <div class="colored-shadow"
                                style="background-image: url('{{ $client->getFirstMediaUrl('images') }}');">
                            </div>
                        </div>
                        <div class="card-body px-4 pt-2">
                            <p><strong>Name:</strong> {{ $client->name }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-footers.auth></x-footers.auth>
    </div>
    <x-plugins></x-plugins>
</x-layout>
