
function changeCircleSize() {
    const circle = document.querySelector('.circle');
    const container = document.querySelector('.circle-container');
    const rangeValue = document.querySelector('input[name="temper"]').value;
    const circleSize = (rangeValue * 200) + 50;
    circle.style.width = `${circleSize}px`;
    circle.style.height = `${circleSize}px`;
    container.style.width = `${circleSize + 60}px`; /* set the width of the container based on the circle size + padding */
  }
  // Example starter JavaScript for disabling form submissions if there are invalid fields
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()