<?php
function __autoload($classname){
  $type = explode('_' , $classname);
    switch($type[0]){
      case 'C':
        include_once 'c/' . $classname . '.php';
            break;
      case 'M':
        include_once 'm/' . $classname . '.php';
            break;      
    }
}
// Выбор контроллера.
switch ($_GET['c'])
{
  case 'post':
    $controller = new C_Page();
      break;
  case 'reg':
    $controller = new C_Registration();
      break;
  case 'login':
    $controller = new C_Login();
      break;
  default:
    $controller = new C_Welcome();
}

// Обработка запроса.
$controller->Request();
