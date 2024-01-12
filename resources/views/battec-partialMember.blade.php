@extends('layout.battec-dashboard')
@section('content')

<form action="/updatePartial/{{$member->id}}" enctype="multipart/form-data" method="post" role="form">
    @csrf
        <div class="mx-auto bg-white w-[97%] rounded-md shadow-md shadow-[#21351B] sm:w-[70%] lg:w-[50%]">
            <h1 class="text-center p-4 text-md sm:text-xl font-bold text-[#21351B] uppercase">PARTIAL PAYMENT OF {{$member->name}}</h1>
            <div class="py-2 px-6 sm:px-9 lg:px-14">
                <h1 class="text-md">DATE</h1>
                <input class="bg-[#21351B] text-white py-2 px-2 w-[100%] rounded-md" name="date" readonly value="{{$currentDate}}" required>
                @Error('date')
                <p class="text-danger text-md mt-1">{{$message}}</p>
               @enderror
            </div>
            <div class="py-2 px-6 sm:px-9 lg:px-14">
                <h1 class="text-md">NAME</h1>
                <input class="bg-[#21351B] text-white py-2 px-2 w-[100%] rounded-md" name="name" type="text" placeholder="Input Name" value="{{$member->name}}">
            </div>
            <div class="py-2 px-6 sm:px-9 lg:px-14">
                <h1 class="text-md">STATUS</h1>
                <select class="bg-[#21351B] text-white py-2 px-2 w-[100%] rounded-md" name="status" value="{{old('status')}}" required>
                    <option value="">-Select Status-</option>
                    <option value="student" {{$member->status=="student" ? 'selected' :''}}>Student</option>
                    <option value="not-student" {{$member->status=="not-student" ? 'selected' :''}}>Not-Student</option>
                </select>
            </div>

            <div class="py-2 px-6 sm:px-9 lg:px-14">
                <h1 class="text-md">PAYMENT</h1>
                <select class="bg-[#21351B] text-white py-2 px-2 w-[100%] rounded-md" name="payment" id="payment" required onchange="showAmountInput()">
                    <option value="">-Select Payment-</option>
                    <option value="paid" {{$member->payment=="paid" ? 'selected' :''}}>Fully Paid</option>
                    <option value="partial" {{$member->payment=="partial" ? 'selected' :''}}>Partial</option>
                </select>
            </div>

            <div class="py-2 px-6 sm:px-9 lg:px-14" id="amountInput" style="display: none;">
                <h1 class="text-md">AMOUNT</h1>
                <input class="bg-[#21351B] text-white py-2 px-2 w-[100%] rounded-md" name="amount" type="number" placeholder="Input Amount">
            </div>

            <div class="p-5 text-white">
                <button type="submit" class="mx-auto block bg-[#21351B] px-7 py-2 rounded-lg hover:bg-[#C7FFC9] hover:text-black border-[#21351B] border">
                    Update
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