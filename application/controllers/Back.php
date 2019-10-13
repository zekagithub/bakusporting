<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Back extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('adminlogin') && $this->uri->segment(2)&&$this->uri->segment(2)!='login'){
            redirect('back');
        }
    }

    public function index()
    {
        if($this->session->userdata('adminlogin'))
        {
            redirect('back/home');
        }
        $this->load->view('back/login/login');
    }
    public function login()
    {
        $data=array(

            'email'=>$email=$this->input->post('email'),
            'password'=>$password=$this->input->post('password')
        );
        $this->load->model('Dtbs');
        $result= $this->Dtbs->kontrol('admin',$email,$password);
        if ($result) {
            $this->session->set_userdata('adminlogin',true);
            $this->session->set_userdata('admininfo',$result);
            redirect('back/home');

        }else{

            $this->session->set_flashdata('success', '<div class="alert alert-danger"><h6>Hata oldu,Tekrar deneyin!</h6></div>');
            redirect('back');
        }
        $this->load->view('back/login/login');


    }
    public function home()
    {
        $this->load->view('back/home');
    }

    public function blog(){
        $this->load->model('Dtbs');
        $data['melumat']=$this->Dtbs->listele('blog');
        $data['head']="Blog sehifesi";

        $this->load->view('back/blog/blog',$data);
    }
    public function blogadd()
    {
        $this->load->view('back/blog/blog_add');
    }
    public function blogadded()
    {
        $config['upload_path'] = FCPATH . 'assets/front/images/blog';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
            $image = $this->upload->data();
            $imagename = $image['file_name'];
            $imagesave = 'assets/front/images/blog/' . $imagename . '';
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'assets/front/images/blog/' . $imagename . '';
            $config['create_thumb'] = false;
            $config['maintain_ratio'] = false;
            $config['quality'] = '100%';

            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            //image kicik


            $config2['upload_path'] = FCPATH . 'assets/front/images/blog';
            $config2['allowed_types'] = 'gif|jpg|jpeg|png';
            $config2['encrypt_name'] = TRUE;
            $this->load->library('upload', $config2);
            $this->upload->do_upload('image2');
            $image2 = $this->upload->data();
            $imagename2 = $image2['file_name'];
            $imagesave2 = 'assets/front/images/blog/' . $imagename2 . '';
            $config2['image_library'] = 'gd2';
            $config2['source_image'] = 'assets/front/images/blog/' . $imagename2 . '';
            $config2['create_thumb'] = false;
            $config2['maintain_ratio'] = false;
            $config2['quality'] = '100%';

            $this->load->library('image_lib', $config2);
            $this->image_lib->initialize($config2);
            $this->image_lib->resize();
            $this->image_lib->clear();



            // video sekil
            $config3['upload_path'] = FCPATH . 'assets/front/images/blog';
            $config3['allowed_types'] = 'gif|jpg|jpeg|png';
            $config3['encrypt_name'] = TRUE;
            $this->load->library('upload', $config3);
            if(
            $this->upload->do_upload('image_video')) {
                $image3 = $this->upload->data();
                $imagename3 = $image3['file_name'];
                $imagesave3 = 'assets/front/images/blog/' . $imagename3 . '';
                $config3['image_library'] = 'gd2';
                $config3['source_image'] = 'assets/front/images/blog/' . $imagename3 . '';
                $config3['create_thumb'] = false;
                $config3['maintain_ratio'] = false;
                $config3['quality'] = '100%';

                $this->load->library('image_lib', $config3);
                $this->image_lib->initialize($config3);
                $this->image_lib->resize();
                $this->image_lib->clear();
            }
            $data = array(
                'blog_title_az' => $title_az = $this->input->post('title_az'),
                'blog_title_en' => $title_en = $this->input->post('title_en'),
                'blog_title_ru' => $title_ru = $this->input->post('title_ru'),
                'blog_sef_az' => seflink($title_az),
                'blog_sef_en' => seflink($title_en),
                'blog_sef_ru' => seflink($title_ru),
                'blog_desc_az' => $this->input->post('description_az'),
                'blog_desc_en' => $this->input->post('description_en'),
                'blog_desc_ru' => $this->input->post('description_ru'),
                'blog_keywords_az' => $this->input->post('keywords_az'),
                'blog_keywords_en' => $this->input->post('keywords_en'),
                'blog_keywords_ru' => $this->input->post('keywords_ru'),
                'blog_tag_az' => $this->input->post('tag_az'),
                'blog_tag_en' => $this->input->post('tag_en'),
                'blog_tag_ru' => $this->input->post('tag_ru'),
                'blog_video' => $this->input->post('video'),
                'blog_image_esas' => $imagesave,
                'blog_image_kicik' => $imagesave2,
                'blog_video_image' => $imagesave3,
                'blog_status' => 1,
                'blog_date' => date('Y-m-d')

            );

            $this->load->model('Dtbs');
            $result = $this->Dtbs->elave('blog', $data);
            if ($result) {
                $this->session->set_flashdata('success','<div class="alert alert-success"><h4>Xeber elave edildi!</h4></div>');
                redirect('back/blog');
            }else{
                $this->session->set_flashdata('success','<div class="alert alert-danger">Xeta yeniden cehd edin!</div>');
                redirect('back/blog');
            }

    }
    public function blogedit($id)
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->cek('blog',$id);
        $data['melumat']=$result;
        $this->load->view('back/blog/blog_edit',$data);

    }
    public function blogupdate()
    {


        $config['upload_path'] = FCPATH . 'assets/front/images/blog';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
        $image = $this->upload->data();
        $imagename = $image['file_name'];
        $imagesave = 'assets/front/images/blog/' . $imagename . '';
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/front/images/blog/' . $imagename . '';
        $config['create_thumb'] = false;
        $config['maintain_ratio'] = false;
        $config['quality'] = '100%';

        $this->load->library('image_lib', $config);
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->clear();

        //image kicik


        $config2['upload_path'] = FCPATH . 'assets/front/images/blog';
        $config2['allowed_types'] = 'gif|jpg|jpeg|png';
        $config2['encrypt_name'] = TRUE;
        $this->load->library('upload', $config2);
        $this->upload->do_upload('image2');
        $image2 = $this->upload->data();
        $imagename2 = $image2['file_name'];
        $imagesave2 = 'assets/front/images/blog/' . $imagename2 . '';
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = 'assets/front/images/blog/' . $imagename2 . '';
        $config2['create_thumb'] = false;
        $config2['maintain_ratio'] = false;
        $config2['quality'] = '100%';

        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        $this->image_lib->resize();
        $this->image_lib->clear();



        // video sekil
        $config3['upload_path'] = FCPATH . 'assets/front/images/blog';
        $config3['allowed_types'] = 'gif|jpg|jpeg|png';
        $config3['encrypt_name'] = TRUE;
        $this->load->library('upload', $config3);

        $this->upload->do_upload('image_video') ;
            $image3 = $this->upload->data();
            $imagename3 = $image3['file_name'];
            $imagesave3 = 'assets/front/images/blog/' . $imagename3 . '';
            $config3['image_library'] = 'gd2';
            $config3['source_image'] = 'assets/front/images/blog/' . $imagename3 . '';
            $config3['create_thumb'] = false;
            $config3['maintain_ratio'] = false;
            $config3['quality'] = '100%';

            $this->load->library('image_lib', $config3);
            $this->image_lib->initialize($config3);
            $this->image_lib->resize();
            $this->image_lib->clear();


        $data = array(
            'id' => $id = $this->input->post('id'),
            'blog_title_az' => $title_az = $this->input->post('title_az'),
            'blog_title_en' => $title_en = $this->input->post('title_en'),
            'blog_title_ru' => $title_ru = $this->input->post('title_ru'),
            'blog_sef_az' => seflink($title_az),
            'blog_sef_en' => seflink($title_en),
            'blog_sef_ru' => seflink($title_ru),
            'blog_desc_az' => $this->input->post('description_az'),
            'blog_desc_en' => $this->input->post('description_en'),
            'blog_desc_ru' => $this->input->post('description_ru'),
            'blog_keywords_az' => $this->input->post('keywords_az'),
            'blog_keywords_en' => $this->input->post('keywords_en'),
            'blog_keywords_ru' => $this->input->post('keywords_ru'),
            'blog_tag_az' => $this->input->post('tag_az'),
            'blog_tag_en' => $this->input->post('tag_en'),
            'blog_tag_ru' => $this->input->post('tag_ru'),
            'blog_video' => $this->input->post('video'),
            'blog_image_esas' => $imagesave,
            'blog_image_kicik' => $imagesave2,
            'blog_video_image' => $imagesave3,
            'blog_status' => 1,
            'blog_date' => date('Y-m-d')

        );
        $sil = blogimage($id);
        unlink($sil->blog_image_esas);
        unlink($sil->blog_image_kicik);
        unlink($sil->blog_video_image);
        $this->load->model('Dtbs');
        $result = $this->Dtbs->guncelle($data, $id, 'id', 'blog');
        if ($result) {
            $this->session->set_flashdata('success', '<div class="alert alert-success"><h4>Xeber deyisdirildi!</h4></div>');
            redirect('back/blog');
        } else {
            $this->session->set_flashdata('success', '<div class="alert alert-danger">Xeta yeniden cehd edin!</div>');
            redirect('back/blog');
        }

    }
    public function blogdelete($id,$where,$from)
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->sil($id,$where,$from);
        if ($result) {
            $this->session->set_flashdata('success', '<div class="alert alert-success"><h4>xeber   silindi!</h4></div>');
            redirect('back/blog');
        } else {
            $this->session->set_flashdata('success', '<div class="alert alert-danger">xeta oldu,yeniden cehd edin!</div>');
            redirect('back/blog');
        }
    }
    //komanda bashlangic
    //mesqciler baslangic
    public function trainers()
    {
        $this->load->model('Dtbs');
        $data['melumat']=$this->Dtbs->listele('trainers');
        $data['head']="Mesqciler sehifesi";

        $this->load->view('back/trainers/trainers',$data);
    }


    public function trainersadd()
    {
        $this->load->view('back/trainers/trainers_add');
    }
    public function trainersadded()
    {
        $config['upload_path'] = FCPATH . 'assets/front/images/trainers';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            $image = $this->upload->data();
            $imagename = $image['file_name'];
            $imagesave = 'assets/front/images/trainers/' . $imagename . '';
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'assets/front/images/trainers/' . $imagename . '';
            $config['create_thumb'] = false;
            $config['maintain_ratio'] = false;
            $config['quality'] = '60%';
            $config['width'] = '360';
            $config['height'] = '270';
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data = array(
                'trainer_name_az' => $this->input->post('name_az'),
                'trainer_name_en' => $this->input->post('name_en'),
                'trainer_name_ru' => $this->input->post('name_ru'),
                'trainer_desc_az' => $this->input->post('desc_az'),
                'trainer_desc_en' => $this->input->post('desc_en'),
                'trainer_desc_ru' => $this->input->post('desc_ru'),
                'trainer_image' => $imagesave


            );
            $this->load->model('Dtbs');
            $result = $this->Dtbs->elave('trainers', $data);
            if ($result) {
                echo json_encode("yes");

            } else {
                echo json_encode("no");


            }

        } else {
//sekilsiz
            $data = array(
                'trainer_name_az' => $this->input->post('name_az'),
                'trainer_name_en' => $this->input->post('name_en'),
                'trainer_name_ru' => $this->input->post('name_ru'),
                'trainer_desc_az' => $this->input->post('desc_az'),
                'trainer_desc_en' => $this->input->post('desc_en'),
                'trainer_desc_ru' => $this->input->post('desc_ru')

            );

            $this->load->model('Dtbs');
            $result = $this->Dtbs->elave('trainers', $data);
            if ($result) {
                echo json_encode("yes");

            } else {
                echo json_encode("no");


            }


        }

    }


