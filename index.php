<?php
$contacts = json_decode(file_get_contents('contacts.json'), true);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>2.1-homework</title>
</head>
<body>
<div class="tabs">
    <?php foreach ($contacts as $key => $value): ?>
        <input id="tab<?php echo $key+1; ?>" type="radio" name="tabs" checked>
        <label for="tab<?php echo $key+1; ?>" title="Вкладка <?php echo $key+1; ?>"><?php echo $value['firstName'] . ' ' . $value['lastName']; ?></label>
    <?php endforeach; ?>
    <?php foreach ($contacts as $key => $value): ?>
        <section id="content-tab<?php echo $key+1; ?>">
            <table>
                <tr style="background-color: lightgrey;">
                    <td>Имя</td>
                    <td>Фамилия</td>
                    <td>Адрес</td>
                    <td>Номер</td>
                </tr>
                <tr>
                    <td><?php echo $value['firstName']; ?></td>
                    <td><?php echo $value['lastName']; ?></td>
                    <td><?php echo $value['address']; ?></td>
                    <td><?php echo $value['phoneNumber']; ?></td>
                </tr>
            </table>
        </section>
    <?php endforeach; ?>
</div>
</body>
</html>