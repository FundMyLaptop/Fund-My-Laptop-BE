// const main = document.getElementById('main');
const form = document.querySelector("form"),
  amount = document.getElementById("amount"),
  email = document.getElementById("email"),
  fullName = document.getElementById("fullName"),
  stayAnonymous = document.getElementById("stayAnonymous"),
  cardNumber = document.getElementById("cardNumber"),
  expirationDate = document.getElementById("expirationDate"),
  cvv = document.getElementById("cvv"),
  button = document.querySelector(".form__button"),
  alert = document.getElementById("alert"),
  alertMessage = document.getElementById("alertMessage"),
  selectedCurrency = document.getElementById("selectedCurrency"),
  chooseCurrency = document.getElementById("chooseCurrency");

const validated = {};

// show alert
function showAlert(message) {
  alertMessage.innerText = message;
  alert.classList.remove("d-none");
  setTimeout(() => {
    alert.classList.add("d-none");
  }, 6000);
}

// Show input error message
function showError(input, message) {
  const parent = input.parentElement;
  input.classList.add("is-invalid");
  let error = parent.querySelector("div");
  error.className = "invalid-feedback";
  error.innerText = input.value !== "" ? message : "";
  validated[input.id] = false;
}

// clear error message
function clearError(input) {
  const parent = input.parentElement;
  input.classList.remove("is-invalid");
  input.classList.remove("is-valid");
  const error = parent.querySelector("div");
  error.innerText = "";
}

function showRequired(input, message) {
  const parent = input.parentElement;
  const error = parent.querySelector("div");
  input.classList.add("is-invalid");
  error.className = "invalid-feedback";
  error.innerText = message;
  validated[input.id] = false;
}

// Show success outline
function showSuccess(input) {
  const parent = input.parentElement;
  input.classList.remove("is-invalid");
  input.classList.add("is-valid");
  validated[input.id] = true;
}

// email validation
function checkEmail(input) {
  const re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,6})+$/;
  if (re.test(input.value.trim())) {
    showSuccess(input);
  } else {
    showError(input, "Email is not valid.");
  }
}

// credit card validation
// code gotten from stackoverflow - https://stackoverflow.com/questions/6176802/how-to-validate-a-credit-card-number

function validateCardNumber(no) {
  return (
    (no &&
      luhnCheck(no) &&
      no.length == 16 &&
      (no[0] == 4 ||
        (no[0] == 5 && no[1] >= 1 && no[1] <= 5) ||
        no.indexOf("6011") == 0 ||
        no.indexOf("65") == 0)) ||
    (no.length == 15 && (no.indexOf("34") == 0 || no.indexOf("37") == 0)) ||
    (no.length == 13 && no[0] == 4)
  );
}

function luhnCheck(val) {
  var sum = 0;
  for (var i = 0; i < val.length; i++) {
    var intVal = parseInt(val.substr(i, 1));
    if (i % 2 == 0) {
      intVal *= 2;
      if (intVal > 9) {
        intVal = 1 + (intVal % 10);
      }
    }
    sum += intVal;
  }
  return sum % 10 == 0;
}

// Check Required fields
function checkRequired(inputArr) {
  inputArr.forEach(function (input) {
    if (input.value.trim() === "") {
      showRequired(input, `${getFieldName(input)} is required`);
    }
  });
}

// check input length
function checkLength(input, min, max) {
  if (input.value.length < min) {
    showError(
      input,
      `${getFieldName(input)} must have at least ${min} characters`
    );
  } else if (input.value.length > max) {
    showError(
      input,
      `${getFieldName(input)} must have less than ${max + 1} characters`
    );
  } else {
    showSuccess(input);
  }
}

// get field name
function getFieldName(input) {
  const fieldName = input.id.charAt(0).toUpperCase().concat(input.id.slice(1));
  return fieldName === "FullName"
    ? "Full Name"
    : fieldName === "CardNumber"
    ? "Card Number"
    : fieldName === "ExpirationDate"
    ? "Expiration Date"
    : fieldName === "Cvv"
    ? "CVV"
    : fieldName;
}

