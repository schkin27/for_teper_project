<?php 
class Cms60ba1c9494e72450024361_a8038352b6d8246e61a86bc54e302536Class extends Cms\Classes\PageCode
{
public function onLoadMore() {
    // получаем номер страницы
    $pageNumber = Input::get('page') + 1;


    // обращаемся к компоненту Posts с alias allPosts: 
    // выставляем номер страницы и готовим данные
    $this->components['News']->setProperty('pageNumber', $pageNumber);
    
    $this->components['News']->onRun();

    $cn = $this->components['News']->posts->total();
    
    if ($pageNumber < $this->components['News']->posts->lastPage()) {
        // для простоты мы генерируем html, но в принципе можно сделать и отдельный паршл для кнопки
        $more_link = '<a class="tg-btn" style="float:none;" data-request="onLoadMore" data-request-data="page: ' . $pageNumber . '" href="#">Загрузить еще 15 новостей</a>';
    } else {
        // если мы достигли последней страницы, кнопка больше не нужна
        $more_link = '<div class="tg-btn" style="float:none; background:gray; color:white;">Показаны все '.$cn.' новости</div>';
    }
    
    return [
        // если перед селектором стоит @, новое содержимое будет добавляться в конец, а не заменять старое
        '@#news-id' => $this->components['News']->renderPartial('cat.htm'),
        '#load-more-button' => $more_link,
    ];
}
public function onEnd()
{
        if ($this->category)
        $this->page->title = $this->category->name;

        $this['count_posts'] = $cn = $this->components['News']->posts->total();
}
public function onStart()
{
}

}
