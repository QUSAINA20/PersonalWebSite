{{-- <x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="specialization"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Specialization"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="row justify-content-center mt-4">
                <div class="col-lg-12">
                    <!-- Change the column size to take up full width on all screens -->
                    <div class="card card-body mx-3 mx-md-4">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                    <h6 class="mb-0">Specialization</h6>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="{{ route('specialization.create') }}" class="btn btn-primary">Add
                                        Specialization</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-lg">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Body</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($specializations as $specialization)
                                            <tr>
                                                <td>{{ $specialization->title }}</td>
                                                <td>{{ $specialization->body }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ route('specialization.show', $specialization) }}"
                                                            class="btn btn-info me-2">View</a>
                                                        <a href="{{ route('specialization.edit', $specialization) }}"
                                                            class="btn btn-primary me-2">Edit</a>
                                                        <form
                                                            action="{{ route('specialization.destroy', $specialization) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"
                                                                onclick="return confirm('Are you sure you want to delete this specialization?')">Delete</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footers.auth></x-footers.auth>
    <x-plugins></x-plugins>
</x-layout> --}}
<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="Specialization"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Specialization"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="row justify-content-center mt-4">
                <div class="col-lg-12">
                    <!-- Change the column size to take up full width on all screens -->
                    <div class="card card-body mx-3 mx-md-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white mx-3"><strong> Add, Edit, Delete Specialization
                                </h6>
                            </div>
                        </div>
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                </div>
                                <div class="col-md-4 text-end">
                                    <a class="btn bg-gradient-dark mb-0" href="{{ route('specialization.create') }}"><i
                                            class="material-icons text-sm">add</i>&nbsp;&nbsp;Add Specialization</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">

                            <div class="card-body p-3">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                                    Title
                                                </th>
                                                <th
                                                    class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                                    Body</th>

                                                <th class="text-secondary opacity-7"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($specializations as $specialization)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <p class="mb-0 text-sm"><a
                                                                        href="{{ route('specialization.show', $specialization) }}">{{ $specialization->title }}</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>


                                                    <td>
                                                        <p
                                                            style="max-width: 200px; overflow: hidden; text-overflow: ellipsis;">
                                                            {{ $specialization->body }}
                                                        </p>
                                                    </td>

                                                    <td class="align-middle">
                                                        <a rel="tooltip" class="btn btn-success btn-link"
                                                            href="{{ route('specialization.edit', $specialization) }}"
                                                            data-original-title="" title="">
                                                            <i class="material-icons">edit</i>
                                                            <div class="ripple-container"></div>
                                                        </a>

                                                        <form
                                                            action="{{ route('specialization.destroy', $specialization) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-link"
                                                                onclick="return confirm('Are you sure you want to delete this biography?')">
                                                                <i class="material-icons">close</i>
                                                                <div class="ripple-container"></div>
                                                            </button>
                                                        </form>

                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                    {{-- {!! $achievements->links('pagination::bootstrap-5') !!} --}}
                                </div>
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