// Event Listeners
chooseCurrency.addEventListener("change", () => {
  switch (chooseCurrency.value) {
    case "NGN":
      selectedCurrency.innerHTML = "&#x20A6;";
      break;
    case "GBP":
      selectedCurrency.innerHTML = "&#163;";
      break;
    case "USD":
      selectedCurrency.innerHTML = "&#36;";
      break;
    case "EUR":
      selectedCurrency.innerHTML = "&#128;";
      break;
  }
});

amount.addEventListener("input", () => {
  clearError(amount);
  if (amount.value !== "") {
    setTimeout(() => {
      checkLength(amount, 3, 10);
    }, 1000);
  }
});

email.addEventListener("input", () => {
  clearError(email);
  if (email.value !== "") {
    setTimeout(() => {
      checkEmail(email);
    }, 1500);
  } else {
    clearError(email);
  }
});

cardNumber.addEventListener("input", () => {
  clearError(cardNumber);
  let value = cardNumber.value;
  setTimeout(() => {
    if (validateCardNumber(value)) {
      showSuccess(cardNumber);
    } else if (value) {
      showError(cardNumber, "Invalid Card Number");
    } else {
      clearError(cardNumber);
    }
  }, 2000);
});

expirationDate.addEventListener("input", () => {
  clearError(expirationDate);
  let date = new Date(),
    month = date.getMonth() + 1,
    year = date.getFullYear();
  let value = expirationDate.value.trim();

  // console.log(value, month, year);
  // console.log(/(\d{2}\/\d{4})/.test(value));
  // console.log('month', value.split('/')[0] == month);

  setTimeout(() => {
    // check for improper format
    if (value !== "" && !/^(\d{2}\/\d{4})$/.test(value)) {
      return showError(expirationDate, "Invalid Date");
    }
    // check for invalid month
    else if (
      value.length === 7 &&
      (+value.split("/")[0] < 1 || +value.split("/")[0] > 12)
    ) {
      return showError(expirationDate, "Invalid month entered.");
    }
    // check for previous month
    else if (
      value.length === 7 &&
      +value.split("/")[1] == year &&
      +value.split("/")[0] < month
    ) {
      return showError(expirationDate, "Card Expired");
    }
    // check for previous year
    else if (value.length === 7 && +value.split("/")[1] < year) {
      return showError(expirationDate, "Card Expired");
    }
    // console.log(/(\d{2})\/(\d{4})/.test(value));
    else if (value) {
      showSuccess(expirationDate);
    }
  }, 1000);
});

cvv.addEventListener("input", () => {
  clearError(cvv);
  if (cvv.value !== "") {
    setTimeout(() => {
      checkLength(cvv, 3, 3);
      if (/\D+/.test(cvv.value)) {
        showError(cvv, `Please enter only digits`);
      }
    }, 1000);
  } else {
    clearError(cvv);
  }
});

// submit to API and handle response
form.addEventListener("submit", (e) => {
  e.preventDefault();

  setTimeout(() => {
    button.innerText = "Pay!";
  }, 5000);

  // console.log(validated);
  checkRequired([amount, email, fullName, cardNumber, expirationDate, cvv]);

  /* if (!Object.values(validated).includes(false)) {
    alert("Form Can Be Submitted");
  } */

  if (!Object.values(validated).includes(false)) {
    alertMessage.innerText = "";
    const formData = {
      amount: amount.value.trim(),
      fullName: fullName.value.trim(),
      email: email.value.toLowerCase().trim(),
      cardNumber: cardNumber.value.trim(),
      expirationDate: cvv.value,
      cvv: cvv.value,
    };
    button.innerHTML =
      '<span class="spinner-border spinner-border" role="status" aria-hidden="true"></span><span class="sr-only">Loading...</span>';
    // clear loader
    setTimeout(() => {
      button.innerText = "Pay!";
    }, 20000);

    try {
      const url = "https://";

      async function donateMoney(input) {
        const requestOptions = {
          method: "POST",
          body: JSON.stringify(input),
          // Adding headers to the request
          headers: {
            "Content-type": "application/json; charset=UTF-8",
          },
        };
      }
    } catch (error) {
      showAlert(error);
      button.innerText = "Pay!";
    }
  }

  donateMoney(formData);
});
