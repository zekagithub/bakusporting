<?php
function seflink($text)
{
    $find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
    $replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
    $text = strtolower(str_replace($find, $replace, $text));
    $text = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $text);
    $text = trim(preg_replace('/\s+/', ' ', $text));
    $text = str_replace(' ', '-', $text);
    return $text;
}



function aboutimage($id)
{
   $ci=&get_instance();
   $result=$ci->db->select('about_image')
       ->from('about')
       ->where('id',$id)->get()
   ->row();
   return $result;
}
function blogimage($id)
{
   $ci=&get_instance();
   $result=$ci->db->select('*')
       ->from('blog')
       ->where('id',$id)
       ->get()
       ->row();
   return $result;
}

function xebercek()
{
    $ci=&get_instance();
    $result=$ci->db->select('*')
    ->from('blog')
    ->order_by('id','desc')
    ->limit(3)
    ->get()->result();
    return $result;
}
function aboutcek()
{
    $ci=&get_instance();
    $result=$ci->db->select('*')
    ->from('about')
    ->get()->row();
    return $result;
}
function projectcek()
{
    $ci=&get_instance();
    $result=$ci->db->select('*')
        ->from('project')
        ->get()->result();
    return $result;
}
function blog_tag()
{
    $ci=&get_instance();
    $result=$ci->db->select('*')->from('blog')->where('blog_status',1)
        ->get()->result();
    return $result;
}
function testmincek()
{
    $ci=&get_instance();
    $result=$ci->db->select('*')
        ->from('testmin')
        ->get()->result();
    return $result;
}
function servicestitlecek()
{
    $ci=&get_instance();
    $result=$ci->db->select('*')
        ->from('services')
        ->where('id',5)
        ->get()->row();
    return $result;
}
function cariertitlecek()
{
    $ci=&get_instance();
    $result=$ci->db->select('*')
        ->from('carier')
        ->where('id',7)
        ->get()->row();
    return $result;
}
//player_task cek

function player_task()
{
    $ci=&get_instance();
    $result=$ci->db->select('*')->from('player_task')
        ->get()->result();
    return $result;
}
function player_task_id()
{
    $ci=&get_instance();
    $result=$ci->db->select('*')
        ->from('player_task')
        ->join('players','players.player_task_id=player_task.id')
        ->get()->result();
    return $result;
}
function academy_player_task_id()
{
    $ci=&get_instance();
    $result=$ci->db->select('*')
        ->from('player_task')
        ->join('academy','academy.academy_player_task_id=player_task.id')
        ->get()->result();
    return $result;
}


function playerimage($id)
{
    $ci=&get_instance();
    $result=$ci->db->select('player_image')
        ->from('players')
        ->where('id',$id)
        ->get()
        ->row();
    return $result;
}
function techimage($id)
{
    $ci=&get_instance();
    $result=$ci->db->select('tech_image')
        ->from('techstaff')
        ->where('id',$id)
        ->get()
        ->row();
    return $result;
}
function academyimage($id)
{
    $ci=&get_instance();
    $result=$ci->db->select('academy_player_image')
        ->from('academy')
        ->where('id',$id)
        ->get()
        ->row();
    return $result;
}
function gameimage($id)
{
    $ci=&get_instance();
    $result=$ci->db->select('*')
        ->from('games')
        ->where('id',$id)
        ->get()
        ->row();
    return $result;
}


function managmentimage($id)
{
    $ci=&get_instance();
    $result=$ci->db->select('managment_image')
        ->from('managment')
        ->where('id',$id)
        ->get()
        ->row();
    return $result;
}
function videoimage($id)
{
    $ci=&get_instance();
    $result=$ci->db->select('video_image')
        ->from('video')
        ->where('id',$id)
        ->get()
        ->row();
    return $result;
}
function marketingimage($id)
{
    $ci=&get_instance();
    $result=$ci->db->select('mark_image')
        ->from('marketing')
        ->where('id',$id)
        ->get()
        ->row();
    return $result;
}
function infrimage($id)
{
    $ci=&get_instance();
    $result=$ci->db->select('infr_image')
        ->from('infrastruktur')
        ->where('id',$id)
        ->get()
        ->row();
    return $result;
}
function sekil_id_cek()
{
    $ci=&get_instance();
    $result=$ci->db->select('*')->from('gallery')
    ->order_by('id','desc')->limit(1)
    ->get()->row();
    return $result;
}
function gallerycek()
{
    $ci=&get_instance();
    $result=$ci->db->select('*')
        ->from('image')->join('gallery','gallery.id=image.gallery_id')
        ->group_by('gallery_id')
        ->get()->result();
    return $result;
}


function sekil_cek($id)
{
    $ci=&get_instance();
    $result=$ci->db->select('*')
        ->from('image')->where('gallery_id',$id)
        ->get()->result();
    return $result;
}
function image_cek()
{
    $ci=&get_instance();
    $result=$ci->db->select('*')->from('image')
        ->get()->result();
    return $result;
}

function img_upd($id=array(),$data=array())
{
    $ci=&get_instance();
    $result=$ci->db->where('gallery_id',$id)->update('image',$data);
    return $result;
}
 function latest_game()
 {
     $ci=&get_instance();
     $result=$ci->db->select('*')
         ->from('games')->order_by('id','desc')->limit(3)->get()->result();
     return $result;
 }
 function cek($id)
 {
     $ci=&get_instance();
     $result=$ci->db->select('*')
         ->from('games')->where('id',$id)
         ->get()->row();
     return $result;
 }
 function blogcek()
 {
     $ci=&get_instance();
     $result=$ci->db->select('*')
         ->from('blog')->order_by('id','desc')
         ->limit(4)
         ->get()->result();
     return $result;
 }
 function slide()
 {
     $ci=&get_instance();
     $result=$ci->db->select('blog_image_kicik')
         ->from('blog')->order_by('id','desc')
         ->limit(10)
    -> get()->result();
     return $result;

 }
function play($id)
{
    $ci=&get_instance();
    $result=$ci->db->select('*')
        ->from('players')->where('player_task_id',$id)
        ->get()->result();
    return $result;
}

function blogrand()
{

    $ci=&get_instance();
    $result=$ci->db->select('*')->from('blog')
        ->order_by('id','RANDOM')
        ->limit(1)
        ->get()->result();
    return $result;
}








