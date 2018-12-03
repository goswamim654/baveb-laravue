$(document).keydown(function(e) { 
    if (e.keyCode == 27) { 
        $("#rowlinkModal").modal('hide');
    } 
});
table = $('#units').DataTable({
    "stateSave": true,
    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],  
    "responsive": true,
    "language": {
        'searchPlaceholder': 'Search...',
        'sSearch': '',
        'lengthMenu': '_MENU_ items'
    },
    "order": [[ 0, 'asc' ]],
    'columnDefs': [{
    'targets': 8,
    'searchable': false,
    'orderable': false,
    'className': 'dt-body-center',
    'render': function (data, type, full, meta){
      return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
    }
  }]
});

jQuery(document).ready(function($) {
  var resizing = false,
  searchForm = $('.cd-main-search'),
  searchTrigger = $('.cd-search-trigger'),
  coverLayer = $('.cd-cover-layer');
  

  function closeSearchForm() {
    searchTrigger.removeClass('search-form-visible');
    searchForm.removeClass('is-visible');
    coverLayer.removeClass('search-form-visible');
  }

  //add the .no-pointerevents class to the <html> if browser doesn't support pointer-events property
  ( !Modernizr.testProp('pointerEvents') ) && $('html').addClass('no-pointerevents');


  searchTrigger.on('click', function(event){
    event.preventDefault();
    if( searchTrigger.hasClass('search-form-visible') ) {
      searchForm.find('form').submit();
    } else {
      searchTrigger.addClass('search-form-visible');
      coverLayer.addClass('search-form-visible');
      searchForm.addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
        searchForm.find('input[type="search"]').focus().end().off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend');
      });
    }
  });

  //close search form
  searchForm.on('click', '.close', function(){
    closeSearchForm();
  });

  coverLayer.on('click', function(){
    closeSearchForm();
  });
  
  $(document).keyup(function(event){
    if( event.which=='27' ) closeSearchForm();
  });

});