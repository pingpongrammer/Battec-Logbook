@extends('layout.battec-dashboard')
@section('content')
<section class="card-section grid lg:grid-cols-4 gap-4 sm:grid-cols-2">
    <div class="card shadow-md shadow-[#21351B] flex justify-start items-center pt-2 pb-2 bg-white">
        <div class="mr-6">
            <i class="fa fa-credit-card text-6xl m-4 text-[#21351B] "></i>
        </div>
        <div>
            <h1 class="text-4xl">{{$earnMember}}</h1>
            <h3 class="text-sm">Members Earn</h3>
        </div>
    </div>
    
    <div class="card shadow-md shadow-[#21351B] flex justify-start items-center pt-2 pb-2 bg-white">
        <div class="mr-6">
            <i class="fa fa-credit-card-alt text-6xl m-4 text-[#21351B]" ></i>
        </div>
        <div>
            <h1 class="text-4xl">{{$earnVisitors}}</h1>
            <h3 class="text-sm">Visitors Earn</h3>
        </div>
    </div>
    <div class="card shadow-md shadow-[#21351B] flex justify-start items-center pt-2 pb-2 bg-white">
        <div class="mr-6">
            <i class="fa fa-user-o text-7xl m-4 text-[#21351B]"></i>
        </div>
        <div>
            <h1 class="text-4xl">{{$countMember}}</h1>
            <h3 class="text-sm">Total Members</h3>
        </div>
    </div>
    <div class="card shadow-md shadow-[#21351B] flex justify-start items-center pt-2 pb-2 bg-white">
        <div class="mr-6">
            <i class="fa fa-users text-6xl m-4 text-[#21351B]"></i>
        </div>
        <div>
            <h1 class="text-4xl">{{$countVisitors}}</h1>
            <h3 class="text-sm">Total Visitors</h3>
        </div>
    </div>
    </section>
@endsection