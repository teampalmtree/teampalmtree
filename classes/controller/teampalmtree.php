<?php

class Controller_TeamPalmTree extends Controller_Standard
{

    public function router($method, $params)
    {

        // forward to router
        parent::router($method, $params);
        // tpt template setup
        if (!$this->is_restful())
        {
            // site
            $this->template->site = 'TPT';
            // navigation
            $this->template->navigation = View::forge('teampalmtree/navigation', array(
                'section' => $this->section,
            ));

            // set login button view
            //$this->template->navigation->promoter_menu = Promoter::menu_view();
            // set admin menu
            //$this->template->navigation->promoter_menu->admin_menu = View::forge('gdmradio/adminmenu');

            // header & footer
            $this->template->section->header = View::forge('teampalmtree/header');
            $this->template->section->footer = View::forge('teampalmtree/footer');
        }

    }

}
