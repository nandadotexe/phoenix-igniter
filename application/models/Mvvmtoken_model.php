<?php class Mvvmtoken_model extends MY_Model {

    public $table = "mvvmtokens";
    public $primary_key = "id";

    public function __construct()
    {
        parent::__construct();
        $this->return_as = "object";
    }

}
