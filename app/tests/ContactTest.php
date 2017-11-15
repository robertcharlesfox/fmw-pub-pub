<?php

class ContactTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testContactPage()
	{
		$crawler = $this->client->request('GET', 'contact');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

}
