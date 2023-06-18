<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="experience"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="experience"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="row justify-content-center mt-4">
                <div class="col-lg-12">
                    <!-- Change the column size to take up full width on all screens -->
                    <div class="card card-body mx-3 mx-md-4">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                    <h6 class="mb-0">Experience</h6>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="{{ route('experience.create') }}" class="btn btn-success me-2" style="margin-bottom: 2rem;">Add New Experience</a>
                                    <a href="{{ route('experience.trash') }}"> <i class="material-icons opacity-10" style="font-size: 40px; margin-bottom: 1rem;">delete_sweep</i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-lg">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($experiences as $experience)
                                        <tr>
                                            <td>{{ $experience->title }}</td>
                                            <td>{{ $experience->date }}</td>
                                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis;">{{ $experience->content }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('experience.show', $experience) }}" class="btn btn-info me-2">View</a>
                                                    <a href="{{ route('experience.edit', $experience) }}" class="btn btn-primary me-2">Edit</a>
                                                    <a href="{{route('experience.softDelete' , $experience->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete to the trash?')">Delete</a>


                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {!! $experiences->links('pagination::bootstrap-5') !!}
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
