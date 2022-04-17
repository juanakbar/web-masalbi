{{-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div> --}}
<div class="container d-flex mx-auto mt-5 justify-content-center">
    <div class="row">
        <div class="card shadow-lg">
            <div class="card-body p-5">
                {{ $slot }}
            </div>
        </div>
    </div>

</div>