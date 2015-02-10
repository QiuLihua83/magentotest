<?php
class App_Helloworld_BlogController extends Mage_Core_Controller_Front_Action {
    
    
    public function indexAction()
    {
        Mage::log ( "in Blogpost class index();" );
        $params = $this->getRequest ()->getParams ();
        $blogpost = Mage::getModel ( 'helloworld/blogpost' );
        echo 'class:'.get_class($blogpost).'<br/>';
        echo ("Loading the blogpost with an ID of " . $params ['id'] . "<br />");
        echo "".$blogpost->hello();
        $blogpost->load ($params ['id']);
//         $blogpost->setTitle('helloworldssssssss');
//         $blogpost->setPost('2221143535354535');
//         $blogpost->save();
         $data = $blogpost->getData ();
         var_dump ( $data );
        echo "end.";
    }
}