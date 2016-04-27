<div id="container">
    <div class="wrapper">
      <div id="breadcrumb"><a href="index.html">Главная</a> / <span class="active">Галереи</span></div>
      <div id="page"> 
        <!-- content -->
        <div id="content_g">
          <div class="region">
            <article class="node">
              <h2 class="title">Фото альбомы</h2>
              <span class="change_gallery"> <a href="#" class="without_description active"></a> <a href="#" class="with_description"></a> </span>
              <div class="content block">
                <section class="about">
                  <article>
                   <?foreach($last_g as $list):?>
                    <div class="photo"> <a href="index.php?c=gallery_page&id_g=<?=$list['id_gallery']?>"><img src="/v/gallery/282/<?=$list['gallery_about_img']?>" alt="Photo"/></a> </div>
                    <div class="details">
                      <h4 class="title"><a href="index.php?c=gallery_page&id_g=<?=$list['id_gallery']?>"><?=$list['title_gallery']?></a> <span class="photos">(<?=$count_fotos?> фото)</span></h4>
                      <p class="date">
                        <time datetime="2012-01-24"><?=date("d.m.Y H:i",strtotime($list['date_gallery']))?></time>
                      <p><?=$list['description_gallery']?></p>
                      <p><a href="index.php?c=gallery_page&id_g=<?=$list['id_gallery']?>" class="view_all"><span><span>Больше фото</span></span></a></p>
                    </div>
                    <?endforeach?>
                  </article>
                </section>
                <section id="gallery_list" class="gallery_4columns">
                    <ul class="gallery_without_description">
                        <?foreach($all_list as $list):?>
                        <li>
                        <article>
                            <div class="photo"><a href="index.php?c=gallery_page&id_g=<?=$list['id_gallery']?>"><img src="/v/gallery/140/<?=$list['gallery_about_img']?>" alt="Photo"/></a></div>
                            <div class="details">
                              <h4 class="title"><a href="index.php?c=gallery_page&id_g=<?=$list['id_gallery']?>"><?=$list['title_gallery']?></a> <span class="photos">(<?=$list['count_fotos']." фото"?>)</span></h4>
                              <p class="date">
                                <time datetime="2012-01-24"><?=date("d.m.Y H:i",strtotime($list['date_gallery']))?></time>
                                <span class="comments_count"><a href="#"><?=$list['count_coments']?></a></span></p>
                            </div>
                        </article>
                        </li>
                        <?endforeach?>
                    <li>
                  </ul>
                </section>
              </div>
            </article>
          </div>
        </div>
        <!-- end content --> 
      </div>
      <!-- right sidebar -->
      <div id="right_sidebar">
        <div class="region">
          <aside id="block_popular_galleries" class="block">
            <h3 class="block_title">Популярные галереи</h3>
            <div class="content">
              <ul>
                <?foreach($pop_gal as $list):?>
                <li>
                  <article>
                    <div class="photo"><a href="index.php?c=gallery_page&id_g=<?=$list['id_gallery']?>"><img src="/v/gallery/96/<?=$list['image_gall']?>" alt="Photo"/></a></div>
                    <div class="details">
                      <h4 class="title"><a href="index.php?c=gallery_page&id_g=<?=$list['id_gallery']?>"><?=$list['title_gallery']?></a> <span class="photos">(<?=$list['num_foto']?> фото)</span></h4>
                      <p class="date">
                        <time datetime="2012-01-21"><?=$list['time']?></time>
                        <span class="comments_count"><a href="index.php?c=gallery_page&id_g=<?=$list['id_gallery']?> #comment_form"><?=$list['count_coments']?></a></span></p>
                    </div>
                  </article>
                </li>
                <?endforeach?>
              </ul>
            </div>
          </aside>
          <div id="block_sidebar_tabs" class="block">
            <ul>
              <li><a href="#block_popular"><span class="bg">Популярное</span></a></li>
              <li><a href="#block_comments"><span class="bg">Коментарии</span></a></li>
            </ul>
            <aside id="block_popular" class="content">
              <ul>
              <?foreach($pop_news as $pop):?>
                <li>
                  <article>
                    <div class="photo"><a href="index.php?c=fullwidth&<?=$pop['get']?>=<?=$pop['id']?>"><img src="v/content_Images/images/86/<?=$pop['image']?>" alt="Photo"/></a></div>
                    <div class="details">
                      <h4 class="title"><a href="index.php?c=fullwidth&<?=$pop['get']?>=<?=$pop['id']?>"><?=$pop['title']?></a></h4>
                      <p class="date">
                        <time datetime="2012-01-21"><?=$pop['time']?></time>
                    </div>
                  </article>
                </li>
                <?endforeach?>
              </ul>
            </aside>
            <aside id="block_comments" class="content">
              <ul>
                  <?foreach($pop_com as $pop_c):?>
                    <li>
                      <article>
                        <div class="photo"><a href="#"><img src="v/images/bg_user.png" alt="Photo"/></a></div>
                        <div class="details">
                          <h4 class="title"><a href="#"><?=$pop_c['name_user']?></a> в <a href="#"><?=$pop_c['title_news']?></a></h4>
                          <p class="date">
                            <time datetime="2012-01-29"><?=date("d-m-Y H:i",strtotime($pop_c['time_add_comment']))?></time>
                          </p>
                        </div>
                        <p class="text"><?=$pop_c['text_coment']?></p>
                      </article>
                    </li>
                   <?endforeach?> 
                  <?foreach($pop_com1 as $pop_c):?>
                    <li>
                      <article>
                        <div class="photo"><a href="#"><img src="v/images/bg_user.png" alt="Photo"/></a></div>
                        <div class="details">
                          <h4 class="title"><a href="#"><?=$pop_c['name_user']?></a> в <a href="#"><?=$pop_c['title_news']?></a></h4>
                          <p class="date">
                            <time datetime="2012-01-29"><?=date("d-m-Y H:i",strtotime($pop_c['time_add_comment']))?></time>
                          </p>
                        </div>
                        <p class="text"><?=$pop_c['text_coment']?></p>
                      </article>
                    </li>
                   <?endforeach?>                   
              </ul>
            </aside>
          </div>
        </div>
      </div>
      <!-- end right sidebar --> 
    </div>
  </div>
  <div id="scroll_to_top_wrapper">
    <div class="wrapper"><a href="#" id="scroll_to_top">Scroll To Top</a></div>
  </div>
</div>
