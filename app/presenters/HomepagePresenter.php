<?php

namespace App\Presenters;

use Nette,
	App\Model;


/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

	/** @var \Kdyby\RabbitMq\Connection @inject */
	public $bunny;


	public function actionDefault()
	{
		$producer = $this->bunny->getProducer('facebookNotifications');
		$producer->publish(json_encode(['greet' => "Hello %name", 'name' => "Filip"]));
	}

	public function renderDefault()
	{

	}

}
