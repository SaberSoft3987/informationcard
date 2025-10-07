<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>المنصة الرقمية لإستعلامات  </title>
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
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding-top: 80px; /* Space for header */
        }
        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 30px;
            max-width: 800px;
            text-align: center;
        }
        .card h1 {
            color: #dc3545; /* Red */
            font-size: 2em;
            margin-bottom: 20px;
        }
        .card h2 {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 10px;
        }
        .card .ministry-logo {
            height: 80px;
            margin-bottom: 20px;
        }
        .card p {
            font-size: 1.1em;
            line-height: 1.8;
            color: #555;
            margin-bottom: 30px;
            text-align: justify;
        }
        .buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .btn {
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            color: white;
        }
        .btn-orange {
            background-color: #fd7e14; /* Orange */
        }
        .btn-orange:hover {
            background-color: #e66a00;
        }
        .btn-purple {
            background-color: #6f42c1; /* Purple */
        }
        .btn-purple:hover {
            background-color: #5a35a0;
        }
        .btn-green {
            background-color: #28a745; /* Green */
        }
        .btn-green:hover {
            background-color: #218838;
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

    @if(session('success'))
        <div style="background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; padding: 10px; margin: 10px 20px; border-radius: 5px; text-align: center;">
            {{ session('success') }}
        </div>
    @endif

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
        <div class="card">
            <h2>الجمهورية الجزائرية الديمقراطية الشعبية</h2>
            <img src="{{ asset('images/1.png') }}" alt="Ministry of National Education Logo" class="ministry-logo">
            <h2>  مديرية التربية لولاية الوادي </h2>
            {{-- <img src="{{ asset('images/2.png') }}" alt="Ministry of National Education Logo" class="ministry-logo"> --}}
            <h1>المنصة الرقمية لإستعلامات الموظفين   </h1>
            <p>
                في إطار التحضير للدخول المدرسي 2025-2026، وفي انتظار تنظيم مسابقة توظيف الأساتذة شهر ديسمبر 2025، تعلن وزارة التربية الوطنية عن فتح المنصة الرقمية استثنائيا لتوظيف أساتذة بصفة متعاقدين. وتدعو الراغبين في ذلك والمستوفين للشروط، والحائزين على الشهادات المبينة في قائمة المؤهلات والشهادات المطلوبة للتوظيف والترقية في رتب أسلاك موظفي التعليم (اضغط هنا)، إلى التسجيل على هذه المنصة. وهذا وفقا لأحكام التعليمة الوزارية المشتركة رقم 5 المؤرخة في 24 جويلية 2025 والتي تحدد كيفيات توظيف أساتذة بصفة متعاقدين في المؤسسات العمومية للتربية والتعليم التابعة لوزارة التربية الوطنية ودفع رواتبهم.
            </p>
            <div class="buttons">
                {{-- <a href="#" class="btn btn-orange">رزنامة المشاركة</a> --}}
                <a href="/auth" class="btn btn-purple">الدخول إلى حسابي</a>
                <a href="/createaccount" class="btn btn-green">إنشاء  حســاب   </a>
            </div>
        </div>
    </div>

    <div class="footer">
        <span>© 2025 كل الحقوق محفوظة مديرية  التربية لولاية الوادي</span>

    </div>
</body>
</html>
