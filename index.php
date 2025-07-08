<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>Login | TESTz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            min-height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background: #fff;
            padding: 2.5rem 2rem;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 350px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #2575fc;
            letter-spacing: 1px;
        }

        .form-group {
            margin-bottom: 1.2rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 0.7rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: border 0.2s;
        }

        .form-group input:focus {
            border-color: #2575fc;
            outline: none;
        }

        .login-btn {
            width: 100%;
            padding: 0.8rem;
            background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
        }

        .login-btn:hover {
            background: linear-gradient(90deg, #2575fc 0%, #6a11cb 100%);
        }

        .login-footer {
            text-align: center;
            margin-top: 1.5rem;
            color: #888;
            font-size: 0.95rem;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>เข้าสู่ระบบ</h2>
        <form method="post" action="login.php">
            <div class="form-group">
                <label for="username">ชื่อผู้ใช้</label>
                <input type="text" id="username" name="username" required autocomplete="username">
            </div>
            <div class="form-group">
                <label for="password">รหัสผ่าน</label>
                <input type="password" id="password" name="password" required autocomplete="current-password">
            </div>
            <button type="submit" class="login-btn">เข้าสู่ระบบ</button>
        </form>
        <div class="login-footer">
            © 2024 TESTz
        </div>
    </div>
</body>

</html>