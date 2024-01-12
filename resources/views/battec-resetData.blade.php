@extends('layout.battec-dashboard')
@section('content')

<div class="flex justify-center">
    <form method="POST" action="/deleteDataAll">
        @csrf
        <div class="bg-white p-2 h-56">
            <h1 class="text-2xl text-center">Are you sure you want to reset the Data?</h1>
            <h5 class="text-red-600">Note: All the data from the members and visitors will be deleted.</h5>
            <button type="submit" class="mx-auto block bg-green-700">Reset Data</button>
        </div>
    </form>
</div>

@endsection