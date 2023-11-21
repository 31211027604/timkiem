<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tìm Kiếm và Phân Trang</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div id="content">
        <div>
        <input type="text" id="searchKeyword" placeholder="Nhập từ khóa">
        <button onclick="search()">Tìm Kiếm</button>
        </div>
        <h2>Danh sách sản phẩm</h2>
        <div>
        <input type="text" id="newWord" placeholder="Thêm sản phẩm">
        <button onclick="addWord()">Thêm</button>
</div>
        <ul id="wordList"></ul>
        <div id="pagination"></div>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>
