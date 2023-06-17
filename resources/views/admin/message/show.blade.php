<x-layout bodyClass="g-sidenav-show bg-gray-200">

    <x-navbars.sidebar activePage="message"></x-navbars.sidebar>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Show Message"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card card-body mx-3 mx-md-4 mt-4">
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input readonly type="text" name="name" class="form-control border border-2 p-2"
                                    value="{{ $message->name }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input readonly type="text" name="email" class="form-control border border-2 p-2"
                                    value="{{ $message->email }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Content</label>
                                <textarea readonly name="content" class="form-control border border-2 p-2"
                                    oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'rows="10">{{ $message->content }}</textarea>
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
