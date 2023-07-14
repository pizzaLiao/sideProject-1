<?php


$id = $_GET["id"];
require_once("../db-connect.php");
$sql = "SELECT member_list.* , member_city.city_name AS city_name FROM member_list 
JOIN member_city ON city_id = user_city
WHERE user_id=$id AND valid=1";
$result = $conn->query($sql);
$member = $result->fetch_assoc();


?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <!-- 確認刪除警告訊息 -->
    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">小提醒</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    為了預防你可能是不小心按到這個按鈕，請再次確認是否要刪除！
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">否</button>
                    <a href="do-delete-Liao.php?id=<?=$id?>" type="button" class="btn btn-primary">是</a>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-3">
        <!-- 回使用者列表按鈕 -->
        <div>
            <a class="btn btn-dark mb-3" href="member-list-Liao.php?page=1">回使用者列表</a>
        </div>


        <!-- 使用者詳細資訊 -->
        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <td><?= $member["user_id"] ?></td>
            </tr>
            <tr>
                <th>使用者名稱</th>
                <td><?= $member["user_name"] ?></td>
            </tr>
            <tr>
                <th>帳號（信箱）</th>
                <td><?= $member["user_email"] ?></td>
            </tr>
            <tr>
                <th>電話</th>
                <td><?= $member["user_phone"] ?></td>
            </tr>
            <tr>
                <th>居住城市</th>
                <td><?= $member["city_name"] ?></td>
            </tr>
            <tr>
                <th>創建時間</th>
                <td><?= $member["created_at"] ?></td>
            </tr>
            <tr>
                <th>更新時間</th>
                <td><?= $member["update_at"] ?></td>
            </tr>
        </table>

        <!-- 編輯＆刪除按鈕 -->
        <div class="btn-group">
            <a href="member-edit-Liao.php?id=<?= $id ?>" class="btn btn-dark">編輯</a>
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#delete">刪除</button>
        </div>
    </div>








    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>