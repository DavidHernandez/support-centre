(function($) {
  Drupal.theme.prototype.refreshSupportLinks = function (nodes) {
    html = '';
    $('.accordion-inner, .accordion-group').addClass('hidden-item');
    $.each(nodes, function (tid, elements) {
      $('#term-' + tid).removeClass('hidden-item');
      $.each(elements, function(pos, nid) {
        $('#node-' + nid).removeClass('hidden-item');
      });
    });
  };

  Drupal.theme.prototype.refreshSupportContent = function (nid) {
    jQuery.getJSON('support/json-load/' + nid, function(content) {
      output = '<h2>' + content.title + '</h2>' + content.body;
      $('#support-content').html(output);
    });
  };

  Drupal.behaviors.supportSearchForm = {
    attach: function (context, settings) {
      $('#edit-search', context).keyup(settings, function() {
        pages = settings.supportSearch.pages;
        input = this.value;
        var nodes = {};
        $.each(pages, function(tid, elements) {
          $.each(elements, function(nid, node) {
            tag = node.tag;
            tid = node.tid;
            title = node.title;
            if ((input.length === 0 || !input) || tag.toLowerCase().indexOf(input.toLowerCase()) > -1 || title.toLowerCase().indexOf(input.toLowerCase()) > -1) {
              if (!nodes[tid]) {
                nodes[tid] = new Array();
              }
              nodes[tid].push(node.nid);
            }
          });
        });
        Drupal.theme('refreshSupportLinks', nodes);
      });
    }
  };
})(jQuery);

