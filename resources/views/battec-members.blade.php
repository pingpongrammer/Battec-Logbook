@extends('layout.battec-dashboard')
@section('content')
@include('components.alert-message')

<section class="grid grid-cols-1 ">
    <div class="mb-2 text-lg uppercase text-[#21351B] font-bold">
        <h3>Members</h3>
    </div>
    <div style="display: flex; justify-content: space-between; align-items: center;">

        <div class="flex mt-2 mb-2 bg-[#21351B] hover:bg-green-400 p-2 rounded-lg duration-300 items-center text-white hover:text-black cursor-pointer relative text-xs sm:text-sm">
                <i class="fa fa-plus pr-2"></i>
                <div class="w-20 sm:w-24">
                    <a href="/add-member">Add Member</a>
                </div>
        </div>
        <form action="/searchMember" method="GET">
        <div class="flex justify-end">
            <input type="text" class="memSearch p-1 rounded-md" name="query" placeholder="Search here..">
          <button type="submit"><i class="fa fa-search pr-2 py-2 rounded-md px-2 bg-green-600"></i></button>  
        </div>
        </form>
    </div>


    <div class="card shadow-sm shadow-black overflow-auto">
        <table class="w-full border border-[#21351B]">
            <thead class="bg-[#21351B] text-sm text-white">
                <tr>
                    <th class="py-3 px-1 text-left whitespace-nowrap">No</th>
                    <th class="p-3 text-left whitespace-nowrap">Name</th>
                    <th class="p-3 text-left whitespace-nowrap">Date</th>
                    <th class="p-3 text-left whitespace-nowrap">Payment</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($member as $members)
                <tr class="border border-[#21351B] text-sm sm:max-2xl:text-base bg-white capitalize">
                    <td class="py-3 px-1 whitespace-nowrap text-center" scope="row">{{$loop->iteration }}</td>
                    <td class="p-3 whitespace-nowrap ">{{$members->name}}</td>
                    <td class="p-3 whitespace-nowrap">{{$members->date}}</td>
                    @if($members->payment === 'paid')
                    <td class="p-3 whitespace-nowrap "><a href="" class="bg-green-400 px-3 py-1 rounded-md">{{$members->payment}}</a></td>
                    @else
                    <td class="p-3 whitespace-nowrap "><a href="/partial-member/{{$members->id}}" class="bg-yellow-200 px-3 py-1 rounded-md">{{$members->payment}}</a></td>
                    @endif
                </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>
</section>
@endsection