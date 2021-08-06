<?php

namespace Drupal\tagchallenge\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the tagchallenge module.
 */
class DefaultControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "tagchallenge DefaultController's controller functionality",
      'description' => 'Test Unit for module tagchallenge and controller DefaultController.',
      'group' => 'Other',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests tagchallenge functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module tagchallenge.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
