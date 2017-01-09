<!DOCTYPE html>
<html lang="en">
<head>
    <script src="includes/jquery-3.1.1.min.js"></script> <!-- подключаем jQuery-->
    <link href="includes/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet"> <!-- подключаем бутстрап css-->
    <script src="includes/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script> <!-- подключаем бутстрап js-->
    <link href="includes/form_styles.css" rel="stylesheet">
    <script src="includes/check_form.js"></script> <!-- подключаем файлик для проверки формы-->
    <meta charset="UTF-8">
    <title>Support</title>
    <link rel="shortcut icon" href="2.ico" type="image/x-icon">

</head>
<body>

<div class="container"> <!--бутстраповский класс.Основной фиксированный по ширине макет (опционально динамический) с единственным требованием-->

    <form method="post" action="forms_processing.php">
<!--        добавить placeholder required -->
        <h2> Support page </h2>
        <div class="form-group">  <!--бутстраповский класс. Основной фиксированный по ширине макет (опционально динамический) с единственным требованием-->
            <label for="exampleTextarea">Enter error description</label>
            <!--Атрибут for необходимо задавать в том случае, когда элемент формы и текст разделены-->
            <textarea name="error" class="form-control rfield" id="exampleTextarea" rows="3" placeholder="what is your errror?"></textarea><!-- В отличие от тега <input> в текстовом поле допустимо делать переносы строк, они сохраняются при отправке данных на сервер-->
            <!--form-control rfield-два разных класса-->
        </div>
        <div class="form-group"> <!--класс для выдереления полей формы-->
            <label for="exampleSelect1">Criticality</label>
            <select name="critical" class="form-control rfield" id="exampleSelect1">
                <option>low</option>
                <option>medium</option>
                <option>high</option>
            </select>
<!--            <label class="custom-file"> для скриншота. стоит рус яз.-->
<!--                <input type="file" id="file" class="custom-file-input">-->
<!--                <span class="custom-file-control"></span>-->
<!--            </label>-->
        </div>

        <button type="submit" class="btn btn-primary disabled">Send</button>
    </form>

</div> <!-- /container -->
</body>
</html>