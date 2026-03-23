<!DOCTYPE html>
<html>
<head>
    <title>test</title>
    <style>
        body { font-family: sans-serif; padding: 50px; text-align: center; }
        input { padding: 10px; margin: 10px; width: 250px; }
        button { padding: 10px 20px; background: #ff0000; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>register</h1>
    <form action="/register" method="POST">
        @csrf
        <input type="email" name="email" placeholder="อีเมล" required><br>
        <input type="text" name="name" placeholder="ชื่อของคุณ" required><br>
        <input type="password" name="password" placeholder="รหัสผ่าน" required><br>
        <button type="submit">บันทึกข้อมูล</button>
        <a href="/users">
            <button type="button" onclick="window.location.href='/users'" style="background: #333;">เปิดดูรายชื่อ</button>
        </a>
    </form>
</body>
</html>