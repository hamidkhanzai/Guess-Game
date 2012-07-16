<?php

namespace Acme\SepaBlogBundle\Controller;


use Symfony\Component\HttpFoundation\Response;

use Acme\SepaBlogBundle\Entity\Visitors;
use Acme\SepaBlogBundle\Entity\Game1D;
use Acme\SepaBlogBundle\Entity\Game;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('AcmeSepaBlogBundle:Default:index.html.php', array('name' => $name));
    }
    
    public function createAction(Request $request){
    	$Visitor = new Visitors();
    	$form = $this->createFormBuilder($Visitor)
    	->add('name', 'text',array('label'  => 'Name'))
    	->getForm();
    
    	if ($this->getRequest()->getMethod() == 'POST') {
    		$form->bindRequest($this->getRequest());
    		//if ($form->isValid()) {
    
    		$session = $this->getRequest()->getSession();
    		$ran1 = rand(1,10);
    		$ran2 = rand(1,10);
    		$ran3 = rand(1,10);
    		$session->set('uid',$this->saveOrGetUser($form->get('name')->getData()));
    		$session->set('uname',$form->get('name')->getData());
    		$session->set('first', $ran1);
    		$session->set('second', $ran2);
    		$session->set('third', $ran3);
    		$session->set('score', 100);
    		$session->set('chance', 10);
    		$session->set('chance2', 15);
    		$session->set('chance3', 20);
    		$session->set('chance3', 20);
    		$session->set('name', $form->getName());
    		return $this->redirect($this->generateUrl('type'));
    	}
    	return $this->render('AcmeSepaBlogBundle:Default:new.html.php', array('form' => $form->createView()));
    }
    
    /**
     * Game Level one
     * @param Request $request
     */
    public function D1Action(Request $request){
    	$session = $this->getRequest()->getSession();
    	$first = $session->get('first');
    	$score = $session->get('score');
    	$chance = $session->get('chance');
    	//$score = 100;
    	$Game = new Game();
    	$form = $this->createFormBuilder($Game)
    	->add('guess','text')
    	->getForm();
    	
    	$tipChance="";
    	$tipScor="";
    	$tipHint="";
    	
    	$url1d= $this->generateUrl('Game1D');
    	$url2d=$this->generateUrl('Game2D');
    	$url3D=$this->generateUrl('Game3D');
    
    
    	if($this->getRequest()->getMethod()=='POST'){
    		$form->bindRequest($request);
    		$guess = $Game->getGuess();
    		$session = $this->getRequest()->getSession();
    		if($session->get('chance')==0){
    
    			$session->set('chance', 10);
    			return $this->render('AcmeSepaBlogBundle:Default:lost.html.php',array('url'=>$this->generateUrl('type')));
    
    		}
    		if($first == $guess){
    			$Game->setGuess('');
    			$tipHint='You won!';
    			$session->set('score', $score-10);
    			$tipScor=$session->get('score');
    			$session->set('chance', $chance-1);
    			$tipChance=$session->get('chance');
    
    		}elseif ($first < $guess){
    			$Game->setGuess('');
    			$tipHint='Lower!';
    			$session->set('score', $score-10);
    			$tipScor=$session->get('score');
    			$session->set('chance', $chance-1);
    			$tipChance=$session->get('chance');
    
    		}elseif($first > $guess){
    			$Game->setGuess('');
    			$tipHint='Higher!';
    			$session->set('score', $score-10);
    			$tipScor=$session->get('score');
    			$session->set('chance', $chance-1);
    			$tipChance=$session->get('chance');
    		}
    			
    		$form = $this->createFormBuilder($Game)
    		->add('guess','text')
    		->add('chance','text',array('read_only' => true))
    		->add('hint','text', array('read_only' => true))
    		->add('score','text', array('read_only' => true))
    		->getForm();
    			
    		return $this->render('AcmeSepaBlogBundle:Default:game.html.php', array('tipChance'=>$tipChance,'tipHint'=>$tipHint,'tipScor'=>$tipScor,'D1'=>$url1d,'D2'=>$url2d,'D3'=>$url3D,'visitors'=>$this->aTopRecordsAction("first"),'form' => $form->createView()));
    	}
    
    	return $this->render('AcmeSepaBlogBundle:Default:game.html.php', array('tipChance'=>$tipChance,'tipHint'=>$tipHint,'tipScor'=>$tipScor,'D1'=>$url1d,'D2'=>$url2d,'D3'=>$url3D,'visitors'=>$this->aTopRecordsAction("first"),'form' => $form->createView()));
    
    }
    
    /**
     * Game Level two
     * @param Request $request
     */
    
    public function D2Action(Request $request){
    	$session = $this->getRequest()->getSession();
    	if(!$session->get('d2')){
    		$session->set('d2','start');
    	}
    	$tipChance="";
    	$tipHint="";
    	$tipScor="";
    	$first = $session->get('first');
    	$second = $session->get('second');
    	$score = $session->get('score');
    	$chance = $session->get('chance2');
    	$Game = new Game();
    	$form = $this->createFormBuilder($Game)
    	->add('guess','text')
    	->add('guess2','text')
    	->getForm();
    		
    	if($session->get('d2')){
    		if($session->get('d2')=='start'){
    			$form = $this->createFormBuilder($Game)
    			->add('guess','text')
    			->add('guess2','text')
    			->add('chance','text',array('read_only' => true))
    			->add('hint','text', array('read_only' => true))
    			->add('score','text', array('read_only' => true))
    			->getForm();
    			$session->set('d2','stop');
    		}
    	}
    	$url1d= $this->generateUrl('Game1D');
    	$url2d=$this->generateUrl('Game2D');
    	$url3D=$this->generateUrl('Game3D');
    
    		
    	if($this->getRequest()->getMethod()=='POST'){
    		$form->bindRequest($request);
    		$guess = $Game->getGuess();
    		$guess2 = $Game->getGuess2();
    		$session = $this->getRequest()->getSession();
    		if($session->get('chance2')==0){
    				
    			$session->set('chance2', 10);
    			return $this->render('AcmeSepaBlogBundle:Default:lost.html.php',array('url'=>$this->generateUrl('type')));
    				
    		}
    		// both equal X:X, y:y
    		if($first == $guess && $second == $guess2){
    			$Game->setGuess('');
    			$Game->setGuess2('');
    			$tipHint='Congratulation You won!';
    			$session->set('score', $score-7);
    			$tipScor=$session->get('score');
    			$session->set('chance', $chance-1);
    			$tipChance=$session->get('chance');
    		}elseif ($first < $guess && $second == $guess2){
    			
    			$Game->setGuess2('');
    			$tipHint='X: Lower!, Y Found';
    			$session->set('score', $score-7);
    			$tipScor=$session->get('score');
    			$session->set('chance', $chance-1);
    			$tipChance=$session->get('chance');
    		}elseif($first > $guess && $second == $guess2){
    			$Game->setGuess('');
    			
    			$tipHint='Higher!, Y Found';
    			$session->set('score', $score-7);
    			$tipScor=$session->get('score');
    			$session->set('chance', $chance-1);
    			$tipChance=$session->get('chance');
    		}elseif($first == $guess && $second > $guess2){
      			$Game->setGuess2('');
    			$tipHint='X Found, Y Higher!';
    			$session->set('score', $score-7);
    			$tipScor=$session->get('score');
    			$session->set('chance', $chance-1);
    			$tipChance=$session->get('chance');
    		}elseif($first == $guess && $second < $guess2){
    			$Game->setGuess('');
    			$Game->setGuess2('');
    			$tipHint='X Found, Y Lower!';
    			$session->set('score', $score-7);
    			$tipScor=$session->get('score');
    			$session->set('chance', $chance-1);
    			$tipChance=$session->get('chance');
    		}elseif($first > $guess && $second > $guess2){
    			$Game->setGuess('');
    			$Game->setGuess2('');
    			$tipHint='X Higher!, Y Higher!';
    			$session->set('score', $score-7);
    			$tipScor=$session->get('score');
    			$session->set('chance', $chance-1);
    			$tipChance=$session->get('chance');
    		}elseif($first < $guess && $second < $guess2){
    			$Game->setGuess('');
    			$Game->setGuess2('');
    			$tipHint='X Lower!, Y Lower!';
    			$session->set('score', $score-7);
    			$tipScor=$session->get('score');
    			$session->set('chance', $chance-1);
    			$tipChance=$session->get('chance');
    		}elseif($first < $guess && $second > $guess2){
    			$Game->setGuess('');
    			$Game->setGuess2('');
    			$tipHint='X Lower!, Y Higher!';
    			$session->set('score', $score-7);
    			$tipScor=$session->get('score');
    			$session->set('chance', $chance-1);
    			$tipChance=$session->get('chance');
    		}elseif($first > $guess && $second < $guess2){
    			$Game->setGuess('');
    			$Game->setGuess2('');
    			$tipHint='X Higher!, Y Lower!';
    			$session->set('score', $score-7);
    			$tipScor=$session->get('score');
    			$session->set('chance', $chance-1);
    			$tipChance=$session->get('chance');
    		}
    		$form = $this->createFormBuilder($Game)
    		->add('guess','text')
    		->add('guess2','text')
    		->getForm();
    
    			
    		return $this->render('AcmeSepaBlogBundle:Default:game2.html.php', array('tipChance'=>$tipChance,'tipHint'=>$tipHint,'tipScor'=>$tipScor,'D1'=>$url1d,'D2'=>$url2d,'D3'=>$url3D,'visitors'=>$this->aTopRecordsAction("second"),'form' => $form->createView()));
    	}
    	return $this->render('AcmeSepaBlogBundle:Default:game2.html.php', array('tipChance'=>$tipChance,'tipHint'=>$tipHint,'tipScor'=>$tipScor,'D1'=>$url1d,'D2'=>$url2d,'D3'=>$url3D,'visitors'=>$this->aTopRecordsAction("second"),'form' => $form->createView()));
    
    }
    
    /**
     * Chose Game Level
     * @param Request $request
     */
   
    public function typeAction(Request $request){
    	$Game = new Game();
    	$form = $this->createFormBuilder($Game)
    	->add('type','choice',array('choices' => array('1D' => '1D', '2D' => '2D', '3D' => '3D'),'required' => true,'expanded' => true,))
    	->getForm();
    	$url1d= $this->generateUrl('Game1D');
    	$url2d=$this->generateUrl('Game2D');
    	$url3D=$this->generateUrl('Game3D');
    	if($this->getRequest()->getMethod()=='POST'){
    		$form->bindRequest($request);
    		if($Game->getType()=='1D'){
    
    			return $this->redirect($this->generateUrl('Game1D'));
    
    		}
    		if($Game->getType()=='2D'){
    			return $this->redirect($this->generateUrl('Game2D'));
    		}
    		if($Game->getType()=='3D'){
    			return $this->redirect($this->generateUrl('Game3D'));
    		}
    	}
    	return $this->render('AcmeSepaBlogBundle:Default:type.html.php', array('D1'=>$url1d,'D2'=>$url2d,'D3'=>$url3D,'form' => $form->createView()));
    }
    
    /**
     * Game Level three
     * @param Request $request
     */
    
    public function D3Action(Request $request){
    	$session = $this->getRequest()->getSession();
    	$tipChance="";
    	$tipHint="";
    	$tipScor="";
    	$first = $session->get('first');
    	$second = $session->get('second');
    	$third = $session->get('third');
    	$score = $session->get('score');
    	$chance = $session->get('chance3');
    	$Game = new Game();
    	$form = $this->createFormBuilder($Game)
    	->add('guess','text')
    	->add('guess2','text')
    	->add('guess3','text')
    	->getForm();
    	    
    	$url1d= $this->generateUrl('Game1D');
    	$url2d=$this->generateUrl('Game2D');
    	$url3D=$this->generateUrl('Game3D');
    
  
    	if($this->getRequest()->getMethod()=='POST'){
    		$form->bindRequest($request);
    		$guess = $Game->getGuess();
    		$guess2 = $Game->getGuess2();
    		$guess3 = $Game->getGuess3();
    
    		$session = $this->getRequest()->getSession();
    		if($session->get('chance3')==0){
    				
    			$session->set('chance3', 10);
    			return $this->render('AcmeSepaBlogBundle:Default:lost.html.php',array('url'=>$this->generateUrl('type')));
    				
    		}
    
    
    		if($first > $guess){
    			if ($second > $guess2){
    				if($third > $guess3){
    					$Game->setGuess('');
    					$Game->setGuess2('');
    					$Game->setGuess3('');
    					$tipHint='X: Higher, Y: Higher, Z: Higher';
    					$session->set('score', $score-5);
    					$tipScor=$session->get('score');
    
    
    					$session->set('chance3', $chance-1);
    					$tipChance=$session->get('chance3');
    
    				}
    
    				if($third < $guess3){
    					$Game->setGuess('');
    					$Game->setGuess2('');
    					$Game->setGuess3('');
    					$tipHint='X: Higher, Y: Higher, Z: Lower';
    					$session->set('score', $score-5);
    					$tipScor=$session->get('score');
    
    
    					$session->set('chance3', $chance-1);
    					$tipChance=$session->get('chance3');
    				}
    
    				if($third == $guess3){
    					$Game->setGuess('');
    					$Game->setGuess2('');
    					$Game->setGuess3('');
    					$tipHint='X: Higher, Y: Higher, Z: Found';
    					$session->set('score', $score-5);
    					$tipScor=$session->get('score');
    
    
    					$session->set('chance3', $chance-1);
    					$tipChance=$session->get('chance3');
    
    				}
    			}
    			if ($second < $guess2){
    				if($third > $guess3){
    					$Game->setGuess('');
    					$Game->setGuess2('');
    					$Game->setGuess3('');
    					$tipHint='X: Higher, Y: Lower, Z: Higher';
    					$session->set('score', $score-5);
    					$tipScor=$session->get('score');
    
    
    					$session->set('chance3', $chance-1);
    					$tipChance=$session->get('chance3');
    				}
    
    				if($third < $guess3){
    					$Game->setGuess('');
    					$Game->setGuess2('');
    					$Game->setGuess3('');
    					$tipHint='X: Higher, Y: Lower, Z: Lower';
    					$session->set('score', $score-5);
    					$tipScor=$session->get('score');
    
    
    					$session->set('chance3', $chance-1);
    					$tipChance=$session->get('chance3');
    				}
    
    				if($third == $guess3){
    					$Game->setGuess('');
    					$Game->setGuess2('');
    					$Game->setGuess3('');
    					$tipHint='X: Higher, Y: Lower, Z: Found';
    					$session->set('score', $score-5);
    					$tipScor=$session->get('score');
    
    
    					$session->set('chance3', $chance-1);
    					$tipChance=$session->get('chance3');
    				}
    
    			}
    			if ($second == $guess2){
    				if($third > $guess3){
    					$Game->setGuess('');
    					$Game->setGuess2('');
    					$Game->setGuess3('');
    					$tipHint='X: Higher, Y: Found, Z: Higher';
    					$session->set('score', $score-5);
    					$tipScor=$session->get('score');
    
    
    					$session->set('chance3', $chance-1);
    					$tipChance=$session->get('chance3');
    				}
    
    				if($third < $guess3){
    					$Game->setGuess('');
    					$Game->setGuess2('');
    					$Game->setGuess3('');
    					$tipHint='X: Higher, Y: Found, Z: Lower';
    					$session->set('score', $score-5);
    					$tipScor=$session->get('score');
    
    
    					$session->set('chance3', $chance-1);
    					$tipChance=$session->get('chance3');
    				}
    
    				if($third == $guess3){
    					$Game->setGuess('');
    					$Game->setGuess2('');
    					$Game->setGuess3('');
    					$tipHint='X: Higher, Y: Found, Z: Found';
    					$session->set('score', $score-5);
    					$tipScor=$session->get('score');
    
    
    					$session->set('chance3', $chance-1);
    					$tipChance=$session->get('chance3');
    				}
    
    			}
    
    		}elseif($first < $guess){
    			if ($second > $guess2){
    				if($third > $guess3){
    					$Game->setGuess('');
    					$Game->setGuess2('');
    					$Game->setGuess3('');
    					$tipHint='X: Lower, Y: Higher, Z: Higher';
    					$session->set('score', $score-5);
    					$tipScor=$session->get('score');
    
    
    					$session->set('chance3', $chance-1);
    					$tipChance=$session->get('chance3');
    				}
    
    				if($third < $guess3){
    					$Game->setGuess('');
    					$Game->setGuess2('');
    					$Game->setGuess3('');
    					$tipHint='X: Lower, Y: Higher, Z: Lower';
    					$session->set('score', $score-5);
    					$tipScor=$session->get('score');
    
    
    					$session->set('chance3', $chance-1);
    					$tipChance=$session->get('chance3');
    				}
    
    				if($third == $guess3){
    					$Game->setGuess('');
    					$Game->setGuess2('');
    					$Game->setGuess3('');
    					$tipHint='X: Lower, Y: Higher, Z: Found';
    					$session->set('score', $score-5);
    					$tipScor=$session->get('score');
    
    
    					$session->set('chance3', $chance-1);
    					$tipChance=$session->get('chance3');
    				}
    			}
    
    			if ($second < $guess2){
    				if($third > $guess3){
    					$Game->setGuess('');
    					$Game->setGuess2('');
    					$Game->setGuess3('');
    					$tipHint='X: Lower, Y: Lower, Z: Higher';
    					$session->set('score', $score-5);
    					$tipScor=$session->get('score');
    
    
    					$session->set('chance3', $chance-1);
    					$tipChance=$session->get('chance3');
    				}
    				if($third < $guess3){
    					$Game->setGuess('');
    					$Game->setGuess2('');
    					$Game->setGuess3('');
    					$tipHint='X: Lower, Y: Lower, Z: Lower';
    					$session->set('score', $score-5);
    					$tipScor=$session->get('score');
    
    
    					$session->set('chance3', $chance-1);
    					$tipChance=$session->get('chance3');
    				}
    				if($third == $guess3){
    					$Game->setGuess('');
    					$Game->setGuess2('');
    					$Game->setGuess3('');
    					$tipHint='X: Lower, Y: Lower, Z: Found';
    					$session->set('score', $score-5);
    					$tipScor=$session->get('score');
    
    
    					$session->set('chance3', $chance-1);
    					$tipChance=$session->get('chance3');
    				}
    			}
    			if ($second == $guess2){
    				if($third > $guess3){
    					$Game->setGuess('');
    					$Game->setGuess2('');
    					$Game->setGuess3('');
    					$tipHint='X: Lower, Y: Found, Z: Higher';
    					$session->set('score', $score-5);
    					$tipScor=$session->get('score');
    
    
    					$session->set('chance3', $chance-1);
    					$tipChance=$session->get('chance3');
    				}
    
    				if($third < $guess3){
    					$Game->setGuess('');
    					$Game->setGuess2('');
    					$Game->setGuess3('');
    					$tipHint='X: Lower, Y: Found, Z: Lower';
    					$session->set('score', $score-5);
    
    					$tipScor=$session->get('score');
    
    					$session->set('chance3', $chance-1);
    					$tipChance=$session->get('chance3');
    				}
    				if($third == $guess3){
    					$Game->setGuess('');
    					$Game->setGuess2('');
    					$Game->setGuess3('');
    					$tipHint='X: Lower, Y: Found, Z: Found';
    					$session->set('score', $score-5);
    					$tipScor=$session->get('score');
    
    
    					$session->set('chance3', $chance-1);
    					$tipChance=$session->get('chance3');
    				}
    			}
    		}
    			elseif($first == $guess){
    				if ($second > $guess2){
    					if($third > $guess3){
    						$Game->setGuess('');
    						$Game->setGuess2('');
    						$Game->setGuess3('');
    						$tipHint='X: Found, Y:Higher, Z:Higher';
    						$session->set('score', $score-1);
    
    						$tipScor=$session->get('score');
    
    						$session->set('chance3', $chance-1);
    						$tipChance=$session->get('chance3');
    					}
    
    					if($third < $guess3){
    						$Game->setGuess('');
    						$Game->setGuess2('');
    						$Game->setGuess3('');
    						$tipHint='X: Found, Y:Higher, Z:Lower';
    						$session->set('score', $score-1);
    						$tipScor=$session->get('score');
    
    
    						$session->set('chance3', $chance-1);
    						$tipChance=$session->get('chance3');
    					}
    
    					if($third == $guess3){
    						$Game->setGuess('');
    						$Game->setGuess2('');
    						$Game->setGuess3('');
    						$tipHint='X: Found, Y:Higher, Z:Found';
    						$session->set('score', $score-1);
    						$tipScor=$session->get('score');
    
    
    						$session->set('chance3', $chance-1);
    						$tipChance=$session->get('chance3');
    					}
    
    				}
    
    				if ($second < $guess2){
    					if($third > $guess3){
    						$Game->setGuess('');
    						$Game->setGuess2('');
    						$Game->setGuess3('');
    						$tipHint='X: Found, Y:Lower, Z:Higher';
    						$session->set('score', $score-1);
    						$tipScor=$session->get('score');
    
    
    						$session->set('chance3', $chance-1);
    						$tipChance=$session->get('chance3');
    					}
    
    					if($third < $guess3){
    						$Game->setGuess('');
    						$Game->setGuess2('');
    						$Game->setGuess3('');
    						$tipHint='X: Found, Y:Lower, Z:Lower';
    						$session->set('score', $score-1);
    						$tipScor=$session->get('score');
    
    
    						$session->set('chance3', $chance-1);
    						$tipChance=$session->get('chance3');
    					}
    
    					if($third == $guess3){
    						$Game->setGuess('');
    						$Game->setGuess2('');
    						$Game->setGuess3('');
    						$tipHint='X: Found, Y:Lower, Z:Found';
    						$session->set('score', $score-1);
    
    						$tipScor=$session->get('score');
    
    						$session->set('chance3', $chance-1);
    						$tipChance=$session->get('chance3');
    					}
    
    				}
    				if ($second == $guess2){
    					if($third > $guess3){
    						$Game->setGuess('');
    						$Game->setGuess2('');
    						$Game->setGuess3('');
    						$tipHint='X: Found, Y:Found, Z:Higher';
    						$session->set('score', $score-1);
    						$tipScor=$session->get('score');
    
    
    						$session->set('chance3', $chance-1);
    						$tipChance=$session->get('chance3');
    					}
    					if($third < $guess3){
    						$Game->setGuess('');
    						$Game->setGuess2('');
    						$Game->setGuess3('');
    						$tipHint='X: Found, Y:Found, Z:Lower';
    						$session->set('score', $score-1);
    						$tipScor=$session->get('score');
       						$session->set('chance3', $chance-1);
    						$tipChance=$session->get('chance3');
    					}
    					if($third == $guess3){
    					
    						$Game->setGuess2('');
    						$Game->setGuess3('');
    						$tipHint='X: Found, Y:Found, Z:Found';
    						$session->set('score', $score-1);
    						$tipScor=$session->get('score');
    
    
    						$session->set('chance3', $chance-1);
    						$tipChance=$session->get('chance3');
    					}
    				
    			}
    		}
    
    		
    			
    		return $this->render('AcmeSepaBlogBundle:Default:game3.html.php', array('tipChance'=>$tipChance,'tipHint'=>$tipHint,'tipScor'=>$tipScor,'D1'=>$url1d,'D2'=>$url2d,'D3'=>$url3D,'visitors'=>$this->aTopRecordsAction("third"),'form' => $form->createView()));
    	}
    	return $this->render('AcmeSepaBlogBundle:Default:game3.html.php', array('tipChance'=>$tipChance,'tipHint'=>$tipHint,'tipScor'=>$tipScor,'D1'=>$url1d,'D2'=>$url2d,'D3'=>$url3D,'visitors'=>$this->aTopRecordsAction("third"),'form' => $form->createView()));
    }
    
    /**
     * get top 10 records of each level
     * @param unknown_type $level
     */
    public function aTopRecordsAction($level){
    	$repository = $this->getDoctrine()
    	->getRepository('AcmeSepaBlogBundle:Visitors');
    	$query = $repository->createQueryBuilder('p')
    	->orderBy('p.'.$level,'DESC')
    	->setMaxResults(10)
    	->getQuery();
    	return 	$visitors = $query->getResult();
    	//return $this->render('AcmeSepaBlogBundle:Default:TopList.html.twig', array('visitors' => $visitors));
    }
    /**
     * Save new User or returns if already exists
     * @param unknown_type $name
     */
    private function saveOrGetUser($name) {
    
    	$em = $this->get('doctrine')->getEntityManager();
    	$query = $em->createQuery('SELECT p FROM AcmeSepaBlogBundle:Visitors p WHERE p.name = :pname');
    	$query->setParameter('pname', $name);
    	$users = $query->getResult();
    	if(count($users) > 0)
    		return $users[0]->getId();
    	else {
    		$p = new Visitors();
    		$p->setName($name);
    		$em->persist($p);
    		$em->flush();
    		return $p->getId();
    	}
    }
}
