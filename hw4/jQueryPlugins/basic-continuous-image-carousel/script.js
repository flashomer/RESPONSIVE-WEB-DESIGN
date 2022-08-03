$(window).on('load', function(){

    "use strict";

    const imageCount = $('#sliderProduct ul li').length;
    const imageWidth = $('#sliderProduct ul li img').first().width();
    const totalWidth = (imageWidth * imageCount) + 'px';
    //alert(totalWidth);

    let leftPosition = 0;
    let counter = 0;

    $('#sliderProduct ul').css('width', totalWidth);

    $('#next').click(function(){
        counter++;

        if (counter === imageCount){

            $('#sliderProduct ul').clone().appendTo('#sliderProduct');
            $('#sliderProduct ul').last().css('left', imageWidth + 'px');

            leftPosition = `-${totalWidth}`;

            $('#sliderProduct ul').last().animate({left: 0}, 700, 'easeInQuad');
            $('#sliderProduct ul').first().animate({left: leftPosition}, 700, 'easeInQuad', function(){
                $('#sliderProduct ul').first().remove();
            });

            counter = 0;
        }
        else {
            leftPosition = `-${counter * imageWidth}px`;
            $('#sliderProduct ul').animate({left: leftPosition}, 700, 'easeInQuad');
        }
    });

    $('#previous').click(function(){ 
        counter--;

        if (counter < 0){
            counter = imageCount -1;

            $('#sliderProduct ul').clone().appendTo('#sliderProduct');
            $('#sliderProduct ul').last().css('left', `-${totalWidth}`);

            leftPosition = `-${counter * imageWidth}px`;

            $('#sliderProduct ul').last().animate({left: leftPosition}, 700, 'easeInQuad');
            $('#sliderProduct ul').first().animate({left: imageWidth + 'px'}, 700, 'easeInQuad', function(){
                $('#sliderProduct ul').first().remove();
            });
        }
        else {
            leftPosition = `-${counter * imageWidth}px`;
            $('#sliderProduct ul').animate({left: leftPosition}, 700, 'easeInQuad');
        }
    });
});

