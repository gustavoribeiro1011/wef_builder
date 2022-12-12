<script>
//Sort
var fields = $('div.fields'), field = fields.children('div');

field.detach().sort(function (a, b) {
  var astts = $(a).data('sid');
  var bstts = $(b).data('sid')  
  return (astts > bstts) ? (astts > bstts) ? 1 : 0 : -1;
});

fields.append(field);
</script>
