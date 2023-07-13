<style>
  /* Styles for the form container */
  #myForm {
    max-width: 400px;
    margin: 2rem auto;
    padding: 20px;
    background-color: #f5f5f5;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  /* Styles for form input fields */
  #myForm input[type="text"],
  #myForm textarea {
    font-family: 'Poppins', sans-serif;
    width: 95%;
    padding: 10px;
    margin-bottom: 10px;
    border: none;
    background-color: #fff;
    border-radius: 4px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  }

  #myForm input[type="text"]:focus,
  #myForm textarea:focus {
    outline: none;
    border-color: none;
    box-shadow: none;
  }

  /* Styles for the "Free" checkbox */
  #freeInput {
    display: inline-block;
    vertical-align: middle;
  }

  input[type="checkbox"] {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    width: 12px;
    height: 12px;
    border: 2px solid #333;
    border-radius: 10px;
    outline: none;
    cursor: pointer;
  }

  input[type="checkbox"]:checked {
    background-color: #ff4444;
    border-color: #ff4444;
    border: 2px solid #ff4444;
    transition: 0.3s ease-in-out;
  }
  input[type="radio"] {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    width: 12px;
    height: 12px;
    border: 2px solid #333;
    border-radius: 10px;
    outline: none;
    cursor: pointer;
  }

  input[type="radio"]:checked {
    background-color: #ff4444;
    border-color: #ff4444;
    border: 2px solid #ff4444;
    transition: 0.3s ease-in-out;
  }

  /* Styles for the "Upload" button */
  #myForm button {
    display: block;
    width: 100%;
    padding: 12px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  #myForm button:hover {
    background-color: #ff4444;
  }
  .button {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: larger;
    display: block;
    width: 100%;
    padding: 12px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  .button:hover {
    background-color: #ff4444;
  }

  /* Styles for form validation/error messages */
  #errorMsg {
    color: red;
    margin-top: 5px;
  }

  /* Styles for file input */
  #fileInput {
    display: none;
  }

  #imageInput {
    margin-bottom: 2rem;
  }

  #descriptionInput {
    max-width: 95%;
    min-width: 95%;
    max-height: 5rem;
  }

  .file-label {
    display: inline-block;
    padding :0.3rem ;
    margin-bottom:1rem;
    background-color: #333;
    color: #fff;
    cursor: pointer;
    border-radius: 4px;
    transition: background-color 0.3s ease;
  }

  .file-label:hover {
    background-color: #ff4444;
  }

  .folder-label {
    display: inline-block;
    padding :1rem ;
    margin-bottom:1rem;
    background-color: #333;
    color: #fff;
    cursor: pointer;
    width: 92%;
    text-align: center;
    font-size: larger;
    border-radius: 4px;
    transition: background-color 0.3s ease;
  }

  .folder-label:hover {
    background-color: #ff4444;
  }

  /* Styles for file drag and drop area */
  .drag-drop-area {
    border: 2px dashed #333;
    border-radius: 4px;
    padding: 20px;
    margin: 0 auto 1rem auto;
    text-align: center;
    color: #333;
    background-color: #f5f5f5;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .drag-drop-area.drag-over {
    background-color: #fff;
  }

  .drag-drop-area:hover {
    background-color: #fff;
  }

  select {
    padding: 10px;
    margin: 0 auto 1rem auto;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #fff;
    color: #333;
    font-size: 14px;
    width: 50%;
  }

  /* Style the arrow icon */
  select::-ms-expand {
    display: none;
  }

  select::after {
    content: '\25BC';
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    pointer-events: none;
  }

  /* Style the selected option */
  select option:checked {
    background-color: #ddd;
  }


  #fileName ,#folderName{
  display: block;
  width: 95%;
  margin-top: 5px;
  margin-bottom: 1rem;
  word-wrap: break-word;
}



  .folder-label {
    display: inline-block;
    width:92%;
    padding: 12px;
    background-color: #333;
    color: #fff;
    cursor: pointer;
    border-radius: 4px;
    transition: background-color 0.3s ease;
  }
  .folder-label:hover{
    background-color: #ff4444;
    transition:0.3s ease-in-out;
  }

  .folder-name {
    text-align: center;
  }


  /* Additional styles for the page */
  .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
  }

  h1 {
    font-size: 24px;
    color: #fff;
    margin-top: 3rem;
    text-align: center;
  }
