<?php 
class Cms60ba1c9b62c2b343350919_1fc71af96264b585ebec764a39a98ab7Class extends Cms\Classes\PageCode
{
public function onEnd()
{
        if ($this->post)
        $this->page->title = $this->post->title;
}
}
