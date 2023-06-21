<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="achievement"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Achievement"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="row justify-content-center mt-4">
                <div class="col-lg-12">
                    <!-- Change the column size to take up full width on all screens -->
                    <div class="card card-body mx-3 mx-md-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white mx-3"><strong> Add, Edit, Delete Achievement
                                </h6>
                            </div>
                        </div>
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                </div>
                                <div class="col-md-4 text-end">
                                    <a class="btn btn-primary" href="{{ route('achievement.create') }}"><i
                                            class="material-icons text-sm">add</i>&nbsp;&nbsp;Add Achievement</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-lg">
                                    <thead>
                                        <tr>
                                            <th>Name of Achievement</th>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($achievements as $achievement)
                                            <tr>
                                                <td>
                                                    <a
                                                        href="{{ route('achievement.show', $achievement) }}">{{ $achievement->name }}</a>
                                                </td>
                                                <td>{{ $achievement->date }}</td>
                                                <td
                                                    style="max-width: 200px; overflow: hidden; text-overflow: ellipsis;">
                                                    {{ $achievement->body }}</td>
                                                <td>
                                                    <div class="d-flex">

                                                        <a href="{{ route('achievement.edit', $achievement) }}"
                                                            class="btn btn-success me-2">
                                                            <i class="material-icons">edit</i>
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                        <form action="{{ route('achievement.destroy', $achievement) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"
                                                                onclick="return confirm('Are you sure you want to delete this achievement?')">
                                                                <i class="material-icons">close</i>
                                                                <div class="ripple-container"></div>
                                                            </button>
                                                        </form>

                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {!! $achievements->links('pagination::bootstrap-5') !!}
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
