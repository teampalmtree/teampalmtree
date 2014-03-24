<?php

class Controller_Welcome extends Controller_TeamPalmTree
{

    public function before()
    {
        // set section
        $this->section = 'Home';
        // run parent
        parent::before();
    }

	public function action_index()
	{
        // create view
        $view = View::forge('welcome/index');
        // set template vars
        $this->template->title = 'Index';
        $this->template->section->body = $view;
	}

	public function action_404()
	{
		return Response::forge(ViewModel::forge('welcome/404'), 404);
	}
}
