<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="portfolio"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <div class="container-fluid px-2 px-md-4">
            <!-- Navbar -->
            <x-navbars.navs.auth titlePage="View Portfolio"></x-navbars.navs.auth>
            <!-- End Navbar -->

            <div class="row justify-content-center mt-4">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <a href="{{ $portfolio->link }}" class="d-block blur-shadow-image">
                                <img src="{{ $portfolio->getFirstMedia('images')->getUrl() }}" alt="img-blur-shadow"
                                    class="img-fluid shadow border-radius-lg">
                            </a>
                            <div class="colored-shadow"
                                style="background-image: url('{{ $portfolio->getFirstMedia('images')->getUrl() }}');">
                            </div>
                        </div>
                        <div class="card-body px-4 pt-2">
                            <p><strong>Name:</strong> {{ $portfolio->name }}</p>
                            <p><strong>Section:</strong> {{ ucwords(str_replace('-', ' ', $portfolio->section)) }}</p>
                            <p><strong>Link:</strong> {{ $portfolio->link }}</p>
                            <a target=".blank" href="{{ $portfolio->link }}"
                                class="btn bg-gradient-dark mt-3 mb-0">Read more</a>
                                <a target=".blank" href="{{ route('portfolio.edit', $portfolio) }}"
                                class="btn bg-gradient-primary mt-3 mb-0">Edit</a>
                                <a href="{{ route('portfolio.index') }}" class="btn btn-info mt-3 mb-0"
                                style="margin-left: 150px">Back</a>
                                <form action="{{ route('portfolio.destroy', $portfolio) }}" method="POST" class="d-inline" >
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-danger mt-3 mb-0" onclick="return confirm('Are you sure you want to delete this portfolio?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footers.auth></x-footers.auth>
    </div>
    <x-plugins></x-plugins>
</x-layout>
