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
   *   Return Tag Challenge page theme
   */
  public function tagchallengeRender() {
    // Hardcoded array for data emulating backend array.
    $topics = array(
      'algebra' => array(
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
      'trigonometry' => array(
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
      'calculus' => array(
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
      'physics' => array(
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
      'chemistry' => array(
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
      'biology' => array(
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
      'art_history' => array(
        'name' => 'Art History',
        'value' => 'art_history',
        'subject' => 'Art',
        'times' => array(
          0 => array(
            'weight' => 11,
            'time' => '11:00 AM'
          )
        )
      ),
      'painting' => array(
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
      'drawing' => array(
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
      'literature' => array(
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
      'grammar' => array(
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
      'writing' => array(
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
    
    $settings = array(
      'subjects' => array(
        'math' => array(
          'name' => 'Math',
          'value' => 'math',
          'topics' => array(
            0 => array(
              'name' => 'Algebra',
              'value' => 'algebra'
            ),
            1 => array(
              'name' => 'Trigonometry',
              'value' => 'trigonometry'
            ),
            2 => array(
              'name' => 'Calculus',
              'value' => 'calculus'
            )
          )
        ),
        'science' => array(
          'name' => 'Science',
          'value' => 'science',
          'topics' => array(
            0 => array(
              'name' => 'Physics',
              'value' => 'physics'
            ),
            1 => array(
              'name' => 'Chemistry',
              'value' => 'chemistry'
            ),
            2 => array(
              'name' => 'Biology',
              'value' => 'biology'
            )
          )
        ),
        'arts' => array(
          'name' => 'Arts',
          'value' => 'arts',
          'topics' => array(
            0 => array(
              'name' => 'Art History',
              'value' => 'art_history'
            ),
            1 => array(
              'name' => 'Painting',
              'value' => 'painting'
            ),
            2 => array(
              'name' => 'Drawing',
              'value' => 'drawing'
            )
          )
        ),
        'language_arts' => array(
          'name' => 'Language Arts',
          'value' => 'language_arts',
          'topics' => array(
            0 => array(
              'name' => 'Literature',
              'value' => 'literature'
            ),
            1 => array(
              'name' => 'Grammar',
              'value' => 'grammar'
            ),
            2 => array(
              'name' => 'Writing',
              'value' => 'writing'
            )
          )
        ),
      ),
      'topics' => $topics
    );
    
    return [
      '#theme' => 'tagchallenge',
      '#topics' => $topics,
      '#attached' => [
        'library' => [
          'tagchallenge/tagchallenge',
        ],
        'drupalSettings' => $settings
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
    $username = $request->get('username');
    $email = $request->get('email');
    $subject = $request->get('subject');
    $topic = $request->get('topic');
    $weight = $request->get('weight');
    $timeslot = $request->get('timeslot');
    $subjectProcessed = ucwords(str_replace("_", " ", $subject));
    $topicProcessed = ucwords(str_replace("_", " ", $topic));

    return new JsonResponse([
      'status' => 'registered',
      'username' => $username,
      'email' => $email,
      'subject' => array('value' => $subject, 'name' => $subjectProcessed),
      'topic' => array('value' => $topic, 'name' => $topicProcessed),
      'timeslot' => array('value' => $weight, 'name' => $timeslot),
    ]);
  }
}
