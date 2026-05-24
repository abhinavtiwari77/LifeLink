<x-guest-layout>
    <x-slot name="isRegister">true</x-slot>

    <h2 class="auth-heading">Create your account</h2>
    <p class="auth-subheading">Join LifeLink and start saving lives today.</p>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        @php $iconStyle = "position:absolute;left:13px;top:50%;transform:translateY(-50%);width:16px;height:16px;color:#9CA3AF;pointer-events:none;"; @endphp

        <!-- Name & Email -->
        <div class="form-row">
            <div class="form-group">
                <label class="auth-label" for="name">Full Name</label>
                <div style="position:relative;">
                    <svg style="{{ $iconStyle }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" /></svg>
                    <input id="name" class="auth-input" style="padding-left:40px;" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="John Doe">
                </div>
                @error('name')<p class="field-error">{{ $message }}</p>@enderror
            </div>
            <div class="form-group">
                <label class="auth-label" for="email">Email Address</label>
                <div style="position:relative;">
                    <svg style="{{ $iconStyle }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
                    <input id="email" class="auth-input" style="padding-left:40px;" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="you@email.com">
                </div>
                @error('email')<p class="field-error">{{ $message }}</p>@enderror
            </div>
        </div>

        <!-- Phone & City -->
        <div class="form-row">
            <div class="form-group">
                <label class="auth-label" for="phone">Phone Number</label>
                <div style="position:relative;">
                    <svg style="{{ $iconStyle }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" /></svg>
                    <input id="phone" class="auth-input" style="padding-left:40px;" type="text" name="phone" value="{{ old('phone') }}" required placeholder="+91 98765 43210">
                </div>
                @error('phone')<p class="field-error">{{ $message }}</p>@enderror
            </div>
            <div class="form-group">
                <label class="auth-label" for="city">City</label>
                <div style="position:relative;">
                    <svg style="{{ $iconStyle }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" /></svg>
                    <input id="city" class="auth-input" style="padding-left:40px;" type="text" name="city" value="{{ old('city') }}" required placeholder="e.g. Mumbai, Delhi, Bangalore">
                </div>
                @error('city')<p class="field-error">{{ $message }}</p>@enderror
            </div>
        </div>

        <!-- Address -->
        <div class="form-group">
            <label class="auth-label" for="address">Full Address</label>
            <div style="position:relative;">
                <svg style="{{ $iconStyle }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" /></svg>
                <input id="address" class="auth-input" style="padding-left:40px;" type="text" name="address" value="{{ old('address') }}" required placeholder="Street, Area, City">
            </div>
            @error('address')<p class="field-error">{{ $message }}</p>@enderror
        </div>

        <!-- Register As -->
        <div class="form-group">
            <span class="radio-group-label">Register As</span>
            <div class="radio-options">
                <label class="radio-option {{ old('is_donor') == '0' ? 'selected' : '' }}" id="label-patient">
                    <input type="radio" name="is_donor" value="0" onclick="toggleDonorFields(false); updateRadioStyles(this)" {{ old('is_donor') == '0' ? 'checked' : '' }} required>
                    <svg style="width:17px;height:17px;flex-shrink:0;color:#9CA3AF;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" /></svg>
                    <span>Patient / Requester</span>
                </label>
                <label class="radio-option {{ old('is_donor', '1') == '1' ? 'selected' : '' }}" id="label-donor">
                    <input type="radio" name="is_donor" value="1" onclick="toggleDonorFields(true); updateRadioStyles(this)" {{ old('is_donor', '1') == '1' ? 'checked' : '' }} required>
                    <svg style="width:17px;height:17px;flex-shrink:0;color:#9CA3AF;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" /></svg>
                    <span>Blood Donor</span>
                </label>
            </div>
            @error('is_donor')<p class="field-error">{{ $message }}</p>@enderror
        </div>

        <!-- Donor-only fields -->
        <div id="donor_fields">
            <div class="form-row">
                <div class="form-group">
                    <label class="auth-label" for="blood_group">Blood Group</label>
                    <div style="position:relative;">
                        <svg style="{{ $iconStyle }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" /></svg>
                        <select id="blood_group" name="blood_group" class="auth-input" style="padding-left:40px;">
                            <option value="">Unknown</option>
                            <option value="A+"  @selected(old('blood_group')=='A+')>A+</option>
                            <option value="A-"  @selected(old('blood_group')=='A-')>A-</option>
                            <option value="B+"  @selected(old('blood_group')=='B+')>B+</option>
                            <option value="B-"  @selected(old('blood_group')=='B-')>B-</option>
                            <option value="AB+" @selected(old('blood_group')=='AB+')>AB+</option>
                            <option value="AB-" @selected(old('blood_group')=='AB-')>AB-</option>
                            <option value="O+"  @selected(old('blood_group')=='O+')>O+</option>
                            <option value="O-"  @selected(old('blood_group')=='O-')>O-</option>
                        </select>
                    </div>
                    @error('blood_group')<p class="field-error">{{ $message }}</p>@enderror
                </div>
                <div class="form-group">
                    <label class="auth-label" for="gender">Gender</label>
                    <div style="position:relative;">
                        <svg style="{{ $iconStyle }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" /></svg>
                        <select id="gender" name="gender" class="auth-input" style="padding-left:40px;">
                            <option value="">Select</option>
                            <option value="male"   @selected(old('gender')=='male')>Male</option>
                            <option value="female" @selected(old('gender')=='female')>Female</option>
                        </select>
                    </div>
                    @error('gender')<p class="field-error">{{ $message }}</p>@enderror
                </div>
            </div>

            <!-- Age -->
            <div class="form-group">
                <label class="auth-label" for="age">Age</label>
                <div style="position:relative;">
                    <svg style="{{ $iconStyle }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" /></svg>
                    <input id="age" class="auth-input" style="padding-left:40px;" type="number" name="age" value="{{ old('age') }}" min="18" max="65" placeholder="18–65 years">
                </div>
                @error('age')<p class="field-error">{{ $message }}</p>@enderror
            </div>
        </div>

        <!-- Password & Confirm -->
        <div class="form-row">
            <div class="form-group">
                <label class="auth-label" for="password">Password</label>
                <div style="position:relative;">
                    <svg style="{{ $iconStyle }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" /></svg>
                    <input id="password" class="auth-input" style="padding-left:40px;" type="password" name="password" required autocomplete="new-password" placeholder="••••••••">
                </div>
                @error('password')<p class="field-error">{{ $message }}</p>@enderror
            </div>
            <div class="form-group">
                <label class="auth-label" for="password_confirmation">Confirm Password</label>
                <div style="position:relative;">
                    <svg style="{{ $iconStyle }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" /></svg>
                    <input id="password_confirmation" class="auth-input" style="padding-left:40px;" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="••••••••">
                </div>
                @error('password_confirmation')<p class="field-error">{{ $message }}</p>@enderror
            </div>
        </div>

        <!-- Terms -->
        <div class="form-group" style="margin-bottom:6px;">
            <label style="display:flex;align-items:flex-start;gap:10px;font-size:0.8rem;color:#6B7280;line-height:1.5;cursor:pointer;">
                <input type="checkbox" required style="width:15px;height:15px;accent-color:#e53935;flex-shrink:0;margin-top:2px;">
                <span>I agree to the <a href="#" class="auth-link">Terms of Service</a> and <a href="#" class="auth-link">Privacy Policy</a>. Data handled with medical-grade confidentiality.</span>
            </label>
        </div>

        <button type="submit" class="auth-btn">Create Account</button>
    </form>

    <p class="auth-link-row">
        Already have an account? <a href="{{ route('login') }}" class="auth-link">Log in here</a>
    </p>

    <script>
        function toggleDonorFields(isDonor) {
            document.getElementById('donor_fields').style.display = isDonor ? 'block' : 'none';
        }
        function updateRadioStyles(radio) {
            document.querySelectorAll('.radio-option').forEach(el => el.classList.remove('selected'));
            radio.closest('.radio-option').classList.add('selected');
        }
        document.addEventListener('DOMContentLoaded', function () {
            const radios = document.getElementsByName('is_donor');
            let isDonor = true;
            for (let r of radios) { if (r.checked && r.value === '0') isDonor = false; }
            toggleDonorFields(isDonor);
        });
    </script>
</x-guest-layout>
