<html lang="en">
<head>
<style>
a {
    display: block;
    text-align: -webkit-center;
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newsletter</title>
</head>
<body>
<script>

</script>
    <form style = "text-align: -webkit-center;" action="" method="post">
    <input name="code" type="text" id="search">
    <input type="submit">
    </form>
    <a href="">
    <img src="https://www.technopolis.bg/_ui/desktop/site-technopolis-bg/images/layout/technopolis-sharing-logo.jpg">
    </a>
</body>
</html>
<?php
$code = $_POST;
$code= implode($_POST);
$link = "<a href=https://www.technopolis.bg/p/" . $code . "><img width=250px heigth = 150px src=https://www.technopolis.bg/_ui/desktop/site-technopolis-bg/images/layout/technopolis-sharing-logo.jpg>" . "</a>";
echo($link);