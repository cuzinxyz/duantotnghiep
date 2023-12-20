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
                $('.black').css('color', '#000');
            } else if (getColor == 'black') {
                $('.white').css('border', 'unset');
                $('.' + getColor).css('color', '#fff');
            } else {
                $('.white').css('border', 'unset');
                $('.black').css('color', '#000');
            }
            $('.' + getColor).css('background', getColor);
        }

    });
});
