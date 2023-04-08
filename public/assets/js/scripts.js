$(document).ready(function() {
    // Show modal when "Add New Field" button is clicked
    $("#add-new-field-btn").click(function() {
      $("#add-modal").fadeIn();
    });
  
    // Hide modal when "Close" button or outside modal is clicked
    $(".close, .modal").click(function() {
      $("#add-modal").fadeOut();
    });
  
    // Prevent modal from closing when clicking inside the modal
    $(".modal-content").click(function(event) {
      event.stopPropagation();
    });
  });
  