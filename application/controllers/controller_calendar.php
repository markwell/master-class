<?php
class Controller_Calendar extends Controller
{
    function action_index()
    {
        $this->view->generate('calendar_view.php', 'template_view.php');
    }
}
