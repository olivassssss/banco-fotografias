


    var imagesArray = ["fotospagina/foto1.jpg", "fotospagina/foto2.jpg", "fotospagina/foto3.jpg", "fotospagina/foto4.jpg",
                        "fotospagina/foto5.jpg", "fotospagina/foto6.jpg", "fotospagina/foto7.jpg", "fotospagina/foto8.jpg",
                        "fotospagina/foto9.jpg", "fotospagina/foto10.jpg", "fotospagina/foto11.jpg", "fotospagina/foto24.jpg",
                        "fotospagina/foto12.jpg", "fotospagina/foto13.jpg", "fotospagina/foto14.jpg", "fotospagina/foto15.jpg",
                        "fotospagina/foto16.jpg", "fotospagina/foto17.jpg", "fotospagina/foto18.jpg", "fotospagina/foto19.jpg",
                        "fotospagina/foto20.jpg", "fotospagina/foto21.jpg", "fotospagina/foto22.jpg", "fotospagina/foto23.jpg",
                        "fotospagina/foto25.jpg", "fotospagina/foto26.jpg", "fotospagina/foto27.jpg"];



    function displayImage() {
        var img = document.getElementsByTagName("img");

        for (let i = 0; i < img.length; i++) {

        var num = Math.floor(Math.random() * (imagesArray.length));
        img[i].src = imagesArray[num];
        imagesArray.splice(num, 1);
        }

    }
