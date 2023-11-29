function FileUploader(inputId, previewContainerId) {
    this.input = document.getElementById(inputId);
    this.previewContainer = document.getElementById(previewContainerId);

    this.input.addEventListener("change", this.handleFileSelect.bind(this));
}

FileUploader.prototype.handleFileSelect = function () {
    this.previewContainer.innerHTML = ""; // Clear previous previews

    const files = this.input.files;

    for (const file of files) {
        const previewItem = document.createElement("div");
        previewItem.className = "preview-item";

        if (file.type.startsWith("image/")) {
            const img = document.createElement("img");
            img.src = URL.createObjectURL(file);
            previewItem.appendChild(img);
        } else if (file.type.startsWith("video/")) {
            const video = document.createElement("video");
            video.src = URL.createObjectURL(file);
            video.controls = true;
            previewItem.appendChild(video);
        }

        this.previewContainer.appendChild(previewItem);
    }
};

// Sử dụng đối tượng FileUploader
const uploader = new FileUploader("fileInput", "preview-container");
const uploaderVideo = new FileUploader(
    "fileInputVideo",
    "preview-container-video"
);

document.addEventListener("DOMContentLoaded", function () {
    $('input[wire\\:model="color"]').click(function () {
        var resetColor = document.querySelectorAll('input[wire\\:model="color"]');
        resetColor.forEach(item => {
            item.nextElementSibling.style.backgroundColor = "transparent";
        });

        var getColor = $('input[wire\\:model="color"]:checked').attr("data-color");
        $('.' + getColor).css('background', getColor);

        console.log(getColor);
    });
});
