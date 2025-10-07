<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>التسجيل</title>
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
        .sidebar ul li.active a {
            background-color: #28a745;
            color: white;
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
        .registration-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 30px;
            max-width: 800px; /* Wider for multi-step form */
            margin: 50px auto;
            text-align: center;
        }
        .registration-container h2 {
            color: #28a745;
            margin-bottom: 20px;
            font-size: 1.8em;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: right;
        }
        .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }
        .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 10px;
            width: 100%;
        }
        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
            padding: 10px 70px;
            border-radius: 25px;
            font-size: 1.1em;
            margin-top: 20px;
        }
        .btn-primary:hover {
            background-color: #218838;
            border-color: #218838;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            padding: 10px 70px;
            border-radius: 25px;
            font-size: 1.1em;
            margin-top: 20px;
            margin-left: 10px;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
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

        /* Multi-step form specific styles */
        .step-indicator {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
            position: relative;
            padding: 0 20px;
        }
        .step-indicator::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 2px;
            background-color: #e0e0e0;
            z-index: 0;
            transform: translateY(-50%);
        }
        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 1;
            flex: 1;
        }
        .step-number {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #e0e0e0;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            margin-bottom: 5px;
            transition: background-color 0.3s;
        }
        .step-label {
            color: #6c757d;
            font-size: 0.9em;
            transition: color 0.3s;
        }
        .step.active .step-number {
            background-color: #28a745;
        }
        .step.active .step-label {
            color: #28a745;
            font-weight: bold;
        }
        .step.completed .step-number {
            background-color: #28a745; /* Green for completed steps */
        }
        .step.completed .step-label {
            color: #28a745;
        }
        .step-content {
            text-align: right;
            margin-top: 20px;
        }
        .form-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 15px;
        }
        .form-row .form-group {
            flex: 1;
            margin-bottom: 0;
        }
        .form-row .form-group label {
            white-space: nowrap;
        }
        .form-row .form-control {
            width: calc(100% - 22px); /* Adjust for padding and border */
        }
        .form-row select.form-control {
            appearance: none;
            -webkit-appearance: none;
            background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007bff%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-6.5%200-12.3%203.2-16.1%208.1-3.8%204.9-4.9%2011-3.1%2016.9l132.7%20132.3c3.8%203.8%209%205.9%2014.3%205.9s10.5-2.1%2014.3-5.9L287%2086.3c3.8-4.9%204.9-11%203.1-16.9z%22%2F%3E%3C%2Fsvg%3E');
            background-repeat: no-repeat;
            background-position: left 10px center;
            background-size: 12px;
            padding-right: 30px; /* Space for the arrow */
        }
        .upload-section {
            border: 1px dashed #ddd;
            padding: 20px;
            margin-top: 20px;
            text-align: center;
            border-radius: 5px;
        }
        .upload-section label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .upload-section input[type="file"] {
            display: none;
        }
        .upload-section .upload-button {
            background-color: #f0f2f5;
            border: 1px solid #ccc;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            display: inline-block;
            margin-top: 10px;
        }
        .upload-section .upload-button:hover {
            background-color: #e0e0e0;
        }
        .upload-section .file-name {
            margin-top: 10px;
            font-size: 0.9em;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="{{ asset('images/3.png') }}" alt="Algeria Flag" style="height: 40px; margin-left: 10px;">
            <div class="login-link">مديرية التربية لولاية الوادي </div>
        </div>
        <div class="login-link">
           
        </div>
    </div>

    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="in">
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi me-2 mdi-home"></i><span class="hide-menu">الرئيسية</span></a>
              </li>			  
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i class="mdi me-2 mdi-calendar"></i><span class="hide-menu">الرزنامة</span></a>
              </li>	
             <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://tawdif.education.dz/candidate" aria-expanded="false"><i class="mdi me-2 mdi-file-document"></i><span class="hide-menu">إنشاء  حســاب </span></a>
              </li>		
              <li class="sidebar-item">
                  <i class="mdi me-2 mdi-login"></i><span class="hide-menu">الدخول إلى حسابي</span></a>
              </li>
            </ul>
          </nav>
    </div>

    <div class="main-content">
        <div class="registration-container">
            <h2>التسجيل</h2>

            <div class="step-indicator">
            <div class="step completed">
                <div class="step-number">1</div>
                <div class="step-label">الشروط</div>
            </div>
            <div class="step completed">
                <div class="step-number">2</div>
                <div class="step-label">الترشح</div>
            </div>
            <div class="step active">
                <div class="step-number">3</div>
                <div class="step-label">الحالة المدنية والعائلية</div>
            </div>
            <div class="step">
                <div class="step-number">4</div>
                <div class="step-label">الشهادة</div>
            </div>
            <div class="step">
                <div class="step-number">5</div>
                <div class="step-label">الحساب</div>
            </div>
            </div>

            <form>
                <div class="step-content" id="civil-family-status">
                    <div class="alert alert-info" style="background-color: #d1ecf1; border-color: #bee5eb; color: #0c5460; padding: 15px; border-radius: 5px; margin-bottom: 20px; text-align: right;">
                        <p>مرحلة التسجيلات متاحة إلى غاية يوم:</p>
                        <p>يتكون ملف التسجيل الإلكتروني من الوثائق التالية: 1- نسخة من الشهادة المطلوبة، 2- نسخة من بطاقة إقامة سارية المفعول، 3- نسخة من وثيقة إثبات الوضعية إزاء الخدمة الوطنية بالنسبة للذكور (الأداء، الإعفاء والتأجيل) سارية المفعول، على أن تكون كل وثيقة بصيغة PDF وبحجم أقل من 1 MB.</p>
                    </div>

                    <div class="form-row"
                         class="form-group">
                            <label for="id-national">رقم التعريف الوطني: <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="id-national">
                        </div>
                        <div class="form-group">
                            <label for="last-name">اللقب: <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="last-name">
                        </div>
                        <div class="form-group">
                            <label for="first-name">الاسم: <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="first-name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="last-name-latin">اللقب باللاتينية: <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="last-name-latin">
                        </div>
                        <div class="form-group">
                            <label for="first-name-latin">الاسم باللاتينية: <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="first-name-latin">
                        </div>
                        <div class="form-group">
                            <label for="father-last-name">اسم الأب: <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="father-last-name">
                        </div>
                        <div class="form-group">
                            <label for="mother-last-name">لقب الأم: <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="mother-last-name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="mother-first-name">اسم الأم: <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="mother-first-name">
                        </div>
                        <div class="form-group">
                            <label for="birth-date">تاريخ الازدياد: <span style="color: red;">*</span></label>
                            <input type="date" class="form-control" id="birth-date">
                        </div>
                        <div class="form-group">
                            <label for="gender">الجنس: <span style="color: red;">*</span></label>
                            <div style="display: flex; justify-content: flex-end; gap: 15px; margin-top: 5px;">
                                <label><input type="radio" name="gender" value="male" checked> ذكر</label>
                                <label><input type="radio" name="gender" value="female"> أنثى</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="birth-wilaya">ولاية الازدياد: <span style="color: red;">*</span></label>
                            <select class="form-control" id="birth-wilaya">
                                 @foreach ($wilayas as $wilaya)
                               <option value ="{{$wilaya->id_wilaya }}">
                                    {{ $wilaya->lib_wilaya }} </option>
                            @endforeach
                             
                                <!-- Add other wilayas as needed -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="birth-baladiya">بلدية الازدياد: <span style="color: red;">*</span></label>
                            <select class="form-control" id="birth-baladiya">
                                <option value="">اختر بلدية</option>
                                <!-- Communes will be loaded dynamically via JavaScript -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="marital-status">الحالة العائلية: <span style="color: red;">*</span></label>
                            <select class="form-control" id="marital-status">
                                <option>أعزب (عزباء)</option>
                                <option>متزوج (ة)</option>
                                <!-- Add other options as needed -->
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="birth-certificate-type">نوع عقد الميلاد: <span style="color: red;">*</span></label>
                            <select class="form-control" id="birth-certificate-type">
                                <option>عادي</option>
                                  <option>مكرر</option>
                                <!-- Add other options as needed -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="birth-certificate-number">رقم شهادة الميلاد: <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="birth-certificate-number">
                        </div>
                        <div class="form-group">
                            <label for="children-count">عدد الأولاد:</label>
                            <input type="number" class="form-control" id="children-count" min="0">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nationality">الجنسية: <span style="color: red;">*</span></label>
                            <select class="form-control" id="nationality">
                                <option>جزائرية</option>
                                  <option>اخرى</option>
                                <!-- Add other nationalities as needed -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="personal-address">العنوان الشخصي: <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="personal-address">
                        </div>
                        <div class="form-group">
                            <label for="residence-baladiya">بلدية الإقامة: <span style="color: red;">*</span></label>
                            <select class="form-control" id="residence-baladiya">
                                 @foreach ($communes39 as $commune39)
                               <option value ="{{$commune39->id }}">
                                    {{ $commune39->lib_commune }} </option>
                            @endforeach
                                <!-- Add other baladiyas as needed -->
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone-number">رقم الهاتف: <span style="color: red;">*</span></label>
                            <input type="tel" class="form-control" id="phone-number">
                        </div>
                        <div class="form-group">
                            <label for="military-status">الوضعية اتجاه الخدمة الوطنية: <span style="color: red;">*</span></label>
                            <select class="form-control" id="military-status">
                                <option>معفى</option>
                                <option>مؤجل</option>
                                <option>أدى الخدمة</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="document-reference">مرجع الوثيقة: <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="document-reference" placeholder="رقم الوثيقة من دون التاريخ">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="document-issue-date">تاريخ الإصدار: <span style="color: red;">*</span></label>
                            <input type="date" class="form-control" id="document-issue-date">
                        </div>
                        <div class="form-group">
                            <!-- Empty for alignment -->
                        </div>
                        <div class="form-group">
                            <!-- Empty for alignment -->
                        </div>
                    </div>


                    <div style="margin-top: 30px; display: flex; justify-content: space-between;">
                        <button type="button" class="btn btn-secondary">السابق</button>
                         <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('registrationdiplome') }}'">التالي</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="footer">
        <span>&copy; 2023 Sadjelni. All rights reserved.</span>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('residence-card-upload').addEventListener('change', function() {
            const fileName = this.files[0] ? this.files[0].name : 'لم يتم اختيار أي ملف';
            document.getElementById('residence-card-file-name').textContent = fileName;
        });

        document.getElementById('military-service-upload').addEventListener('change', function() {
            const fileName = this.files[0] ? this.files[0].name : 'لم يتم اختيار أي ملف';
            document.getElementById('military-service-file-name').textContent = fileName;
        });

        document.getElementById('birth-wilaya').addEventListener('change', function() {
            const wilayaId = this.value;
            const communeSelect = document.getElementById('birth-baladiya');
            console.log('Wilaya change event fired. Selected Wilaya ID:', wilayaId); // Log 1
            communeSelect.innerHTML = '<option value="">جاري التحميل...</option>'; // Loading indicator

            if (wilayaId) {
                console.log('Fetching communes for Wilaya ID:', wilayaId); // Log 2
                fetch(`/get-communes/${wilayaId}`)
                    .then(response => {
                        console.log('Fetch response received:', response); // Log 3
                        if (!response.ok) {
                            throw new Error(`HTTP error! status: ${response.status}`);
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log('Communes data received:', data); // Log 4
                        communeSelect.innerHTML = '<option value="">اختر بلدية</option>'; // Clear existing options and add placeholder
                        if (data.length === 0) {
                            communeSelect.innerHTML = '<option value="">لا توجد بلديات</option>';
                        } else {
                            data.forEach(commune => {
                                const option = document.createElement('option');
                                option.value = commune.id;
                                option.textContent = commune.lib_commune;
                                communeSelect.appendChild(option);
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching communes:', error); // Log 5
                        communeSelect.innerHTML = '<option value="">خطأ في التحميل</option>'; // Error message
                    });
            } else {
                console.log('No Wilaya selected, resetting baladiya dropdown.'); // Log 6
                communeSelect.innerHTML = '<option value="">اختر بلدية</option>'; // Reset if no wilaya selected
            }
        });

        // Trigger the change event on page load to populate the baladiya dropdown initially
        document.addEventListener('DOMContentLoaded', function() {
            const birthWilayaSelect = document.getElementById('birth-wilaya');
            if (birthWilayaSelect.value) {
                birthWilayaSelect.dispatchEvent(new Event('change'));
            }
        });
    </script>
</body>
</html>
