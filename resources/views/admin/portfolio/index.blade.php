<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="portfolio"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Portfolio"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="row justify-content-center mt-4">
                <div class="col-lg-12">
                    <!-- Change the column size to take up full width on all screens -->
                    <div class="card card-body mx-3 mx-md-4">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                    <h6 class="mb-0">Portfolio</h6>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="{{ route('portfolio.create') }}" class="btn btn-primary">Add Portfolio</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-lg">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Section</th>
                                            <th>Link</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($portfolios as $portfolio)
                                            <tr>
                                                <td>{{ $portfolio->name }}</td>
                                                <td>{{ $portfolio->section }}</td>
                                                <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis;"
                                                    title="{{ $portfolio->link }}"><a href="{{ $portfolio->link }}"
                                                        target=".blank">{{ $portfolio->link }}</a></td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ route('portfolio.show', $portfolio) }}"
                                                            class="btn btn-info me-2">View</a>
                                                        <a href="{{ route('portfolio.edit', $portfolio) }}"
                                                            class="btn btn-primary me-2">Edit</a>
                                                        <form action="{{ route('portfolio.destroy', $portfolio) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger"
                                                                onclick="return confirm('Are you sure you want to delete this portfolio?')">Delete</button>
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
</x-layout>
