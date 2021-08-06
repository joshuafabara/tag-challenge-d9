<?php

namespace Drupal\tagchallenge\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class TagChallengeController.
 */
class TagChallengeController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function tagchallengeRender() {
    $topics = array(
      0 => array(
        'name' => 'Algebra',
        'value' => 'algebra',
        'subject' => 'Math',
        'times' => array(
          0 => array(
            'weight' => 8,
            'time' => '8:00 AM'
          ),
          1 => array(
            'weight' => 11,
            'time' => '11:00 AM'
          )
        )
      ),
      1 => array(
        'name' => 'Trigonometry',
        'value' => 'trigonometry',
        'subject' => 'Math',
        'times' => array(
          0 => array(
            'weight' => 9,
            'time' => '9:00 AM'
          ),
          1 => array(
            'weight' => 12,
            'time' => '12:00 PM'
          )
        )
      ),
      2 => array(
        'name' => 'Calculus',
        'value' => 'calculus',
        'subject' => 'Math',
        'times' => array(
          0 => array(
            'weight' => 10,
            'time' => '10:00 AM'
          ),
          1 => array(
            'weight' => 15,
            'time' => '3:00 PM'
          )
        )
      ),
      3 => array(
        'name' => 'Physics',
        'value' => 'physics',
        'subject' => 'Science',
        'times' => array(
          0 => array(
            'weight' => 10,
            'time' => '10:00 AM'
          ),
          1 => array(
            'weight' => 15,
            'time' => '3:00 PM'
          )
        )
      ),
      4 => array(
        'name' => 'Chemistry',
        'value' => 'chemistry',
        'subject' => 'Science',
        'times' => array(
          0 => array(
            'weight' => 9,
            'time' => '9:00 AM'
          ),
          1 => array(
            'weight' => 13,
            'time' => '1:00 PM'
          )
        )
      ),
      5 => array(
        'name' => 'Biology',
        'value' => 'biology',
        'subject' => 'Science',
        'times' => array(
          0 => array(
            'weight' => 8,
            'time' => '8:00 AM'
          ),
          1 => array(
            'weight' => 10,
            'time' => '10:00 AM'
          )
        )
      ),
      6 => array(
        'name' => 'Art History',
        'value' => 'art-history',
        'subject' => 'Art',
        'times' => array(
          0 => array(
            'weight' => 11,
            'time' => '11:00 AM'
          )
        )
      ),
      7 => array(
        'name' => 'Painting',
        'value' => 'painting',
        'subject' => 'Art',
        'times' => array(
          0 => array(
            'weight' => 14,
            'time' => '2:00 PM'
          )
        )
      ),
      8 => array(
        'name' => 'Drawing',
        'value' => 'drawing',
        'subject' => 'Art',
        'times' => array(
          0 => array(
            'weight' => 8,
            'time' => '8:00 AM'
          ),
          1 => array(
            'weight' => 5,
            'time' => '5:00 AM'
          )
        )
      ),
      9 => array(
        'name' => 'Literature',
        'value' => 'literature',
        'subject' => 'Language Arts',
        'times' => array(
          0 => array(
            'weight' => 8.5,
            'time' => '8:30 AM'
          ),
          1 => array(
            'weight' => 11.75,
            'time' => '11:45 AM'
          )
        )
      ),
      10 => array(
        'name' => 'Grammar',
        'value' => 'grammar',
        'subject' => 'Language Arts',
        'times' => array(
          0 => array(
            'weight' => 8,
            'time' => '8:00 AM'
          ),
          1 => array(
            'weight' => 9,
            'time' => '9:00 AM'
          ),
          2 => array(
            'weight' => 10,
            'time' => '10:00 AM'
          ),
          3 => array(
            'weight' => 11,
            'time' => '11:00 AM'
          ),
          4 => array(
            'weight' => 13,
            'time' => '1:00 PM'
          )
        )
      ),
      11 => array(
        'name' => 'Writing',
        'value' => 'writing',
        'subject' => 'Language Arts',
        'times' => array(
          0 => array(
            'weight' => 8,
            'time' => '8:00 AM'
          ),
          1 => array(
            'weight' => 11,
            'time' => '11:00 AM'
          )
        )
      ),
    );    
    
    return [
      '#theme' => 'tagchallenge',
      '#topics' => $topics,
      '#attached' => [
        'library' => [
          'tagchallenge/tagchallenge',
        ],
      ],
    ];
  }

  /**
   * Registers the student.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   Request object.
   *
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   *   The Json response.
   */
  public function register(Request $request) {
    $username = $request->query->get('username');
    // $guestData = $request->query->get('guest_data');
    // if (empty($eventId)) {
    //   return $this->errorResponse();
    // }
    return new JsonResponse([
      'status' => 'registered'
    ]);
    // if ($this->singleSessionRegistration && $result = $this->singleSessionRegistration->register($eventId, $guestData)) {
    //   $eventStatus = !empty($result->EventRegistrationStatus) ? strtolower($result->EventRegistrationStatus) : '';
    //   $eventNode = Node::load($eventId);
    //   $cmsEvent = new CmsEvent($eventNode);
    //   $confirmationModal = new MspConfirmationModal($cmsEvent, $eventStatus, $guestData ? TRUE : FALSE, $this->isEventListingPage($request));
    //   return new JsonResponse([
    //     'status' => $eventStatus,
    //     'components' => [
    //       'confirmation_modal' => $confirmationModal->render(),
    //     ],
    //   ]);
    // }
    // else {
    //   return $this->errorResponse();
    // }
  }
}