public function trainersedit($id)
{


    $this->load->model('Dtbs');
    $result=$this->Dtbs->cek('trainers',$id);
    $data['melumat']=$result;
    $this->load->view('back/trainers/trainers_edit',$data);

}

    public function trainersupdate()
    {
        $config['upload_path']= FCPATH.'assets/front/images/trainers';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['encrypt_name']=TRUE;
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('image')) {
            $image=$this->upload->data();
            $imagename=$image['file_name'];
            $imagesave='assets/front/images/trainers/'.$imagename.'';
            $config['image_library'] ='gd2';
            $config['source_image'] ='assets/front/images/trainers/'.$imagename.'';
            $config['create_thumb'] =false;
            $config['maintain_ratio'] =false;
            $config['quality'] ='60%';
            $config['width'] ='390';
            $config['height'] ='260';
            $this->load->library('image_lib',$config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data=array(
                'id'=>$id=$this->input->post('id'),
                'trainer_name_az' => $this->input->post('name_az'),
                'trainer_name_en' => $this->input->post('name_en'),
                'trainer_name_ru' => $this->input->post('name_ru'),
                'trainer_desc_az' => $this->input->post('desc_az'),
                'trainer_desc_en' => $this->input->post('desc_en'),
                'trainer_desc_ru' => $this->input->post('desc_ru'),
                'trainer_image' => $imagesave



            );
            $this->load->model('Dtbs');
            $result=$this->Dtbs->guncelle($data,$id,'id','trainers');
            if ($result) {
                echo json_encode("yes");

            } else {
                echo json_encode("no");


            }

        }
//sekilsiz
        else {
//sekilsiz
            $data=array(
                'id'=>$id=$this->input->post('id'),
                'trainer_name_az' => $this->input->post('name_az'),
                'trainer_name_en' => $this->input->post('name_en'),
                'trainer_name_ru' => $this->input->post('name_ru'),
                'trainer_desc_az' => $this->input->post('desc_az'),
                'trainer_desc_en' => $this->input->post('desc_en'),
                'trainer_desc_ru' => $this->input->post('desc_ru')

            );

            $this->load->model('Dtbs');
            $result=$this->Dtbs->guncelle($data,$id,'id','trainers');
            if ($result) {
                echo json_encode("yes");

            } else {
                echo json_encode("no");


            }
        }


    }

        function trainersdelete($id,$where,$from){
        $this->load->model('Dtbs');
        $result=$this->Dtbs->sil($id,$where,$from);
        $data['melumat']=$result;
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success"><h4>Mesqci silindi!</h4></div');
            redirect('back/trainers');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Xeta yeniden cehd edin!</div');
            redirect('back/trainers');
        }

    }
    //players
    function  players()
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->listele('players');
        $data['melumat']=$result;
        $this->load->view('back/players/players',$data);
    }
function playersadd()
{
    $this->load->view('back/players/player_add');
}


    public function playersadded()
    {
        $config['upload_path'] = FCPATH . 'assets/front/images/player';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            $image = $this->upload->data();
            $imagename = $image['file_name'];
            $imagesave = 'assets/front/images/player/' . $imagename . '';
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'assets/front/images/player/' . $imagename . '';
            $config['create_thumb'] = false;
            $config['maintain_ratio'] = false;
            $config['quality'] = '60%';
            $config['width'] = '270';
            $config['height'] = '416';
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data = array(
                'player_name_az' => $this->input->post('name_az'),
                'player_name_en' => $this->input->post('name_en'),
                'player_name_ru' => $this->input->post('name_ru'),
                'player_task_id' => $this->input->post('player_task'),
                'player_height' => $this->input->post('player_height'),
                'player_weight' => $this->input->post('player_weight'),
                'age' => $this->input->post('player_age'),
                'goal_number' => $this->input->post('goal'),
                'asiste' => $this->input->post('asiste'),
                'player_image' => $imagesave


            );
            $this->load->model('Dtbs');
            $result = $this->Dtbs->elave('players', $data);
            if ($result) {
                echo json_encode("yes");

            } else {
                echo json_encode("no");


            }

        }

    }


    function playerdelete($id,$where,$from){
        $this->load->model('Dtbs');
        $result=$this->Dtbs->sil($id,$where,$from);
        $data['melumat']=$result;
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success"><h4>Oyuncu silindi!</h4></div');
            redirect('back/players');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Xeta yeniden cehd edin!</div');
            redirect('back/players');
        }

    }

    public function playeredit($id)
    {


        $this->load->model('Dtbs');
        $result=$this->Dtbs->cek('players',$id);
        $data['melumat']=$result;
        $this->load->view('back/players/player_edit',$data);

    }



    public function playerupdate()
    {
        $config['upload_path']= FCPATH.'assets/front/images/player';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['encrypt_name']=TRUE;
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('image')) {
            $image=$this->upload->data();
            $imagename=$image['file_name'];
            $imagesave='assets/front/images/player/'.$imagename.'';
            $config['image_library'] ='gd2';
            $config['source_image'] ='assets/front/images/player/'.$imagename.'';
            $config['create_thumb'] =false;
            $config['maintain_ratio'] =false;
            $config['quality'] ='60%';
            $config['width'] ='270';
            $config['height'] ='416';
            $this->load->library('image_lib',$config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data=array(
                'id'=>$id=$this->input->post('id'),
                'player_name_az' => $this->input->post('name_az'),
                'player_name_en' => $this->input->post('name_en'),
                'player_name_ru' => $this->input->post('name_ru'),
                'player_task_id' => $this->input->post('player_task'),
                'player_height' => $this->input->post('player_height'),
                'player_weight' => $this->input->post('player_weight'),
                'age' => $this->input->post('player_age'),
                'goal_number' => $this->input->post('goal'),
                'asiste' => $this->input->post('asiste'),
                'player_image' => $imagesave



            );


            $sil=playerimage($id);
            unlink($sil->player_image);


            $this->load->model('Dtbs');
            $result=$this->Dtbs->guncelle($data,$id,'id','players');
            if ($result) {
                echo json_encode("yes");

            } else {
                echo json_encode("no");


            }

        }
//sekilsiz
        else {
//sekilsiz
            $data = array(
                'id'=>$id=$this->input->post('id'),
                'player_name_az' => $this->input->post('name_az'),
                'player_name_en' => $this->input->post('name_en'),
                'player_name_ru' => $this->input->post('name_ru'),
                'player_task_id' => $this->input->post('player_task'),
                   'player_height' => $this->input->post('player_height'),
                'player_weight' => $this->input->post('player_weight'),
                'age' => $this->input->post('player_age'),
                'goal_number' => $this->input->post('goal'),
                'asiste' => $this->input->post('asiste')

            );
           $this->load->model('Dtbs');
            $result=$this->Dtbs->guncelle($data,$id,'id','players');
            if ($result) {
                echo json_encode("yes");

            } else {
                echo json_encode("no");


            }
        }


    }

//texniki heyet

function techstaff()
{
    $this->load->model('Dtbs');
    $data['melumat']=$result=$this->Dtbs->listele('techstaff');
    $this->load->view('back/techstaff/techstaff',$data);

}

