const presentPageBody = document.querySelector("body");

const validateFormFields = () => {
  const validValuesObj = {
    text: {
      expected: () => /^[A-z _]{5,30}$/,
      failureResponse:
        "must be five letters at least and must not contain digits",
    },
    tel: {
      expected: () => /^[0-9]{11,14}$/,
      failureResponse: "please provide a valid phone number",
    },
    email: {
      expected: () => /([A-z0-9.-_]+)@([A-z]+)\.([A-z]){2,5}$/,
      failureResponse: "please provide a valid email address",
    },
    textarea: {
      expected: () => /^[A-Za-z0-9, _ .;:]{8,1000}$/,
      failureResponse: "message must be between 8 to 200 characters.",
    },
  };

  const fieldsToBeValidated = document.querySelectorAll("input, textarea");

  fieldsToBeValidated.forEach((element) => {
    const elementToDisplayError = element.nextElementSibling;
    elementToDisplayError.classList.add("error");
    element.addEventListener("keyup", validate, false);
  });
  let formSubmitBtn = document.querySelector(".contactValidBtn");
  function validate() {
    const valTypeStore = validValuesObj[this.dataset.valType || this.type];
    if (valTypeStore.expected().test(this.value)) {
      this.nextElementSibling.textContent = "";
      formSubmitBtn.removeAttribute("disabled");
    } else if (
      this.value === " " ||
      valTypeStore.expected().test(this.value) === " "
    ) {
      formSubmitBtn.setAttribute("disabled", "disabled");
    } else if (fieldsToBeValidated.values === " ") {
      formSubmitBtn.setAttribute("disabled", "disabled", true);
    } else {
      this.nextElementSibling.textContent = ` ${valTypeStore.failureResponse}`;
      formSubmitBtn.setAttribute("disabled", "disabled");
    }
  }
  // validate();
};

if (presentPageBody.classList.contains("contactFormBody")) {
  validateFormFields();
}
