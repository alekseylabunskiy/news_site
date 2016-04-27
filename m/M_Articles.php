<?php 

class M_Articles
{
    private static $instance;

    function __construct()
    {
        $this->db = M_MSQL::Instance();
    }

    public static function Instance()
    {
        if (self::$instance == null)
            self::$instance = new M_Articles();
            
        return self::$instance;
    }
    //функция очистки входящих параметров
    public function Clean($value) {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);
    return $value;
    }
    //все статьи с лимитом
    public function getArticles($table,$limit){
        $query = "SELECT * FROM {$table} ORDER BY id DESC LIMIT {$limit}";
            $result = $this->db->Select($query);
            return $result;
    }
    //функция поиска для ajax запросов в админке
    public function SearchArt($table,$field,$search_words){
        $query = "SELECT * FROM {$table} WHERE {$field} LIKE '%{$search_words}%'";
            $result = $this->db->Select($query);
            return $result;
    }
    
    //статьи по категориям с добавлением в результирующий массив колличество коментариев
    public function getArticlesCategory($table,$limit,$category){
        $query = "SELECT * FROM {$table} WHERE category = {$category} ORDER BY id DESC LIMIT {$limit}";
            $result = $this->db->Select($query);
            for ($i=0; $i < count($result); $i++) { 
                $result[$i]['count_coments'] = $this->getCountComents($result[$i]['id']);
            }
            return $result;
    }
    //Одна статья 
    public function getOneArticle($table,$id){
        $query = "SELECT * FROM {$table} WHERE id = {$id}";
            $result = $this->db->Select($query);
            for ($i=0; $i < count($result); $i++) { 
                $result[$i]['count_coments'] = $this->getCountComents($result[$i]['id']);
            }
            return $result;
    }
    //breadcups
    function Breadcumps($category){
        $query = "SELECT * FROM categories WHERE id_category = {$category}";
            $result = $this->db->Select($query);
                return $result;
    }
    // колличество коментариев
    public function getCountComents($id_article){
            $query = "SELECT COUNT(*) AS count FROM coments WHERE id_article = {$id_article}";
                $result = $this->db->Select($query);          
                    return $result[0]['count'];
    }
    // популярные статьи
    public function popularArticles($limit){
        //выбираем кооличество коментариев из таблицы с заданным лимитом
        $query = "SELECT COUNT(*) AS count,id_coment,id_article FROM coments GROUP BY id_article DESC LIMIT {$limit}";
        $result = $this->db->Select($query);
        //сортируем в обратном порядке
        rsort($result);
        //перебираем в цикле
        for ($i=0; $i < count($result); $i++) { 
            $id = $result[$i]['id_article'];
        //выбираем нужные статьи     
            $query1 = "SELECT * FROM articles WHERE id = $id";
            $r[] = $this->db->Select($query1);
            $resulto[$i] = $r[$i][0];
        //добавляем в результат колличество коментариев    
            $resulto[$i]['count_coments'] = $this->getCountComents($r[$i][0]['id']);
          }  
        return $resulto;
    }
    //последние прокоментированные статьи
    public function lastCommentedArticles(){
        $query = "SELECT coments.id_coment,coments.id_user,coments.id_article,coments.text_coment,users.id_user,users.name,articles.id,articles.title FROM coments,users,articles WHERE coments.id_user = users.id_user AND coments.id_article = articles.id ORDER BY id_coment DESC LIMIT 2";
        $result = $this->db->Select($query);
        return $result;
    }
    //вносим изменения в статью
    public function UpdateArticles($table,$obj,$id){
        $where = "id = $id";
        $result = $this->db->Update($table,$obj, $where);
            return $result;
    }
    //удаляем статью
    public function DeleteArticles($id){
        $where = "id = $id";
        $result = $this->db->Delete('articles', $where);
            return $result;
    }
    //добавляем статью
    public function addArticles($title,$content,$author,$image,$category){
        //создаем и очищаем обьект для занеснеия в бд
        $obj = ['title'=> $this->Clean($title),
                'content' => $this->Clean($content),
                'author' => $this->Clean($author),
                'image' => $this->Clean($image),
                'create_at' => date("Y-m-d H:i:s"),
                'category' => $this->Clean($category), 
            ];
        //заносим в базу        
        $this->insert =$this->db->Insert('articles',$obj);

        return $this->insert;
    }
    //устанавливаем значение строчки "коментарии"
    public function stringComent($value){
        $text = '';
        switch ($value) {
            case '1':
                $text = 'Комментарий';
                break;
            case '2':
                $text = 'Комментария';
                break;
            case '3':
                $text = 'Комментария';
                break;
            case '4':
                $text = 'Комментария';
                break;
            default:
                $text = 'Комментариев';
                break;            
        }
        return $text;
    }
    //
    //Редактируем данные пользователя
    //
    public function edit_Profile_user($login,$email,$role,$password,$name){
        $login = $this->Clean($login);
        $email = $this->Clean($email);
        $role = $this->Clean($role);
        $password = $this->Clean($password);
        $name = $this->Clean($name);

        $obj = ['login' => $login,
                'password' => $password,
                'email' => $email,
                'id_role' => $role,
                'name' => $name];
        $id_user = $_GET['id_user_red'];        
        $where = "id_user = $id_user";

        $result = $this->db->Update('users',$obj,$where);

        return result;
    }


}