function techstaff_add()
{
   $this->load->view('back/techstaff/techstaff_add');
}
    public function techstaff_added()
    {
        $config['upload_path'] = FCPATH . 'assets/front/images/technical';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            $image = $this->upload->data();
            $imagename = $image['file_name'];
            $imagesave = 'assets/front/images/technical/' . $imagename . '';
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'assets/front/images/technical/' . $imagename . '';
            $config['create_thumb'] = false;
            $config['maintain_ratio'] = false;
            $config['quality'] = '60%';
            $config['width'] = '360';
            $config['height'] = '270';
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data = array(
                'tech_name_az' => $this->input->post('name_az'),
                'tech_name_en' => $this->input->post('name_en'),
                'tech_name_ru' => $this->input->post('name_ru'),
                'tech_desc_az' => $this->input->post('desc_az'),
                'tech_desc_en' => $this->input->post('desc_en'),
                'tech_desc_ru' => $this->input->post('desc_ru'),
                'tech_image' => $imagesave


            );
            $this->load->model('Dtbs');
            $result = $this->Dtbs->elave('techstaff', $data);
            if ($result) {
                echo json_encode("yes");

            } else {
                echo json_encode("no");


            }

        }

    }

    function techstaff_edit($id)
    {

        $this->load->model('Dtbs');
        $result=$this->Dtbs->cek('techstaff',$id);
        $data['melumat']=$result;
        $this->load->view('back/techstaff/techstaff_edit',$data);

    }

    public function techupdate()
    {
        $config['upload_path']= FCPATH.'assets/front/images/technical';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['encrypt_name']=TRUE;
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('image')) {
            $image=$this->upload->data();
            $imagename=$image['file_name'];
            $imagesave='assets/front/images/technical/'.$imagename.'';
            $config['image_library'] ='gd2';
            $config['source_image'] ='assets/front/images/technical/'.$imagename.'';
            $config['create_thumb'] =false;
            $config['maintain_ratio'] =false;
            $config['quality'] ='60%';
            $config['width'] ='390';
            $config['height'] ='260';
            $this->load->library('image_lib',$config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data=array(
                'id'=>$id=$this->input->post('id'),
                'tech_name_az' => $this->input->post('name_az'),
                'tech_name_en' => $this->input->post('name_en'),
                'tech_name_ru' => $this->input->post('name_ru'),
                'tech_desc_az' => $this->input->post('desc_az'),
                'tech_desc_en' => $this->input->post('desc_en'),
                'tech_desc_ru' => $this->input->post('desc_ru'),
                'tech_image' => $imagesave



            );


            $sil=techimage($id);
            unlink($sil->tech_image);


            $this->load->model('Dtbs');
            $result=$this->Dtbs->guncelle($data,$id,'id','techstaff');
            if ($result) {
                echo json_encode("yes");

            } else {
                echo json_encode("no");


            }

        }
//sekilsiz
        else {
//sekilsiz
            $data=array(
                'id'=>$id=$this->input->post('id'),
                'tech_name_az' => $this->input->post('name_az'),
                'tech_name_en' => $this->input->post('name_en'),
                'tech_name_ru' => $this->input->post('name_ru'),
                'tech_desc_az' => $this->input->post('desc_az'),
                'tech_desc_en' => $this->input->post('desc_en'),
                'tech_desc_ru' => $this->input->post('desc_ru')

            );

            $this->load->model('Dtbs');
            $result=$this->Dtbs->guncelle($data,$id,'id','techstaff');
            if ($result) {
                echo json_encode("yes");

            } else {
                echo json_encode("no");


            }
        }


    }



    function techstaff_delete($id,$where,$from){
        $this->load->model('Dtbs');
        $result=$this->Dtbs->sil($id,$where,$from);
        $data['melumat']=$result;
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success"><h4>Texnik silindi!</h4></div');
            redirect('back/techstaff');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Xeta yeniden cehd edin!</div');
            redirect('back/techstaff');
        }

    }

    //Akademiya


    function  academy()
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->listele('academy');
        $data['melumat']=$result;
        $this->load->view('back/academy/academy',$data);
    }
    function academyadd()
    {
        $this->load->view('back/academy/academy_add');
    }


    public function academyadded()
    {
        $config['upload_path'] = FCPATH . 'assets/front/images/academy';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            $image = $this->upload->data();
            $imagename = $image['file_name'];
            $imagesave = 'assets/front/images/academy/' . $imagename . '';
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'assets/front/images/academy/' . $imagename . '';
            $config['create_thumb'] = false;
            $config['maintain_ratio'] = false;
            $config['quality'] = '60%';
            $config['width'] = '360';
            $config['height'] = '270';
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data = array(
                'academy_player_name_az' => $this->input->post('name_az'),
                'academy_player_name_en' => $this->input->post('name_en'),
                'academy_player_name_ru' => $this->input->post('name_ru'),
                'academy_player_task_id' => $this->input->post('player_task'),
                'academy_player_image' => $imagesave


            );
            $this->load->model('Dtbs');
            $result = $this->Dtbs->elave('academy', $data);
            if ($result) {
                echo json_encode("yes");

            } else {
                echo json_encode("no");


            }

        }

    }


    function academydelete($id,$where,$from){
        $this->load->model('Dtbs');
        $result=$this->Dtbs->sil($id,$where,$from);
        $data['melumat']=$result;
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success"><h4>Akademiya Oyuncusu silindi!</h4></div');
            redirect('back/academy');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger"> Xeta yeniden cehd edin!</div');
            redirect('back/academy');
        }

    }

    public function academyedit($id)
    {


        $this->load->model('Dtbs');
        $result=$this->Dtbs->cek('academy',$id);
        $data['melumat']=$result;
        $this->load->view('back/academy/academy_edit',$data);

    }



    public function academyupdate()
    {
        $config['upload_path']= FCPATH.'assets/front/images/academy';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['encrypt_name']=TRUE;
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('image')) {
            $image=$this->upload->data();
            $imagename=$image['file_name'];
            $imagesave='assets/front/images/academy/'.$imagename.'';
            $config['image_library'] ='gd2';
            $config['source_image'] ='assets/front/images/academy/'.$imagename.'';
            $config['create_thumb'] =false;
            $config['maintain_ratio'] =false;
            $config['quality'] ='60%';
            $config['width'] ='390';
            $config['height'] ='260';
            $this->load->library('image_lib',$config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data=array(
                'id'=>$id=$this->input->post('id'),
                'academy_player_name_az' => $this->input->post('name_az'),
                'academy_player_name_en' => $this->input->post('name_en'),
                'academy_player_name_ru' => $this->input->post('name_ru'),
                'academy_player_task_id' => $this->input->post('player_task'),
                'academy_player_image' => $imagesave



            );


            $sil=academyimage($id);
            unlink($sil->academy_player_image);


            $this->load->model('Dtbs');
            $result=$this->Dtbs->guncelle($data,$id,'id','academy');
            if ($result) {
                echo json_encode("yes");

            } else {
                echo json_encode("no");


            }

        }
//sekilsiz
        else {
//sekilsiz
            $data = array(
                'id'=>$id=$this->input->post('id'),
                'academy_player_name_az' => $this->input->post('name_az'),
                'academy_player_name_en' => $this->input->post('name_en'),
                'academy_player_name_ru' => $this->input->post('name_ru'),
                'academy_player_task_id' => $this->input->post('player_task')

            );
            $this->load->model('Dtbs');
            $result=$this->Dtbs->guncelle($data,$id,'id','academy');
            if ($result) {
                echo json_encode("yes");

            } else {
                echo json_encode("no");


            }
        }


    }

    //Akademiya bitisi

//managment baslangic

    function managment()
    {
        $this->load->model('Dtbs');
        $data['melumat']=$result=$this->Dtbs->listele('managment');
        $this->load->view('back/managment/managment',$data);

    }

    function managment_add()
{
    $this->load->view('back/managment/managment_add');
}
    public function managment_added()
    {
        $config['upload_path'] = FCPATH . 'assets/front/images/managment';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            $image = $this->upload->data();
            $imagename = $image['file_name'];
            $imagesave = 'assets/front/images/managment/' . $imagename . '';
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'assets/front/images/managment/' . $imagename . '';
            $config['create_thumb'] = false;
            $config['maintain_ratio'] = false;
            $config['quality'] = '60%';
            $config['width'] = '360';
            $config['height'] = '270';
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data = array(
                'managment_title_az' => $this->input->post('title_az'),
                'managment_title_en' => $this->input->post('title_en'),
                'managment_desc_az' => $this->input->post('desc_az'),
                'managment_desc_en' => $this->input->post('desc_en'),
                'managment_desc_ru' => $this->input->post('desc_ru'),
                'managment_image' => $imagesave


            );
            $this->load->model('Dtbs');
            $result = $this->Dtbs->elave('managment', $data);
            if ($result) {
                echo json_encode("yes");

            } else {
                echo json_encode("no");


            }

        }

    }

    function managment_edit($id)
    {

        $this->load->model('Dtbs');
        $result=$this->Dtbs->cek('managment',$id);
        $data['melumat']=$result;
        $this->load->view('back/managment/managment_edit',$data);

    }

    public function managmentupdate()
    {
        $config['upload_path']= FCPATH.'assets/front/images/managment';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['encrypt_name']=TRUE;
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('image')) {
            $image=$this->upload->data();
            $imagename=$image['file_name'];
            $imagesave='assets/front/images/managment/'.$imagename.'';
            $config['image_library'] ='gd2';
            $config['source_image'] ='assets/front/images/managment/'.$imagename.'';
            $config['create_thumb'] =false;
            $config['maintain_ratio'] =false;
            $config['quality'] ='60%';
            $config['width'] ='390';
            $config['height'] ='260';
            $this->load->library('image_lib',$config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data=array(
                'id'=>$id=$this->input->post('id'),
                'managment_title_az' => $this->input->post('title_az'),
                'managment_title_en' => $this->input->post('title_en'),
                'managment_title_ru' => $this->input->post('title_ru'),
                'managment_desc_az' => $this->input->post('desc_az'),
                'managment_desc_en' => $this->input->post('desc_en'),
                'managment_desc_ru' => $this->input->post('desc_ru'),
                'managment_image' => $imagesave



            );


            $sil=managmentimage($id);
            unlink($sil->managment_image);


            $this->load->model('Dtbs');
            $result=$this->Dtbs->guncelle($data,$id,'id','managment');
            if ($result) {
                echo json_encode("yes");

            } else {
                echo json_encode("no");


            }

        }
//sekilsiz
        else {
//sekilsiz
            $data=array(
                'id'=>$id=$this->input->post('id'),
                'managment_title_az' => $this->input->post('title_az'),
                'managment_title_en' => $this->input->post('title_en'),
                'managment_title_ru' => $this->input->post('title_ru'),
                'managment_desc_az' => $this->input->post('desc_az'),
                'managment_desc_en' => $this->input->post('desc_en'),
                'managment_desc_ru' => $this->input->post('desc_ru')

            );

            $this->load->model('Dtbs');
            $result=$this->Dtbs->guncelle($data,$id,'id','managment');
            if ($result) {
                echo json_encode("yes");

            } else {
                echo json_encode("no");


            }
        }


    }



    function managment_delete($id,$where,$from){
        $this->load->model('Dtbs');
        $result=$this->Dtbs->sil($id,$where,$from);
        $data['melumat']=$result;
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success"><h4>Rehberlik silindi!</h4></div>');
            redirect('back/managment');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Xeta yeniden cehd edin!</div>');
            redirect('back/managment');
        }

    }


