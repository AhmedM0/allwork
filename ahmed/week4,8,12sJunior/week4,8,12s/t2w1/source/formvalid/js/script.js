function checkform() {
  var allGood = true;
  var arrRequiredFields = document.getElementsByClassName("required");
  console.log(arrRequiredFields);

  for (var i = 0; i < arrRequiredFields.length; i++) {

    var currentReqField = arrRequiredFields[i];
    if (currentReqField.value == "") {
        currentReqField.style.backgroundColor = "red";
        alert("oh no...");
        allGood = false;
    } else {
        currentReqField.style.backgroundColor = "white";
    }

  }

  var arrRequiredGroup = document.getElementsByClassName("requiredGroup");
  for (var i = 0; i < arrRequiredGroup.length; i++) {
    var currentGroup = arrRequiredGroup[i];
    var arrChildInputs = currentGroup.getElementsByTagName("input");
    var atLeastOne = false;

    for (var j = 0; j < arrChildInputs.length; j++) {
        var currentReqField = arrChildInputs[j];

        if (currentReqField.checked) {
            atLeastOne = true;
        }
    }

    if (atLeastOne) {
        currentGroup.style.backgroundColor = "white";

    } else {
        currentGroup.style.backgroundColor = "red";
        allGood = false;
    }
  }
  return allGood;
}