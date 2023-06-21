<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="biography"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Biography"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="row justify-content-center mt-4">
                <div class="col-lg-12">
                    <!-- Change the column size to take up full width on all screens -->
                    <div class="card card-body mx-3 mx-md-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white mx-3"><strong> Biography Detalis
                                </h6>
                            </div>
                        </div>
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">

                                </div>
                                <div class="col-md-4 text-end">
                                    <a rel="tooltip" class="btn btn-success btn-link"
                                        href="{{ route('biography.edit', $biography) }}">
                                        <i class="material-icons">edit</i>
                                        <div class="ripple-container"></div>
                                    </a>
                                    <form action="{{ route('biography.destroy', $biography) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-link"
                                            onclick="return confirm('Are you sure you want to delete this biography?')">
                                            <i class="material-icons">close</i>
                                            <div class="ripple-container"></div>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="table-responsive">
                                <div class="card-body px-4 pt-2">
                                    <div class="card">
                                        <div class="card-body px-4 pt-2">
                                            <div class="card-body px-4 pt-2">
                                                <tbody>

                                                    <p> <img src="{{ $biography->getFirstMedia('images')->getUrl() }}"
                                                            alt="img-blur-shadow"
                                                            class="img-fluid shadow border-radius-lg">
                                                    <div class="colored-shadow"
                                                        style="background-image: url('{{ $biography->getFirstMedia('images')->getUrl() }}');">
                                                    </div>
                                                    </p>
                                                    <div class="card-body px-4 pt-2">
                                                        <p><strong>Body:</strong> {!! $biography->body !!}</p>
                                                    </div>
                                                </tbody>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="card-header pb-0 p-3">
                            <div class="row">

                                <div class="col-md-4 text-end">
                                    <a href="{{ route('biography.index') }}" class="btn btn-info me-2"
                                        style="margin-left: 1000px">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-footers.auth></x-footers.auth>
        <x-plugins></x-plugins>
</x-layout>