//managment bitisi

//marketing baslangic

    function marketing()
    {
        $this->load->model('Dtbs');
        $data['melumat']=$result=$this->Dtbs->listele('marketing');
        $this->load->view('back/marketing/marketing',$data);

   }

    function marketing_add()
    {
        $this->load->view('back/marketing/marketing_add');
    }
    public function marketing_added()
    {
        $config['upload_path'] = FCPATH . 'assets/front/images/marketing';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            $image = $this->upload->data();
            $imagename = $image['file_name'];
            $imagesave = 'assets/front/images/marketing/' . $imagename . '';
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'assets/front/images/marketing/' . $imagename . '';
            $config['create_thumb'] = false;
            $config['maintain_ratio'] = false;
            $config['quality'] = '60%';
            $config['width'] = '360';
            $config['height'] = '270';
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data = array(
                'mark_name_az' => $this->input->post('name_az'),
                'mark_name_en' => $this->input->post('name_en'),
                'mark_name_ru' => $this->input->post('name_ru'),
                'mark_desc_az' => $this->input->post('desc_az'),
                'mark_desc_en' => $this->input->post('desc_en'),
                'mark_desc_ru' => $this->input->post('desc_ru'),
                'mark_image' => $imagesave


            );
            $this->load->model('Dtbs');
            $result = $this->Dtbs->elave('marketing', $data);
            if ($result) {
                echo json_encode("yes");

            } else {
                echo json_encode("no");


            }

        }

    }

    function marketing_edit($id)
    {

        $this->load->model('Dtbs');
        $result=$this->Dtbs->cek('marketing',$id);
        $data['melumat']=$result;
        $this->load->view('back/marketing/marketing_edit',$data);

    }

    public function marketingupdate()
    {
        $config['upload_path']= FCPATH.'assets/front/images/marketing';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['encrypt_name']=TRUE;
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('image')) {
            $image=$this->upload->data();
            $imagename=$image['file_name'];
            $imagesave='assets/front/images/marketing/'.$imagename.'';
            $config['image_library'] ='gd2';
            $config['source_image'] ='assets/front/images/marketing/'.$imagename.'';
            $config['create_thumb'] =false;
            $config['maintain_ratio'] =false;
            $config['quality'] ='60%';
            $config['width'] ='390';
            $config['height'] ='260';
            $this->load->library('image_lib',$config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data=array(
                'id'=>$id=$this->input->post('id'),
                'mark_name_az' => $this->input->post('name_az'),
                'mark_name_en' => $this->input->post('name_en'),
                'mark_name_ru' => $this->input->post('name_ru'),
                'mark_desc_az' => $this->input->post('desc_az'),
                'mark_desc_en' => $this->input->post('desc_en'),
                'mark_desc_ru' => $this->input->post('desc_ru'),
                'mark_image' => $imagesave



            );


            $sil=marketingimage($id);
            unlink($sil->mark_image);


            $this->load->model('Dtbs');
            $result=$this->Dtbs->guncelle($data,$id,'id','marketing');
            if ($result) {
                echo json_encode("yes");

            } else {
                echo json_encode("no");


            }

        }
//sekilsiz
        else {
//sekilsiz
            $data=array(
                'id'=>$id=$this->input->post('id'),
                'mark_name_az' => $this->input->post('name_az'),
                'mark_name_en' => $this->input->post('name_en'),
                'mark_name_ru' => $this->input->post('name_ru'),
                'mark_desc_az' => $this->input->post('desc_az'),
                'mark_desc_en' => $this->input->post('desc_en'),
                'mark_desc_ru' => $this->input->post('desc_ru')
            );

            $this->load->model('Dtbs');
            $result=$this->Dtbs->guncelle($data,$id,'id','marketing');
            if ($result) {
                echo json_encode("yes");

            } else {
                echo json_encode("no");


            }
        }


    }



    function marketing_delete($id,$where,$from){
        $this->load->model('Dtbs');
        $result=$this->Dtbs->sil($id,$where,$from);
        $data['melumat']=$result;
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success"><h4>Marketing silindi!</h4></div>');
            redirect('back/marketing');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Xeta yeniden cehd edin!</div>');
            redirect('back/marketing');
        }

    }


//marketing bitisi

//infrastruktur baslangic


    function infrastruktur()
    {
        $this->load->model('Dtbs');
        $data['melumat']=$result=$this->Dtbs->listele('infrastruktur');
        $this->load->view('back/infrastruktur/infrastruk',$data);

    }

    function infrastruk_add()
    {
        $this->load->view('back/infrastruktur/infrastruk_add');
    }
    public function infrastruk_added()
    {
        $config['upload_path'] = FCPATH . 'assets/front/images/infrastruktur';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            $image = $this->upload->data();
            $imagename = $image['file_name'];
            $imagesave = 'assets/front/images/infrastruktur/' . $imagename . '';
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'assets/front/images/infrastruktur/' . $imagename . '';
            $config['create_thumb'] = false;
            $config['maintain_ratio'] = false;
            $config['quality'] = '60%';
            $config['width'] = '360';
            $config['height'] = '270';
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data = array(
                'infr_title_az' => $this->input->post('title_az'),
                'infr_title_en' => $this->input->post('title_en'),
                'infr_desc_az' => $this->input->post('desc_az'),
                'infr_desc_en' => $this->input->post('desc_en'),
                'infr_desc_ru' => $this->input->post('desc_ru'),
                'infr_image' => $imagesave


            );
            $this->load->model('Dtbs');
            $result = $this->Dtbs->elave('infrastruktur', $data);
            if ($result) {
                echo json_encode("yes");

            } else {
                echo json_encode("no");


            }

        }

    }

    function infrastruk_edit($id)
    {

        $this->load->model('Dtbs');
        $result=$this->Dtbs->cek('infrastruktur',$id);
        $data['melumat']=$result;
        $this->load->view('back/infrastruktur/infrastruk_edit',$data);

    }

    public function infrupdate()
    {
        $config['upload_path']= FCPATH.'assets/front/images/infrastruktur';
        $config['allowed_types']='gif|jpg|jpeg|png';
        $config['encrypt_name']=TRUE;
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('image')) {
            $image=$this->upload->data();
            $imagename=$image['file_name'];
            $imagesave='assets/front/images/infrastruktur/'.$imagename.'';
            $config['image_library'] ='gd2';
            $config['source_image'] ='assets/front/images/infrastruktur/'.$imagename.'';
            $config['create_thumb'] =false;
            $config['maintain_ratio'] =false;
            $config['quality'] ='60%';
            $config['width'] ='390';
            $config['height'] ='260';
            $this->load->library('image_lib',$config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data=array(
                'id'=>$id=$this->input->post('id'),
                'infr_title_az' => $this->input->post('title_az'),
                'infr_title_en' => $this->input->post('title_en'),
                'infr_desc_az' => $this->input->post('desc_az'),
                'infr_desc_en' => $this->input->post('desc_en'),
                'infr_desc_ru' => $this->input->post('desc_ru'),
                'infr_image' => $imagesave



            );


            $sil=infrimage($id);
            unlink($sil->infr_image);


            $this->load->model('Dtbs');
            $result=$this->Dtbs->guncelle($data,$id,'id','infrastruktur');
            if ($result) {
                echo json_encode("yes");

            } else {
                echo json_encode("no");


            }

        }
//sekilsiz
        else {
//sekilsiz
            $data=array(
                'id'=>$id=$this->input->post('id'),
                'infr_title_az' => $this->input->post('title_az'),
                'infr_title_en' => $this->input->post('title_en'),
                'infr_desc_az' => $this->input->post('desc_az'),
                'infr_desc_en' => $this->input->post('desc_en'),
                'infr_desc_ru' => $this->input->post('desc_ru')
            );

            $this->load->model('Dtbs');
            $result=$this->Dtbs->guncelle($data,$id,'id','infrastruktur');
            if ($result) {
                echo json_encode("yes");

            } else {
                echo json_encode("no");


            }
        }


    }



    function infrastruk_delete($id,$where,$from){
        $this->load->model('Dtbs');
        $result=$this->Dtbs->sil($id,$where,$from);
        $data['melumat']=$result;
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success"><h4>Infrastruktur silindi!</h4></div>');
            redirect('back/infrastruktur');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Xeta yeniden cehd edin!</div>');
            redirect('back/infrastruktur');
        }

    }



