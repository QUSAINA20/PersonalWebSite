<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="video"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <div class="container-fluid px-2 px-md-4">
            <!-- Navbar -->
            <x-navbars.navs.auth titlePage="View Video"></x-navbars.navs.auth>
            <!-- End Navbar -->

            <div class="row justify-content-center mt-4">
                <div class="col-lg-6">
                    <div class="card">

                        <div class="card-body px-4 pt-2">
                            <p><strong>Name:</strong> {{ $video->name }}</p>
                            <p><strong>Section:</strong> {{ ucwords(str_replace('-', ' ', $video->section)) }}</p>
                            <p><strong>Link:</strong> {{ $video->link }}</p>
                            <a target=".blank" href="{{ $video->link }}"
                                class="btn bg-gradient-primary mt-3 mb-0">watch</a>
                            <a target=".blank" href="{{ route('video.edit', $video) }}"
                                class="btn bg-gradient-primary mt-3 mb-0">Edit</a>
                            <a href="{{ route('video.index') }}" class="btn btn-info mt-3 mb-0"
                                style="margin-left: 150px">Back</a>
                            <form action="{{ route('video.destroy', $video) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mt-3 mb-0"
                                    onclick="return confirm('Are you sure you want to delete this video?')">Delete</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <x-footers.auth></x-footers.auth>
    </div>
    <x-plugins></x-plugins>
</x-layout>
