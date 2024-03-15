var rowCount = 1;
function addMoreRows(frm) {
rowCount ++;
var recRow = '<p id="rowCount'+rowCount+'"><td>item '+rowCount+'</td><input name="txtcategory[]" type="text" /> <a href="javascript:void(0);" onclick="removeRow('+rowCount+');"><img src="images/remove-icon.png"/></a></p>';
jQuery('#addedRows').append(recRow);
}
function removeRow(removeNum) {
jQuery('#rowCount'+removeNum).remove();
}