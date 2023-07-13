// Function to toggle the search field
function toggleSearch() {
  var searchField = document.getElementById('searchField');
  var searchInput = document.getElementById('searchInput');

  // Toggle the 'active' class on the search field
  searchField.classList.toggle('active');

  // If the search field is being closed and it is not empty, clear the search input
  if (!searchField.classList.contains('active') && searchInput.value !== '') {
      searchInput.value = '';
      hideResults();
  }
}
