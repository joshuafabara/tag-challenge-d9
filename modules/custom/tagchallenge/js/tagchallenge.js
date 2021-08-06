/**
*
* Tag Challenge js script
*
**/

(function ($, Drupal) {
  Drupal.behaviors.tagChallenge = {
    attach: function attach(context) {
      console.log('it is working');
      // Variables
      let TAG = {};
      TAG.Challenge = TAG.Challenge || {};
      TAG.Challenge.submitButtonSelector = '#tag-challenge--submit';
      TAG.Challenge.registerURL = '/student/ajax/register';

      // Functions
      TAG.Challenge.submitForm = function () {
        $(context).on('click', TAG.Challenge.submitButtonSelector, function (e) {
          e.preventDefault();
          console.log('clicked submit');
          $.ajax({
            url: TAG.Challenge.registerURL,
            context: document.body
          }).done(function(data) {
            // $( this ).addClass( "done" );
            console.log('success');
            console.log(data);
          });
        });
      }

      TAG.Challenge.submitForm();
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