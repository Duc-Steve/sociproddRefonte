

@if (session('error'))
    <div class="bg-sociprodd-rouge br-sociprodd-1 d-flex justify-content-center mt-4 mb-4 p-1 pt-2">
        <h4 class="text-sociprodd-blanc">{{ session('error') }}</h4>
    </div>
@endif

@if (session('succes'))
    <div class="bg-sociprodd-vert br-sociprodd-1 d-flex justify-content-center mt-4 mb-4 p-1 pt-2">
        <h4 class="text-sociprodd-blanc">{{ session('succes') }}</h4>
    </div>
@endif