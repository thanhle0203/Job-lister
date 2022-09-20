<?php class Template{
    // Path To Template
    protected $template;
    // vars passed in
    protected $vars = array();

    // constructor
    public function __construct($template) {
        $this->template = $template;
    }

    public function __get($key){
        return $this->vars[$key];
    }

    public function __set($key, $value){
        $this->vars[$key] = $value;
    }
}