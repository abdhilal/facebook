<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء حساب جديد</title>
    <link rel="stylesheet" href="style_signup.css">
</head>

<body>

    <div class="signup-container">
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo">
        <h2>إنشاء حساب في فيسبوك</h2>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <input type="text" name="name" placeholder="الاسم" required>
            <input type="email" name="email" placeholder="البريد الإلكتروني" required>
            <input type="password" name="password" placeholder="كلمة المرور" required>
            <input type="password" name="password_confirmation" placeholder="تأكيد كلمة المرور" required>
            <button type="submit" class="signup-btn">التسجيل</button>
        </form>
        <div class="login-link">
            <span>هل لديك حساب؟ <a href="{{route('login')}}">تسجيل الدخول</a></span>
        </div>
    </div>

</body>

</html>
