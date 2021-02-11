<?php

namespace App\Controllers;

use  App\Models\Modelo;

class Controlador extends BaseController
{
	public function index()
	{
		$modelo = new Modelo();
		$mensaje = session('msg');
		$data = $modelo->allArticles();
		$articles = [
			'articles' => $data,
			'msg' => $mensaje
		];

		return view('index', $articles);
	}

	public function insert()
	{
		$modelo = new Modelo();
		$articulo = [
			"articulo" => $_POST['articulo'],
			"cantidad" => $_POST['cantidad']
		];

		$rst = $modelo->insertA($articulo);
		if ($rst > 0) {
			return redirect()->to(base_url() . '/')->with('msg', '1');
		} else {
			return redirect()->to(base_url() . '/')->with('msg', '2');
		}
	}

	public function select($id)
	{
		$modelo = new Modelo();
		$data = ['id' => $id];
		$rst = $modelo->selectA($data);

		$data1 = ['article' => $rst];
		return view('update', $data1);
	}

	public function update()
	{
		$modelo = new Modelo();
		$articulo = [
			"articulo" => $_POST['articulo'],
			"cantidad" => $_POST['cantidad']
		];

		$id = $_POST['id'];
		$rst = $modelo->updateA($articulo, $id);

		if ($rst) {
			return redirect()->to(base_url() . '/')->with('msg', '3');
		} else {
			return redirect()->to(base_url() . '/')->with('msg', '4');
		}
	}
	public function delete($id)
	{
		$modelo = new Modelo();
		$data = ['id' => $id];
		$rst = $modelo->deleteA($data);
		if ($rst) {
			return redirect()->to(base_url() . '/')->with('msg', '5');
		} else {
			return redirect()->to(base_url() . '/')->with('msg', '6');
		}
	}
}
