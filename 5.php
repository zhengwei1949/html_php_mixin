<?php
$data = [
    [
        "id" => 1,
        "cid" => 1,
        "name" => "ipad mini",
        "price" => 1000
    ],
    [
        "id" => 2,
        "cid" => 2,
        "name" => "macbook",
        "price" => 9000
    ],
    [
        "id" => 3,
        "cid" => 1,
        "name" => "ipad 2",
        "price" => 4000
    ],
    [
        "id" => 4,
        "cid" => 2,
        "name" => "iphone 6s",
        "price" => 3600
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style type="text/css">
        table.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #9dcc7a;border-collapse: collapse;}
        table.tftable th {font-size:12px;background-color:#abd28e;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;text-align:left;}
        table.tftable tr {background-color:#ffffff;}
        table.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #9dcc7a;}
    </style>

    <table id="tfhover" class="tftable" border="1">
        <tr>
            <th>id</th>
            <th>分类id</th>
            <th>商品名</th>
            <th>价格</th>
        </tr>
        <?php for($i=0;$i<count($data);$i++):?>
        <tr>
            <td><?php echo $data[$i]['id']; ?></td>
            <td><?php echo $data[$i]['cid']; ?></td>
            <td><?php echo $data[$i]['name']; ?></td>
            <td><?php echo $data[$i]['price']; ?></td>
        </tr>
        <?php endfor; ?>
    </table>
</body>
</html>