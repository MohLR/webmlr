<?php
class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		//Loading url helper
	}

	public function view($admin = 'overview')
	{
		if  (! file_exists(APPPATH.'views/admin/'.$admin.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
        $this->load->view('admin/'.$admin);
	}
}