<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone Number')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <div class="grid grid-cols-2 gap-4 mt-4">
            <!-- Blood Group -->
            <div>
                <x-input-label for="blood_group" :value="__('Blood Group')" />
                <select id="blood_group" name="blood_group" class="border-gray-300 focus:border-red-500 focus:ring-red-500 rounded-md shadow-sm block mt-1 w-full" required>
                    <option value="">Select</option>
                    <option value="A+" @if(old('blood_group')=='A+') selected @endif>A+</option>
                    <option value="A-" @if(old('blood_group')=='A-') selected @endif>A-</option>
                    <option value="B+" @if(old('blood_group')=='B+') selected @endif>B+</option>
                    <option value="B-" @if(old('blood_group')=='B-') selected @endif>B-</option>
                    <option value="AB+" @if(old('blood_group')=='AB+') selected @endif>AB+</option>
                    <option value="AB-" @if(old('blood_group')=='AB-') selected @endif>AB-</option>
                    <option value="O+" @if(old('blood_group')=='O+') selected @endif>O+</option>
                    <option value="O-" @if(old('blood_group')=='O-') selected @endif>O-</option>
                </select>
                <x-input-error :messages="$errors->get('blood_group')" class="mt-2" />
            </div>

            <!-- Gender -->
            <div>
                <x-input-label for="gender" :value="__('Gender')" />
                <select id="gender" name="gender" class="border-gray-300 focus:border-red-500 focus:ring-red-500 rounded-md shadow-sm block mt-1 w-full" required>
                    <option value="">Select</option>
                    <option value="male" @if(old('gender')=='male') selected @endif>Male</option>
                    <option value="female" @if(old('gender')=='female') selected @endif>Female</option>
                </select>
                <x-input-error :messages="$errors->get('gender')" class="mt-2" />
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4 mt-4">
            <!-- Age -->
            <div>
                <x-input-label for="age" :value="__('Age')" />
                <x-text-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" min="18" max="65" required />
                <x-input-error :messages="$errors->get('age')" class="mt-2" />
            </div>

            <!-- City -->
            <div>
                <x-input-label for="city" :value="__('City')" />
                <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required />
                <x-input-error :messages="$errors->get('city')" class="mt-2" />
            </div>
        </div>

        <!-- Address -->
        <div class="mt-4">
            <x-input-label for="address" :value="__('Full Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
