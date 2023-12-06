<div>
    <div class="px-5">
        <span class="text-1rem font-bold">Personal Information</span>
    </div>
    <div class="flex flex-wrap pb-5 px-5">
        {{-- Student Number --}}
        <div class="w-full md:w-1/2">
            <small class="font-normal text-darkGray text-xs">Student Number</small>
            <h6 class="text-1rem font-medium leading-5 mb-2">{{ $student_no }}</h6>
        </div>
        {{-- Student Name --}}
        <div class="w-full md:w-1/2">
            <small class="font-normal text-darkGray text-xs">Student Name</small>
            <h6 class="text-1rem font-medium leading-5 mb-2">{{ $first_name . ' ' . $middle_name . ' ' . $last_name }}
            </h6>
        </div>

        {{-- Account Type --}}
        <div class="w-full md:w-1/2">
            <small class="font-normal text-darkGray text-xs">Student Account Type</small>
            <h6 class="text-1rem font-medium leading-5 mb-2">{{ $account_type }}</h6>
        </div>
        {{-- Sex --}}
        <div class="w-full md:w-1/2">
            <small class="font-normal text-darkGray text-xs">Sex</small>
            <h6 class="text-1rem font-medium leading-5 mb-2">{{ $sex }}</h6>
        </div>

        {{-- Nationality --}}
        <div class="w-full md:w-1/2">
            <small class="font-normal text-darkGray text-xs">Nationality</small>
            <h6 class="text-1rem font-medium leading-5 mb-2">{{ $nationality }}</h6>
        </div>
        {{-- Civil Status --}}
        <div class="w-full md:w-1/2">
            <small class="font-normal text-darkGray text-xs">Civil Status</small>
            <h6 class="text-1rem font-medium leading-5 mb-2">{{ $civil_status }}</h6>
        </div>

        {{-- Date of Birth --}}
        <div class="w-full md:w-1/2">
            <small class="font-normal text-darkGray text-xs">Date of Birth</small>
            <h6 class="text-1rem font-medium leading-5 mb-2">{{ \Carbon\Carbon::parse($birthdate)->format('F j, Y') }}</h6>
        </div>
        {{-- Place of Birth --}}
        <div class="w-full md:w-1/2">
            <small class="font-normal text-darkGray text-xs">Place of Birth</small>
            <h6 class="text-1rem font-medium leading-5 mb-2">{{ $birthplace }}</h6>
        </div>
    </div>

    <div class="px-5">
        <span class="text-1rem font-bold">Contact Information</span>
    </div>
    <div class="flex flex-wrap pb-5 px-5">
        {{-- Address --}}
        <div class="w-full">
            <small class="font-normal text-darkGray text-xs">Home Address</small>
            <h6 class="text-1rem font-medium leading-5 mb-2">{{ $address }}</h6>
        </div>

        {{-- Phone Number --}}
        <div class="w-full md:w-1/2">
            <small class="font-normal text-darkGray text-xs">Phone Number</small>
            <h6 class="text-1rem font-medium leading-5 mb-2">{{ $phone }}</h6>
        </div>
        {{-- Email --}}
        <div class="w-full md:w-1/2">
            <small class="font-normal text-darkGray text-xs">Email Address</small>
            <h6 class="text-1rem font-medium leading-5 mb-2">{{ $email }}</h6>
        </div>
    </div>

    {{-- Close button --}}
    <div class="flex justify-end items-center mt-4">
        <x-button x-on:click="$dispatch('close-modal')" btnType="secondary" wire:loading.attr="disabled">Close
        </x-button>
    </div>
</div>