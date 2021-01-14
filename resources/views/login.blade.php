@extends('layout_login')
@section('content')
<div class="header">
    <h1>ZISS</h1>
</div>

<div class="mail-form shadow">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your name...." />
        <input type="password" name="password" required autocomplete="current-password" class="pass" placeholder="Password"/>
        <input type="submit" class="btn btn-primary" value="Login">
    </form>
</div>

<div class="footer">
    <p>© 2019-20 Design by  <a href="https://digitalxone.com" target="_blank"> DigitalXone  </a></p>
</div>
@endsection('content')
