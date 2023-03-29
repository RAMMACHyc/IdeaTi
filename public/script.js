$(function() {
    $('.toggle-buttons').click(function(e) {
      e.preventDefault();
      var buttonsContainer = $(this).siblings('.buttons-container');
      buttonsContainer.toggleClass('d-none');
      if (!buttonsContainer.hasClass('d-none')) {
        var offset = $(this).offset();
        var containerWidth = buttonsContainer.outerWidth();
        buttonsContainer.css({
          top: offset.top - buttonsContainer.outerHeight(),
          left: offset.left + $(this).outerWidth() / 2 - containerWidth / 2
        });
      }
    });
  
    $('.delete-button').click(function(e) {
      // Add your delete code here
    });
  
    $('.edit-button').click(function(e) {
      // Add your edit code here
    });
  });
  