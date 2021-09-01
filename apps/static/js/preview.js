var photo = document.getElementById('cv');

photo.addEventListener("change", () => {
    var img = document.getElementById('preview');
    img.src=URL.createObjectURL(photo.files[0])
})