<?php
class UsersController extends AppController
{
	public $name = "Users";
	public function  index(){
		echo "haha";
    }

    public function view($id=null){
        $info = array(
                        "title_page" => "CakePHP created by ChuQuangVien",
                        "id" => $id,
                    );
        $this->set("data",$info);
    }

}


?>