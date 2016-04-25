<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
    <link rel="stylesheet" href="v/css/bootstrap.min.css">    
    <link rel="stylesheet" href="v/css/style.css">
    
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="v/js/bootstrap.min.js"></script>
    <script src="v/js/searchform.js"></script>
    <script src="v/js/comentslist.js"></script>
</head>
<body>
    <div id="adm-header">
        <ul class="nav nav-pills">
            <li class="active"><a href="index.php">Главная</a></li>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                Статьи
                <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="index.php?a=red_articles&add_articles">Добавить</a></li>
                    <li><a href="index.php?a=red_articles">Редактировать</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                Галерея 
                <b class="caret"></b>
                </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Добавить/удалить галерею</a></li>
                        <li><a href="#">Добавить/Удалить фото</a></li>
                    </ul>
            </li>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                Пользователи 
                <b class="caret"></b>
                </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Редактировать</a></li>
                        <li><a href="#">Добавить/Удалить</a></li>
                    </ul>
            </li>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                Коментарии 
                <b class="caret"></b>
                </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Редактировать</a></li>
                        <li><a href="#">Добавить/Удалить</a></li>
                    </ul>   
            </li>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                Загрузить фото
                <b class="caret"></b>
                </a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php?a=upload_files">Загрузить</a></li>                      
                    </ul>   
            </li>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Вы зашли как: <?=$name_user?></a>  
            </li>           
        </ul>
    </div>
    <?=$content?>
</body>
</html>