//infrastruktur bitisi

//gallery baslangic

public function gallery()
{
    $this->load->model('Dtbs');
    $data['melumat']=$result=$this->Dtbs->listele('gallery');
    $this->load->view('back/gallery/gallery',$data);



}
public  function galleryadd()
{
    $this->load->view('back/gallery/gallery_add');
}

public  function galleryadded()
{
    $config['upload_path'] = FCPATH . 'assets/front/images/gallery';
    $config['allowed_types'] = 'gif|jpg|jpeg|png';
    $config['encrypt_name'] = TRUE;
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('gallery_image')) {
        $image = $this->upload->data();
        $imagename = $image['file_name'];
        $imagesave = 'assets/front/images/gallery/' . $imagename . '';
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/front/images/gallery/' . $imagename . '';
        $config['create_thumb'] = false;
        $config['maintain_ratio'] = false;
        $config['quality'] = '60%';
        $config['width'] = '500';
        $config['height'] = '300';
        $this->load->library('image_lib', $config);
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->clear();


        $data = array(
            'gallery_title_az' => $this->input->post('title_az'),
            'gallery_title_en' => $this->input->post('title_en'),
            'gallery_title_ru' => $this->input->post('title_ru'),
            'gallery_image' => $imagesave

        );
        $this->load->model('Dtbs');
        $result = $this->Dtbs->elave('gallery', $data);
        if ($result) {
            $this->session->set_flashdata('success', '<div class="alert alert-success"><h4>Gallery elave edildi!</h4></div>');
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $this->session->set_flashdata('success', '<div class="alert alert-danger">Xeta yeniden cehd edin!</div>');
            redirect('back/gallery');
        }

    }
}
public function  galleryedit($id)
{

    $this->load->model('Dtbs');
    $result=$this->Dtbs->cek('gallery',$id);

    $data['melumat']=$result;
    $this->load->view('back/gallery/gallery_edit',$data);

}

    function gallerydelete($id,$where,$from){
        $this->load->model('Dtbs');
        $result=$this->Dtbs->sil($id,$where,$from);
        $data['melumat']=$result;
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success"><h4>Gallery silindi!</h4></div>');
            redirect('back/gallery');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div>');
            redirect('back/gallery');
        }

    }


public  function galleryupdate()
{
    if ($this->input->post('product')) {

        $config['upload_path'] = FCPATH . 'assets/front/images/gallery';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gallery_image')) {
            $image = $this->upload->data();
            $imagename = $image['file_name'];
            $imagesave = 'assets/front/images/gallery/' . $imagename . '';
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'assets/front/images/gallery/' . $imagename . '';
            $config['create_thumb'] = false;
            $config['maintain_ratio'] = false;
            $config['quality'] = '60%';
            $config['width'] = '390';
            $config['height'] = '260';
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();


            $data = array(
                'id' => $id = $this->input->post('id'),
                'gallery_title_az' => $this->input->post('title_az'),
                'gallery_title_en' => $this->input->post('title_en'),
                'gallery_title_ru' => $this->input->post('title_ru'),
                'gallery_image' => $imagesave
            );
            $this->load->model('Dtbs');
            $result = $this->Dtbs->guncelle($data, $id, 'id', 'gallery');
            if ($result) {
                $this->session->set_flashdata('success', '<div class="alert alert-success"><h4>Gallery deyisidirildi!</h4></div>');
                redirect($_SERVER['HTTP_REFERER']);

            } else {
                $this->session->set_flashdata('success', '<div class="alert alert-danger">Xeta yeniden cehd edin!</div>');
                redirect($_SERVER['HTTP_REFERER']);


            }
        }else{


            $data = array(
                'id' => $id = $this->input->post('id'),
                'gallery_title_az' => $this->input->post('title_az'),
                'gallery_title_en' => $this->input->post('title_en'),
                'gallery_title_ru' => $this->input->post('title_ru')
            );
            $this->load->model('Dtbs');
            $result = $this->Dtbs->guncelle($data, $id, 'id', 'gallery');
            if ($result) {
                $this->session->set_flashdata('success', '<div class="alert alert-success"><h4>Gallery deyisidirildi!</h4></div>');
                redirect($_SERVER['HTTP_REFERER']);

            } else {
                $this->session->set_flashdata('success', '<div class="alert alert-danger">Xeta yeniden cehd edin!</div>');
                redirect($_SERVER['HTTP_REFERER']);


            }


        }
    }

}


//gallery bitisi
//image baslangic

public function imageupload()
{
    $this->load->view('back/gallery/imageupload');
}
public function imageuploaded($id)
{
    $config['upload_path'] = FCPATH . 'assets/front/images/gallery/photo';
    $config['allowed_types'] = 'gif|jpg|jpeg|png';
    $config['encrypt_name'] = TRUE;
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('file')) {
        $image = $this->upload->data();
        $imagename = $image['file_name'];
        $imagesave = 'assets/front/images/gallery/photo/' . $imagename . '';
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/front/images/gallery/photo/' . $imagename . '';
        $config['create_thumb'] = false;
        $config['maintain_ratio'] = false;
        $config['quality'] = '60%';
        $config['width'] = '390';
        $config['height'] = '260';
        $this->load->library('image_lib', $config);
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->clear();

        $data=array(
            'gallery_id'=>$id,
            'image_path'=>$imagesave
        );
        $this->load->model('Dtbs');
        $result=$this->Dtbs->elave('image',$data);



    }
}

