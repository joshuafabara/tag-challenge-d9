/**
*
* Tag Challenge js script
*
**/

(function ($, Drupal) {
  Drupal.behaviors.tagChallenge = {
    attach: function attach(context) {
      console.log('it is working');
      // $(context).find('.book-outline-form').drupalSetSummary(function (context) {
      //   var $select = $(context).find('.book-title-select');
      //   var val = $select.val();

      //   if (val === '0') {
      //     return Drupal.t('Not in book');
      //   }

      //   if (val === 'new') {
      //     return Drupal.t('New book');
      //   }

      //   return Drupal.checkPlain($select.find(':selected').text());
      // });
    }
  };
})(jQuery, Drupal);