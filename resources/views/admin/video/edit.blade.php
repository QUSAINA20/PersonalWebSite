<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="video"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Edit Video"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card card-body mx-3 mx-md-4 mt-4">
                        <form method="POST" action="{{ route('video.update', $video) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control border border-2 p-2"
                                    value="{{ $video->name }}">
                                @error('name')
                                    <p class="text-danger inputerror">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Section</label>
                                <select name="section" class="form-select border border-2 p-2">
                                    <option value="adobe-photoshop"
                                        {{ $video->section === 'adobe-photoshop' ? 'selected' : '' }}>
                                        Adobe Photoshop
                                    </option>
                                    <option value="adobe-illustrator"
                                        {{ $video->section === 'adobe-illustrator' ? 'selected' : '' }}>
                                        Adobe illustrator
                                    </option>
                                    <option value="adobe-xd" {{ $video->section === 'adobe-xd' ? 'selected' : '' }}>
                                        Adobe XD
                                    </option>
                                    <option value="after-effect"
                                        {{ $video->section === 'after-effect' ? 'selected' : '' }}>
                                        After Effect
                                    </option>
                                </select>
                                @error('section')
                                    <p class="text-danger inputerror">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Link</label>
                                <input type="text" name="link" class="form-control border border-2 p-2"
                                    value="{{ $video->link }}">
                                @error('link')
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
