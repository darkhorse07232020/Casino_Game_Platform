// Set constraints for the video stream
var constraints = { video: { facingMode: "environment" }, audio: false };
var track = null;

// Define constants
const cameraView = document.querySelector("#camera--view"),
    cameraOutput = document.querySelector("#camera--output"),
    cameraSensor = document.querySelector("#camera--sensor"),
    cameraTrigger = document.querySelector("#camera--trigger");

// Access the device camera and stream to cameraView
function cameraStart() {
    navigator.mediaDevices
        .getUserMedia(constraints)
        .then(function(stream) {
            track = stream.getTracks()[0];
            cameraView.srcObject = stream;
        })
        .catch(function(error) {
            console.error("Oops. Something is broken.", error);
        });
}

// Take a picture when cameraTrigger is tapped
cameraTrigger.onclick = function() {
    cameraSensor.width = cameraView.videoWidth;
    cameraSensor.height = cameraView.videoHeight;
    cameraSensor.getContext("2d").drawImage(cameraView, 0, 0);
    
    cameraOutput.src = cameraSensor.toDataURL("image/webp");
    document.querySelector("input#image").value = cameraSensor.toDataURL("image/webp");
    cameraOutput.classList.add("taken");

    console.log("Am i here");
    
    if (navigator.geolocation) {
        console.log("Am i here lat long");
        navigator.geolocation.getCurrentPosition(function (p) {
            document.querySelector("input#lat").value = p.coords.latitude;
            document.querySelector("input#long").value = p.coords.longitude;
        });
    }
    // track.stop();
};

// Start the video stream when the window loads
window.addEventListener("load", cameraStart, false);