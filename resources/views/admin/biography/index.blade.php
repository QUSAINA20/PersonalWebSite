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
                                <h6 class="text-white mx-3"><strong> Add, Edit, Delete Biography
                                </h6>
                            </div>
                        </div>
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                </div>
                                <div class="col-md-4 text-end">
                                    <a class="btn bg-gradient-dark mb-0" href="{{ route('biography.create') }}"><i
                                            class="material-icons text-sm">add</i>&nbsp;&nbsp;Add Biography</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            @foreach ($biographies as $biography)
                                <table>
                                    <thead>
                                        <tr>
                                            <th>
                                                <h6><b>Body</b> </h6>
                                            </th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p style="display: inline-block;white-space: normal">
                                                    {!! $biography->body !!}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="card-header pb-0 p-3">
                                                    <div class="row">
                                                        <div class="col-md-8 d-flex align-items-center">
                                                        </div>
                                                        <div class="col-md-4 text-end">
                                                            <a href="{{ route('biography.show', $biography) }}"
                                                                class="btn btn-outline-info ">view</a>
                                                            <a rel="tooltip" class="btn btn-success btn-link"
                                                                href="{{ route('biography.edit', $biography) }}">
                                                                <i class="material-icons">edit</i>
                                                                <div class="ripple-container"></div>
                                                            </a>
                                                            <form action="{{ route('biography.destroy', $biography) }}"
                                                                method="POST" class="d-inline">
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
                                            </td>
                                        </tr>

                                    </tbody>
                            @endforeach
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footers.auth></x-footers.auth>
    <x-plugins></x-plugins>
</x-layout>
