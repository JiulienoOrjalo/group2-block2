// Calculator for Tuition and HK Discount
function submitValue(){
    var inputTuitionFee = document.getElementById("inputTuitionFee").value;
    var selectedValue = document.getElementById("HandogKaibiganDiscount").value;
    alert(inputTuitionFee + " " + selectedValue);
  }
// Reserve Function for Feature(?)
$('#ShowBtn').click(function(e){
    e.preventDefault();
    Swal.fire({
title: 'Submit your Github username',
input: 'text',
inputAttributes: {
autocapitalize: 'off'
},
showCancelButton: true,
confirmButtonText: 'Look up',
showLoaderOnConfirm: true,
preConfirm: (login) => {
return fetch(`//api.github.com/users/${login}`)
  .then(response => {
    if (!response.ok) {
      throw new Error(response.statusText)
    }
    return response.json()
  })
  .catch(error => {
    Swal.showValidationMessage(
      `Request failed: ${error}`
    )
  })
},
allowOutsideClick: () => !Swal.isLoading()
}).then((result) => {
if (result.isConfirmed) {
Swal.fire({
  title: `${result.value.login}'s avatar`,
  imageUrl: result.value.avatar_url
})
}
})
});
// Landing Alert.
