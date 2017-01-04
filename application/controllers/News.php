<?php
class News extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->library('ion_auth');
        $this->load->helper('url_helper');
    }

    public function index()
    {
    	$data['news'] = $this->news_model->get_news();
        $data['title'] = 'News archive';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/footer');
        $this->load->view('news/index', $data);
    }

    public function list()
    {
        if (!$this->ion_auth->logged_in()) {
            redirect(site_url('login'), 'refresh');
        }else{
            $data['news'] = $this->news_model->get_news();
            $data['title'] = 'LIST Archive';

            $this->load->view('templates/header', $data);
            $this->load->view('news/list', $data);
            $this->load->view('templates/footer');
        }
    }

    public function edit($slug=NULL)
    {
        $data['news_item'] = $this->news_model->get_news_for_edit($slug);
        // echo var_dump($data);
        // die();
        $data['title'] = $data['news_item']['title'];
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if (empty($data['news_item'])) {
            show_404();
        }

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('news/edit', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            $update = $this->news_model->set_update($this->input->post('slug'));
            if ($update) {
                $this->load->view('news/success');
            }else{
                $this->load->view('news/error');
            }
        }
    }

    public function view($slug = NULL)
    {
    	$data['news_item'] = $this->news_model->get_news($slug);

        if (empty($data['news_item']))
        {
                show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a news item';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('news/create');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->news_model->set_news();
            $this->load->view('news/success');
        }
    }

    public function delete($id)
    {
        $delete = $this->news_model->delete_news($id);
        if ($delete) {
            $this->load->view('news/success');
        }else{
            $this->load->view('news/error');
        }
    }
}