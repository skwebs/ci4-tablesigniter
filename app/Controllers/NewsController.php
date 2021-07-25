<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\NewsModel;

use monken\TablesIgniter;

class NewsController extends BaseController
{
	public function index()
	{
		//
		return view('news_table');
	}

	public function newsTable()
	{
		$news_model = new NewsModel();
		$news_table = new TablesIgniter();
		$news_table->setTable($news_model->noticeTable())
			->setDefaultOrder("id", "DESC")
			->setSearch(["id", "title", "news", "created_at", "updated_at"])
			->setOrder(["id", "title", "news", "created_at", "updated_at"])
			->setOutput(["id", "title", "news", "created_at", "updated_at",  $news_model->button()]);
		return $news_table->getDatatable();
	}
}
