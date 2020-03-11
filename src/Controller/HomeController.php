<?php
	namespace App\Controller;

	use Symfony\Component\Routing\Annotation\Route;
	use Symfony\Component\HttpFoundation\Response;

	class HomeController
	{
		/**
		 *	@Route("/", name="homepage")
		 */
		public function homepage()
		{
			return new Response('Page RecipeController');
		}
	}