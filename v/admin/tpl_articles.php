<div class="panel panel-primary">
 <div class="panel-body" style="text-align: center;"><h3>Управление статьями</h3></div>
</div>
<div class="panel panel-primary">
 <div class="panel-body" style="text-align: center;"><h4>Поиск</h4></div>
</div>
<table id="table_search_items" class="table table-bordered">
    <tr>
        <th>id</th>
        <th>Заголовок</th>
        <th>Содержание</th>
        <th>Создано</th>
        <th>Обновлено</th>
        <th>Категория</th>
    </tr>
    <tr>
        <td>    
            <form action="index.php?a=red_articles" role="form" method="get">
                <div class="form-group">
                    <input type="text" id="search_words" class="form-control">
                    <input id="count_chars" type="hidden" value="0" />
                    <input id="re_chars" type="hidden" value="" />
                </div>
            </form>
        </td>     
        <td>    
            <form action="index.php?a=red_articles" role="form" method="get">
                <div class="form-group">
                    <input type="text" id="search_title" class="form-control">
                    <input id="count_chars_title" type="hidden" value="0" />
                    <input id="re_chars_title" type="hidden" value="" />
                </div>
            </form>
        </td>
        <td>    
            <form action="index.php?a=red_articles" role="form" method="get">
                <div class="form-group">
                    <input type="text" id="search_content" class="form-control">
                    <input id="count_chars_content" type="hidden" value="0" />
                    <input id="re_chars_content" type="hidden" value="" />
                </div>
            </form>
        </td>
        <td>    
            <form action="index.php?a=red_articles" role="form" method="get">
                <div class="form-group">
                    <input type="text" id="search_create_at" class="form-control">
                    <input id="count_chars_create_at" type="hidden" value="0" />
                    <input id="re_chars_create_at" type="hidden" value="" />
                </div>
            </form>
        </td>  
        <td>    
            <form action="index.php?a=red_articles" role="form" method="get">
                <div class="form-group">
                    <input type="text" id="search_update_at" class="form-control">
                    <input id="count_chars_update_at" type="hidden" value="0" />
                    <input id="re_chars_update_at" type="hidden" value="" />
                </div>
            </form>
        </td> 
        <td>    
            <form action="index.php?a=red_articles" role="form" method="get">
                <div class="form-group">
                    <input type="text" id="search_category" class="form-control">
                    <input id="count_chars_category" type="hidden" value="0" />
                    <input id="re_chars_category" type="hidden" value="" />
                </div>
            </form>
        </td> 
    </tr>     
 
</table>
<div id="search_result">
</div>




