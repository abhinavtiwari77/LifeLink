<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LifeLink – Authentication</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Inter:wght@400;500;600;700&family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&family=Poppins:wght@700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        *, *::before, *::after { box-sizing: border-box; }
        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);
            padding: 24px 16px;
        }
        .auth-wrapper {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }
        .auth-wrapper.wide {
            max-width: 560px;
        }
        /* Logo */
        .auth-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 28px;
        }
        .auth-logo img {
            height: 44px;
            width: auto;
        }
        .auth-logo-text {
            font-family: 'Caveat', cursive;
            font-size: 2.4rem;
            font-weight: 700;
            color: #e53935;
            letter-spacing: 0.5px;
            line-height: 1;
        }
        /* Card */
        .auth-card {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.04), 0 20px 40px -8px rgba(0,0,0,0.10);
            padding: 40px 40px 36px;
            border: 1px solid rgba(0,0,0,0.04);
        }
        @media (max-width: 480px) {
            .auth-card { padding: 28px 20px 24px; }
        }
        /* Headings */
        .auth-heading {
            font-family: 'Poppins', sans-serif;
            font-size: 1.65rem;
            font-weight: 700;
            color: #111827;
            margin: 0 0 6px 0;
            line-height: 1.2;
        }
        .auth-subheading {
            font-size: 0.875rem;
            color: #6B7280;
            margin: 0 0 28px 0;
            line-height: 1.5;
        }
        /* Form Labels */
        .auth-label {
            display: block;
            font-size: 0.8125rem;
            font-weight: 600;
            color: #374151;
            margin-bottom: 6px;
            letter-spacing: 0.01em;
        }
        /* Inputs */
        .auth-input {
            display: block;
            width: 100%;
            height: 44px;
            padding: 0 14px;
            font-size: 0.9rem;
            font-family: 'Inter', sans-serif;
            color: #111827;
            background: #f9fafb;
            border: 1.5px solid #E5E7EB;
            border-radius: 10px;
            outline: none;
            transition: border-color 0.18s, box-shadow 0.18s, background 0.18s;
            -webkit-appearance: none;
        }
        .auth-input:hover {
            border-color: #F9A8A8;
            background: #fff;
        }
        .auth-input:focus {
            border-color: #e53935;
            box-shadow: 0 0 0 3px rgba(229,57,53,0.12);
            background: #fff;
        }
        select.auth-input {
            cursor: pointer;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%236B7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 16px;
            padding-right: 36px;
        }
        /* Form groups */
        .form-group { margin-bottom: 18px; }
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
        }
        @media (max-width: 480px) {
            .form-row { grid-template-columns: 1fr; }
        }
        /* Radio cards */
        .radio-group-label {
            font-size: 0.8125rem;
            font-weight: 600;
            color: #374151;
            margin-bottom: 10px;
            display: block;
        }
        .radio-options {
            display: flex;
            gap: 10px;
        }
        .radio-option {
            flex: 1;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 11px 14px;
            border: 1.5px solid #E5E7EB;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.18s;
            background: #f9fafb;
        }
        .radio-option:hover {
            border-color: #e53935;
            background: #fff5f5;
        }
        .radio-option input[type="radio"] {
            width: 16px;
            height: 16px;
            accent-color: #e53935;
            cursor: pointer;
            flex-shrink: 0;
        }
        .radio-option span {
            font-size: 0.85rem;
            font-weight: 500;
            color: #374151;
        }
        .radio-option.selected {
            border-color: #e53935;
            background: #fff5f5;
        }
        /* Button */
        .auth-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 46px;
            padding: 0 24px;
            font-family: 'Inter', sans-serif;
            font-size: 0.9rem;
            font-weight: 700;
            color: #fff;
            background: linear-gradient(135deg, #e53935 0%, #b71c1c 100%);
            border: none;
            border-radius: 10px;
            cursor: pointer;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            box-shadow: 0 4px 12px rgba(229,57,53,0.35);
            transition: all 0.2s;
            margin-top: 22px;
        }
        .auth-btn:hover {
            background: linear-gradient(135deg, #c62828 0%, #7f0000 100%);
            box-shadow: 0 6px 20px rgba(229,57,53,0.45);
            transform: translateY(-1px);
        }
        .auth-btn:active { transform: translateY(0); }
        /* Links */
        .auth-link-row {
            text-align: center;
            font-size: 0.85rem;
            color: #6B7280;
            margin-top: 20px;
        }
        .auth-link {
            color: #e53935;
            font-weight: 700;
            text-decoration: none;
        }
        .auth-link:hover { color: #b71c1c; text-decoration: underline; }
        .auth-divider {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 6px 0 18px;
            color: #9CA3AF;
            font-size: 0.8rem;
        }
        .auth-divider::before, .auth-divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #E5E7EB;
        }
        /* Back link */
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 0.82rem;
            color: #9CA3AF;
            text-decoration: none;
            transition: color 0.15s;
        }
        .back-link:hover { color: #e53935; }
        /* Error messages */
        .field-error {
            font-size: 0.78rem;
            color: #dc2626;
            margin-top: 4px;
        }
        /* Checkbox */
        .auth-checkbox-row {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.84rem;
            color: #6B7280;
        }
        .auth-checkbox-row input[type="checkbox"] {
            width: 16px;
            height: 16px;
            accent-color: #e53935;
            cursor: pointer;
            flex-shrink: 0;
        }
        /* Forgot password row */
        .label-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 6px;
        }
        .label-row .auth-label { margin-bottom: 0; }
        .forgot-link {
            font-size: 0.8rem;
            color: #e53935;
            font-weight: 600;
            text-decoration: none;
        }
        .forgot-link:hover { color: #b71c1c; }
        /* Terms */
        .terms-row {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            font-size: 0.8rem;
            color: #6B7280;
            line-height: 1.5;
        }
        .terms-row input { margin-top: 2px; flex-shrink: 0; }
        /* Input icon wrappers */
        .input-icon-wrap {
            position: relative;
        }
        .input-icon {
            position: absolute;
            left: 13px;
            top: 50%;
            transform: translateY(-50%);
            width: 16px;
            height: 16px;
            color: #9CA3AF;
            pointer-events: none;
            flex-shrink: 0;
            transition: color 0.18s;
        }
        .input-icon-wrap:focus-within .input-icon {
            color: #e53935;
        }
        .auth-input.has-icon {
            padding-left: 40px;
        }
        /* Radio options */
        .radio-option svg {
            transition: color 0.18s;
        }
        .radio-option.selected svg,
        .radio-option:hover svg {
            color: #e53935;
        }
        /* session status */
        .session-status {
            background: #ecfdf5;
            border: 1px solid #a7f3d0;
            color: #065f46;
            border-radius: 8px;
            padding: 10px 14px;
            font-size: 0.85rem;
            margin-bottom: 18px;
        }
    </style>
</head>
<body>

    <div class="auth-wrapper {{ isset($isRegister) && $isRegister ? 'wide' : '' }}">
        <!-- Logo -->
        <div class="auth-logo">
            <a href="{{ route('home') }}" style="display:flex; align-items:center; gap:10px; text-decoration:none;">
                <img src="{{ asset('imgs/bloodDropLogo.png') }}" alt="LifeLink Logo">
                <span class="auth-logo-text">LifeLink</span>
            </a>
        </div>

        <!-- Auth Card -->
        <div class="auth-card">
            {{ $slot }}
        </div>

        <!-- Back link -->
        <a href="{{ route('home') }}" class="back-link">← Back to Homepage</a>
    </div>

</body>
</html>
