<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 8/12/14
 * Time: 10:51 PM
 * To change this template use File | Settings | File Templates.
 */

class Quan_Demo_MessageController extends Mage_Core_Controller_Front_Action{
    public function indexAction(){
        $id = $this->getRequest()->getParam("id");
        $data = $this->getDemo($id);
        Mage::register("test",$data);
        $this->loadLayout();
        $this->renderLayout();
    }

    public function addAction(){

        $this->loadLayout();
        $this->renderLayout();
    }



    public function getDemo(){
        $demos = Mage::getModel("Demo/MyDemo")->getCollection()->getData();
        $result = array();
        foreach($demos as $demo){
            array_push($result,(object)$demo) ;
        }
        return $result;
    }

    public function editAction(){
        $id = $this->getRequest()->getParam("id");
        $data = $this->editDemo($id);
        Mage::register("test",$data);
        $this->loadLayout();
        $this->renderLayout();
    }

    private function editDemo($id){
        $demo = (object)Mage::getModel("Demo/MyDemo")->load($id)->getData();
        return $demo;
    }

    public function editDemoAction(){
        $demo_id = $_GET["demo_id"];
        $first_name = $_GET["first_name"];
        $last_name = $_GET["last_name"];
        $email = $_GET["email"];
        $updated = date("yy-m-d h:d:s");
        $data = array(
            "demoId"=>$demo_id,
            "firstname"=>$first_name,
            "lastname"=>$last_name,
            "email"=>$email,
            "updated"=> $updated
        );
        $edit = Mage::getModel("Demo/MyDemo")->load($demo_id);
        $edit->setData($data);
        if($edit->save()) echo "success";
        else echo "unsuccess";
    }

    public function addDemoAction(){
        $first_name = $_GET["first_name"];
        $last_name = $_GET["last_name"];
        $email = $_GET["email"];
        $user_name = $_GET["user_name"];
        $password = $_GET["password"];
        $updated = date("yy-m-d h:d:s");
        $data = array(
            "firstname"=>$first_name,
            "lastname"=>$last_name,
            "email"=>$email,
            "username"=>$user_name,
            "password"=>$password,
            "updated"=> $updated
        );
        $addDemo = Mage::getModel("Demo/MyDemo");
        $addDemo->addData($data);
        if($addDemo->save())echo "success";
        else echo "unsuccess";
    }

    public function getMyCustomer($id){
        $customers = Mage::getModel("customer/customer")->getCollection()->getData();
        $result = array();
        foreach($customers as $customer){
            if($customer["entity_id"] < $id) array_push($result,(object)$customer);
        }
        return $result;
    }
}