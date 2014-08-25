<?php
class Ducna_Demo4_UserController extends Mage_Core_Controller_Front_Action {
    public function indexAction() {
       //$id = $this->getRequest()->getParam("id");
        $data = $this->getDemo();
        Mage::register("demo4",$data);
        echo '444';
        $this->loadLayout();
        $this->renderLayout();
    }
    public function getDemo() {
        $demos = Mage::getModel("demo4/MyModel")->getCollection();
        $result = array();
        foreach($demos as $demo) {
            array_push($result,(object)$demo);
        }
        return $result;
    }
    public function addAction() {
        $this->loadLayout();
        $this->renderLayout();
    }
    public function editAction() {
        $id = $this->getRequest()->getParam("id");
        $data = $this->editDemo($id);
        Mage::register("demo4",$data);

        $this->loadLayout();
        $this->renderLayout();
    }
    public function editDemo($id) {
        $demo = (object)Mage::getModel("Demo4/MyModel")->load($id)->getData();
        return $demo;
    }
    public function editDemoAction() {
        $demo_id = $_GET["demo_id"];
        $first_name = $_GET["first_name"];
        $last_name = $_GET["last_name"];
        $email = $_GET["email"];
        $updated = date("yy-mm-dd h:d:s");
        $data = array(
            "demoId"=>$demo_id,
            "firstName"=>$first_name,
            "lastName"=>$last_name,
            "email"=>$email,
            "updated"=>$updated
        );
        $edit = Mage::getModel("Demo4/MyModel")->load($demo_id);
        $email->setData($data);
        if($edit->save()) {
            echo "success";
        } else {
            echo "unsuccess";
        }

    }

    public function addDemoAction() {
        $first_name = $_GET["first_name"];
        $last_name = $_GET["last_name"];
        $email = $_GET["email"];
        $user_name = $_GET["user_name"];
        $password = $_GET["password"];
        $updated = date ("yy-mm-dd h:d:s");
        $data = array(
            "firstName"=>$first_name,
            "lastName"=>$last_name,
            "email"=>$email,
            "username"=>$user_name,
            "passworld"=>$password,
            "updated"=>$updated
        );
        $addDemo = Mage::getModel("Demo4/MyModel");
        $addDemo->addData($data);
        if($addDemo->save()) {
            echo "success";
        } else {
            echo "unsuccess";
        }
    }

    public function getMyCustomer($id) {
        $customers =Mage::getModel("customer/customer")->getCollection()->getData();
        $result = array();
        foreach ($customers as $customer) {
            if($customer["entity_id"]<$id){
                array_push($result,(object)$customer);
            }
        }
    }
}