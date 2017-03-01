<?php

/**
 * Description of frontal
 *
 * @author Isaac
 */
class frontal extends \Intranet\Controller
{

    function __construct()
    {
        $utils = new \Intranet\Core\Utils();
        $utils->redirectIfNoValidToken();
    }

    public function index()
    {
        $html = $this->renderView('frontal/index');
        echo $html;
    }

    public function changeLang($lang)
    {
        $users = $this->model('User');
        $utils = new \Intranet\Core\Utils();
        $session = new Intranet\Core\Session();
        $session->getInstance();

        $session->set('USER', 'lang', $lang);
        $users->changeUserLang($lang, $session->get('USER','id'));

        $utils->redirectURL(array('url' => '/frontal'));
        die();
    }

    public function downloadGeneratedFile()
    {
        $utils = new \Intranet\Core\Utils();
        $session = new Intranet\Core\Session();
        $session->getInstance();

        $file = $session->get('DOWNLOADS', 'file');
        $session->del('DOWNLOADS');

        $utils->downloadPDF($file);

    }

    public function downloadFile($file)
    {
        $utils = new \Intranet\Core\Utils();
        $filename = $utils->getFilename($file);

        if(empty($utils->downloadPDF($filename))){
            $html = $this->renderView('frontal/notFound');
            echo $html;
        }

    }

}