function imagedelete($id,$where,$from)
{
    $this->load->model('Dtbs');
    $result=$this->Dtbs->sil($id,$where,$from);
    $data['melumat']=$result;
    if ($result) {
        $this->session->set_flashdata('success','<div class="alert alert-success"><h4>Gallery deyisidirildi!</h4></div>');
        redirect($_SERVER['HTTP_REFERER']);

    }else{
        $this->session->set_flashdata('success','<div class="alert alert-danger">Xeta yeniden cehd edin!</div>');
        redirect($_SERVER['HTTP_REFERER']);


    }

}


public function  imagefon($id)
{

    $data=array('master'=>1);
    $this->load->model('Dtbs');
    $result=$this->Dtbs->guncelle($data,$id,'id','image');
    if ($result) {
        $this->session->set_flashdata('success','<div class="alert alert-success"><h4>Fon Deyisdirildi!</h4></div>');
        $page = redirect($_SERVER['HTTP_REFERER']);
        $sec = "10";
        header("Refresh: $sec; url=$page");

    }else{
        $this->session->set_flashdata('success','<div class="alert alert-danger">Xeta yeniden cehd edin!</div>');
        $page = redirect($_SERVER['HTTP_REFERER']);
        $sec = "10";
        header("Refresh: $sec; url=$page");

    }

}



//image bitiisi




//video baslangic

public function  video()
{
    $this->load->model('Dtbs');
    $result=$this->Dtbs->listele('video');
    $data['melumat']=$result;
    $this->load->view('back/gallery/video/video',$data);
}

public function video_add()
{
    $this->load->view('back/gallery/video/video_add');
}
public function video_added()
{
    $config['upload_path'] = FCPATH . 'assets/front/images/video';
    $config['allowed_types'] = 'gif|jpg|jpeg|png';
    $config['encrypt_name'] = TRUE;
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('video_image')) {
        $image = $this->upload->data();
        $imagename = $image['file_name'];
        $imagesave = 'assets/front/images/video/' . $imagename . '';
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/front/images/video/' . $imagename . '';
        $config['create_thumb'] = false;
        $config['maintain_ratio'] = false;
        $config['quality'] = '60%';
        $config['width'] = '500';
        $config['height'] = '300';
        $this->load->library('image_lib', $config);
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->clear();

        $data = array(
            'video_title_az' => $this->input->post('title_az'),
            'video_title_en' => $this->input->post('title_en'),
            'video_title_ru' => $this->input->post('title_ru'),
            'video_link' => $this->input->post('link'),
            'video_image' => $imagesave
        );
        $this->load->model('Dtbs');
        $result = $this->Dtbs->elave('video', $data);
        if ($result) {
            echo json_encode("yes");

        } else {
            echo json_encode("no");


        }
    } else{

        $data=array(
            'video_title_az'=>$this->input->post('title_az'),
            'video_title_en'=>$this->input->post('title_en'),
            'video_title_ru'=>$this->input->post('title_ru'),
            'video_link'=>$this->input->post('link')
        );
        $this->load->model('Dtbs');
        $result = $this->Dtbs->elave('video', $data);
        if ($result) {
            echo json_encode("yes");

        } else {
            echo json_encode("no");


        }
    }




}



    public function video_edit($id)
    {
        $this->load->model('Dtbs');
        $data['melumat']=$result=$this->Dtbs->cek('video',$id);
        $this->load->view('back/gallery/video/video_edit',$data);
    }
public function videoupdate()
{

    $config['upload_path'] = FCPATH . 'assets/front/images/video';
    $config['allowed_types'] = 'gif|jpg|jpeg|png';
    $config['encrypt_name'] = TRUE;
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('video_image')) {
        $image = $this->upload->data();
        $imagename = $image['file_name'];
        $imagesave = 'assets/front/images/video/' . $imagename . '';
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/front/images/video/' . $imagename . '';
        $config['create_thumb'] = false;
        $config['maintain_ratio'] = false;
        $config['quality'] = '60%';
        $config['width'] = '500';
        $config['height'] = '300';
        $this->load->library('image_lib', $config);
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->clear();




        $data = array(
            'id' => $id = $this->input->post('id'),
            'video_title_az' => $this->input->post('title_az'),
            'video_title_en' => $this->input->post('title_en'),
            'video_link' => $this->input->post('link'),
            'video_image' => $imagesave
        );

        $sil = videoimage($id);
        unlink($sil->video_image);


        $this->load->model('Dtbs');
        $result = $this->Dtbs->guncelle($data, $id, 'id', 'video');
        if ($result) {
            echo json_encode("yes");

        } else {
            echo json_encode("no");


        }


    }else{

        $data = array(
            'id' => $id = $this->input->post('id'),
            'video_title_az' => $this->input->post('title_az'),
            'video_title_en' => $this->input->post('title_en'),
            'video_link' => $this->input->post('link')
        );
        $this->load->model('Dtbs');
        $result = $this->Dtbs->guncelle($data, $id, 'id', 'video');
        if ($result) {
            echo json_encode("yes");

        } else {
            echo json_encode("no");


        }

    }
}

    function video_delete($id,$where,$from){
        $this->load->model('Dtbs');
        $result=$this->Dtbs->sil($id,$where,$from);
        $data['melumat']=$result;
        if ($result) {
            $this->session->set_flashdata('success','<div class="alert alert-success"><h4>video silindi!</h4></div>');
            redirect('back/video');
        }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger">Hata oldu yeniden deneyin!</div>');
            redirect('back/video');
        }

    }


//video bitisi

//settings

    function settings()
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->listele('settings');
        $data['melumat']=$result;
        $data['head']="Ayarlar sehifesi";

        $this->load->view('back/settings/settings',$data);
    }
    public function settingsedit($id)
    {
        $this->load->model('Dtbs');
        $data['melumat']=$result=$this->Dtbs->cek('settings',$id);
        $this->load->view('back/settings/settings_edit',$data);
    }
    public function settingsupdate()
    {
        $data=array(
            'id'=>$id=$this->input->post('id'),
            'site_title'=>$this->input->post('title'),
            'site_url'=>$this->input->post('url'),
            'site_adress'=>$this->input->post('adress'),
            'site_map'=>$this->input->post('map'),
            'site_mail'=>$this->input->post('mail'),
            'site_telefon1'=>$this->input->post('phone1'),
            'site_telefon2'=>$this->input->post('phone2'),
            'site_description'=>$this->input->post('desc'),
            'site_keywords'=>$this->input->post('keywords'),
            'site_facebook'=>$this->input->post('facebook'),
            'site_instagram'=>$this->input->post('instagram')

        );
        $this->load->model('Dtbs');
        $result=$this->Dtbs->guncelle($data,$id,'id','settings');
        if ($result) {
            echo json_encode("yes");

        } else {
            echo json_encode("no");


        }
        }

    public function settingsdelete($id,$where,$from)
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->sil($id,$where,$from);
        if ($result) {
            $this->session->set_flashdata('success', '<div class="alert alert-success"><h4>hayarlar basariyla Silindi!</h4></div>');
            redirect('back/settings');
        } else {
            $this->session->set_flashdata('success', '<div class="alert alert-danger">Hata oldu,yeniden cehd edin!</div>');
            redirect('back/settings');
        }
    }
//adminsettings
    public function adminsettings()
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->cek('admin',1);
        $data['melumat']=$result;
        $this->load->view('back/settings/adminsettings',$data);
    }
    public function adminsettingsupdate()
    {
        $data=array(
            'id'=>$id=$this->input->post('id'),
            'email'=>$this->input->post('email'),
            'password'=>sha1(md5($this->input->post('password')))

        );
        $this->load->model('Dtbs');
        $result=$this->Dtbs->guncelle($data,$id,'id','admin');
        if ($result) {
          echo json_encode("yes");
        }else{
            echo json_encode("no");

        }
    }
    //games baslangic

    public function games()
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->listele('games');
        $data['melumat']=$result;
        $this->load->view('back/games/games',$data);
    }