</style>

<br>
<h1>Add new kit</h1>


<form id="myForm" method="POST" action="../php/upload.php" enctype="multipart/form-data">
  
  <label class="folder-label" for="folderInput">Upload Folder</label>
  <input type="file" name="folderName" id="folderInput" accept="folder" style="display:none;" required directory webkitdirectory onchange="updateFolderName(this)">
  <span id="folderName"></span>
  <input type="hidden" name="folderNameHidden" id="folderNameHidden">

  <textarea id="descriptionInput" name="description" placeholder="Description" required></textarea>


  <input type="text" name="price" id="price" placeholder="Price"/>

  <div>
    <input type="radio" id="currencyDollar" name="currency" value="USD">
    <label for="currencyDollar">Dollar ($)</label>
  </div>
  <div>
    <input type="radio" id="currencyEuro" name="currency" value="EUR">
    <label for="currencyEuro">Euro (€)</label>
  </div>
  <div>
    <input type="radio" id="currencyMAD" name="currency" value="MAD">
    <label for="currencyMAD">MAD (Moroccan Dirham)</label>
  </div>

  <input type="text" name="link" id="linkInput" style="margin:1rem 0 1rem 0; " placeholder="Link" required>
  <select name="category" id="categoryInput" required>
    <option value="">Select a category</option>
    <option value="Drill">Drill</option>
    <option value="Trap">Trap</option>
    <option value="House">House</option>
    <!-- Add more categories as needed -->
  </select>
  <input type="checkbox" name="isFree" id="freeInput">
  <label for="freeInput">Free</label>
  <br>

  <label class="file-label" for="imageInput">Choose Image</label>
  <input type="file" name="image" id="imageInput" accept="image/*" style="display:none;" required onchange="updateFileName(this)">
  <span id="fileName"></span>

  <input type="submit" name="submit" class="button" value="Upload"></input>
</form>

<script>
  function updateFileName(input) {
    const fileNameSpan = document.getElementById('fileName');
    if (input.files.length > 0) {
      fileNameSpan.textContent = input.files[0].name;
    } else {
      fileNameSpan.textContent = '';
    }
  }

  function updateFolderName(input) {
    if (input.files.length > 0) {
      var folderName = input.files[0].webkitRelativePath.split('/')[0];
      document.getElementById('folderName').textContent = folderName;
      document.getElementById('folderNameHidden').value = folderName;
    } else {
      document.getElementById('folderName').textContent = '';
      document.getElementById('folderNameHidden').value = '';
    }
  }


</script>

<script>
  const priceInput = document.getElementById('priceInput');
  const currencyCheckboxes = document.querySelectorAll('input[name="currency"]');

  currencyCheckboxes.forEach(checkbox => {
    checkbox.addEventListener('change', updatePriceCurrency);
  });

  function updatePriceCurrency() {
    const selectedCurrency = document.querySelector('input[name="currency"]:checked');
    if (selectedCurrency) {
      const currencySymbol = getCurrencySymbol(selectedCurrency.value);
      const price = priceInput.value.trim();
      const numericPrice = parseFloat(price.replace(/[^\d.]/g, ''));
      const formattedPrice = isNaN(numericPrice) ? '' : currencySymbol + numericPrice.toFixed(2);
      priceInput.value = formattedPrice;
    }
  }

  function getCurrencySymbol(currency) {
    switch (currency) {
      case 'USD':
        return '$';
      case 'EUR':
        return '€';
      case 'MAD':
        return 'MAD';
      // Add more currency symbols as needed
      default:
        return '';
    }
  }
</script>