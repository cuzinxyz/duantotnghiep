// function FileUploader(inputId, previewContainerId) {
//     this.input = document.getElementById(inputId);
//     this.previewContainer = document.getElementById(previewContainerId);

//     this.input.addEventListener("change", this.handleFileSelect.bind(this));
// }

// FileUploader.prototype.handleFileSelect = function () {
//     this.previewContainer.innerHTML = ""; // Clear previous previews

//     const files = this.input.files;

//     for (const file of files) {
//         const previewItem = document.createElement("div");
//         previewItem.className = "preview-item";

//         if (file.type.startsWith("image/")) {
//             const img = document.createElement("img");
//             img.classList.add('img-source');
//             img.src = URL.createObjectURL(file);
//             previewItem.appendChild(img);
//         } else if (file.type.startsWith("video/")) {
//             const video = document.createElement("video");
//             video.src = URL.createObjectURL(file);
//             video.controls = true;
//             previewItem.appendChild(video);
//         }

//         this.previewContainer.appendChild(previewItem);
//     }
// };

// // Sử dụng đối tượng FileUploader
// const uploader = new FileUploader("fileInput", "preview-container");
// const uploaderVideo = new FileUploader(
//     "fileInputVideo",
//     "preview-container-video"
// );

document.addEventListener("DOMContentLoaded", function () {
    let colorChecked =  $('input[wire\\:model="color"]:checked').attr("data-color");    
    if(colorChecked) {
        $("." + colorChecked).css("background", colorChecked);   
    }

    $('input[wire\\:model="color"]').click(function () {
        var resetColor = document.querySelectorAll('input[wire\\:model="color"]');
        resetColor.forEach(item => {
            // item.nextElementSibling.style.backgroundColor = "transparent";
            item.nextElementSibling.style.background = 'transparent';
        });

        var getColor = $('input[wire\\:model="color"]:checked').attr("data-color");
        if (getColor == 'different') {
            $('.' + getColor).css('background', 'linear-gradient(to top, rgb(236 236 236) 0%, rgb(255 255 255) 100%)');
        } else {
            if (getColor == 'white') {
                $('.' + getColor).css('border', '1px dashed #212529');
            } else if (getColor == 'black') {
                $('.' + getColor).css('color', '#fff');
            } else {
                $('.white').css('border', 'unset');
                $('.black').css('color', '#000');
            }
            $('.' + getColor).css('background', getColor);
        }

    });
});
