<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .display{
            font-family: 'Orbitron', sans-serif;
        background-color: #dcdbe1;
        color: black;
        width: 380px;
        height: 100px;
        border: 2px solid black;
        border-collapse: collapse;
        }

        table {
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        h1 {
            text-align: center;
        }

        .box-2{
            font-family: 'Orbitron', sans-serif;
            background: #3b759e;
            color: black;
            border: 2px solid rgb(17, 213, 27);
            border-collapse: collapse;
            width: 720px;
            height: 250px;
         }
    </style>
</head>
<body>
        <form action="" method="post">
            <table class="display" border="2">
                <tr class="title">
                    <h1>TÌM HIỂU KỸ THUẬT DOM TRONG JAVASCRIPT<br>
                    (DOM : Document Object  Model )</h1>
                </tr>
                <div>
                    <tr>
                        <td> Số Dòng: </td>
                        <td colspan = "">
                        <input type="text" name="txtSoDong"></td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td> Số Cột: </td>
                        <td colspan="">
                        <input type="text" name="txtSoDong"></td>
                    </tr>
                </div>
                <td colspan = "2">
                    <input type="submit" value="Hiển Thị">
                    <input type="reset" value="Xóa ">
                </td>
                <br>
    <table class="box-2" border="1">
        <tr>
            <td>0 0</td>
            <td>0 1</td>
            <td>0 2</td>
            <td>0 3</td>
            <td>0 4</td>
        </tr>
        <tr>
            <td>1 0</td>
            <td>1 1</td>
            <td>1 2</td>
            <td>1 3</td>
            <td>1 4</td>
        </tr>
        <tr>
            <td>2 0</td>
            <td>2 1</td>
            <td>2 2</td>
            <td>2 3</td>
            <td>2 4</td>
        </tr>
        <tr>
            <td>3 0</td>
            <td>3 1</td>
            <td>3 2</td>
            <td>3 3</td>
            <td>3 4</td>
        </tr>
        <tr>
            <td>4 0</td>
            <td>4 1</td>
            <td>4 2</td>
            <td>4 3</td>
            <td>4 4</td>
        </tr>
        <tr>
            <td>5 0</td>
            <td>5 1</td>
            <td>5 2</td>
            <td>5 3</td>
            <td>5 4</td>
        </tr>
        <tr>
            <td>6 0</td>
            <td>6 1</td>
            <td>6 2</td>
            <td>6 3</td>
            <td>6 4</td>
        </tr>
        <tr>
            <td>7 0</td>
            <td>7 1</td>
            <td>7 2</td>
            <td>7 3</td>
            <td>7 4</td>
        </tr>
        <tr>
            <td>8 0</td>
            <td>8 1</td>
            <td>8 2</td>
            <td>8 3</td>
            <td>8 4</td>
        </tr>
        <tr>
            <td>9 0</td>
            <td>9 1</td>
            <td>9 2</td>
            <td>9 3</td>
            <td>9 4</td>
        </tr>
            </table>
</body>
</html>