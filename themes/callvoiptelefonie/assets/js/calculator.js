const formatter = new Intl.NumberFormat("nl-NL", {
  style: "currency",
  currency: "EUR",
});

const state = {
  basicFields: [],
  callminutesFields: [],
  optionsFields: [],
  securityFields: [],
  callrecordingFields: [],
  crmFields: [],
  monthly: {
    basicFields: 0,
    callminutesFields: 0,
    optionsFields: 0,
    securityFields: 0,
    callrecordingFields: 0,
    crmFields: 0,
  },
  onetime: {
    basicFields: 0,
    callminutesFields: 0,
    optionsFields: 0,
    securityFields: 0,
    callrecordingFields: 0,
    crmFields: 0,
  },
};

const getMonthlyTotal = function () {
  let values = Object.values(state.monthly);
  return values.reduce((partial_sum, a) => partial_sum + a, 0);
};

const getOnetimeTotal = function () {
  let values = Object.values(state.onetime);
  return values.reduce((partial_sum, a) => partial_sum + a, 0);
};

const renderMonthlyTotal = function () {
  const totalFieldsMonthly = document.getElementById("total-fields-monthly");

  const MonthlyTotal = `
  <div class="flex mb-">
  <div class="w-6">
    &nbsp;
  </div>
  <div class="flex-1 px-2 text-right font-medium">Totaal:</div>
  <div class="">${formatter.format(getMonthlyTotal())}</div>
  </div>
  `;

  totalFieldsMonthly.innerHTML = MonthlyTotal;
};

const addMonthlyTotalToInput = function () {
  [
    document.getElementById("totaalpermaand"),
    document.getElementById("totaalpermaand-2"),
  ].forEach((e) => (e.value = formatter.format(getMonthlyTotal())));
};

const renderOnetimeTotal = function () {
  const totalFieldsOnetime = document.getElementById("total-fields-onetime");

  const onetimeTotal = `
  <div class="flex mb-">
  <div class="w-6">
    &nbsp;
  </div>
  <div class="flex-1 px-2 text-right font-medium">Totaal:</div>
  <div class="">${formatter.format(getOnetimeTotal())}</div>
  </div>
  `;

  totalFieldsOnetime.innerHTML = onetimeTotal;
};

const addOnetimeTotalToInput = function () {
  [
    document.getElementById("totaaleenmalig"),
    document.getElementById("totaaleenmalig-2"),
  ].forEach((e) => (e.value = formatter.format(getOnetimeTotal())));
};

const renderTemplateRow = function (fields, type) {
  const rows = `
  ${fields
    .map(
      (item) => `
  ${
    item.value > 0
      ? `
  <div class="flex mb-1">
    <div class="w-6">${item.value}x</div>
    <div class="flex-1 px-2">${item.name}</div>
    ${
      type === "monthly"
        ? `
    <div class="">${formatter.format(item.value * item.price_monthly)}</div>
    `
        : `
    <div class="">${formatter.format(item.value * item.price_onetime)}</div>
    `
    }
  </div>
  `
      : ""
  }`
    )
    .join("")}
  `;

  return rows;
};

const renderTemplateCrmRow = function (fields, type) {
  const rows = `
  ${fields
    .map(
      (item) => `
  ${
    item.value > 0
      ? `
  <div class="flex mb-1">
    <div class="w-6">1x</div>
    <div class="flex-1 px-2">${item.name}</div>
    ${
      type === "monthly"
        ? `
    <div class="">${formatter.format(item.value * item.price_monthly)}</div>
    `
        : `
    <div class="">${formatter.format(item.price_onetime)}</div>
    `
    }
  </div>
  `
      : ""
  }`
    )
    .join("")}
  `;

  return rows;
};

const renderBasicFields = function (fields) {
  const basicFieldsMonthly = document.getElementById("basic-fields-monthly");
  const basicFieldsOnetime = document.getElementById("basic-fields-onetime");

  let monthly = 0;
  let onetime = 0;
  state.basicFields = [];

  /* loop over all basic fields */

  for (let item of fields) {
    let obj = {};

    obj.name = item.dataset.name;
    obj.price_monthly = item.dataset.price_monthly;
    obj.price_onetime = item.dataset.price_onetime;
    obj.value = item.value;

    monthly = monthly + obj.price_monthly * obj.value;
    onetime = onetime + obj.price_onetime * obj.value;

    state.basicFields.push(obj);
  }

  /* add totals to state */

  state.monthly.basicFields = monthly;
  state.onetime.basicFields = onetime;

  /* output Monthly templates rows */
  basicFieldsMonthly.innerHTML = renderTemplateRow(
    state.basicFields,
    "monthly"
  );
  basicFieldsOnetime.innerHTML = renderTemplateRow(
    state.basicFields,
    "onetime"
  );
};

