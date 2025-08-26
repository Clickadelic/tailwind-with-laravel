@if(session('success'))
    <div class="bg-emerald-200 text-emerald-700 border-emerald-700 p-3 rounded mb-3">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="bg-red-100 text-red-700 p-3 rounded mb-3">
        {{ session('error') }}
    </div>
@endif
