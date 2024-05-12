function convertCurrency() {
    // Get input values
    var amount = document.getElementById("amount").value;
    var currency = document.getElementById("currency").value;
    var rate = document.getElementById("rate").value;
    
    // Perform conversion
    var convertedAmount = amount * rate;
    
    // Display result
    var resultDiv = document.getElementById("result");
    resultDiv.textContent = "Converted Amount: " + convertedAmount + " " + currency;
  }
  