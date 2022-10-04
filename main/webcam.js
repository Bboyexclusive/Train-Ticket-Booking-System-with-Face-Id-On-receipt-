var webkam = {
  // (A) INITIALIZE
  hVid : null, hSnaps :null, hTake : null, hSave : null,
  init : () => {
    // (A1) GET HTML ELEMENTS
    webkam.hVid = document.getElementById("kam-live"),
    webkam.hSnaps = document.getElementById("kam-snaps"),
    webkam.hTake = document.getElementById("kam-take"),
    webkam.hSave = document.getElementById("kam-save");

    // (A2) GET USER PERMISSION TO ACCESS CAMERA
    navigator.mediaDevices.getUserMedia({ video: true })
    .then((stream) => {
      // "LIVE FEED" WEB CAM TO <VIDEO>
      webkam.hVid.srcObject = stream;

      // ENABLE BUTTONS
      webkam.hTake.onclick = webkam.take;
      webkam.hSave.onclick = webkam.save;
      webkam.hTake.disabled = false;
      webkam.hSave.disabled = false;
    })
    .catch((err) => { console.error(err); });
  },

  // (B) HELPER - SNAP VIDEO FRAME TO CANVAS
  snap : () => {
    // (B1) CREATE NEW CANVAS
    let canvas = document.createElement("canvas"),
        ctx = canvas.getContext("2d"),
        vWidth = webkam.hVid.videoWidth,
        vHeight = webkam.hVid.videoHeight;

    // (B2) CAPTURE VIDEO FRAME TO CANVAS
    canvas.width = vWidth;
    canvas.height = vHeight;
    ctx.drawImage(webkam.hVid, 0, 0, vWidth, vHeight);

    // (B3) DONE
    return canvas;
  },

  // (C) TAKE A SNAPSHOT - PUT CANVAS INTO <DIV> WRAPPER
  take : () => {
    webkam.hSnaps.appendChild(webkam.snap());
  },

  // (D) SAVE SNAPSHOT
  save : () => {
    // (D1) TAKE A SNAPSHOT, CREATE DOWNLOAD LINK
    let canvas = webkam.snap(),
        anchor = document.createElement("a");
    anchor.href = canvas.toDataURL("image/png");
    anchor.download = "snap.png";

    // (D2) "FORCE DOWNLOAD" - MAY NOT ALWAYS WORK!
    anchor.click();
    anchor.remove();
    canvas.remove();

    // (D3) SAFER - LET USERS MANUAL CLICK
    // anchor.appendChild(canvas);
    // webkam.hSnaps.appendChild(anchor);
  }
};
window.addEventListener("load", webkam.init);
