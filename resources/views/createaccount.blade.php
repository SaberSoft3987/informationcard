<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>إنشاء حساب</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            margin: 0;
            background-color: #f0f2f5;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .header {
            background-color: #28a745; /* Green */
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header .login-link {
            font-size: 1.1em;
        }
        .header .logo {
            display: flex;
            align-items: center;
        }
        .header .logo img {
            height: 40px;
            margin-left: 10px;
        }
        .header .logo span {
            font-size: 1.5em;
            font-weight: bold;
        }
        .sidebar {
            background-color: white;
            width: 200px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            position: fixed;
            height: calc(100% - 60px); /* Adjust based on header height */
            top: 60px; /* Adjust based on header height */
            right: 0;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
            width: 100%;
        }
        .sidebar ul li {
            margin-bottom: 15px;
            text-align: right;
        }
        .sidebar ul li a {
            text-decoration: none;
            color: #333;
            font-size: 1.1em;
            display: block;
            padding: 8px 0;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .sidebar ul li a:hover {
            background-color: #e9ecef;
        }
        .main-content {
            flex-grow: 1;
            margin-right: 220px; /* Space for sidebar */
            padding: 30px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding-top: 80px; /* Space for header */
        }
        .footer {
            background-color: #f8f9fa;
            color: #6c757d;
            text-align: center;
            padding: 15px 20px;
            font-size: 0.9em;
            border-top: 1px solid #e9ecef;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
        }
         .login-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 30px;
            max-width: 500px;
            margin: 50px auto;
            text-align: center;
            
        }
        .login-card h2 {
            color: #28a745;
            margin-bottom: 20px;
            font-size: 1.8em;
        }
        .login-card .form-group {
            margin-bottom: 15px;
            text-align: right;
        }
        .login-card .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }
        .login-card .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 10px;
            width: 100%;
        }
        .login-card .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
            padding: 10px 180px;
            border-radius: 25px;
            font-size: 1.1em;
            margin-top: 20px;
        }
        .login-card .btn-primary:hover {
            background-color: #218838;
            border-color: #218838;
        }
        .login-card .forgot-password,
        .login-card .register-link {
            margin-top: 20px;
            font-size: 4em;
        }
        .login-card .forgot-password a {
            color: #dc3545; /* Red for forgot password */
            text-decoration: none;
        }
        .login-card .register-link a {
            color: #28a745;
            text-decoration: none;
        }
        .footer .blackbox-logo {
            height: 25px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="{{ asset('images/3.png') }}" alt="Algeria Flag" style="height: 40px; margin-left: 10px;">
            <span>مديرية التربية الوادي </span>
        </div>
    </div>

    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="in">
              <li class="sidebar-item selected">
                <a class="sidebar-link waves-effect waves-dark sidebar-link active" href="https://127.0.0.1:8000/home" aria-expanded="false"><i class="mdi me-2 mdi-home"></i><span class="hide-menu">الرئيسية</span></a>
              </li>			  
              {{-- <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://tawdif.education.dz/calender" aria-expanded="false"><i class="mdi me-2 mdi-calendar"></i><span class="hide-menu">الرزنامة</span></a>
              </li>	 --}}
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/createaccount" aria-expanded="false"><i class="mdi me-2 mdi-file-document"></i><span class="hide-menu">إنشاء  حســاب </span></a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/auth" aria-expanded="false">
                  <i class="mdi me-2 mdi-login"></i><span class="hide-menu">الدخول إلى حسابي</span></a>
              </li>
            </ul>
          </nav>
    </div>

    <div class="main-content">
        <div class="login-card">
            <h2>إنشاء حساب </h2>
            <form id="storeform" action="{{ route('userstore') }}" method="POST">
                @csrf 

                @if ($errors->any())
                    <div style="background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; padding: 10px; margin-bottom: 15px; border-radius: 5px; text-align: right;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                    <label for="email">   البريد الإلكتروني :</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="  البريد الإلكتروني " required>
                </div>
                <div class="form-group">
                    <label for="name">اسم المستخدم :</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="اسم المستخدم   " required>
                </div>
                <div class="form-group">
                    <label for="password">كلمة المرور:</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="كلمة المرور" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password">تأكيد كلمة المرور:</label>
                    <input type="password" class="form-control" name="password_confirmation"  id="confirm_password" placeholder="كلمة المرور" required>
                </div>
                
                
                <button type="submit" class="btn btn-primary">إنشاء حساب    </button>
            </form>
        </div>
    </div>

    <div class="footer">
        <span>© 2025 كل الحقوق محفوظة مديرية  التربية لولاية الوادي</span>
    </div>

    <script>
        document.getElementById('storeform').addEventListener('submit', function(event) {
            const password = document.getElementById('password').value;
            const confirm_password = document.getElementById('confirm_password').value;

            if (password !== confirm_password) {
                alert('كلمة المرور وتأكيد كلمة المرور غير متطابقين.');
                event.preventDefault(); // Prevent form submission
            }
        });
