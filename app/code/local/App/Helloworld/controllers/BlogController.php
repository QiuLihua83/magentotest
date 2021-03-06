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

         $data = $blogpost->getData ();
         var_dump ( $data );
        echo "end.";
    }
    
    public function newblogAction()
    {
        $blogpost = Mage::getModel ( 'helloworld/blogpost' );
        $blogpost->setTitle('Titlexxxxxxx');
        $blogpost->setPost('hello world , hi ,hi ,hi ,   ,,, haha  hha ');
        $blogpost->save();
        echo "finished.";
    }
    
    public  function showAllBlogsAction()
    {
        Mage::log("in ".__FUNCTION__);
        $mdc = Mage::getModel("helloworld/blogpost")->getCollection();
        echo "<table>";
        foreach($mdc as $md)
        {
            echo "<tr>";
            echo "<td>".$md->getId()."</td>";
            echo "<td>".$md->getTitle()."</td>";
            echo "<td>".$md->getPost()."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    
    public function testAction()
    {
        $mdc = Mage::getModel("helloworld/blogpost")->getCollection();
        $mdc =$mdc->addFieldToFilter('title',array('like'=>'Title%'));
        $sql = (string)$mdc->getSelect();
        
        echo "<table>";
        foreach($mdc as $md)
        {
            echo "<tr>";
            echo "<td>".$md->getId()."</td>";
            echo "<td>".$md->getTitle()."</td>";
            echo "<td>".$md->getPost()."</td>";
            echo "</tr>";
        }
        echo "</table>";
        
        echo '<br/>'.$sql;
    }

    
}







