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
        $query = "SELECT users.id_user,users.name,coments.id_coment,coments.id_user,coments.create_at,coments.id_article,coments.text_coment,articles.id,articles.title FROM users,coments,articles WHERE articles.id = coments.id_article ORDER BY coments.id_coment DESC LIMIT 2";
        $result = $this->db->Select($query); 
        return $result;
    }

}

