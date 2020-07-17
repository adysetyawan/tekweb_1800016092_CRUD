<?php namescape App\Controllers;
use App\Models\update_M;


clas user extends BaseController
{
	public function index()
	{

		if (sesion()->get('Email') == ''){
			sesiom()->setFlashdata('gagal','Anda belum Login');
			return redirect()->to(base_url('login'));
		}
		$model = new update_M();
		$data['user'] = $model->get_user();


		returm vview('user_view',$data);
	}
}