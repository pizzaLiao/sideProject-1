<?php
$id = $_GET["id"];
require_once("../db-connect.php");
$sql = "SELECT * FROM member_list WHERE user_id=$id AND valid=1";
$result = $conn->query($sql);
$member = $result->fetch_assoc();


?>

<!doctype html>
<html lang="en">

<head>
    <title>Member Edit</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>

    


    <div class="container">
        <form action="do-edit-Liao.php" method="post">
            <table class="table table-bordered">
                <input name="id" type="hidden" value="<?= $member["user_id"] ?>">
                <tr>
                    <th>id</th>
                    <td> <?= $member["user_id"] ?> </td>
                </tr>
                <tr>
                    <th>使用者名稱</th>
                    <td><input name="name" type="text" class="form-control" value="<?= $member["user_name"] ?>"></td>
                </tr>
                <tr>
                    <th>帳號（信箱）</th>
                    <td><input name="account" type="email" class="form-control" value="<?= $member["user_email"] ?>"></td>
                </tr>
                <tr>
                    <th>電話</th>
                    <td><input name="phone" type="tel" class="form-control" value="<?= $member["user_phone"] ?>"></td>
                </tr>
                <tr>
                    <th>居住城市</th>
                    <td><input name="city" type="text" class="form-control" value="<?= $member["user_city"] ?>"></td>
                </tr>
            </table>

            <!-- 編輯＆刪除按鈕 -->
            <div class="btn-group">
                <button type="submit" class="btn btn-dark">儲存</button>
                <a href="member-detail-Liao.php?id=<?=$member["user_id"]?>" class="btn btn-light">取消</a>
            </div>

        </form>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>