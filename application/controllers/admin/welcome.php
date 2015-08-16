<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('admin/admin-index');
	}
	public function main()	
	{
		$this->load->model('admin/article_model');
		$articles=$this -> article_model -> get_all();
		$this->load->view('admin/main',array('articles' => $articles));
	}
	
	public function blog(){
		header('Content-type: text/json');
		$article_id=$_GET['a'];		
		$this->load->model('admin/article_model');
		$blog=$this->article_model->get_by_article_id($article_id);
		$blog_json = '';
		foreach ($blog->result() as $row)
		{
   			echo json_encode((array)$row);
		}		
		
	}
   public function message(){
   	$name=$_POST['name'];
	$email=$_POST['eamil'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	$array=array('name'=>$name,'email'=>$email,'subject'=>$subject,'content'=>$message);
	$this->load->model('admin/article_model');
	$result=$this->article_model->save_message($array);
	redirect('admin/welcome/main');
	
   }

	public function login()
	{
		$this->load->view('admin/login');
	}

	public function list_article()
	{
		$this -> load -> model('admin/article_model');
		$articles = $this -> article_model -> get_all();

		$this -> load -> model('admin/category_model');
		$categories = $this -> category_model -> get_all();

		$this->load->view('admin/list-article', array('articles' => $articles, 'categories' => $categories));
	}

	public function post()
	{
		$this -> load -> model('admin/category_model');
		$categories = $this -> category_model -> get_all();
		$this->load->view('admin/post-article', array(
			'categories' => $categories
		));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */