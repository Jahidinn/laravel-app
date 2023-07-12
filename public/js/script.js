const title = document.querySelector('#title');
const slug = document.querySelector('#slug');

title.addEventListener('change', function(){
    fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
});
document.addEventListener('trix-file-accept', function(e){
    e.preventDefault();
});

// Menangani file upload image post
function readUrl(input) {

    if (input.files && input.files[0]) {
      let reader = new FileReader();
      reader.onload = (e) => {
        let imgData = e.target.result;
        let imgName = input.files[0].name;
        input.setAttribute("data-title", imgName);
        console.log(e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    };
}
function imagePreview(){
    // Menangani preview image
    const image = document.querySelector('#input_image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }
}
// Preview image pada edit post (Alternatif lain selain preview diatas)
function previewImage() {
  frameImageEdit.src=URL.createObjectURL(event.target.files[0]);
}