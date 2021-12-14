<?php
class article{
    private $post_id=NULL;
    private $title=NULL;
    private $body=NULL;
    private $descr=NULL;
    private $img=NULL;
    private $likes=NULL;
    private $author=NULL;
    private $datep=NULL;

    function __construct($title, $body,$descr,$img, $likes, $author, $date,$post_id)
    {
       $this->post_id = $post_id;
       $this->title = $title;
       $this->body = $body;
       $this->descr = $descr;
       $this->img = $img;
       $this->likes = $likes;
       $this->author = $author;
       $this->datep = $date; 
    }
    function getPostId(){
        return $this->post_id;
    }
    function getTitle(){
        return $this->title;
    }
    function getBody(){
        return $this->body;
    }
    function getDesc(){
        return $this->descr;
    }
    function getImg(){
        return $this->img;
    }
    function getLikes(){
        return $this->likes;
    }
    function getAuthor(){
        return $this->author;
    }
    function getDate(){
        return $this->datep;
    }
    function setPostId(int $id){
        $this->post_id = $id;
    }
    function setTitle(string $t){
        $this->title = $t;
    }
    function setBody(string $body){
        $this->body = $body;
    }
    function setDesc(string $d){
        $this->descr = $d;
    }
    function setImg(string $i){
        $this->img = $i;
    }
    function setLikes(int $likes){
        $this->likes = $likes;
    }
    function setAuthor(string $a){
        $this->author = $a;
    }
    function setDate(string $date){
        $this->datep = $date;
    }
}
?>