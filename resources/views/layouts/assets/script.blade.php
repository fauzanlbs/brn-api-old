<script src="{{ asset('js/app.js') }}"></script>

{{-- Image Viever --}}
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.9.0/viewer.min.js"
    integrity="sha512-0goo56vbVLOJt9J6TMouBm2uE+iPssyO+70sdrT+J5Xbb5LsdYs31Mvj4+LntfPuV+VlK0jcvcinWQG5Hs3pOg=="
    crossorigin="anonymous"></script>

<script>
    // Viewer.js
    function showImage(event) {
        var image = new Image();
        image.src = event.currentTarget.dataset.srcOriginal;;
        var viewer = new Viewer(image, {
            hidden: function() {
                viewer.destroy();
            },
        });
        viewer.show();
    }

</script>
