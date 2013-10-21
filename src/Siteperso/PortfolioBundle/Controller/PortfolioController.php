<?php

namespace Siteperso\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PortfolioController extends Controller
{
	public function indexAction()
	{
		return $this->render('SitepersoPortfolioBundle:Portfolio:index.html.twig');
	}
}