<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="achievement"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Edit {{ $achievement->name }} achievement"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card card-body mx-3 mx-md-4 mt-4">
                        <form method="POST" action="{{ route('achievement.update', $achievement) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Name of Achievement</label>
                                <input type="text" name="name" class="form-control border border-2 p-2"
                                    value="{{ old('name', $achievement->name) }}">
                                @error('name')
                                    <p class="text-danger inputerror">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Date</label>
                                <input type="date" name="date" class="form-control border border-2 p-2"
                                    value="{{ old('date', $achievement->date) }}" placeholder="dd/mm/YYYY">
                                @error('date')
                                    <p class="text-danger inputerror">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="body" rows="5" class="form-control border border-2 p-2">{{ $achievement->body }}</textarea>
                                @error('body')
                                    <p class="text-danger inputerror">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <x-footers.auth></x-footers.auth>
    </div>
    <x-plugins></x-plugins>
</x-layout>