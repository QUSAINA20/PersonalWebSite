<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="portfolio"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Edit Portfolio"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card card-body mx-3 mx-md-4 mt-4">
                        <form method="POST" action="{{ route('portfolio.update', $portfolio) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control border border-2 p-2"
                                    value="{{ $portfolio->name }}">
                                @error('name')
                                    <p class="text-danger inputerror">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Section</label>
                                <select name="section" class="form-select border border-2 p-2">
                                    <option value="brand-identity"
                                        {{ $portfolio->section === 'brand-identity' ? 'selected' : '' }}>
                                        Brand Identity
                                    </option>
                                    <option value="social-media"
                                        {{ $portfolio->section === 'social-media' ? 'selected' : '' }}>
                                        Social Media
                                    </option>
                                    <option value="ui-ux-design"
                                        {{ $portfolio->section === 'ui-ux-design' ? 'selected' : '' }}>
                                        UI &amp; UX Design
                                    </option>
                                    <option value="photos-taken-by-me"
                                        {{ $portfolio->section === 'photos-taken-by-me' ? 'selected' : '' }}>
                                        Photos taken by me
                                    </option>
                                </select>
                                @error('section')
                                    <p class="text-danger inputerror">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Link</label>
                                <input type="text" name="link" class="form-control border border-2 p-2"
                                    value="{{ $portfolio->link }}">
                                @error('link')
                                    <p class="text-danger inputerror">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control border border-2 p-2">
                                @error('image')
                                    <p class="text-danger inputerror">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="text-center">
                                <a href="{{ route('portfolio.index') }}" class="btn btn-info"
                                style="margin-left: 150px">Back</a>
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
