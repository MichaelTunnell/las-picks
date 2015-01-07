<?php

require('./Twig/Autoloader.php');

class Twig
{
    /**
     * @var null|Twig_Enviroment
     */
    protected $twig = null;

    /**
     * Constructor
     */
    function __construct()
    {
        Twig_Autoloader::register();

        $loader = new Twig_Loader_Filesystem(
            array('./Templates')
        );

        $this->twig = new Twig_Environment($loader);
    }

    /*
     * Render the template
     *
     * @param array $data
     * @param boolean $home
     */
    public function renderTemplate($data, $home = false)
    {
        if ($home) {
            return $this->twig->render('home.html.twig', $data);
        } else {
            return $this->twig->render('page.html.twig', $data);
        }

        return;
    }
}
