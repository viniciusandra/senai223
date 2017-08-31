var moveImg1 = document.getElementById('image1');
var information1 = document.getElementById('show1');

var box2 = document.getElementById('info2');
var moveImg2 = document.getElementById('image2');
var information2 = document.getElementById('show2');

var box3 = document.getElementById('info3');
var moveImg3 = document.getElementById('image3');
var information3 = document.getElementById('show3');

var box4 = document.getElementById('info4');
var moveImg4 = document.getElementById('image4');
var information4 = document.getElementById('show4');

var exit1 = document.getElementById('exit1');
var exit2 = document.getElementById('exit2');
var exit3 = document.getElementById('exit3');
var exit4 = document.getElementById('exit4');

btn = document.getElementsByClassName('btn');

for (var i = 0; i < btn.length; i++) {
    btn[i].addEventListener('click', function transition() {

        if (this.id == 0) {
            moveImg2.style.display = "none";
            moveImg3.style.display = "none";
            moveImg4.style.display = "none";

            information1.style.width = "74vw";
            information1.style.transition = "width, 1s";

            exit1.style.display = "block";
            exit1.addEventListener('click', function (e) {
                e.preventDefault();
                exit1.style.display = "none";
                information1.style.width = "0";
                information1.style.transition = "width, 1s";
                setTimeout(function () {
                    moveImg2.style.display = "block";
                    moveImg3.style.display = "block";
                    moveImg4.style.display = "block";
                }, 1000);
            });

        } else {
            if (this.id == 1) {

                moveImg1.style.display = "none";
                moveImg3.style.display = "none";
                moveImg4.style.display = "none";

                box2.style.width = "100%";
                box2.style.position = "absolute";
                box2.style.paddingLeft = "0";

                moveImg2.style.width = "25%";

                information2.style.width = "75%";
                information2.style.transition = "width, 1s";


                exit2.style.display = "block";
                exit2.addEventListener('click', function (e) {
                    e.preventDefault();


                    information2.style.width = "0";
                    information2.style.transition = "width, 1s";

                    setTimeout(function () {
                        box2.style.position = "relative";
                        box2.style.width = "25%";
                        box2.style.left = "0";

                        moveImg2.style.width = "100%";

                        moveImg1.style.display = "block";
                        moveImg3.style.display = "block";
                        moveImg4.style.display = "block";
                    }, 1000);
                });

            } else {
            }
            if (this.id == 2) {
                moveImg1.style.display = "none";
                moveImg2.style.display = "none";
                moveImg4.style.display = "none";

                box3.style.width = "100%";
                box3.style.position = "absolute";
                box3.style.paddingLeft = "0";

                moveImg3.style.width = "25%";

                information3.style.width = "75%";
                information3.style.transition = "width, 1s";


                exit3.style.display = "block";
                exit3.addEventListener('click', function (e) {
                    e.preventDefault();


                    information3.style.width = "0";
                    information3.style.transition = "width, 1s";

                    setTimeout(function () {
                        box3.style.position = "relative";
                        box3.style.width = "25%";
                        box3.style.left = "0";

                        moveImg3.style.width = "100%";

                        moveImg1.style.display = "block";
                        moveImg2.style.display = "block";
                        moveImg4.style.display = "block";
                    }, 1000);
                });
            } else {
            }
            if (this.id == 3) {
                moveImg1.style.display = "none";
                moveImg2.style.display = "none";
                moveImg3.style.display = "none";

                box4.style.width = "100%";
                box4.style.position = "absolute";
                box4.style.paddingLeft = "0";

                moveImg4.style.width = "25%";

                information4.style.width = "75%";
                information4.style.transition = "width, 1s";


                exit4.style.display = "block";
                exit4.addEventListener('click', function (e) {
                    e.preventDefault();


                    information4.style.width = "0";
                    information4.style.transition = "width, 1s";

                    setTimeout(function () {
                        box4.style.position = "relative";
                        box4.style.width = "25%";
                        box4.style.left = "0";

                        moveImg4.style.width = "100%";

                        moveImg1.style.display = "block";
                        moveImg2.style.display = "block";
                        moveImg3.style.display = "block";
                    }, 1000);
                });
            }

        }
    });
}