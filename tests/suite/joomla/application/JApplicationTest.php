<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Application
 *
 * @copyright   Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

require_once JPATH_PLATFORM.'/joomla/environment/request.php';
require_once JPATH_PLATFORM.'/joomla/application/application.php';

/**
 * Test class for JApplication.
 * Generated by PHPUnit on 2009-10-08 at 11:53:44.
 */
class JApplicationTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @todo Implement testGetInstance().
	 */
	public function testGetInstance()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testInitialise().
	 */
	public function testInitialise()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testInitialise().
	 */
	public function testConstructJInput()
	{
		$app = new JApplication(array('session' => false));
		$this->assertThat(
			$app->input,
			$this->isInstanceOf('JInput'),
			__LINE__ . 'JApplication->input not initialized properly'
		);
	}

	/**
	 * @todo Implement testRoute().
	 */
	public function testRoute()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testDispatch().
	 */
	public function testDispatch()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testRender().
	 */
	public function testRender()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testClose().
	 */
	public function testClose()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testRedirect().
	 */
	public function testRedirect()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testEnqueueMessage().
	 */
	public function testEnqueueMessage()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testGetMessageQueue().
	 */
	public function testGetMessageQueue()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testGetCfg().
	 */
	public function testGetCfg()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testGetName().
	 */
	public function testGetName()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testGetUserState().
	 */
	public function testGetUserState()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testSetUserState().
	 */
	public function testSetUserState()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testGetUserStateFromRequest().
	 */
	public function testGetUserStateFromRequest()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testRegisterEvent().
	 */
	public function testRegisterEvent()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testTriggerEvent().
	 */
	public function testTriggerEvent()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testLogin().
	 */
	public function testLogin()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testLogout().
	 */
	public function testLogout()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testGetTemplate().
	 */
	public function testGetTemplate()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testGetRouter().
	 */
	public function testGetRouter()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testStringURLSafe().
	 */
	public function testStringURLSafe()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testGetPathway().
	 */
	public function testGetPathway()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testGetMenu().
	 */
	public function testGetMenu()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * Testing getHash().
	 *
	 * @return  void
	 *
	 * @since   11.3
	 */
	public function testGetHash()
	{
		// Temporarily override the config cache in JFactory.
		$temp = JFactory::$config;
		JFactory::$config = new JObject(array('secret' => 'foo'));

		$this->assertThat(
		    JApplication::getHash('This is a test'),
		    $this->equalTo(md5('foo'.'This is a test')),
		    'Tests that the secret string is added to the hash.'
		);

		JFactory::$config = $temp;
	}

	/**
	 * @todo Implement testCheckSession().
	 */
	public function testCheckSession()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testGetClientId().
	 */
	public function testGetClientId()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testIsAdmin().
	 */
	public function testIsAdmin()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testIsSite().
	 */
	public function testIsSite()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}

	/**
	 * @todo Implement testIsWinOS().
	 */
	public function testIsWinOS()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete('This test has not been implemented yet.');
	}
}