$(document).ready(function() {
    // TRIGGERS FOR THE SEARCH FUNCTION AFTER USER UPDATES SEARCH VALUES
  $('#search-val-name, #search-val-city').keyup(function() {
      checkAll();
  });
    $('.inputradio').change(function(){
    checkAll();
  })
  
  
  
  /*PREPENDS A COUNT VALUE TO THE RETURNED TR'S... NOT NECESSARY AT ALL BUT HELPS IN REVIEW.
 function countRows(){
    $('#resultTable tr:not(:first-child)').each(function(i, item) {
            $(this).find('td:eq(0)').prepend('<span class="counted">'+ (i+1) + '.) ')
    });
  }*/
// PROCESS ALL OF THE ROWS OF THE TABLE (EXCEPT THE HEADER ROW) AND CHECK FOR CORRESPONDING VALUES BASED ON THE USERS INPUTS 
  function checkAll() {
    
      $('#resultTable tr:not(:first-child)').each(function(i, item) {
          if (
                // 1.) check for text match...
              $(this).find('td:eq(1)').text().toLowerCase().indexOf($('#search-val-name').val().toLowerCase()) >= 0 &&
                // 2.) check for text match...
              $(this).find('td:eq(2)').text().toLowerCase().indexOf($('#search-val-city').val().toLowerCase()) >= 0 &&
              // 3.) check for presence of a value in cell
              !$(this).find('td:eq(3)').is(":empty") == $('input[name="searchvalhasphone"]').prop('checked')
          ) {
              $(this).show();
          } else {
              $(this).hide();
          };
      });
    
        // REMOVE AND ADD AGAIN...
        $('.counted').remove();
        countRows();
  };



  
  checkAll();

});

