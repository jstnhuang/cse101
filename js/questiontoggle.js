function toggleQuestions(evt) {
  var button = $('#questiontoggle');
  var text = button.text()
  if (text === 'Show questions') {
    button.text('Hide questions');
  } else {
    button.text('Show questions');
  }
  $('.questions').toggle('fast');
}
$('#questiontoggle').click(toggleQuestions)
