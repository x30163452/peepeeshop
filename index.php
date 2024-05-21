<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <title>皮皮蝦刷評價會員管理</title>
    <link href="overall.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }		
        li {
            margin: 10px;
        }
        a {
            text-decoration: none;
            color: #333;
            padding: 10px 20px;
            border: 2px solid #333;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        a:hover {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>皮皮刷派單會員管理</h1>
        <ul>
            <li><a href="hello.php">查看會員</a></li>
			<li><a href="add_member.php">新增會員</a></li>
            <li><a href="order.php">查詢廠商</a></li>
            <li><a href="neworder.php">新增訂單</a></li>
        </ul>
    </div>
</body>
</html>
