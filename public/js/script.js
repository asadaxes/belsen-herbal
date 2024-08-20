document.addEventListener('DOMContentLoaded', function() {
  let toastElement = document.querySelector('.toast');
  if (toastElement) {
    let toast = new bootstrap.Toast(toastElement);
    toast.show();
  }
  let currentYear = new Date().getFullYear();
  document.getElementById("currentYear").textContent = currentYear;
});

function copyText(value, element) {
    let tempTextArea = document.createElement("textarea");
    tempTextArea.value = value;
    document.body.appendChild(tempTextArea);
    element.classList.add("highlight");
    tempTextArea.select();
    document.execCommand("copy");
    document.body.removeChild(tempTextArea);
    $(element).tooltip('show');
    setTimeout(function() {
        $(element).tooltip('hide');
        element.classList.remove("highlight");
    }, 1500);
}

function engToBnDigits(digits) {
    const bnNumbers = {
        '0': '০',
        '1': '১',
        '2': '২',
        '3': '৩',
        '4': '৪',
        '5': '৫',
        '6': '৬',
        '7': '৭',
        '8': '৮',
        '9': '৯',
    };
    return digits.toString().replace(/[0-9]/g, (match) => bnNumbers[match]);
}

function submitLogoutForm() {
  document.getElementById('logoutForm').submit();
}