const renderCallminutesFields = function (fields) {
  const callminutesFieldsMonthly = document.getElementById(
    "callminutes-fields-monthly"
  );
  const callminutesFieldsOnetime = document.getElementById(
    "callminutes-fields-onetime"
  );

  const numberOfDevices = document.getElementById("toestelaccounts").value,
    qallerPlus = document.getElementById("qaller-plus-accounts").value,
    webcallAccounts = document.getElementById("webcall-accounts").value;

  const largest = Math.max(
    parseFloat(numberOfDevices),
    parseFloat(qallerPlus),
    parseFloat(webcallAccounts)
  );

  let monthly = 0;
  let onetime = 0;
  state.callminutesFields = [];

  /* loop over all basic fields */

  for (let item of fields) {
    let obj = {};

    obj.name = item.options[item.selectedIndex].dataset.name;
    obj.price_monthly = item.options[item.selectedIndex].dataset.price_monthly;
    obj.price_onetime = item.options[item.selectedIndex].dataset.price_onetime;
    obj.value = item.options[item.selectedIndex].value * largest;

    monthly = monthly + obj.price_monthly * largest;
    onetime = onetime + obj.price_onetime * largest;

    state.callminutesFields.push(obj);
  }

  /* add totals to state */

  state.monthly.callminutesFields = monthly;
  state.onetime.callminutesFields = onetime;

  /* output Monthly templates rows */
  callminutesFieldsMonthly.innerHTML = renderTemplateRow(
    state.callminutesFields,
    "monthly"
  );
  callminutesFieldsOnetime.innerHTML = renderTemplateRow(
    state.callminutesFields,
    "onetime"
  );
};

const renderOptionsFields = function (fields) {
  const optionsFieldsMonthly = document.getElementById(
    "options-fields-monthly"
  );
  const optionsFieldsOnetime = document.getElementById(
    "options-fields-onetime"
  );

  let monthly = 0;
  let onetime = 0;
  state.optionsFields = [];

  /* loop over all basic fields */

  for (let item of fields) {
    let obj = {};

    obj.name = item.dataset.name;
    obj.price_monthly = item.dataset.price_monthly;
    obj.price_onetime = item.dataset.price_onetime;
    obj.value = item.value;

    monthly = monthly + obj.price_monthly * obj.value;
    onetime = onetime + obj.price_onetime * obj.value;

    state.optionsFields.push(obj);
  }

  /* add totals to state */

  state.monthly.optionsFields = monthly;
  state.onetime.optionsFields = onetime;

  /* output Monthly templates rows */
  optionsFieldsMonthly.innerHTML = renderTemplateRow(
    state.optionsFields,
    "monthly"
  );
  optionsFieldsOnetime.innerHTML = renderTemplateRow(
    state.optionsFields,
    "onetime"
  );
};

const renderSecurityFields = function (fields) {
  const securityFieldsMonthly = document.getElementById(
    "security-fields-monthly"
  );
  const securityFieldsOnetime = document.getElementById(
    "security-fields-onetime"
  );
  const numberOfDevices = document.getElementById("toestelaccounts").value;

  let monthly = 0;
  let onetime = 0;
  state.securityFields = [];

  /* loop over all basic fields */

  for (let item of fields) {
    let obj = {};

    obj.name = item.options[item.selectedIndex].dataset.name;
    obj.price_monthly = item.options[item.selectedIndex].dataset.price_monthly;
    obj.price_onetime = item.options[item.selectedIndex].dataset.price_onetime;
    obj.value = item.options[item.selectedIndex].value * numberOfDevices;

    monthly = monthly + obj.price_monthly * numberOfDevices;
    onetime = onetime + obj.price_onetime * numberOfDevices;

    state.securityFields.push(obj);
  }

  /* add totals to state */

  state.monthly.securityFields = monthly;
  state.onetime.securityFields = onetime;

  /* output Monthly templates rows */
  securityFieldsMonthly.innerHTML = renderTemplateRow(
    state.securityFields,
    "monthly"
  );
  securityFieldsOnetime.innerHTML = renderTemplateRow(
    state.securityFields,
    "onetime"
  );
};

