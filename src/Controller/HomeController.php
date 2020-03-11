<?php
	namespace App\Controller;

	use Symfony\Component\Routing\Annotation\Route;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

	class HomeController extends AbstractController
	{
		/**
		 *	@Route("/", name="homepage")
		 */
		public function homepage($slug)
		{
			return $this->render('index.html.twig', [
				'title' => ucwords(str_replace('-', ' ', $slug))
			])
		}
	}