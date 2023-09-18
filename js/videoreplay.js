var video = document.getElementById("myVideo");

video.addEventListener("ended", function() {
    // When the video ends, rewind it to the beginning and play it again
    video.currentTime = 0;
    video.play();
});
