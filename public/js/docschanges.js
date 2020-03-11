$(function() {
  let error = $('#error').val()
  console.log(error)
  if(error == 1) {
    $('.py-4').append(generateAlert('One or more params not given'))
  }
  if(error == 2) {
    $('.py-4').append(generateAlert('No items were selected'))
  }
  if(error == 3) {
    $('.py-4').append(generateAlert('No status was defined'))
  }

  if(error == 6) {
    $('.py-4').append(generateAlert('Name or title already exists'))
  }
})
