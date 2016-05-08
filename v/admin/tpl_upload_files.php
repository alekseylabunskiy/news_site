<div class="panel panel-primary">
 <div class="panel-body" style="text-align: center;"><h3>Загружаем фото на сервер</h3></div>
</div>
<div id="upload_files">
    <form action="index.php?a=upload_files" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <input  type="file" name="filename" />
        </div>  
        <div class="form-group">
            <button type="submit" class="btn btn-success" name="confirm_input_file">Записать</button>
        </div>
    </form>
    <?if(!empty($message_succsess)):?>
        <div id="message">
            <p class="alert alert-success"><?=$message_succsess?></p>
        </div>
    <?endif?>    
    <?if(!empty($message_error)):?>
        <div id="message">
            <p class="alert alert-warning"><?=$message_error?></p>   
        </div>
    <?endif?>
</div>