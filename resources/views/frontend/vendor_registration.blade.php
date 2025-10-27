@extends('frontend.layout.main')
@section('title', 'Vendor Registration')
@section('content')
    <style>
/* ====== Page Section ====== */
.page-section {
    background: #ffffff;
    padding: 70px 0;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* ====== Form Card ====== */
.register-card {
    max-width: 420px;
    width: 100%;
    background: #fff;
    border: 1px solid #e5e5e5;
    border-radius: 8px;
    padding: 40px 35px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
}

/* ====== Header ====== */
.register-card h4 {
    font-size: 24px;
    font-weight: 700;
    color: #111;
    text-align: center;
    margin-bottom: 10px;
}
.register-card p.subtitle {
    text-align: center;
    font-size: 14px;
    color: #333;
    margin-bottom: 25px;
}
.register-card p.subtitle span {
    color: #28a745;
    font-weight: 600;
}

/* ====== Inputs ====== */
.register-form input {
    width: 100%;
    padding: 12px 14px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 15px;
    background: #f9f9f9;
    margin-bottom: 16px;
    transition: all 0.3s ease;
}
.register-form input:focus {
    background: #fff;
    border-color: #111;
    box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.1);
    outline: none;
}

/* ====== Checkbox ====== */
.checkbox-container {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 20px;
    font-size: 14px;
    color: #333;
}
.checkbox-container input {
    width: auto;
    margin: 0;
}

/* ====== Submit Button ====== */
.register-button {
    width: 100%;
    background: #111;
    color: #fff;
    font-weight: 600;
    border: none;
    border-radius: 4px;
    padding: 14px;
    font-size: 15px;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
}
.register-button:hover {
    background: #333;
}

/* ====== Footer Note ====== */
.form-footer {
    font-size: 13px;
    color: #666;
    margin-top: 18px;
    text-align: center;
}
.form-footer a {
    color: #111;
    text-decoration: underline;
}
.form-footer a:hover {
    color: #000;
}

/* ====== Responsive ====== */
@media (max-width: 480px) {
    .register-card {
        padding: 30px 20px;
    }
    .register-card h4 {
        font-size: 22px;
    }
}
</style>
<div class="page-section">

    <div class="register-card">

        <h4>Vendor Registration</h4>
        <p class="subtitle">create an account to start Sale!</p>
        @if (Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }}
        </div>
    @endif
    @if (Session::has('success'))
        <div class="alert alert-success text-green" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form class="register-form" action="{{ route('vendor.registration.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" placeholder="Company Name*" required>
            <input type="email" name="email" placeholder="Email Address*" required>
            <input type="text" name="phone" placeholder="Mobile Number*" required>
            <input type="text" name="wechat" placeholder="Whatsapp Number">
            {{-- <input type="text" name="company_name" placeholder="Company Name*" required> --}}
            <input type="text" name="address" placeholder="Company Address*" required>
            <input type="password" name="password" placeholder="Password*" required>
            <input type="file" name="image" placeholder="Profile Image">

            <div class="checkbox-container">
                <input type="checkbox" name="terms" required>
                <label for="terms">I agree to the Terms and Privacy Policy*</label>
            </div>

            <button class="register-button" type="submit">REGISTER & CONTINUE</button>

            <div class="form-footer">
                By creating an account, you agree to our
                <a href="#">Terms</a> and <a href="#">Privacy Policy</a>.
                <br>
                Already have an account? <a href="{{ route('admin.login') }}">Login</a>
            </div>
        </form>
    </div>
</div>


@endsection
