<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="experience"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="{{ $experience->title }} Experience"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="row justify-content-center mt-4">
                <div class="col-lg-12">
                    <!-- Change the column size to take up full width on all screens -->
                    <div class="card card-body mx-3 mx-md-4">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                    <h6 class="mb-0">{{ $experience->title }}</h6>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="{{ route('experience.edit', $experience) }}" class="btn btn-primary me-2">Edit</a>
                                    <a href="{{route('experience.softDelete' , $experience->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete to the trash?')">Delete</a>
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

                                                    <p><strong>Title:</strong> {{ $experience->title }}</p>
                                                    <p><strong>Date:</strong> {{ $experience->date }}</p>
                                                    <p><strong>Description:</strong> {{ $experience->content }}</p>
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
                                    <a href="{{ route('experience.index') }}" class="btn btn-info me-2" style="margin-left: 450px">Back</a>
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