public function gamesadd()
{

    $this->load->view('back/games/games_add');
}


    public function gameadded()
    {
        $config['upload_path'] = FCPATH . 'assets/front/images/games';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->do_upload('home_image');
            $image = $this->upload->data();
            $imagename = $image['file_name'];
            $imagesave = 'assets/front/images/games/' . $imagename . '';
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'assets/front/images/games/' . $imagename . '';
            $config['create_thumb'] = false;
            $config['maintain_ratio'] = false;
            $config['quality'] = '60%';
            $config['width'] = '360';
            $config['height'] = '270';
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            //image 2
            $config2['upload_path'] = FCPATH . 'assets/front/images/games';
            $config2['allowed_types'] = 'gif|jpg|jpeg|png';
            $config2['encrypt_name'] = TRUE;
            $this->load->library('upload', $config2);
         $this->upload->do_upload('guest_image');
                $image2 = $this->upload->data();
                $imagename2 = $image2['file_name'];
                $imagesave2 = 'assets/front/images/games/' . $imagename2 . '';
                $config2['image_library'] = 'gd2';
                $config2['source_image'] = 'assets/front/images/games/' . $imagename2 . '';
                $config2['create_thumb'] = false;
                $config2['maintain_ratio'] = false;
                $config2['quality'] = '60%';
                $config2['width'] = '360';
                $config2['height'] = '270';
                $this->load->library('image_lib', $config2);
                $this->image_lib->initialize($config2);
                $this->image_lib->resize();
                $this->image_lib->clear();

                $data = array(

                    'club_title_home' => $this->input->post('home_title'),
                    'club_title_guest' => $this->input->post('guest_title'),
                    'club_home_image' => $imagesave,
                    'club_guest_image' => $imagesave2,
                    'score' => $this->input->post('score'),
                    'stadium' => $this->input->post('stadium'),
                    'game_desc_az' => $this->input->post('desc_az'),
                    'game_desc_en' => $this->input->post('desc_en'),
                    'game_desc_ru' => $this->input->post('desc_ru'),
                    'date' => $this->input->post('date')

                );
                $this->load->model('Dtbs');
                $result = $this->Dtbs->elave('games', $data);
                if ($result) {
                    echo json_encode("yes");

                } else {
                    echo json_encode("no");


                }

            }

public function gamesedit($id)
{
    $this->load->model('Dtbs');
    $result=$this->Dtbs->cek('games',$id);
    $data['melumat']=$result;
    $this->load->view('back/games/games_edit',$data);
}


    public function gameupdate()
    {
        $config['upload_path'] = FCPATH . 'assets/front/images/games';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->do_upload('home_image');
        $image = $this->upload->data();
        $imagename = $image['file_name'];
        $imagesave = 'assets/front/images/games/' . $imagename . '';
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'assets/front/images/games/' . $imagename . '';
        $config['create_thumb'] = false;
        $config['maintain_ratio'] = false;
        $config['quality'] = '60%';
        $config['width'] = '360';
        $config['height'] = '270';
        $this->load->library('image_lib', $config);
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->clear();

        //image 2
        $config2['upload_path'] = FCPATH . 'assets/front/images/games';
        $config2['allowed_types'] = 'gif|jpg|jpeg|png';
        $config2['encrypt_name'] = TRUE;
        $this->load->library('upload', $config2);
        $this->upload->do_upload('guest_image');
        $image2 = $this->upload->data();
        $imagename2 = $image2['file_name'];
        $imagesave2 = 'assets/front/images/games/' . $imagename2 . '';
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = 'assets/front/images/games/' . $imagename2 . '';
        $config2['create_thumb'] = false;
        $config2['maintain_ratio'] = false;
        $config2['quality'] = '60%';
        $config2['width'] = '360';
        $config2['height'] = '270';
        $this->load->library('image_lib', $config2);
        $this->image_lib->initialize($config2);
        $this->image_lib->resize();
        $this->image_lib->clear();

        $data = array(
            'id'=>$id=$this->input->post('id'),
            'club_title_home' => $this->input->post('home_title'),
            'club_title_guest' => $this->input->post('guest_title'),
            'club_home_image' => $imagesave,
            'club_guest_image' => $imagesave2,
            'score' => $this->input->post('score'),
            'stadium' => $this->input->post('stadium'),
            'game_desc_az' => $this->input->post('desc_az'),
            'game_desc_en' => $this->input->post('desc_en'),
            'game_desc_ru' => $this->input->post('desc_ru'),
            'date' => $this->input->post('date')

        );



        $this->load->model('Dtbs');
        $result=$this->Dtbs->guncelle($data,$id,'id','games');
        if ($result) {
            echo json_encode("yes");

        } else {
            echo json_encode("no");


        }


    }


    public function gamesdelete($id,$where,$from)
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->sil($id,$where,$from);
        if ($result) {
            $this->session->set_flashdata('success', '<div class="alert alert-success"><h4>Oyun Silindi!</h4></div>');
            redirect('back/games');
        } else {
            $this->session->set_flashdata('success', '<div class="alert alert-danger">xeta oldu,yeniden cehd edin!</div>');
            redirect('back/games');
        }
    }





    //games bitisi

    //active baslangic
    public function active()
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->listele('aktiv');
        $data['melumat']=$result;
        $data['head']="Komanda siyahi";

        $this->load->view('back/active/active',$data);
    }

    public function activeedit($id)
    {
        $this->load->model('Dtbs');
        $data['melumat']=$result=$this->Dtbs->cek('aktiv',$id);
        $this->load->view('back/active/active_edit',$data);
    }
    public function activeupdate()
    {
        $data=array(
            'id'=>$id=$this->input->post('id'),
            'goal'=>$this->input->post('goal'),
            'player'=>$this->input->post('players'),
            'club'=>$this->input->post('club'),
            'winner'=>$this->input->post('winner')
        );

        $this->load->model('Dtbs');
        $result=$this->Dtbs->guncelle($data,$id,'id','aktiv');
        if ($result) {
            echo json_encode("yes");

        } else {
            echo json_encode("no");


        }



    }


    //active bitisi

//messages
    function messages()
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->listele('message');
        $data['melumat']=$result;
        $data['head']="Mesajlar sehifesi";
        $this->load->view('back/messages/messages',$data);
    }
    function messageread($id)
    {
        $this->load->model('Dtbs');
        $data=array(
            'status'=>1
        );
        $this->Dtbs->messageguncelle($id,$data);
        $data['melumat']=$result=$this->Dtbs->cek('message',$id);
        $this->load->view('back/messages/messages_read',$data);
    }
    public function messagedelete($id,$where,$from)
    {
        $this->load->model('Dtbs');
        $result=$this->Dtbs->sil($id,$where,$from);
        if ($result) {
            $this->session->set_flashdata('success', '<div class="alert alert-success"><h4>Mesaj basariyla Silindi!</h4></div>');
            redirect('back/messages');
        } else {
            $this->session->set_flashdata('success', '<div class="alert alert-danger">Hata oldu,yeniden cehd edin!</div>');
            redirect('back/messages');
        }
    }


    public function cixis()
    {
        $this->session->sess_destroy();
        redirect('back');

    }

}
