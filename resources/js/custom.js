function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#imgPlaceholder').attr('style', 'background-image: url("' +e.target.result + '")' );
    }
    reader.readAsDataURL(input.files[0]);
  }
}

module.exports = {
    readURL: readURL
};