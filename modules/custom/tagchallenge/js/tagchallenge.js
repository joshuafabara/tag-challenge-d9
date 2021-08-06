/**
*
* Tag Challenge js script
*
**/

(function ($, Drupal) {
  Drupal.behaviors.tagChallenge = {
    attach: function attach(context) {
      // Variables Section
      let TAG = {};
      TAG.Challenge = TAG.Challenge || {};
      TAG.Challenge.submitButtonSelector = '#tag-challenge--submit';
      TAG.Challenge.registerURL = '/student/ajax/register';
      TAG.Challenge.subjectSelector = '#subject';
      TAG.Challenge.topicSelector = '#topic';
      TAG.Challenge.timeslotSelector = '#timeslot';
      TAG.Challenge.scheduleSelector = '#tag-challenge--schedule';
      TAG.Challenge.timeslotSelectedSelector = '#picked-timeslot-tag';
      TAG.Challenge.timeslotSelectedTag = '';
      TAG.Challenge.subjects = drupalSettings.subjects;
      TAG.Challenge.topics = drupalSettings.topics;
      TAG.Challenge.registeredTopics = [];

      // Functions Section
      TAG.Challenge.submitForm = function () {
        $(context).on('click', TAG.Challenge.submitButtonSelector, function (e) {
          if ($('#email').val() !== '' && $('#username').val() !== '' && $('#subject').val() !== '' && $('#topic').val() !== '' && $('#timeslot').val() !== '') {
            e.preventDefault();
            const username = $('#username').val().trim();
            const email = $('#email').val().trim();
            const subject = $('#subject').val().trim();;
            const topic = $('#topic').val().trim();;
            const weight = $('#timeslot').val().trim();
            const timeslot = TAG.Challenge.timeslotSelectedTag;

            $.post(TAG.Challenge.registerURL,
              {username, email, subject, topic, weight, timeslot},
              function(response) {
                if (response.status === 'registered') {
                  let newTopic = {};
                  TAG.Challenge.clearForm();
                  newTopic.weight = response.timeslot.value;
                  newTopic.username = response.username;
                  newTopic.email = response.email;
                  newTopic.subject = response.subject.name;
                  newTopic.topic = response.topic.name;
                  newTopic.timeslot = response.timeslot.name;
                  TAG.Challenge.registeredTopics.push(newTopic);
                  TAG.Challenge.buildSchedule(response.username, response.email);
                }
              }
            );
          }
        });
      }

      TAG.Challenge.subjectChanged = function () {
        $(context).on('change', TAG.Challenge.subjectSelector, function (e) {
          let $subjectInputValue = $(TAG.Challenge.subjectSelector).val();
          TAG.Challenge.clearForm(1);
          if ($subjectInputValue !== '') {
            const $topicInput = $(TAG.Challenge.topicSelector);

            $topicInput.append($("<option />").val('').text('Select Topic'));
            $.each(TAG.Challenge.subjects[$subjectInputValue].topics, function() {
              $topicInput.append($("<option />").val(this.value).text(this.name));
            });
          }
        });
      };

      TAG.Challenge.topicChanged = function () {
        $(context).on('change', TAG.Challenge.topicSelector, function (e) {
          const $topicInputValue = $(TAG.Challenge.topicSelector).val();
          $(TAG.Challenge.timeslotSelector).html('');
          TAG.Challenge.timeslotSelectedTag = '';
          if ($topicInputValue !== '') {
            const $timeslotInput = $(TAG.Challenge.timeslotSelector);

            $timeslotInput.append($("<option />").val('').text('Select Timeslot'));
            $.each(TAG.Challenge.topics[$topicInputValue].times, function() {
              $timeslotInput.append($(`<option data-timeslot-tag="${this.time}" />`).val(this.weight).text(this.time));
            });
          }
        });
      };

      TAG.Challenge.timeslotChanged = function () {
        $(context).on('change', TAG.Challenge.timeslotSelector, function (e) {
          const $timeslotInputValue = $(TAG.Challenge.timeslotSelector).val();
          if ($timeslotInputValue !== '') { 
            const $optionSelectedEl = $("option:selected", this);

            TAG.Challenge.timeslotSelectedTag = $optionSelectedEl.data('timeslot-tag');
          }
        });
      };

      TAG.Challenge.clearForm = function (partial = 0) {
        $(TAG.Challenge.topicSelector).html('');
        $(TAG.Challenge.timeslotSelector).html('');
        TAG.Challenge.timeslotSelectedTag = '';

        if (partial === 0) {
          $(TAG.Challenge.subjectSelector).val(null);
        }
      };

      TAG.Challenge.buildSchedule = function (username, email) {
        let $scheduleEl = $(TAG.Challenge.scheduleSelector);
        let tableHTML = '';
        $scheduleEl.html('');

        if (TAG.Challenge.registeredTopics.length > 0) {

          // Sorting selected topics
          TAG.Challenge.registeredTopics.sort(function(a, b) {
            return a.weight - b.weight;
          });
          tableHTML += `
            <h3>${username} Schedule</h3>
            <div>Email: ${email}</div>
            <div>Student ID: ${username}__12098</div>
            <table>
              <tr>
                <th>Subject</th>
                <th>Topic</th>
                <th>Timeslot</th>
              </tr>
          `;
          $.each(TAG.Challenge.registeredTopics, function() {
            tableHTML += `
              <tr>
                <th>${this.subject}</th>
                <th>${this.topic}</th>
                <th>${this.timeslot}</th>
              </tr>
            `;
          });
          tableHTML += '</table>';
          $(TAG.Challenge.scheduleSelector).html(tableHTML);
        }
      };

      // Init Functions Section
      TAG.Challenge.submitForm();
      TAG.Challenge.subjectChanged();
      TAG.Challenge.topicChanged();
      TAG.Challenge.timeslotChanged();
    }
  };
})(jQuery, Drupal);