const renderCallrecordingFields = function (fields) {
  const callrecordingFieldsMonthly = document.getElementById(
    "callrecording-fields-monthly"
  );
  const callrecordingFieldsOnetime = document.getElementById(
    "callrecording-fields-onetime"
  );

  let monthly = 0;
  let onetime = 0;
  state.callrecordingFields = [];

  /* loop over all basic fields */
  for (let item of fields) {
    let obj = {};

    obj.name = item.dataset.name;
    obj.price_monthly = item.dataset.price_monthly;
    obj.price_onetime = item.dataset.price_onetime;
    obj.value = item.value;

    monthly = monthly + obj.price_monthly * obj.value;
    onetime = onetime + obj.price_onetime * obj.value;

    state.callrecordingFields.push(obj);
  }

  /* add totals to state */

  state.monthly.callrecordingFields = monthly;
  state.onetime.callrecordingFields = onetime;

  /* output Monthly templates rows */
  callrecordingFieldsMonthly.innerHTML = renderTemplateRow(
    state.callrecordingFields,
    "monthly"
  );
  callrecordingFieldsOnetime.innerHTML = renderTemplateRow(
    state.callrecordingFields,
    "onetime"
  );
};
const renderCrmFields = function (fields) {
  const crmFieldsMonthly = document.getElementById("crm-fields-monthly");
  const crmFieldsOnetime = document.getElementById("crm-fields-onetime");

  let monthly = 0;
  let onetime = 0;
  state.crmFields = [];

  /* loop over all basic fields */
  for (let item of fields) {
    let obj = {};

    obj.name = item.dataset.name;
    obj.price_monthly = item.dataset.price_monthly;
    obj.price_onetime = item.dataset.price_onetime;
    obj.value = item.value;

    monthly = monthly + obj.price_monthly * obj.value;
    onetime = obj.value > 0 ? obj.price_onetime * 1 : 0;

    state.crmFields.push(obj);
  }

  /* add totals to state */

  state.monthly.crmFields = monthly;
  state.onetime.crmFields = onetime;

  /* output Monthly templates rows */
  crmFieldsMonthly.innerHTML = renderTemplateRow(state.crmFields, "monthly");
  crmFieldsOnetime.innerHTML = renderTemplateCrmRow(state.crmFields, "onetime");
};

const renderTotals = function () {
  renderMonthlyTotal();
  renderOnetimeTotal();
  addMonthlyTotalToInput();
  addOnetimeTotalToInput();
};

const renderRows = function () {
  if (document.getElementById("basic-fields")) {
    const fields = document
      .getElementById("basic-fields")
      .getElementsByTagName("input");
    renderBasicFields(fields);
  }

  if (document.getElementById("callminutes-fields")) {
    const fields = document
      .getElementById("callminutes-fields")
      .getElementsByTagName("select");
    renderCallminutesFields(fields);
  }

  if (document.getElementById("options-fields")) {
    const fields = document
      .getElementById("options-fields")
      .getElementsByTagName("input");
    renderOptionsFields(fields);
  }

  if (document.getElementById("security-fields")) {
    const fields = document
      .getElementById("security-fields")
      .getElementsByTagName("select");
    renderSecurityFields(fields);
  }

  if (document.getElementById("callrecording-fields")) {
    const fields = document
      .getElementById("callrecording-fields")
      .getElementsByTagName("input");
    renderCallrecordingFields(fields);
  }

  if (document.getElementById("crm-fields")) {
    const fields = document
      .getElementById("crm-fields")
      .getElementsByTagName("input");
    renderCrmFields(fields);
  }
};

document.addEventListener(
  "DOMContentLoaded",
  function () {
    if (document.getElementById("calculator")) {
      renderRows();
      const fields = document
        .getElementById("calculator")
        .querySelectorAll("input,select");

      for (let field of fields) {
        field.addEventListener("change", function () {
          renderRows();
          renderTotals();
        });
      }

      renderTotals();
    }
  },
  false
);

// This code is written by Inam
const allspecialfields = document.getElementById("allspecialfields");

function handleSmallForm() {
  const elements = [],
    elementId = [
      "basic-fields",
      "callminutes-fields",
      "callrecording-fields",
      "options-fields",
      "security-fields",
      "crm-fields",
    ];

  elementId.forEach((e) => elements.push(document.getElementById(e)));
  allspecialfields.innerHTML = "";

  elements.forEach((e) => {
    const c = e.cloneNode(true);
    allspecialfields.appendChild(c);
  });
}
document.getElementById("submit-small-form").onclick = function () {
  handleSmallForm();
  document.querySelector('[name="calculator-formulier-small"]').submit();
};
