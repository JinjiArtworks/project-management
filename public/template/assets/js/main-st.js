function myNumberFormat(thiss) {
  var inputValue = $(thiss).val();
  var cursorStart = thiss.selectionStart,
    cursorEnd = thiss.selectionEnd;
  if (inputValue.includes(",")) {
    var splitInput = inputValue.split(",");
    var beforeComma = splitInput[0];
    var afterComma = splitInput[1];
    if (afterComma.length > 2) {
      var lastChar = afterComma.lastIndexOf("");
      var newAfterComma = afterComma.substring(0, lastChar - 1);
      $(thiss).val(`${beforeComma},${newAfterComma}`);
    } else {
      var returnedValue = myNumberFormatSub(
        cursorStart,
        cursorEnd,
        beforeComma
      );
      cursorStart = returnedValue[0];
      cursorEnd = returnedValue[1];
      var res = returnedValue[2] + "," + afterComma;
      $(thiss).val(res);
      thiss.setSelectionRange(cursorStart, cursorEnd);
    }
  } else {
    var returnedValue = myNumberFormatSub(cursorStart, cursorEnd, inputValue);
    cursorStart = returnedValue[0];
    cursorEnd = returnedValue[1];
    var res = returnedValue[2];
    $(thiss).val(res);
    thiss.setSelectionRange(cursorStart, cursorEnd);
  }
}

function myNumberFormatSub(cursorStart, cursorEnd, value) {
  var start = cursorStart,
    end = cursorEnd;
  var valSplit = value.split("");
  for (var i = 0; i < valSplit.length; i++) {
    if (valSplit[i] == ".") {
      valSplit[i] = "";
      if (start > i && end > i) {
        cursorStart -= 1;
        cursorEnd -= 1;
      }
    }
  }
  var inputValue = valSplit.join("");
  var res = inputValue.charAt(inputValue.length - 1);
  for (var i = 1; i < inputValue.length; i++) {
    if (i % 3 === 0) {
      res = "." + res;
      if (start > i && end > i) {
        cursorStart += 1;
        cursorEnd += 1;
      }
    }
    res = inputValue.charAt(inputValue.length - i - 1) + res;
  }
  return [cursorStart, cursorEnd, res];
}
function myNumberKeyPress(evt, thiss) {
  evt = evt || window.event;
  var charCode = typeof evt.which == "number" ? evt.which : evt.keyCode;
  var nilai = $(thiss).val();
  if (nilai.includes(",")) {
    isComma = false;
  } else {
    isComma = true;
  }
  if (!charCode || charCode == 8) {
    return true;
  }
  var typedChar = String.fromCharCode(charCode);
  if (/\d/.test(typedChar)) {
    return true;
  }
  if (typedChar == "-" && this.value == "") {
    return true;
  }
  if (typedChar == "," && isComma == true && this.value != "") {
    isComma = false;
    return true;
  }

  if (evt.preventDefault) {
    evt.preventDefault();
  } else {
    evt.returnValue = false;
  }
}

function myGetIndoNumber(value) {
  if (value != "" && value != null) {
    var inputValue = "" + value;
    var splitValue = inputValue.split(".");
    var inputValue = splitValue[0];
    if (splitValue.length > 1) {
      var afterComma = splitValue[1];
    } else {
      var afterComma = "00";
    }
    var res = inputValue.charAt(inputValue.length - 1);
    for (var i = 1; i < inputValue.length; i++) {
      if (i % 3 === 0) {
        res = "." + res;
      }
      res = inputValue.charAt(inputValue.length - i - 1) + res;
    }
    return res + "," + afterComma;
  } else {
    return "";
  }
}

$(document).ready(function () {
  // (function(){
  //     var inputs = document.getElementsByClassName("my-number");
  //     for(var i = 0; i < inputs.length; i++) {
  //       inputs[i].value = myGetIndoNumber(inputs[i])
  //     }
  //   }())
  $(document).on("input", "input.my-number", function () {
    myNumberFormat(this);
  });
  $(document).on("keypress", "input.my-number", function (e) {
    myNumberKeyPress(e.originalEvent, this);
  });
});

$(document).ready(function () {
  $("#data_tables").DataTable();
});

$(document).ready(function () {
  $("#data_tables2").DataTable();
});
