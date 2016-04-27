  <!-- content top -->
  <div id="content_top">
    <div class="region">
      <aside id="block_breaking_news" class="block">
        <h3 class="block_title">Braking:</h3>
        <div class="content">
          <ul>
            <?foreach($list_laitest_news as $list):?>
              <li><a href="index.php?c=post&id=<?=$list['id']?>"><?=date("H:i",strtotime($list['create_at']))." "?><?=$list['title']?></a></li>
            <?endforeach?>
          </ul>
        </div>
      </aside>
      <aside id="block_front_slider" class="block">
        <div id="l_news">
          <?foreach($one_latest_news as $list):?>
            <a href="index.php?c=post&id=<?=$list['id']?>"><img id="l_news_img" src="/v/content_Images/images/458/<?=$list['image']?>" alt=""></a>
            <div id="l_news_description">
                <a href="index.php?c=post&id=<?=$list['id']?>">
                    <p id="main_n_text"><?=$list['title']?></p> 
                </a> 
          <?endforeach?>        
            </div>
        </div>
      </aside>
      <aside id="block_latest_headlines" class="block">
        <h3 class="block_title">Свежие заголовки</h3>
        <div class="content">
          <ul>
            <?foreach($list_laitest_news as $list):?>
              <li><a href="index.php?c=post&id=<?=$list['id']?>"><?=date("H:i",strtotime($list['create_at']))." "?><?=$list['title']?></a></li>
            <?endforeach?>
          </ul>
        </div>
      </aside>
      <div id="block_content_top_tabs" class="block">
        <div id="video_block">
          <div id="video_title">
            <p id="video_title_e">Видео</p>
            <iframe width="300" height="200" src="https://www.youtube.com/embed/3K-uLLQfPOA" frameborder="0" allowfullscreen></iframe>
            <p id="video_title">Как Фирсова и Томенко лишили депутатских мандатов. Факты недели, 03.04</p>
          </div>
        </div>
      </div>
      <section id="block_editors_choice" class="block">
        <h3 class="block_title">Выбор Редактора</h3>
        <div class="content">
          <ul>
            <?foreach($editor_choise as $list):?>
            <li>
              <div class="editors_inner2">
                <article class="editors_inner">
                  <div class="editors_left"><img src="/v/content_Images/images/120/<?=$list['image']?>" alt="Photo"/></div>
                  <div class="editors_right">
                    <h4 class="title"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></h4>
                    <p class="date">
                      <time datetime="2012-01-24"><?=date("d.m.Y",strtotime($list['create_at']))." "?></time>
                      <span class="comments_count"><a href="#"><?=$list['count_coments']?></a></span></p>
                  </div>
                </article>
              </div>
            </li>
            <?endforeach?>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- end content top -->
  <div id="container">
    <div class="wrapper">
      <div id="page"> 
        <!-- left sidebar -->
        <div id="left_sidebar">
          <div class="region">
            <section id="block_left" class="block">
              <h3 class="block_title">Украина</h3>
              <div class="content">
                <ul>
                <?foreach($ukraine as $list):?>
                  <li class="first">
                    <article>
                      <h4 class="title"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></h4>
                      <p class="date">
                        <time datetime="2012-01-29"><?=date("d.m.Y",strtotime($list['create_at']))." "?></time>
                        <span class="comments_count"><a href="index.php?c=post&id=<?=$list['id']?>&#comment_form"><?=$list['count_coments']?></a></span></p>
                      <p><?$text = explode(".", $list['content']); echo $text[0].".";?></p>
                    </article>
                  </li>
                  <?endforeach?>
                </ul>
                <p><a href="#" class="view_all"><span><span>Больше</span></span></a></p>
              </div>
            </section>
          </div>
        </div>
        <!-- end left sidebar --> 
        <!-- content -->
        <div id="content">
          <div class="region">
            <section id="block_world_news" class="block">
              <h3 class="block_title_black">Мир<a href="#" class="view_all"><span><span>Все новости</span></span></a></h3>
              <div class="content">
                <div class="left">
                  <article>
                  <?foreach($world as $list):?>
                    <p><img src="/v/content_Images/images/216/<?=$list['image']?>" alt="World News"/></p>
                    <hgroup>
                      <h4 class="title"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></h4>
                    </hgroup>
                    <p class="date">
                      <time datetime="2012-01-26"><?=date("d.m.Y",strtotime($list['create_at']))." "?></time>
                      <span class="comments_count"><a href="index.php?c=post&id=<?=$list['id']?>&#comment_form"><?=$list['count_coments']?></a></span></p>
                    <p><?$text = explode(".", $list['content']); echo $text[0].".";?></p>
                    <?endforeach?>
                  </article>
                </div>
                <div class="right">
                  <ul>
                    <?foreach($world_list as $list):?>
                    <li class="first">
                      <article>
                        <hgroup>
                          <h4 class="title"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></h4>
                        </hgroup>
                        <p class="date">
                          <time datetime="2012-01-18"><?=date("d.m.Y",strtotime($list['create_at']))." "?></time>
                          <span class="comments_count"><a href="index.php?c=post&id=<?=$list['id']?>&#comment_form"><?=$list['count_coments']?></a></span></p>
                        <p><?$text = explode(".", $list['content']); echo $text[0].".";?></p>
                      </article>
                    </li>
                    <?endforeach?>
                  </ul>
                </div>
              </div>
            </section>
            <section id="block_business_news" class="block">
              <h3 class="block_title_black">Бизнес<a href="#" class="view_all"><span><span>Все новости</span></span></a></h3>
              <div class="content">
                <div class="left">
                  <article>
                    <?foreach($bisness as $list):?>
                    <p><img src="/v/content_Images/images/216/<?=$list['image']?>" alt="World News"/></p>
                    <hgroup>
                      <h4 class="title"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></h4>
                    </hgroup>
                    <p class="date">
                      <time datetime="2012-01-24"><?=date("d.m.Y",strtotime($list['create_at']))." "?></time>
                      <span class="comments_count"><a href="index.php?c=post&id=<?=$list['id']?>&#comment_form"><?=$list['count_coments']?></a></span></p>
                    <p><?$text = explode(".", $list['content']); echo $text[0].".";?></p>
                    <?endforeach?>
                  </article>
                </div>
                <div class="right">
                  <ul>
                    <?foreach($bisness_list as $list):?>
                    <li class="first">
                      <article>
                        <hgroup>
                          <h4 class="title"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></h4>
                        </hgroup>
                        <p class="date">
                          <time datetime="2012-01-21"><?=date("d.m.Y",strtotime($list['create_at']))." "?></time>
                          <span class="comments_count"><a href="index.php?c=post&id=<?=$list['id']?>&#comment_form"><?=$list['count_coments']?></a></span></p>
                        <p><?$text = explode(".", $list['content']); echo $text[0].".";?></p>
                      </article>
                    <?endforeach?>  
                    </li>
                  </ul>
                </div>
              </div>
            </section>
          </div>
        </div>
        <!-- end content --> 
        <!-- content bottom -->
        <div id="content_bottom">
          <div class="region">
            <aside id="block_sports" class="block one_fourth">
              <h3 class="block_title">Спорт</h3>
              <div class="content">
                <ul>
                  <?foreach($sport as $list):?>
                  <li class="first"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></li>
                  <?endforeach?>
                </ul>
                <p><a href="index.php?c=post&id=<?=$list['id']?>" class="view_all"><span><span>Больше</span></span></a></p>
              </div>
            </aside>
            <aside id="block_entertainment" class="block one_fourth">
              <h3 class="block_title">Развлечения</h3>
              <div class="content">
                <ul>
                  <?foreach($intertaiment as $list):?>
                  <li class="first"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></li>
                  <?endforeach?>
                </ul>
                <p><a href="index.php?c=post&id=<?=$list['id']?>" class="view_all"><span><span>Больше</span></span></a></p>
              </div>
            </aside>
            <aside id="block_health" class="block one_fourth">
              <h3 class="block_title">Здоровье</h3>
              <div class="content">
                <ul>
                  <?foreach($helth as $list):?>
                  <li class="first"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></li>
                  <?endforeach?>
                </ul>
                <p><a href="index.php?c=post&id=<?=$list['id']?>" class="view_all"><span><span>Больше</span></span></a></p>
              </div>
            </aside>
            <aside id="block_tech" class="block last one_fourth">
              <h3 class="block_title">Техно</h3>
              <div class="content">
                <ul>
                  <?foreach($tech as $list):?>
                  <li class="first"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></li>
                  <?endforeach?>
                </ul>
                <p><a href="index.php?c=post&id=<?=$list['id']?>" class="view_all"><span><span>Больше</span></span></a></p>
              </div>
            </aside>
          </div>
        </div>
        <!-- end content bottom --> 
      </div>
      <!-- right sidebar -->
      <div id="right_sidebar">
        <div class="region">
          <aside id="block_in_pictures" class="block">
            <h3 class="block_title">В Фото</h3>
            <div class="content">
              <ul>
                <li>
                  <div class="item"><a href="v/images/content/in_pictures_1.jpg" title="Photo 1"><img src="v/images/content/in_pictures_1_thumb.jpg" alt="" /></a></div>
                  <div class="item"><a href="v/images/content/in_pictures_2.jpg" title="Photo 2"><img src="v/images/content/in_pictures_2_thumb.jpg" alt="" /></a></div>
                  <div class="item"><a href="v/images/content/in_pictures_3.jpg" title="Photo 3"><img src="v/images/content/in_pictures_3_thumb.jpg" alt="" /></a></div>
                  <div class="item"><a href="v/images/content/in_pictures_4.jpg" title="Photo 4"><img src="v/images/content/in_pictures_4_thumb.jpg" alt="" /></a></div>
                  <div class="item"><a href="v/images/content/in_pictures_5.jpg" title="Photo 5"><img src="v/images/content/in_pictures_5_thumb.jpg" alt="" /></a></div>
                  <div class="item"><a href="v/images/content/in_pictures_6.jpg" title="Photo 6"><img src="v/images/content/in_pictures_6_thumb.jpg" alt="" /></a></div>
                </li>
                <li>
                  <div class="item"><a href="v/images/content/in_pictures_7.jpg" title="Photo 7"><img src="v/images/content/in_pictures_7_thumb.jpg" alt="" /></a></div>
                  <div class="item"><a href="v/images/content/in_pictures_8.jpg" title="Photo 8"><img src="v/images/content/in_pictures_8_thumb.jpg" alt="" /></a></div>
                  <div class="item"><a href="v/images/content/in_pictures_9.jpg" title="Photo 9"><img src="v/images/content/in_pictures_9_thumb.jpg" alt="" /></a></div>
                  <div class="item"><a href="v/images/content/in_pictures_10.jpg" title="Photo 10"><img src="v/images/content/in_pictures_10_thumb.jpg" alt="" /></a></div>
                  <div class="item"><a href="v/images/content/in_pictures_11.jpg" title="Photo 11"><img src="v/images/content/in_pictures_11_thumb.jpg" alt="" /></a></div>
                  <div class="item"><a href="v/images/content/in_pictures_12.jpg" title="Photo 12"><img src="v/images/content/in_pictures_12_thumb.jpg" alt="" /></a></div>
                </li>
              </ul>
              <p><a href="#" class="view_all"><span><span>Все Фото</span></span></a></p>
            </div>
          </aside>
          <div id="block_sidebar_tabs" class="block">
            <ul>
              <li><a href="#block_popular"><span class="bg">Популярное</span></a></li>
              <li><a href="#block_comments"><span class="bg">Коментарии</span></a></li>
            </ul>
            <aside id="block_popular" class="content">
              <ul>
                <?foreach($pop_articles as $list):?>
                <li>
                  <article>
                    <div class="photo"><a href="index.php?c=post&id=<?=$list['id']?>"><img src="v/content_Images/images/86/<?=$list['image']?>" alt="Photo"/></a></div>
                    <div class="details">
                      <h4 class="title"><a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></h4>
                      <p class="date">
                        <time datetime="2012-01-21"><?=date("d.m.Y",strtotime($list['create_at']))." "?></time>
                        <span class="comments_count"><a href="index.php?c=post&id=<?=$list['id']?>&#comment_form"><?=$list['count_coments']?></a></span></p>
                    </div>
                  </article>
                </li>
                <?endforeach?>
              </ul>
            </aside>
            <aside id="block_comments" class="content">
              <ul>
                <?foreach($laitest_coments as $list):?>
                <li>
                  <article>
                    <div class="photo"><a href="#"><img src="v/images/bg_user.png" alt="Photo"/></a></div>
                    <div class="details">
                      <h4 class="title"><?=$list['name']?> on <a href="index.php?c=post&id=<?=$list['id']?>"><?=$list['title']?></a></h4>
                      <p class="date">
                        <time datetime="2012-01-29"><?=$list['create_at']?></time>
                      </p>
                    </div>
                    <p class="text"><?=$list['text_coment']?></p>
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
