// Calculator for Tuition and HK Discount
function submitValue(){
    var inputTuitionFee = document.getElementById("inputTuitionFee").value;
    var selectedValue = document.getElementById("HandogKaibiganDiscount").value;
    alert(inputTuitionFee + " " + selectedValue);
  }
$('#calculateTuitionFee').click(function(e){
  e.preventDefault();
  var inputTuitionFee = document.getElementById("inputTuitionFee").value;
  var selectedValue = document.getElementById("HandogKaibiganDiscount").value / 100;
  var totalDiscount = inputTuitionFee - (inputTuitionFee * selectedValue).toFixed(2);
  swal({
    title: "HK Discount",
    text: "Tuition Fee when HK Discount is applied: ₱" + totalDiscount,
    icon: "success",
    closeOnClickOutside: false,
    closeOnEsc: false,
    allowOutsideClick: false,
})
var inputTuitionFee = document.getElementById("inputTuitionFee").value = '';
var selectedValue = document.getElementById("HandogKaibiganDiscount").value = '';
});
$('#clearInputFields').click(function(e){
  e.preventDefault();
  var inputTuitionFee = document.getElementById("inputTuitionFee").value = '';
  var selectedValue = document.getElementById("HandogKaibiganDiscount").value = '';
  swal({
    title: "Clear Fields",
    text: "Input and Select Fields are now empty",
    icon: "success",
    closeOnClickOutside: false,
    closeOnEsc: false,
    allowOutsideClick: false,
})
});