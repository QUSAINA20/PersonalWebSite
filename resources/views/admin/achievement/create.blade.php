<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="achievement"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Create achievement"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="row justify-content-center mt-4">
                <div class="col-lg-12">
                    <!-- Change the column size to take up full width on all screens -->
                    <div class="card card-body mx-3 mx-md-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white mx-3"><strong> Create achievement
                                </h6>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="table-responsive">
                                <div class="card-body px-4 pt-2">
                                    <div class="card">
                                        <div class="card-body px-4 pt-2">
                                            <div class="card-body px-4 pt-2">
                                                <form method="POST" action="{{ route('achievement.store') }}">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label class="form-label">Namw of Achievement</label>
                                                        <input type="text" name="name"
                                                            class="form-control border border-2 p-2"
                                                            value="{{ old('name') }}">
                                                        @error('name')
                                                            <p class="text-danger inputerror">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Date</label>
                                                        <input type="date" name="date"
                                                            class="form-control border border-2 p-2"
                                                            value="{{ old('date') }}" placeholder="dd/mm/YYYY">
                                                        @error('date')
                                                            <p class="text-danger inputerror">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Description</label>
                                                        <textarea name="body" rows="5" class="form-control border border-2 p-2">{{ old('body') }}</textarea>
                                                        @error('body')
                                                            <p class="text-danger inputerror">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="text-center">
                                                        <a href="{{ route('achievement.index') }}"
                                                            class="btn btn-info">Back</a>
                                                        <button type="submit" class="btn btn-primary">Create</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
