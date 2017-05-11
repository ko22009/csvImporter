<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CSV Importer</title>
</head>
<body>
    <input id="sortpicture" type="file" name="file" accept=".csv" />
    <button id="upload">Загрузить</button>
    <div class="ajax-info" style="display: none"></div>
</body>
<script src="/app/js/jquery-3.2.1.min.js"></script>
<script src="/app/js/app.js?v=<?=time();?>"></script>
</html>