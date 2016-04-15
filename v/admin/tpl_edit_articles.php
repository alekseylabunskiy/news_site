<div id="search_result"></div>
<div class="panel panel-primary">
 <div class="panel-body" style="text-align: center;"><h3>Редактор Статьи</h3></div>
</div>

<form role="form" action="index.php?a=red_articles&id_red=<?=$article['id']?>" method="post">
    <div class="form-group">
        <label for="edit_title">Заголовок</label>
        <input type="text" class="form-control" name="edit_title" value="<?=$article['title']?>" />  
    </div> 
    <div class="form-group">   
        <label for="edit_content">Содержание</label>
        <textarea class="form-control" name="edit_content" id="" cols="30" rows="10"><?=$article['content']?></textarea>
    </div>
    <div class="form-group">   
        <label for="edit_category">Изображение</label>
        <input type="text" class="form-control" name="edit_image" value="<?=$article['image']?>" /> 
    </div>
    <div class="form-group">   
        <label for="edit_category">Категория</label>
        <input type="text" class="form-control" name="edit_category" value="<?=$article['category']?>" /> 
    </div>
    <button class="btn btn-info" name="edit_article">Изменить</button>    
</form>
