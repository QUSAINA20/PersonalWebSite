<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="specialization"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="{{ $specialization->title }} Specialization"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="row justify-content-center mt-4">
                <div class="col-lg-12">
                    <!-- Change the column size to take up full width on all screens -->
                    <div class="card card-body mx-3 mx-md-4">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                    <h6 class="mb-0">{{ $specialization->title }}</h6>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="{{ route('specialization.edit', $specialization) }}" class="btn btn-primary me-2">Edit</a>
                                    <form action="{{ route('specialization.destroy', $specialization) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this specialization?')">Delete</button>
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
                                                    <p><strong>Title:</strong> {{ $specialization->title }}</p>
                                                    <p><strong>Body:</strong> {{ $specialization->body }}</p>
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
                                    <a href="{{ route('specialization.index') }}" class="btn btn-info me-2" style="margin-left: 450px">Back</a>
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
