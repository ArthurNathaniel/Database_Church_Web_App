document.addEventListener("DOMContentLoaded", function () {
  // Fetch nationalities from the Restcountries API
  fetch("https://restcountries.com/v2/all")
    .then((response) => response.json())
    .then((data) => {
      // Get the select element
      const nationalitySelect = document.getElementById("nationality");

      // Manually add Ghana as the first option with its flag
      const ghanaOption = document.createElement("option");
      ghanaOption.value = "Ghana"; // You can adjust this based on your API response
      ghanaOption.text = "Ghana";
      ghanaOption.setAttribute(
        "data-flag",
        "https://restcountries.com/v2/alpha/gh"
      );
      nationalitySelect.appendChild(ghanaOption);

      // Iterate through the remaining data and add options to the select element
      data.forEach((country) => {
        if (country.alpha2Code !== "GH") {
          // Exclude Ghana since it's already added
          const option = document.createElement("option");
          option.value = country.name; // You can adjust this based on your API response
          option.text = country.name;
          option.setAttribute("data-flag", country.flags[0]);
          nationalitySelect.appendChild(option);
        }
      });
    })
    .catch((error) => console.error("Error fetching nationalities:", error));

  // Add event listener to display the selected flag when an option is chosen
  nationalitySelect.addEventListener("change", function () {
    const selectedOption =
      nationalitySelect.options[nationalitySelect.selectedIndex];
    const selectedFlag = selectedOption.getAttribute("data-flag");
    console.log("Selected Flag URL:", selectedFlag);
    // You can display the flag wherever you want in your UI
  });
});
