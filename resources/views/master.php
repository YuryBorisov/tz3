<!DOCTYPE>
<html>
<head>
    <link rel="stylesheet" href="/css/app.css"/>
    <script src="/js/jquery-2.0.0.min.js"></script>
    <script src="/js/app.js"></script>
    <style>
        table {
            border-collapse: collapse;
        }
        table th,
        table td {
            padding: 0 3px;
        }
        table.brd th,
        table.brd td {
            border: 1px solid #000;
        }
    </style>
</head>
<body>
<table class="brd">
    <tr>
        <th>ID</th>
        <th>ФИ</th>
        <th>email</th>
        <th>Сумма</th>
    </tr>
    <?php
    foreach ($data as $item){
        echo
            '<tr class="item"  id-pp="'.$item['id'].'">
            <td click="ShowHide" status="off" class="user-id" p-i="'.$item['id'].'">'.$item['id'].'</td>
            <td>'.$item['firstname'].' '.$item['lastname'].'</td>
            <td>'.$item['email'].'</td>
            <td>'.$item['count'].'</td>
            </tr>';
    }
    ?>
</table>
</body>
</html>