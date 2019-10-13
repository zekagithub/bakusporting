<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends My_Controller
{
    public function index()
    {

        $this->load->model('Dtbs');
        $data['melumat'] = $result = $this->Dtbs->cek('settings', 2);
        $data['goal'] = $result = $this->Dtbs->cek('aktiv', 0);
        $data['games'] = $result = $this->Dtbs->listele('games');
        $data['head'] = 'Home';


        $this->load->view('front/home', $data);


    }

    public function dildeyisdir($dil)
    {
        $this->session->set_userdata('lang', $dil);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function blog_single($sef)
    {
        $this->load->model('Dtbs');
        $result = $this->Dtbs->blogcek($sef);

        $data['blog'] = $result;

        $data['melumat'] = $settings = $this->Dtbs->cek('settings', 2);

        $data['head'] = 'Blog';
        $this->load->view('front/blog/blog', $data);
    }

    public function about()
    {
        $this->load->model('Dtbs');
        $data['melumat'] = $result = $this->Dtbs->cek('settings', 2);

        $data['head'] = "About";
        $this->load->view('front/about/about', $data);


    }

    public function managment()
    {
        $this->load->model('Dtbs');
        $data['melumat'] = $result = $this->Dtbs->cek('settings', 2);
        $data['menec'] = $this->Dtbs->listele('managment');
        $data['head'] = 'Managment';

        $this->load->view('front/managment/managment', $data);
    }

    public function marketing()
    {
        $this->load->model('Dtbs');
        $data['melumat'] = $result = $this->Dtbs->cek('settings', 2);
        $data['market'] = $this->Dtbs->listele('marketing');
        $data['head'] = 'Marketing';

        $this->load->view('front/marketing/marketing', $data);
    }

    public function infrastructure()
    {
        $this->load->model('Dtbs');
        $data['melumat'] = $result = $this->Dtbs->cek('settings', 2);
        $data['infr'] = $this->Dtbs->listele('infrastruktur');
        $data['head'] = 'Infrastructur';

        $this->load->view('front/infrastructure/infrastructure', $data);
    }

    public function trainers()
    {
        $this->load->model('Dtbs');
        $data['melumat'] = $result = $this->Dtbs->cek('settings', 2);
        $data['trainers'] = $this->Dtbs->listele('trainers');
        $data['head'] = 'Trainers';

        $this->load->view('front/trainers/trainers', $data);
    }

    public function players()
    {
        $this->load->model('Dtbs');
        $data['melumat'] = $result = $this->Dtbs->cek('settings', 2);
        $data['players'] = $this->Dtbs->listele('players');
        $data['head'] = 'Players';

        $this->load->view('front/players/players', $data);
    }

    public function tech()
    {
        $this->load->model('Dtbs');
        $data['melumat'] = $result = $this->Dtbs->cek('settings', 2);
         $res=$this->Dtbs->listele('techstaff');
        $data['head'] = 'Technical';

        $data['tech'] =$res;
        $this->load->view('front/tech/tech', $data);
    }

    public function academy()
    {
        $this->load->model('Dtbs');
        $data['melumat'] = $result = $this->Dtbs->cek('settings', 2);
        $data['academy'] = $this->Dtbs->listele('academy');
        $data['head'] = 'Academy';

        $this->load->view('front/academy/academy', $data);
    }

    public function photos()
    {
        $this->load->model('Dtbs');
        $data['melumat'] = $result = $this->Dtbs->cek('settings', 2);
        $data['foto'] = $this->Dtbs->listele('gallery');
        $data['head'] = 'Gallery';

        $this->load->view('front/gallery/gallery', $data);
    }

    public function fotolar($id)
    {
        $this->load->model('Dtbs');
        $data['melumat'] = $result = $this->Dtbs->cek('settings', 2);
        $data['foto'] = $result = $this->Dtbs->fotocek($id);
        $data['head'] = 'Photos';

        $this->load->view('front/gallery/photo', $data);


    }

    public function video()
    {
        $this->load->model('Dtbs');
        $data['melumat'] = $result = $this->Dtbs->cek('settings', 2);
        $data['video'] = $this->Dtbs->listele('video');
        $data['head'] = 'Video';

        $this->load->view('front/gallery/video', $data);
    }
    public function games()
    {
        $this->load->model('Dtbs');
        $data['melumat'] = $result = $this->Dtbs->cek('settings', 2);
        $data['game'] = $this->Dtbs->listele('games');
        $data['head'] = 'Games';

        $this->load->view('front/games/game', $data);
    }
    public function tables()
    {
        $this->load->model('Dtbs');
        $data['melumat'] = $result = $this->Dtbs->cek('settings', 2);
        $data['head'] = 'Tables';

        $this->load->view('front/table/tables', $data);
    }

    public function contact()
    {
        $this->load->model('Dtbs');
        $data['melumat'] = $result = $this->Dtbs->cek('settings', 2);
        $data['head'] = 'Contact';

        $this->load->view('front/contact/contact', $data);
    }

    public function message()
    {
        $this->form_validation->set_rules('name', 'adiniz', 'trim|required|min_length[2]|max_length[15]|strip_tags');
        $this->form_validation->set_rules('email', 'emailiniz', 'trim|required|valid_email|strip_tags');
        $this->form_validation->set_rules('phone', 'telefonunuz', 'trim|required|strip_tags');
        $this->form_validation->set_rules('message', 'mesaj', 'trim|required|min_length[5]|strip_tags');

        $xetalar = array(
            'required' => '{field} burani bos qoymayin',
            'min_length' => '{field} minimum 2 herfli olmalidir',
            'valid_email' => '{field} kecerli bir email qeyd edin'
        );
        $this->form_validation->set_message($xetalar);

        if ($this->form_validation->run() == false) {
            redirect($_SERVER['HTTP_REFERER'], $this->session->set_flashdata('xeta', '<div class="alert alert-danger"
			<i class="fa fa-exclamation-circle"></i>
			' . $xetalar['xeta'] = validation_errors() . '

			'));
        } else {
            $data = array(
                'name' => $this->input->post('name', true),
                'email' => $this->input->post('email', true),
                'phone' => $this->input->post('phone', true),
                'message' => $this->input->post('message', true),
                'status' => 0

            );


        }
        $this->load->model('Dtbs');
        $cavab = $this->Dtbs->elave('message', $data);
        if ($cavab) {
            $this->session->set_flashdata('xeta', '<div class="alert alert-success"><h4>Mesaj gonderildi,sizinle elaqe saxlanilacaq...</h4></div>');
            redirect($_SERVER['HTTP_REFERER']);


        } else {
            $this->session->set_flashdata('xeta', '<div class=alert alert-danger><h4>Mesaj iletilmedi,</h4></div>');
            redirect($_SERVER['HTTP_REFERER']);

        }


    }
}
?>