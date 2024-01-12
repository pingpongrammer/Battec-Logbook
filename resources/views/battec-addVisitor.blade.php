@extends('layout.battec-dashboard')
@section('content')

<form action="/store-visitors" enctype="multipart/form-data" method="post" role="form">
    @csrf
        <div class="mx-auto bg-white w-[97%] rounded-md shadow-md shadow-[#21351B] sm:w-[70%] lg:w-[50%]">
            <h1 class="text-center p-4 text-xl font-bold text-[#21351B]">VISITORS REGISTRATION</h1>
            <div class="py-2 px-6 sm:px-9 lg:px-14">
                <h1 class="text-md">DATE</h1>
                <input class="bg-[#21351B] text-white py-2 px-2 w-[100%] rounded-md" name="date" readonly value="{{$currentDate}}" required>
                @Error('date')
                <p class="text-danger text-md mt-1">{{$message}}</p>
               @enderror
            </div>
            <div class="py-2 px-6 sm:px-9 lg:px-14">
                <h1 class="text-md">NAME</h1>
                <input class="bg-[#21351B] text-white py-2 px-2 w-[100%] rounded-md" name="name" type="text" placeholder="Input Name" >
            </div>

            <div class="py-2 px-6 sm:px-9 lg:px-14">
                <h1 class="text-md">ADDRESS</h1>
                <input class="bg-[#21351B] text-white py-2 px-2 w-[100%] rounded-md" name="address" type="text" placeholder="Input Address" >
            </div>

            <input hidden name="amount" value="50">

            <div class="p-5 text-white">
                <button type="submit" class="mx-auto block bg-[#21351B] px-7 py-2 rounded-lg hover:bg-[#C7FFC9] hover:text-black border-[#21351B] border">
                    Register
                </button>
            </div>
        </div>
</form>

<script>
    function showAmountInput() {
        var paymentDropdown = document.getElementById("payment");
        var amountInput = document.getElementById("amountInput");

        if (paymentDropdown.value === "partial") {
            amountInput.style.display = "block";
        } else {
            amountInput.style.display = "none";
        }
    }
</script>

@endsection