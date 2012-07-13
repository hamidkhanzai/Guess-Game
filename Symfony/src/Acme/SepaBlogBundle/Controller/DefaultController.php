<?php
namespace Acme\SepaBlogBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\SepaBlogBundle\Entity\Visitors;
use Acme\SepaBlogBundle\Entity\Game1D;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
class DefaultController extends Controller{
	
    public function createAction(Request $request){
    	$Visitor = new Visitors();
    	$Visitor->setFirst(0);
    	$Visitor->setSecond(0);
    	$Visitor->setThird(0);
    	
	$session = $this->get('session');
	$session-> start();  
	
    	$form = $this->createFormBuilder($Visitor)
            ->add('name', 'text',array('label'  => 'Name'))
	    ->getForm();

	if ($request->getMethod() == 'POST') {
				
		$form->bindRequest($request);

		if ($form->isValid()) {
		$rand = rand(1,100);
		$session->set('first', $rand);
		return $this->redirect($this->generateUrl('Selection'));
	}
	}
	return $this->render('AcmeSepaBlogBundle:Default:new.html.twig', array('form' => $form->createView(),));

 } 	 	

    public function play3DAction(Request $requests){
	$Mysession = $this->getRequest()->getSession();	
	$first = $Mysession->get('first');
	$Game = new Game1D();
	$form = $this->createFormBuilder($Game)
            ->add('first', 'number',array('label'  => 'X: '))		
	    ->getForm();

	if ($requests->getMethod() == 'POST') {
		$youtX = 0;
	
		$form->bindRequest($requests);

		if ($form->isValid()) {
		$data = $requests->request->all();
		$FirstGuess = $data['form']['first'];
	
		if ($FirstGuess < $first){			
			echo "X: ↑<br>";		
		}elseif($FirstGuess > $first){
			echo "X: 	↓<br>";
		}elseif($FirstGuess == $first){
			$youtX = 1;
		echo "X: You got it!<br>";
		}
				
	}	
}

	return $this->render('AcmeSepaBlogBundle:Default:3D.html.twig', array('form' => $form->createView(),));
	
}

	public function TopRecordsAction(){
		$repository = $this->getDoctrine()
   		 ->getRepository('AcmeSepaBlogBundle:Visitors');

		$query = $repository->createQueryBuilder('p')
	    ->orderBy('p.first','DESC')
	    ->setMaxResults(10)
	    ->getQuery();

		$visitors = $query->getResult();
		if(!$visitors){
			echo "not working";
		}
		
	return $this->render('AcmeSepaBlogBundle:Default:TopList.html.twig', array('visitors' => $visitors));

	}	

	public function startAction(){
	$Game = new Game();
		$form = $this->createFormBuilder($Game)
			->add('user','text')
			->add('playnumber_', 'text',array('read_only' => true))
			->add('hint','text', array('read_only' => true))
			->add('score','text', array('read_only' => true))
			->getForm();
		
		if($this->getRequest()->getMethod()=='POST'){
			$form->bindRequest($request);
			$Mysession = $this->getRequest()->getSession();	
			$first = $Mysession->get('first');

					$guess = $Game->getGuess();
					if($first == $guess && $guess != 0){
						$Game->setYourGuess('');
						$Game->setHint('You won!');
					}elseif ($first > $guess && $guess != 0){
						$Game->setYourGuess('');
						$Game->setHint('Lower!');
					}else{
						if($guess != 0){
						$Game->setYourGuess('');
						$Game->setHint('Higher!');
						}
					}


					$form = $this->createFormBuilder($Game)
					->add('guess','text')
					->add('playnumber', 'text',array('read_only' => true))
					->add('hint','text', array('read_only' => true))
					->add('score','text', array('read_only' => true))
					->getForm();
			
		return $this->render('AcmeSepaBlogBundle:Default:new.html.twig', array('form' => $form->createView()));
	     }
	return $this->render('AcmeSepaBlogBundle:Default:new.html.twig', array('form' => $form->createView()));

}
	}
